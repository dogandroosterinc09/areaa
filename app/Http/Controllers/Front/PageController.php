<?php

namespace App\Http\Controllers\Front;

use App\Models\Page;
use App\Models\PageType;
use App\Models\PageSection;
use App\Repositories\PageRepository;
use App\Http\Controllers\Controller;
use App\Http\Traits\SystemSettingTrait;
use App\Repositories\SeoMetaRepository;
use App\Repositories\HomeSlideRepository;


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
            if (empty($page)) {
                return view('front.pages.home');
            } else {
                $seo_meta = $this->getSeoMeta($page);
            }
        } else {
            $page = $this->pageRepository->getActivePageBySlug($slug);
            /* if not in pages */
            if (empty($page)) {
                abort('404', '404');
            } else {
                $seo_meta = $this->getSeoMeta($page);

                if ($slug == 'home') {
                    $home_slides = $this->homeSlideRepository->getAllActive();
                }
            }
        }

        return view('front.pages.custom-pages-index', compact('page', 'seo_meta', 'home_slides'));
    }
}
