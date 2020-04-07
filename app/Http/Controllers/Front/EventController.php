<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Controllers\Controller;

use App\Repositories\PageRepository;


class EventController extends Controller
{
    public function __construct(PageRepository $pageRepository,
                                Event $event
    )
    {
        $this->pageRepository = $pageRepository;
        $this->event = $event;
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
}