<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\SystemSettingTrait;
use App\Models\User;
use App\Models\Members;
use App\Models\MemberAddress;
use App\Repositories\PageRepository;
use App\Repositories\UserRepository;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Spatie\Permission\Models\Role;

use Mail;

// Authorize.net
require 'vendor/autoload.php';

// require_once 'constants/SampleCodeConstants.php';
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
date_default_timezone_set('America/Los_Angeles');

define("AUTHORIZENET_LOG_FILE", "phplog");


/**
 * Class RegisterController
 * @package App\Http\Controllers\Auth
 */
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers, SystemSettingTrait;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/customer/dashboard';

    /**
     * Create a new controller instance.
     *
     * @param User $user_model
     * @param Role $role_model
     * @param PageRepository $page_repository
     * @param UserRepository $user_repository
     *
     */
    public function __construct(User $user_model,
                                Role $role_model,
                                Members $member,
                                MemberAddress $member_address_model,
                                PageRepository $page_repository,
                                UserRepository $user_repository
    )
    {
        /*
        * Model namespace
        * using $this->user_model can also access $this->user_model->where('id', 1)->get();
        * */
        $this->user_model = $user_model;
        $this->role_model = $role_model;
        $this->member = $member;
        $this->member_address_model = $member_address_model;
        $this->page_repository = $page_repository;
        $this->user_repository = $user_repository;

        $this->middleware('isFront.guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $page = $this->page_repository->getActivePageBySlug('customer/register');
        if (!empty($page)) {
            $seo_meta = $this->getSeoMeta($page);
        }

        return view('front.auth.register', compact('page'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required|unique:users,user_name,NULL,id,deleted_at,NULL',
            'email' => 'required|unique:users,email,NULL,id,deleted_at,NULL',
            'password' => 'required|min:87|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     *
     * @return User
     */
    protected function create(array $data)
    {
        $user = $this->user_model->create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_name' => $data['user_name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        /* customer role */
        $roles = [3];
        if (isset($roles)) {
            foreach ($roles as $role) {
                $role_r = $this->role_model->where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r);
            }
        }

        return $user;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        if (!in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
            $email_data = [
                'view' => 'email.registered',
                'type' => 'registered',
                'user' => [
                    'name' => $user->first_name,
                    'email' => $user->email,
                ],
                'user_data' => $user,
                'subject' => 'Registration Successful',
                'attachments' => [],
                'is_admin' => FALSE,
            ];

            /* send email to customer */
            $this->user_repository->sendEmail($email_data);

            /* send email to admin */
            $email_data['is_admin'] = TRUE;
            $email_data['view'] = 'email.registered_admin';
            $email_data['subject'] = 'New Registration';
            $this->user_repository->sendEmail($email_data);
        }

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    public function registerMember(Request $request) {

        // echo $request->terms.'<br>';
        // dd($request);
        // "_token" => "E2mhLh3PbC1HWstBoHCHPciIdpEmT9YqdnOBmc5V"
        // "chapter_id" => "0"
        // "user_name" => "syhyqivaja"
        // "password" => "Pa$$w0rd!"
        // "password_confirmation" => "Pa$$w0rd!"
        // "first_name" => "Xerxes"
        // "last_name" => "Gonzales"
        // "email" => "kehoziso@mailinator.com"
        // "email_confirmation" => "kehoziso@mailinator.com"
        // "phone" => "+1 (377) 151-3233"
        // "company" => "Mccoy Richmond Traders"
        // "position" => "Other"
        // "street_address1" => "45 South First Freeway"
        // "city" => "Iste veniam assumen"
        // "state" => "Sit accusamus tempor"
        // "zipcode" => "75718"
        // "card_number" => "803"
        // "date_expiry" => "30-Nov-1996"
        // "card_cvv" => "Adipisicing animi q"
        // "terms" => "on"

        $this->validate($request, [
            'chapter_id' => 'required', // Tab 1

            'user_name' => 'required|unique:users,user_name,NULL,id,deleted_at,NULL',
            'password' => 'required|min:8|confirmed',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email,NULL,id,deleted_at,NULL|confirmed',
            'phone' => 'required',
            'company' => 'required',
            'position' => 'required',

            'street_address1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
            'company' => 'required'
        ]);

        // Process Authorize subscription
        $email_address  = $request->email;
        $phone_number   = $request->phone;
        $amountToCharge = 49.50;
        $card_number    = "4111111111111111";
        $card_expiry    = "2030-12";
        $card_cvv       = rand(100,999);
        $first_name     = $request->first_name;
        $last_name      = $request->last_name;
        $company        = $request->company;
        $street_address1 = $request->street_address1;
        $city           = $request->city;
        $state          = $request->state;
        $country        = 'USA';
        $zipcode        = $request->zipcode;


        // // // Authorize.net 
        // ---------------------------------------------------------------- Authorize.net CHARGE CREDIT CARD
        /* Create a merchantAuthenticationType object with authentication details
           retrieved from the constants file */
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName('8uVY3p85tcz');
        $merchantAuthentication->setTransactionKey('9j7Dd3J7S3Ann4Nb');
        // $merchantAuthentication->setName(\SampleCodeConstants::MERCHANT_LOGIN_ID);
        // $merchantAuthentication->setTransactionKey(\SampleCodeConstants::MERCHANT_TRANSACTION_KEY);
        
        // Set the transaction's refId
        $refId = 'ref' . time();

        // Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($card_number);
        $creditCard->setExpirationDate($card_expiry); // $request->date-expiry
        $creditCard->setCardCode($card_cvv);

        // Add the payment data to a paymentType object
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

        // Create order information
        $order = new AnetAPI\OrderType();
        $order->setInvoiceNumber('AREAA-'.rand(100000, 999999));
        $order->setDescription("Subscription to AREAA");

        // Set the customer's Bill To address
        $customerAddress = new AnetAPI\CustomerAddressType();
        $customerAddress->setFirstName($first_name);
        $customerAddress->setLastName($last_name);
        $customerAddress->setCompany($company);
        $customerAddress->setAddress($street_address1);
        $customerAddress->setCity($city);
        $customerAddress->setState($state);
        $customerAddress->setZip($zipcode);
        $customerAddress->setCountry($country);

        // Set the customer's identifying information
        $customerData = new AnetAPI\CustomerDataType();
        $customerData->setType("individual");
        // $customerData->setId("99999456654");
        $customerData->setId(rand(10000000000,99999999999));
        $customerData->setEmail($email_address);

        // Add values for transaction settings
        $duplicateWindowSetting = new AnetAPI\SettingType();
        $duplicateWindowSetting->setSettingName("duplicateWindow");
        $duplicateWindowSetting->setSettingValue("60");

        // // Add some merchant defined fields. These fields won't be stored with the transaction,
        // // but will be echoed back in the response.
        // $merchantDefinedField1 = new AnetAPI\UserFieldType();
        // $merchantDefinedField1->setName("customerLoyaltyNum");
        // $merchantDefinedField1->setValue("1128836273");

        // $merchantDefinedField2 = new AnetAPI\UserFieldType();
        // $merchantDefinedField2->setName("favoriteColor");
        // $merchantDefinedField2->setValue("blue");

        // Create a TransactionRequestType object and add the previous objects to it
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        // $transactionRequestType->setAmount($amount);
        $transactionRequestType->setAmount($amountToCharge);
        $transactionRequestType->setOrder($order);
        $transactionRequestType->setPayment($paymentOne);
        $transactionRequestType->setBillTo($customerAddress);
        $transactionRequestType->setCustomer($customerData);
        $transactionRequestType->addToTransactionSettings($duplicateWindowSetting);
        // $transactionRequestType->addToUserFields($merchantDefinedField1);
        // $transactionRequestType->addToUserFields($merchantDefinedField2);

        // Assemble the complete transaction request
        $req = new AnetAPI\CreateTransactionRequest();
        $req->setMerchantAuthentication($merchantAuthentication);
        $req->setRefId($refId);
        $req->setTransactionRequest($transactionRequestType);

        // Create the controller and get the response
        $controller = new AnetController\CreateTransactionController($req);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
        
        // print_r($customerAddress);

        if ($response != null) {
            // echo 'line 279 <br>';
            // Check to see if the API request was successfully received and acted upon
            if ($response->getMessages()->getResultCode() == "Ok") {
                // echo 'line 282 <br>';
                // Since the API request was successful, look for a transaction response
                // and parse it to display the results of authorizing the card
                $tresponse = $response->getTransactionResponse();
            
                if ($tresponse != null && $tresponse->getMessages() != null) {
                    // echo 'line 288 - good <br>';
                    // echo " Successfully created transaction with Transaction ID: " . $tresponse->getTransId() . "<br>";
                    // echo " Transaction Response Code: " . $tresponse->getResponseCode() . "<br>";
                    // echo " Message Code: " . $tresponse->getMessages()[0]->getCode() . "<br>";
                    // echo " Auth Code: " . $tresponse->getAuthCode() . "<br>";
                    // echo " Description: " . $tresponse->getMessages()[0]->getDescription() . "<br>";
                    $chargecreditcardsuccess = 1;
                } else {
                    // echo "Transaction Failed \n";
                    if ($tresponse->getErrors() != null) {
                        // echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                        // echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "\n";
                    }
                }
                // Or, print errors if the API request wasn't successful
            } else {
                // echo "Transaction Failed \n";
                $tresponse = $response->getTransactionResponse();
            
                if ($tresponse != null && $tresponse->getErrors() != null) {
                    // echo " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "<br>";
                    // echo " Error Message : " . $tresponse->getErrors()[0]->getErrorText() . "<br>";
                } else {
                    // echo " Error Code  : " . $response->getMessages()->getMessage()[0]->getCode() . "<br>";
                    // echo " Error Message : " . $response->getMessages()->getMessage()[0]->getText() . "<br>";
                }
            }
        } else {
            // echo  "No response returned \n";
        }

        // return $response;
        // ---------------------------------------------------------------- Authorize.net CREATE CUSTOMER PROFILE
        if ($chargecreditcardsuccess == 1) {
            // echo '-------- <br>';
            // echo 'line 322 - create customer profile';
            // echo '-------- <br>';

            $transId = $tresponse->getTransId();

            // Create Customer Profile
            $customerProfile = new AnetAPI\CustomerProfileBaseType();
            // $customerProfile->setMerchantCustomerId("123212");
            $customerProfile->setMerchantCustomerId('14344');
            $customerProfile->setEmail($email_address);
            $customerProfile->setDescription("AREAA Member");
              
            $req = new AnetAPI\CreateCustomerProfileFromTransactionRequest();
            $req->setMerchantAuthentication($merchantAuthentication);
            $req->setTransId($transId);

            // You can either specify the customer information in form of customerProfileBaseType object
            $req->setCustomer($customerProfile);
            //  OR   
            // You can just provide the customer Profile ID
            // $request->setCustomerProfileId("123343");

            // echo '-------- <br>';
            // print_r($customerProfile);

            $controller = new AnetController\CreateCustomerProfileFromTransactionController($req);

            $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);

            // echo '-------- <br>';
            // print_r($response);

            if (($response != null) && ($response->getMessages()->getResultCode() == "Ok") ) {
                // echo "SUCCESS: PROFILE ID : " . $response->getCustomerProfileId() . "<br>";
                $existingcustomerprofileid = $response->getCustomerProfileId();
            } else {
                // echo "ERROR :  Invalid response\n";
                $errorMessages = $response->getMessages()->getMessage();
                // echo "Response : " . $errorMessages[0]->getCode() . "  " .$errorMessages[0]->getText() . "<br>";
            }
            // return $response;
        }


        // ---------------------------------------------------------------- Authorize.net CREATE CUSTOMER PAYMENT PROFILE
        // Create a Customer Profile Request
        //  1. (Optionally) create a Payment Profile
        //  2. (Optionally) create a Shipping Profile
        //  3. Create a Customer Profile (or specify an existing profile)
        //  4. Submit a CreateCustomerProfile Request
        //  5. Validate Profile ID returned

        // Set credit card information for payment profile
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($card_number);
        $creditCard->setExpirationDate($card_expiry);
        $creditCard->setCardCode($card_cvv);
        $paymentCreditCard = new AnetAPI\PaymentType();
        $paymentCreditCard->setCreditCard($creditCard);

        // Create the Bill To info for new payment type
        $billto = new AnetAPI\CustomerAddressType();
        // $billto->setFirstName($first_name.rand(0,100));
        $billto->setFirstName($first_name.' '.$phone_number);
        // $billto->setFirstName($first_name);
        $billto->setLastName($last_name);
        $billto->setCompany($company);
        $billto->setAddress($street_address1);
        $billto->setCity($city);
        $billto->setState($state);
        $billto->setZip($zipcode);
        $billto->setCountry($country);
        $billto->setPhoneNumber($phone_number);
        // $billto->setfaxNumber("999-999-9999");

        // Create a new Customer Payment Profile object
        $paymentprofile = new AnetAPI\CustomerPaymentProfileType();
        $paymentprofile->setCustomerType('individual');
        $paymentprofile->setBillTo($billto);
        $paymentprofile->setPayment($paymentCreditCard);
        $paymentprofile->setDefaultPaymentProfile(true);

        $paymentprofiles[] = $paymentprofile;

        // Assemble the complete transaction request
        $paymentprofilerequest = new AnetAPI\CreateCustomerPaymentProfileRequest();
        $paymentprofilerequest->setMerchantAuthentication($merchantAuthentication);

        // Add an existing profile id to the request
        $paymentprofilerequest->setCustomerProfileId($existingcustomerprofileid);
        $paymentprofilerequest->setPaymentProfile($paymentprofile);
        $paymentprofilerequest->setValidationMode("liveMode");


        // Get customer address ID
        $req = new AnetAPI\CreateCustomerShippingAddressRequest();
        $req->setMerchantAuthentication($merchantAuthentication);
        $req->setCustomerProfileId($existingcustomerprofileid);
        $req->setAddress($billto);
        $controller = new AnetController\CreateCustomerShippingAddressController($req);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
        if (($response != null) && ($response->getMessages()->getResultCode() == "Ok") ) {
            // echo "Create Customer Shipping Address SUCCESS: ADDRESS ID : " . $response-> getCustomerAddressId() . "<br>";
            $customerAddressId = $response-> getCustomerAddressId();
        } else {
            // echo "Create Customer Shipping Address  ERROR :  Invalid response\n";
            $errorMessages = $response->getMessages()->getMessage();
            // echo "Response : " . $errorMessages[0]->getCode() . "  " .$errorMessages[0]->getText() . "<br>";
        }


        // Create the controller and get the response and Payment Profile ID
        $controller = new AnetController\CreateCustomerPaymentProfileController($paymentprofilerequest);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);

        // echo '-------- <br>';
        // print_r($response);
        // echo '-------- <br>';

        if (($response != null) && ($response->getMessages()->getResultCode() == "Ok") ) {
            // echo "Create Customer Payment Profile SUCCESS - ID: " . $response->getCustomerPaymentProfileId() . "<br>";
            $customerPaymentProfileId = $response->getCustomerPaymentProfileId();
        } else {
            // echo "Create Customer Payment Profile: ERROR Invalid response\n";
            $errorMessages = $response->getMessages()->getMessage();
            // echo "Response : " . $errorMessages[0]->getCode() . "  " .$errorMessages[0]->getText() . "<br>";

        }


        sleep(12); // If subscription is instantly done after create profile --> Error Response : E00040 The record cannot be found.
        // ---------------------------------------------------------------- Authorize.net CREATE SUBSCRIPTION for July 1 charging
        /* Create a merchantAuthenticationType object with authentication details
           retrieved from the constants file */
        // $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        // $merchantAuthentication->setName(\SampleCodeConstants::MERCHANT_LOGIN_ID);
        // $merchantAuthentication->setTransactionKey(\SampleCodeConstants::MERCHANT_TRANSACTION_KEY);
        
        // // Set the transaction's refId
        // $refId = 'ref' . time();

        $intervalLength             = 12;
        $intervalUnit               = 'months';
        $customerProfileId          = $existingcustomerprofileid;

        // Subscription Type Info
        $subscription = new AnetAPI\ARBSubscriptionType();
        $subscription->setName("AREAA Membership Subscription");

        $interval = new AnetAPI\PaymentScheduleType\IntervalAType();
        $interval->setLength($intervalLength);
        // $interval->setUnit("days");
        $interval->setUnit($intervalUnit);

        $paymentSchedule = new AnetAPI\PaymentScheduleType();
        $paymentSchedule->setInterval($interval);
        // $paymentSchedule->setStartDate(new DateTime('2020-08-30'));
        // $paymentSchedule->setTotalOccurrences("12");
        // $paymentSchedule->setTrialOccurrences("1");
        // $paymentSchedule->setStartDate(new DateTime('2021-07-01'));
        $date_renewal = new \DateTime('2021-07-01');
        $paymentSchedule->setStartDate($date_renewal);
        $paymentSchedule->setTotalOccurrences("9999"); // Ongoing
        // $paymentSchedule->setTrialOccurrences("1");

        $subscription->setPaymentSchedule($paymentSchedule);
        $subscription->setAmount(99);
        // $subscription->setTrialAmount("0.00");
        
        $profile = new AnetAPI\CustomerProfileIdType();
        $profile->setCustomerProfileId($customerProfileId);
        $profile->setCustomerPaymentProfileId($customerPaymentProfileId);
        $profile->setCustomerAddressId($customerAddressId);

        $subscription->setProfile($profile);

        $req = new AnetAPI\ARBCreateSubscriptionRequest();
        $req->setmerchantAuthentication($merchantAuthentication);
        $req->setRefId($refId);
        $req->setSubscription($subscription);

        $controller = new AnetController\ARBCreateSubscriptionController($req);
        $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
        if (($response != null) && ($response->getMessages()->getResultCode() == "Ok") ) {
            // echo "SUCCESS: Subscription ID : " . $response->getSubscriptionId() . "<br>";
            $subscriptionID = $response->getSubscriptionId();
        } else {
            // echo "ERROR :  Invalid response\n";
            $errorMessages = $response->getMessages()->getMessage();
            // echo "Response : " . $errorMessages[0]->getCode() . "  " .$errorMessages[0]->getText() . "<br>";
        }

        // return $response;


        // Saves in Members table
        // Save billing and mailing addresses in member_address
        // $member = $this->member->create($request->only('street_address1', 'city', 'state', 'zipcode', 'phone', 'company'));
        // $member_address = $this->member_address_model->create($request->only('street_address1', 'city', 'state', 'zipcode', 'phone', 'company'));

        // dd($request);
        // "_token" => "E2mhLh3PbC1HWstBoHCHPciIdpEmT9YqdnOBmc5V"
        // "chapter_id" => "0"
        // "user_name" => "syhyqivaja"
        // "password" => "Pa$$w0rd!"
        // "password_confirmation" => "Pa$$w0rd!"
        // "first_name" => "Xerxes"
        // "last_name" => "Gonzales"
        // "email" => "kehoziso@mailinator.com"
        // "email_confirmation" => "kehoziso@mailinator.com"
        // "phone" => "+1 (377) 151-3233"
        // "company" => "Mccoy Richmond Traders"
        // "position" => "Other"
        // "street_address1" => "45 South First Freeway"
        // "city" => "Iste veniam assumen"
        // "state" => "Sit accusamus tempor"
        // "zipcode" => "75718"
        // "card_number" => "803"
        // "date_expiry" => "30-Nov-1996"
        // "card_cvv" => "Adipisicing animi q"
        // "terms" => "on"

        $user = $this->user_model->create($request->only('first_name', 'last_name', 'user_name', 'email', 'phone', 'password', 'chapter_id'));

        /* customer role */
        $roles = [3];
        if (isset($roles)) {
            foreach ($roles as $role) {
                $role_r = $this->role_model->where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r);
            }
        }

        $member = $this->member->create([
            'user_id' => $user->id,
            'position' => $request->position,
            'company' => $request->company,
            'authorize_profile_id' => $customerProfileId,
            'authorize_payment_profile_id' => $customerPaymentProfileId,
            'authorize_address_id' => $customerAddressId,
            'authorize_subscription_id' => $subscriptionID,
            'joined_date' => date('m/d/yy', strtotime(Now())),
            'expires' => 'Never',
            'subscription_status' => 1
        ]);

        $member_address = $this->member_address_model->create([
            'user_id' => $user->id,
            'street_address1' => $request->street_address1,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'country' => $request->country,
            'company' => $request->company,
            'phone' => $request->phone
        ]);



        // $member = new Member;
        // $member->first_name = Input::get('first_name');
        // $member->last_name  = Input::get('last_name');
        // $member->email      = Input::get('email');
        // $member->user_name  = Input::get('email');
        // $member->password   = Input::get('password');
        // $member->zip_code   = Input::get('zip_code');
        // $member->country    = 'US';
        // $member->is_active  = 1;
        // $member->save();

        // $data = array('name'=>$member->first_name." ".$member->last_name,
        //     'email'=>$member->email);

        // Mail::send('email.signup', $data, function($message) use ($member) {
        //     $message->to($member->email, $member->first_name." ".$member->last_name);
        //     $message->cc('dennis+999@dogandrooster.com', 'John Doe Admin');
        //     $message->subject('Gaveler | Sign Up');
        //     $message->from('no-reply@gaveler.com','Gaveler Admin');
        // });

        $data = array('name'=>$request->first_name." ".$request->last_name,
            'email'=>$request->email);

        // Send Mail
        Mail::send('email.registered', $data, function($message) use($request) {
            // $message->to($data['email']);
            // $message->subject('New email!!!');
            $message->to($request->email, $request->first_name." ".$request->last_name);
            // $message->to($data['email'], $data['first_name']." ".$data['last_name']);
            $message->cc('jmiranda@areaa.org', 'Areaa Admin');
            $message->cc('dennis@dogandrooster.com', 'DNR Dev');
            $message->subject('AREAA | Membership Registration');
            $message->from('no-reply@areaa.com','Areaa Webmaster');
        });

        // die('--- 602');
        $this->guard()->login($user);

        return $this->registered($request, $user)?: redirect($this->redirectPath());
    }
}
