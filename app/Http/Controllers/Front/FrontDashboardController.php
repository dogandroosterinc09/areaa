<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Repositories\PageRepository;

class FrontDashboardController extends Controller
{
    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // return view('front.pages.dashboard.index');

        $page = $this->pageRepository->getActivePageBySlug('dashboard-main');

        return view('front.pages.custom-pages-index', compact('page'));
    }

    public function showMemberDirectory() {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-memberdirectory');

        return view('front.pages.custom-pages-index', compact('page'));
    }

    public function showMemberDetail($id) {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-memberdirectory-detail');

        $member = \App\Models\Members::find($id);
        
        if (!$member) {
            abort('404', '404');
        }

        return view('front.pages.custom-pages-index', compact('page', 'member'));
    }
}
