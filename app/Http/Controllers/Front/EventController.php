<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventRegistration;
use App\Http\Controllers\Controller;

use App\Repositories\PageRepository;


class EventController extends Controller
{
    public function __construct(PageRepository $pageRepository,
                                Event $event,
                                EventRegistration $event_registration
    )
    {
        $this->pageRepository = $pageRepository;
        $this->event = $event;
        $this->event_registration = $event_registration;
    }

    public function showEvent($slug) {

        $page = $this->pageRepository->getActivePageBySlug('events-detail');

        $event = $this->event->where('slug','=',$slug)->get()->first();
        $nextEvent = $this->nextEvent($event);

        return view('front.pages.custom-pages-index', compact('page','event', 'nextEvent'));
    }

    public function nextEvent($event) {
        $current_event_date = \Carbon\Carbon::parse($event->starts_at)->format('Y-m-d');

        return  $event->where('id', '>', $event->id)->get()->first();
    }

    public function registerToEvent(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'is_member' => 'required',
            'member_chapter_id' => 'required_if:is_member,1'
        ],[
            'is_member.required' => "Please indicate if you're a member or not.",
            'member_chapter_id.required_if' => 'Please indicate your chapter.'
        ]);

        $event_registration = $this->event_registration->create($request->all());

        return redirect()->back()->with('flash_message', [
            'title' => '',
            'message' => 'Event registration successful.',
            'type' => 'success'
        ]);
    }


    public function memberEventRegistration($id = 0) {

        // Create cart
        // Display registration page - pre-filled

        // die('show event registration and payment field for MEMBER');

        $page = $this->pageRepository->getActivePageBySlug('events-register');
        $event = $this->event->where('id',$id)->get()->first();

        return view('front.pages.custom-pages-index', compact('page','event'));
    }

    public function guestEventRegistration($id = 0) {

        // Create cart
        // Display registration page

        // die('show event registration and payment field for GUEST');
        $page = $this->pageRepository->getActivePageBySlug('events-register');
        $event = $this->event->where('id',$id)->get()->first();

        return view('front.pages.custom-pages-index', compact('page','event'));
        // return view('front.pages.custom-page.events-register', compact('page','event'));
    }

    // public function registerLogin(Request $request) {

    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required'
    //         // 'member_chapter_id' => 'required_if:is_member,1'
    //     ],[
    //         // 'is_member.required' => "Please indicate if you're a member or not.",
    //         // 'member_chapter_id.required_if' => 'Please indicate your chapter.'
    //     ]);
    // }


}