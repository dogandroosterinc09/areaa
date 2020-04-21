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
                
                //Check if chapter page
                $chapter = \App\Models\Chapter::where('slug', $slug)->get()->first();

                if ($chapter) {
                    $seo_meta =  $this->getSeoMeta(null);
                    
                    //Add other seo_meta here

                    $chapter_home = \App\Models\ChapterHome::where('chapter_id', $chapter->id)->get()->first();

                    //Page Defaults
                    $default_who_we_are_title = 'Who We Are';
                    $default_member_benefits_title = 'Member Benefits';
                    // $default_member_benefits_featured_image = 'public/images/chapter-image.jpg';
                    $default_member_benefits_featured_image = '';
                    $default_sponsors_title = 'Sponsors';
                    
                    if (!$chapter_home) {
                        $chapter_home = new \stdClass();
                        $chapter_home->who_we_are_title = $default_who_we_are_title;
                        $chapter_home->member_benefits_title = $default_member_benefits_title;
                        $chapter_home->member_benefits_featured_image = $default_member_benefits_featured_image;
                        $chapter_home->sponsors_title = $default_sponsors_title;
                    } else {
                        $chapter_home->who_we_are_title = !empty($chapter_home->who_we_are_title) ? $chapter_home->who_we_are_title : $default_who_we_are_title;
                        $chapter_home->member_benefits_title = !empty($chapter_home->member_benefits_title) ? $chapter_home->member_benefits_title : $default_member_benefits_title;
                        $chapter_home->member_benefits_featured_image = !empty($chapter_home->member_benefits_featured_image) ? $chapter_home->member_benefits_featured_image : $default_member_benefits_featured_image;
                        $chapter_home->sponsors_title = !empty($chapter_home->sponsors_title) ? $chapter_home->sponsors_title : $default_sponsors_title;

                        $top_sponsor = !empty($chapter_home->top_sponsor) ? json_decode($chapter_home->top_sponsor) : new \stdClass();
                        $top_sponsor->badge_icon = isset($top_sponsor->badge_icon) ? $top_sponsor->badge_icon : '';
                        $top_sponsor->image = isset($top_sponsor->image) ? $top_sponsor->image : '';
                        $top_sponsor->image_alt = isset($top_sponsor->image_alt) ? $top_sponsor->image_alt : '';


                        $chapter_home->top_sponsor = json_encode($top_sponsor);

                        // return json_encode($top_sponsor);
                    }


                    return view('front.pages.custom-pages-index', compact('chapter', 'seo_meta', 'chapter_home'));
                }

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
