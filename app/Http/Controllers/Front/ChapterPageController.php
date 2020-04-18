<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Chapter;
use App\Models\ChapterPageAboutUs;
use App\Models\ChapterPageEvent;

use App\Repositories\PageRepository;

class ChapterPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param PageRepository $pageRepository
     */

    private $pageRepository,
            $chapter,
            $chapter_page_aboutus,
            $chapter_page_event;

    public function __construct(PageRepository $pageRepository,
                                Chapter $chapter,
                                ChapterPageAboutUs $chapter_page_aboutus,
                                ChapterPageEvent $chapter_page_event)
    {
        $this->pageRepository = $pageRepository;
        $this->chapter = $chapter;
        $this->chapter_page_aboutus = $chapter_page_aboutus;
        $this->chapter_page_event = $chapter_page_event;
    }

    public function indexAboutUs($slug) {
        $chapter = $this->verifyChapter($slug);

        $page = $this->pageRepository->getActivePageBySlug('chapter-aboutus');

        $chapter_page_aboutus = $this->chapter_page_aboutus->where('chapter_id', $chapter->id)->get()->first();        
        
        //Page Defaults
        $default_content = '<h3>Learn More</h3><h1>About Us</h1>';
        $default_banner_image = 'public/images/chapter-aboutus.jpg';
        
        if (!$chapter_page_aboutus) {
            $chapter_page_aboutus = new \stdClass();
            $chapter_page_aboutus->banner_image = $default_banner_image;
            $chapter_page_aboutus->content = $default_content;
        } else {
            $chapter_page_aboutus->banner_image = $chapter_page_aboutus->banner_image ? $chapter_page_aboutus->banner_image : $default_banner_image;
            $chapter_page_aboutus->content = $chapter_page_aboutus->content ? $chapter_page_aboutus->content : $default_content;
        }

        $chapter_page_aboutus->section_1 = $chapter_page_aboutus->section_1 ? json_decode($chapter_page_aboutus->section_1) : new \stdClass() ;

        $chapter_page_aboutus->section_1->title = isset($chapter_page_aboutus->section_1->title) ? $chapter_page_aboutus->section_1->title : 'Our Stories';

        return $chapter_page_aboutus->section_1->title;

        return view('front.pages.custom-pages-index', compact('page', 'chapter', 'chapter_page_aboutus'));
    }

    public function indexContactUs($slug) {
        $chapter = $this->verifyChapter($slug);

        $page = $this->pageRepository->getActivePageBySlug('chapter-contactus');

        return view('front.pages.custom-pages-index', compact('page', 'chapter'));
    }

    public function indexEvents($slug) {
        $chapter = $this->verifyChapter($slug);

        $page = $this->pageRepository->getActivePageBySlug('chapter-events');
        $chapter_page_event = $this->chapter_page_event->where('chapter_id', $chapter->id)->get()->first();

        //Page Defaults
        $default_content = '<h1>Events</h1>';
        $default_banner_image = 'public/images/events-banner.jpg';
        
        if (!$chapter_page_event) {
            $chapter_page_event = new \stdClass();
            $chapter_page_event->banner_image = $default_banner_image;
            $chapter_page_event->content = $default_content;
        } else {
            $chapter_page_event->banner_image = $chapter_page_event->banner_image ? $chapter_page_event->banner_image : $default_banner_image;
            $chapter_page_event->content = $chapter_page_event->content ? $chapter_page_event->content : $default_content;
        }

        return view('front.pages.custom-pages-index', compact('page', 'chapter', 'chapter_page_event'));
    }

    public function verifyChapter($slug) {
        $chapter = $this->chapter->where('slug',$slug)->get()->first();

        //Redirect to 404 when chapter does not exist
        if (!$chapter) {
            abort(404);
        }

        return $chapter;
    }
}