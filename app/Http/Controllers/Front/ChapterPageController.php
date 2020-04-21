<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Chapter;
use App\Models\ChapterPageAboutUs;
use App\Models\ChapterPageEvent;
use App\Models\ChapterPageLeadership;
use App\Models\ChapterPageContactUs;

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
            $chapter_page_event,
            $chapter_page_leadership,
            $chapter_page_contactus;

    public function __construct(PageRepository $pageRepository,
                                Chapter $chapter,
                                ChapterPageAboutUs $chapter_page_aboutus,
                                ChapterPageEvent $chapter_page_event,
                                ChapterPageLeadership $chapter_page_leadership,
                                ChapterPageContactUs $chapter_page_contactus)
    {
        $this->pageRepository = $pageRepository;
        $this->chapter = $chapter;
        $this->chapter_page_aboutus = $chapter_page_aboutus;
        $this->chapter_page_event = $chapter_page_event;
        $this->chapter_page_leadership = $chapter_page_leadership;
        $this->chapter_page_contactus = $chapter_page_contactus;
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

        $section_1 = $chapter_page_aboutus->section_1 ? json_decode($chapter_page_aboutus->section_1) : new \stdClass() ;

        $section_1->title = isset($section_1->title) ? $section_1->title : 'Our Story';
        $section_1->content = isset($section_1->content) ? $section_1->content : '';
        $section_1->button_text = isset($section_1->button_text) ? $section_1->button_text : '';
        $section_1->featured_image = isset($section_1->featured_image) ? $section_1->featured_image : '';

        $chapter_page_aboutus->section_1 = json_encode($section_1);

        $section_2 = $chapter_page_aboutus->section_2 ? json_decode($chapter_page_aboutus->section_2) : new \stdClass() ;

        $section_2->title = isset($section_2->title) ? $section_2->title : 'AREAA National';
        $section_2->content = isset($section_2->content) ? $section_2->content : '';
        $section_2->button_text = isset($section_2->button_text) ? $section_2->button_text : '';
        $section_2->featured_image = isset($section_2->featured_image) ? $section_2->featured_image : '';

        $chapter_page_aboutus->section_2 = json_encode($section_2);

        // return json_encode($section_2);

        return view('front.pages.custom-pages-index', compact('page', 'chapter', 'chapter_page_aboutus'));
    }

    public function indexContactUs($slug) {
        $chapter = $this->verifyChapter($slug);

        $page = $this->pageRepository->getActivePageBySlug('chapter-contactus');

        $chapter_page_contactus = $this->chapter_page_contactus->where('chapter_id', $chapter->id)->get()->first();        

        //Page Defaults
        $default_content = '<h3>Have Questions?</h3><h1>Contact Us</h1>';

        if(!$chapter_page_contactus) {
            $chapter_page_contactus = new \stdClass();
            $chapter_page_contactus->content = $default_content;
        } else {
            $chapter_page_contactus->content = $chapter_page_contactus->content ? $chapter_page_contactus->content : $default_content;

            $section_1 = $chapter_page_contactus->section_1 ? json_decode($chapter_page_contactus->section_1) : new \stdClass();
            $section_1->location_icon = isset($section_1->location_icon) && !empty($section_1->location_icon) ? $section_1->location_icon : 'loc';
            $section_1->location_text = isset($section_1->location_text) && !empty($section_1->location_text) ? $section_1->location_text : '';
            $section_1->telephone_icon = isset($section_1->telephone_icon) && !empty($section_1->telephone_icon) ? $section_1->telephone_icon : 'tel';
            $section_1->telephone_text = isset($section_1->telephone_text) && !empty($section_1->telephone_text) ? $section_1->telephone_text : '';
            $section_1->telephone_link = isset($section_1->telephone_link) && !empty($section_1->telephone_link) ? $section_1->telephone_link : '';
            $section_1->mail_icon = isset($section_1->mail_icon) && !empty($section_1->mail_icon) ? $section_1->mail_icon : 'mail';
            $section_1->mail_text = isset($section_1->mail_text) && !empty($section_1->mail_text) ? $section_1->mail_text : '';
            $section_1->mail_link = isset($section_1->mail_link) && !empty($section_1->mail_link) ? $section_1->mail_link : '';

            $chapter_page_contactus->section_1 = json_encode($section_1);
        }

        return view('front.pages.custom-pages-index', compact('page', 'chapter', 'chapter_page_contactus'));
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

    public function indexLeadershipBoard($slug) {
        $chapter = $this->verifyChapter($slug);

        $page = $this->pageRepository->getActivePageBySlug('chapter-leadership');
        $chapter_page_leadership = $this->chapter_page_leadership->where('chapter_id', $chapter->id)->get()->first();

        //Page Defaults
        $default_content = '<h3>Meet Our</h3><h1>Leadership<br />Board</h1>';
        $default_banner_image = 'public/images/executive-banner.jpg';

        if (!$chapter_page_leadership) {
            $chapter_page_leadership = new \sdtdClass();
            $chapter_page_leadership->banner_image =  $default_banner_image;
            $chapter_page_leadership->content = $default_content;
        } else {
            $chapter_page_leadership->banner_image = $chapter_page_leadership->banner_image ? $chapter_page_leadership->banner_image : $default_banner_image;
            $chapter_page_leadership->content = $chapter_page_leadership->content ? $chapter_page_leadership->content : $default_content;
        }

        return view('front.pages.custom-pages-index', compact('page', 'chapter', 'chapter_page_leadership'));
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