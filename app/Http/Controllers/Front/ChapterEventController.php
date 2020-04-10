<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\ChapterEvent;
use App\Http\Controllers\Controller;

use App\Repositories\PageRepository;

class ChapterEventController extends Controller
{
    /**
     * ChapterEvent model instance.
     *
     * @var ChapterEvent
     */
    private $chapter_event;

    /**
     * Create a new controller instance.
     *
     * @param ChapterEvent $chapter_event
     */
    public function __construct(ChapterEvent $chapter_event,
                                PageRepository $pageRepository)
    {
        $this->chapter_event = $chapter_event;
        $this->pageRepository = $pageRepository;
    }

    public function showChapterEvents($slug) {
        $chapter = \App\Models\Chapter::where('slug',$slug)->get()->first();

        $page = $this->pageRepository->getActivePageBySlug('chapter-events');
        
        //Redirect to 404 when chapter does not exist
        if (!$chapter) {
            abort(404);
        }

        return view('front.pages.custom-pages-index', compact('page', 'chapter'));
    }

    public function showChapterEventDetail($slug, $event_slug) {
        $chapter = \App\Models\Chapter::where('slug',$slug)->get()->first();
        $chapter_event = \App\Models\ChapterEvent::where('slug',$event_slug)->get()->first();

        $page = $this->pageRepository->getActivePageBySlug('chapter-event-detail');
        
        //Redirect to 404 when chapter does not exist
        if (!$chapter || !$chapter_event) {
            abort(404);
        }

        $nextEvent = $this->nextEvent($chapter_event);
        $previousEvent = $this->previousEvent($chapter_event);

        return view('front.pages.custom-pages-index', compact('page', 'chapter', 'chapter_event', 'nextEvent', 'previousEvent'));
    }

    public function previousEvent($chapter_event) {
        // $current_event_date = \Carbon\Carbon::parse($chapter_event->starts_at)->format('Y-m-d');

        return  $chapter_event->where('id', '<', $chapter_event->id)->get()->first();
    }

    public function nextEvent($chapter_event) {
        // $current_event_date = \Carbon\Carbon::parse($chapter_event->starts_at)->format('Y-m-d');

        return  $chapter_event->where('id', '>', $chapter_event->id)->get()->first();
    }
}
