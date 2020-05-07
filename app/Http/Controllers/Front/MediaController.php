<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Webinars;
use App\Http\Controllers\Controller;

use App\Repositories\PageRepository;

class MediaController extends Controller
{
    /**
     * Gallery model instance.
     *
     * @var Webinars
     */
    private $media;

    /**
     * Create a new controller instance.
     *
     * @param Gallery $gallery
     */
    public function __construct(PageRepository $pageRepository, Webinars $media)
    {
        $this->pageRepository = $pageRepository;
        $this->media = $media;
    }

    public function searchMedia(Request $request) {
        $page = $this->pageRepository->getActivePageBySlug('media');            

        return view('front.pages.custom-pages-index', compact('page'));
    }
}