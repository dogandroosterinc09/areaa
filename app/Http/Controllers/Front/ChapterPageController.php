<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\PageRepository;

class ChapterPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param ChapterEvent $chapter_event
     */
    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function showAboutUs($slug) {
        $chapter = \App\Models\Chapter::where('slug',$slug)->get()->first();

        //Redirect to 404 when chapter does not exist
        if (!$chapter) {
            abort(404);
        }

        $page = $this->pageRepository->getActivePageBySlug('chapter-aboutus');
        
        return view('front.pages.custom-pages-index', compact('page', 'chapter'));
    }

    public function showContactUs($slug) {
        $chapter = \App\Models\Chapter::where('slug',$slug)->get()->first();

        //Redirect to 404 when chapter does not exist
        if (!$chapter) {
            abort(404);
        }

        $page = $this->pageRepository->getActivePageBySlug('chapter-contactus');

        return view('front.pages.custom-pages-index', compact('page', 'chapter'));
    }
}