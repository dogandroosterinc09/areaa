<?php

namespace App\Http\Controllers\Front;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    /**
     * Contact model instance.
     *
     * @var Contact
     */
    private $contact;

    /**
     * ContactRepository repository instance.
     *
     * @var ContactRepository
     */
    private $contactRepository;

    /**
     * Create a new controller instance.
     *
     * @param Contact $contact
     * @param ContactRepository $contactRepository
     */
    public function __construct(Contact $contact, ContactRepository $contactRepository)
    {
        $this->contact = $contact;
        $this->contactRepository = $contactRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            // 'subject' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $contact = $this->contact->create($request->all());

        //Skip Email
        // if (!in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
        //     $email_data = [
        //         'view' => 'email.contact',
        //         'type' => 'contact',
        //         'user' => [
        //             'name' => $contact->name,
        //             'email' => $contact->email,
        //         ],
        //         'user_data' => $contact,
        //         'subject' => 'Thank you for contacting us.',
        //         'attachments' => [],
        //         'is_admin' => false,
        //     ];

        //     // send email to customer
        //     $this->contactRepository->sendEmail($email_data);

        //     // send email to admin
        //     $email_data['is_admin'] = true;
        //     $email_data['view'] = 'email.contact_admin';
        //     $email_data['subject'] = 'New Contact Us Form';
        //     $this->contactRepository->sendEmail($email_data);
        // }

        return redirect()->back()->with('flash_message', [
            'title' => '',
            'message' => 'Thanks! We will get back to you soon.',
            'type' => 'success'
        ]);
    }
}
