<?php

namespace App\Http\Controllers\Front;

use App\Models\Page;
use App\Models\PageType;
use App\Models\PageSection;
use App\Models\Event;

use App\Repositories\PageRepository;
use App\Http\Controllers\Controller;
use App\Http\Traits\SystemSettingTrait;
use App\Repositories\SeoMetaRepository;
use App\Repositories\HomeSlideRepository;

use DB;

class PageController extends Controller
{
    use SystemSettingTrait;

    /**
     * Page model instance.
     *
     * @var Page
     */
    private $page;

    /**
     * PageType model instance.
     *
     * @var PageType
     */
    private $pageType;

    /**
     * PageSection model instance.
     *
     * @var PageSection
     */
    private $pageSection;

    /**
     * SeoMeta repository instance.
     *
     * @var SeoMetaRepository
     */
    private $seoMetaRepository;

    /**
     * Page repository instance.
     *
     * @var PageRepository
     */
    private $pageRepository;

    /**
     * HomeSlide repository instance.
     *
     * @var HomeSlideRepository
     */
    private $homeSlideRepository;

    /**
     * Create a new controller instance.
     *
     * @param Page $page
     * @param PageType $pageType
     * @param SeoMetaRepository $seoMetaRepository
     * @param PageRepository $pageRepository
     * @param PageSection $pageSection
     * @param HomeSlideRepository $homeSlideRepository
     */
    public function __construct(Page $page,
                                PageType $pageType,
                                SeoMetaRepository $seoMetaRepository,
                                PageRepository $pageRepository,
                                PageSection $pageSection,
                                HomeSlideRepository $homeSlideRepository
    )
    {
        $this->page = $page;
        $this->pageType = $pageType;
        $this->pageSection = $pageSection;
        $this->seoMetaRepository = $seoMetaRepository;
        $this->pageRepository = $pageRepository;
        $this->homeSlideRepository = $homeSlideRepository;
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke($slug = '')
    {
        $page = $home_slides = [];

        if ($slug == '') {

            /* home */
            $page = $this->pageRepository->getActivePageBySlug('home');
            $home_slides = $this->homeSlideRepository->getAllActive();
            // $events = Event::all();

            if (empty($page)) {
                return view('front.pages.home');
                // return view('front.pages.home', compact('events'));
            } else {
                $seo_meta = $this->getSeoMeta($page);
            }
        } else {
            $page = $this->pageRepository->getActivePageBySlug($slug);
            /* if not in pages */
            if (empty($page)) {
                
                //Check if chapter page
                $chapter = \App\Models\Chapter::where('slug', $slug)->get()->first();

                if ($chapter) {
                    $seo_meta =  $this->getSeoMeta(null);
                    
                    //Add other seo_meta here

                    $chapter_home = \App\Models\ChapterHome::where('chapter_id', $chapter->id)->get()->first();

                    //Page Defaults
                    $default_who_we_are_title = 'Who We Are';
                    $default_member_benefits_title = 'Member Benefits';
                    // $default_member_benefits_featured_image = 'public/images/chapter-image.jpg';
                    $default_member_benefits_featured_image = '';
                    $default_sponsors_title = 'Sponsors';
                    
                    if (!$chapter_home) {
                        $chapter_home = new \stdClass();
                        $chapter_home->who_we_are_title = $default_who_we_are_title;
                        $chapter_home->member_benefits_title = $default_member_benefits_title;
                        $chapter_home->member_benefits_featured_image = $default_member_benefits_featured_image;
                        // $chapter_home->sponsors_title = $default_sponsors_title;
                    } else {
                        $chapter_home->who_we_are_title = !empty($chapter_home->who_we_are_title) ? $chapter_home->who_we_are_title : $default_who_we_are_title;
                        $chapter_home->member_benefits_title = !empty($chapter_home->member_benefits_title) ? $chapter_home->member_benefits_title : $default_member_benefits_title;
                        $chapter_home->member_benefits_featured_image = !empty($chapter_home->member_benefits_featured_image) ? $chapter_home->member_benefits_featured_image : $default_member_benefits_featured_image;
                        // $chapter_home->sponsors_title = !empty($chapter_home->sponsors_title) ? $chapter_home->sponsors_title : $default_sponsors_title;

                        $top_sponsor = !empty($chapter_home->top_sponsor) ? json_decode($chapter_home->top_sponsor) : new \stdClass();
                        $top_sponsor->badge_icon = isset($top_sponsor->badge_icon) ? $top_sponsor->badge_icon : '';
                        $top_sponsor->image = isset($top_sponsor->image) ? $top_sponsor->image : '';
                        $top_sponsor->image_alt = isset($top_sponsor->image_alt) ? $top_sponsor->image_alt : '';


                        $chapter_home->top_sponsor = json_encode($top_sponsor);                        
                    }

                    $contact = 'test contact variable';

                    return view('front.pages.custom-pages-index', compact('chapter', 'seo_meta', 'chapter_home', 'contact'));
                }

                abort('404', '404');
            } else {

                $seo_meta = $this->getSeoMeta($page);

                if ($slug == 'home') {
                    $home_slides = $this->homeSlideRepository->getAllActive();
                }
        
                \Session::forget('is_chapter_event',1);
            }
        }
        return view('front.pages.custom-pages-index', compact('page', 'seo_meta', 'home_slides'));
        // return view('front.pages.custom-pages-index', compact('page', 'seo_meta', 'home_slides','events'));
    }



    public function migrateUsers($from, $end) {

        // tables: users, user_has_roles, members, member_addresses

        // $chapter = \App\Models\Chapter::where('slug', $slug)->get()->first();
        $getLiveMembers = DB::table('live_members2')
            // ->where('initial_payment',99)
            ->whereBetween('membership_id', [$from, $end])
            // ->take(5)
            ->get();

        echo "<strong>Start ".$from."</strong> members<br>";

        foreach ($getLiveMembers as $member) {

            // Generate temporary password
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $tempo_password = substr(str_shuffle($chars),0,8);

            $getChapter = \App\Models\Chapter::where('name',$member->membership)->get('id')->first;
            $chapter = json_decode($getChapter->id, true);
            $chapter_id = $chapter['id'] > 0? $chapter['id']: 0;
            echo "> ".$member->membership_id.' | '.$member->membership.' | '.$chapter_id.' | '.$member->email.' | '.$member->joined.'<br>';

            $insertUser = \App\Models\User::create([
                'email' => $member->email,
                'user_name' => $member->username,
                'password' => $tempo_password,
                'first_name' => $member->firstname,
                'middle_name' => $member->membership_id,
                'last_name' => $member->lastname,
                'phone' => $member->phone,
                'profile_image' => $tempo_password,
                'chapter_id' => $chapter_id
            ]);

            // customer role
            $roles = [3];
            if (isset($roles)) {
                foreach ($roles as $role) {
                    // $role_r = $this->role_model->where('id', '=', $role)->firstOrFail();
                    // $user->assignRole($role_r);
                    $role_r = \Spatie\Permission\Models\Role::where('id', '=', $role)->firstOrFail();
                    $insertUser->assignRole($role_r);
                }
            }

            // $insertRole = DB::table('user_has_roles')->insert([
            //     'role_id' => 3,
            //     'model_type' => 'App\Models\User',
            //     'user_id' => $insertUser->id
            // ]);

            $insertMember = \App\Models\Members::create([
                'user_id' => $insertUser->id,
                'bio' => $member->membernotes,
                'position' => ucfirst($member->iam),
                'company' => $member->company,
                'joined_date' => $member->joined,
                'expires' => $member->expires,
                // 'paypal_id' => $member->paypal_id
            ]);

            $insertMemberAddress = \App\Models\MemberAddress::create([
                'user_id' => $insertUser->id,
                'street_address1' => $member->address1,
                'street_address2' => $member->address2,
                'city' => $member->city,
                'state' => $member->state,
                'country' => $member->country,
                'zipcode' => $member->zipcode,
                'company' => $member->company,
                'phone' => $member->phone
            ]);

            // $members = $this->members->create(array_merge($request->all(), [
            //     'is_active' => $request->has('is_active') ? 1 : 0,
            //     'slug' => str_slug($request->input('name'))
            // ]));
        }

        // Get all members
        //     Insert to users : membership_id, email, username, temporary password (to be sent out), firstname, lastname, phone, chapter_id
        //     Insert to members : user_id, position (iam), paypal_id, bio (member_notes), created_at (membership_startdate)
        //     Insert to member_addresses : user_id, street_address, city, state, country, zipcode, company, phone

        echo "<strong>".count($getLiveMembers)."</strong> members<br>";
        die('-- END '.$end);
    }



}
