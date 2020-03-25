<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Controllers\Front\PageController;

use App\Models\Page;
use App\Models\PageType;
use App\Models\PageSection;
use App\Repositories\PageRepository;
use App\Http\Controllers\Controller;
use App\Http\Traits\SystemSettingTrait;
use App\Repositories\SeoMetaRepository;
use App\Repositories\HomeSlideRepository;

class EventController extends PageController
{
    public function __construct(Page $page,
                                PageType $pageType,
                                SeoMetaRepository $seoMetaRepository,
                                PageRepository $pageRepository,
                                PageSection $pageSection,
                                HomeSlideRepository $homeSlideRepository,
                                Event $event
    )
    {
        $this->page = $page;
        $this->pageType = $pageType;
        $this->pageSection = $pageSection;
        $this->seoMetaRepository = $seoMetaRepository;
        $this->pageRepository = $pageRepository;
        $this->homeSlideRepository = $homeSlideRepository;
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