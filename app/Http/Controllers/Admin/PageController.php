<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attachment;
use App\Models\Page;
use App\Models\PageType;
use App\Models\PageSection;
use Illuminate\Http\Request;
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
     * Show the application pages.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Page')) {
            abort('401', '401');
        }

        $pages = $this->page->get();
        // foreach ($pages as $page) {
        //     echo 'slug: '.$page->slug.'<br>';
        // }
        // die('102');

        return view('admin.modules.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Page')) {
            abort('401', '401');
        }

        $page_types = $this->pageType->get();

        return view('admin.modules.page.create', compact('page_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if (!auth()->user()->hasPermissionTo('Create Page')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:pages,name,NULL,id,deleted_at,NULL',
            'slug' => 'required|unique:pages,slug,NULL,id,deleted_at,NULL',
//            'content' => 'required',
//            'page_type_id' => 'required',
            'banner_image' => 'mimes:jpg,jpeg,png',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;
        /* if slug is hidden, generate slug automatically */
//        $input['slug'] = str_slug($input['name']);

        /* seo meta */
        $input['seo_meta_id'] = isset($input['seo_meta_id']) ? $input['seo_meta_id'] : 0;
        $seo_inputs = $request->only(['meta_title', 'meta_keywords', 'meta_description', 'seo_meta_id', 'canonical_link']);
        $seo_meta = $this->seoMetaRepository->updateOrCreate($seo_inputs);
        $input['seo_meta_id'] = $seo_meta->id;
        $input['content'] = '';
        /* seo meta */

        $page = $this->page->create($input);



//        $pos = 1;
//        $file_upload_path = '';
//        if ($request->hasFile('banner_image')) {
//            $file_upload_path = $this->pageRepository->uploadFilePageSection($request->file('banner_image'), $page);
//        }

//        $page->page_sections()->create([
//            'section' => 'banner_image',
//            'content' => $file_upload_path,
//            'type' => 'file',
//            'position' => $pos,
//        ]);

//        $pos++;
//
//        if ($request->has('content')) {
//            $page->page_sections()->create([
//                'section' => 'content',
//                'content' => $request->get('content'),
//                'type' => 'ckeditor',
//                'position' => $pos,
//            ]);
//        }

        return redirect()->route('admin.pages.index')->with('flash_message', [
            'title' => '',
            'message' => 'Page ' . $page->title . ' successfully added.',
            'type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->hasPermissionTo('Update Page')) {
            abort('401', '401');
        }

        $page = $this->page->findOrFail($id);
        $page_types = $this->pageType->get();

        return view('admin.modules.page.edit', compact('page', 'page_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->hasPermissionTo('Update Page')) {
            abort('401', '401');
        }

        // dd($request);

        $this->validate($request, [
            'name' => 'required|unique:pages,name,' . $id . ',id,deleted_at,NULL',
            'slug' => 'required|unique:pages,slug,' . $id . ',id,deleted_at,NULL',
//            'content' => 'required',
//            'page_type_id' => 'required',
//            'banner_image' => 'mimes:jpg,jpeg,png',
        ]);

        $page = $this->page->findOrFail($id);
        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;
        /* if slug is hidden, generate slug automatically */
//        $input['slug'] = str_slug($input['name']);

        /* seo meta */
        $input['seo_meta_id'] = isset($input['seo_meta_id']) ? $input['seo_meta_id'] : 0;
        $seo_inputs = $request->only(['meta_title', 'meta_keywords', 'meta_description', 'seo_meta_id', 'canonical_link']);
        $seo_meta = $this->seoMetaRepository->updateOrCreate($seo_inputs);
        $input['seo_meta_id'] = $seo_meta->id;
        /* seo meta */

        $page->fill($input)->save();

        if ($request->hasFile('banner_image'))
            $page->attach($request->file('banner_image'));


        foreach ($page->sections as $section) {
            if ($section->isAttachment) {
                $page->attach($request->file($section->alias));
            } else {
                $section->value = $request->input($section->alias);
                $section->save();
            }
        }
        // die('ln264');

        // IF HOME PAGE 
        // - save 'Events and Campaigns' to table 'page' on field 'other_content' where 'id' = 1
        // - save 'Featured Sponsors' to table 'page' on field 'other_section' where 'id' = 1
        // - save 'Partnerships' to table 'page' on field 'other_section2' where 'id' = 1
        if ($id==1) {

            // Partnerships
            $partnerships = array();
            $other_section2 = json_decode($page->other_section2);
            // Partnerships Image path
            // $file_path = '/uploads/page_section_images';
            $feat_images = $request->file('partnership_image');
            for($counter = 0; $counter < count($request->partnership_link); $counter++) {

                if ($request->partnership_link[$counter]!='') {
                    $image = '';
                    if (isset($request->partnership_id[$counter])) {
                        $partnership_id = $request->partnership_id[$counter];

                        $image = (isset($request->partnership_image[$counter]))? $this->pageRepository->uploadFilePageSection($feat_images[$counter]) : ($other_section2[$partnership_id])->image;

                        // if (isset($request->partnership_image[$counter])) {
                        //     // echo 'upload NEW image: '.$partnership_id.' with new img:'.$request->partnership_image[$counter].'<br>';
                        //     $file_upload_path = $this->pageRepository->uploadFilePageSection($feat_images[$counter]);
                        //     $image = $file_upload_path;
                        // } else {
                        //     // echo 'keep old image: '.($other_section2[$partnership_id])->image.' for partnership '.$partnership_id.'<br>';
                        //     $image = ($other_section2[$partnership_id])->image;
                        // }
                    } else {
                        if (isset($partnership_id)) {$partnership_id++;} else {$partnership_id = 0;}
                        $image = $this->pageRepository->uploadFilePageSection($feat_images[$counter]);
                    }

                    array_push($partnerships, [
                        'image' => $image,
                        'link' => $request->partnership_link[$counter]
                    ]);
                }
            }

            // print_r($partnerships);
            $page->other_section2 = $partnerships;
            $page->save();
            // die('ln297');


            // Featured Sponsors
            $feat_sponsors = array();
            $other_section = json_decode($page->other_section);
            // Featured Sponsors Image path
            // $file_path = '/uploads/page_section_images';
            $feat_images = $request->file('feat_sponsor_image');
            for($counter = 0; $counter < count($request->feat_sponsor_link); $counter++) {

                if ($request->feat_sponsor_title[$counter]!='') {
                    $image = '';
                    if (isset($request->feat_sponsor_id[$counter])) {
                        $feat_sponsor_id = $request->feat_sponsor_id[$counter];

                        $image = (isset($request->feat_sponsor_image[$counter]))? $this->pageRepository->uploadFilePageSection($feat_images[$counter]) : ($other_section[$feat_sponsor_id])->image;
                    } else {
                        if (isset($feat_sponsor_id)) {$feat_sponsor_id++;} else {$feat_sponsor_id = 0;}
                        $image = $this->pageRepository->uploadFilePageSection($feat_images[$counter]);
                    }

                    array_push($feat_sponsors, [
                        'title' => $request->feat_sponsor_title[$counter],
                        'image' => $image,
                        'link' => $request->feat_sponsor_link[$counter]
                    ]);
                }
            }

            // print_r($feat_sponsors);
            $page->other_section = $feat_sponsors;
            $page->save();
            // die('ln297');


            // Events and Campaigns
            $eventsArray = array();
            $other_content = json_decode($page->other_content);
            // Featured Sponsors Image path
            // $file_path = '/uploads/page_section_images';
            $feat_images = $request->file('event_image');
            for($counter = 0; $counter < count($request->event_title); $counter++) {

                if ($request->event_title[$counter]!='') {
                    $image = '';
                    if (isset($request->event_id[$counter])) {
                        $event_id = $request->event_id[$counter];

                        $image = (isset($request->event_image[$counter]))? $this->pageRepository->uploadFilePageSection($feat_images[$counter]) : ($other_content[$event_id])->image;
                    } else {
                        if (isset($event_id)) {$event_id++;} else {$event_id = 0;}
                        $image = $this->pageRepository->uploadFilePageSection($feat_images[$counter]);
                    }

                    array_push($eventsArray, [
                        'title' => $request->event_title[$counter],
                        'image' => $image,
                        'link' => $request->event_link[$counter]
                    ]);
                }
            }

            // print_r($eventsArray);
            $page->other_content = $eventsArray;
            $page->save();
            // die('ln297');

        }
        // die('ln296');

        // IF Sponsors page - save to sponsors to table 'page' on field 'other_content' where 'id' = 52
        if ($id==52) {

            $sponsorArray = array();

            $db_other_sponsors = json_decode($page->other_content);
            $images = $request->file('chapter_sponsor_image');
            for($counter = 0; $counter < count($request->sponsor_category); $counter++) {
                // echo $request->sponsor_id[$counter].'<br>';
                if ($request->chapter_alt_text[$counter]!='') {
                    $image = '';
                    if (isset($request->sponsor_id[$counter])) {
                        $sponsor_id = $request->sponsor_id[$counter];
                        // echo 'keep current sponsor: '.$sponsor_id.' '.($db_other_sponsors[$sponsor_id])->image_alt.'<br>';
                        echo 'sponsor: '.$sponsor_id.' '.$request->chapter_alt_text[$counter].'<br>';
                        if (isset($request->chapter_sponsor_image[$counter])) {
                            echo 'upload NEW image: '.$sponsor_id.' with new img:'.$request->chapter_sponsor_image[$counter].'<br>';
                            $file_upload_path = $this->pageRepository->uploadFilePageSection($images[$counter]);
                            $image = $file_upload_path;
                        } else {
                            echo 'keep old image: '.($db_other_sponsors[$sponsor_id])->image.' for sponsor '.$sponsor_id.'<br>';
                            $image = ($db_other_sponsors[$sponsor_id])->image;
                        }
                    } else {
                        if (isset($sponsor_id)) {$sponsor_id++;} else {$sponsor_id = 0;}
                        $image = $this->pageRepository->uploadFilePageSection($images[$counter]);
                        echo 'upload new sponsor: '.$sponsor_id.' '.$request->chapter_alt_text[$counter].'<br>';
                    }
                    echo 'sponsor_id: '.$sponsor_id.'<br>';
                    echo '<hr>';

                    array_push($sponsorArray, [
                        'badge_icon' => $request->sponsor_category[$counter],
                        'image' => $image,
                        'image_alt' => $request->chapter_alt_text[$counter],
                        'link' => $request->chapter_link[$counter]
                    ]);
                }
            }

            // print_r($sponsorArray);
            // echo '<br>-------<br>';
            $page->other_content = $sponsorArray;
            $page->save();
            // die('');

            // $other_sponsors = array();

            // $db_other_sponsors = json_decode($page->other_content);
            // for($counter = 0; $counter < count($request->sponsor_category); $counter++) {
                // if ($request->sponsor_category[$counter]!='') {
                // if ($request->chapter_link[$counter]!='') {

                //     array_push($other_sponsors, [
                //         'badge_icon' => $request->sponsor_category[$counter],
                //         'image' => isset($request->chapter_sponsor_image[$counter]) ? $request->chapter_sponsor_image[$counter] : 
                //             isset($db_other_sponsors) ? (isset(($db_other_sponsors[$counter])->image) ? ($db_other_sponsors[$counter])->image : '') : '' ,
                //         'image_alt' => $request->chapter_alt_text[$counter],
                //         'link' => $request->chapter_link[$counter]
                //     ]);
                // }
            // }
            // print_r($other_sponsors);
            // echo '<br>-------<br>';

            // // Sponsors Image path
            // // $file_path = '/uploads/page_section_images';
            // $images = $request->file('chapter_sponsor_image');
            // for($counter = 0; $counter < count($request->sponsor_category); $counter++) {
            //     // if ($request->sponsor_category[$counter]!='') {
            //     if ($request->chapter_link[$counter]!='') {
            //         if (isset($images[$counter]) && $images[$counter] != "" ) {
            //             $file_upload_path = $this->pageRepository->uploadFilePageSection($images[$counter]);
            //             $other_sponsors[$counter]['image'] = $file_upload_path;
            //         }
            //     }
            // }
            // print_r($other_sponsors);

            // $page->other_content = $other_sponsors;
            // $page->save();
            // print_r($other_sponsors);
            // die('ln263');
        }

        /* if ($id==1) {

            // Partnerships
            $partnerships = array();

            $other_section2 = json_decode($page->other_section2);
            for($counter = 0; $counter < count($request->partnership_link); $counter++) {
                if ($request->partnership_link[$counter]!='') {
                    array_push($partnerships, [
                        'image' => isset($request->partnership_image[$counter]) ? $request->partnership_image[$counter] : 
                            isset($other_section2) ? (isset(($other_section2[$counter])->image) ? ($other_section2[$counter])->image : '') : '' ,
                        'link' => $request->partnership_link[$counter]
                    ]);
                }
            }

            // Partnerships Image path
            // $file_path = '/uploads/page_section_images';
            $feat_images = $request->file('partnership_image');
            for($counter = 0; $counter < count($request->partnership_link); $counter++) {
                if ($request->partnership_link[$counter]!='') {
                    if (isset($feat_images[$counter]) && $feat_images[$counter] != "" ) {
                        $file_upload_path = $this->pageRepository->uploadFilePageSection($feat_images[$counter]);
                        $partnerships[$counter]['image'] = $file_upload_path;
                    }
                }
            }

            $page->other_section2 = $partnerships;
            $page->save();
            // print_r($partnerships);
            // die('ln297');

            // Featured Sponsors
            $feat_sponsors = array();

            $other_section = json_decode($page->other_section);
            for($counter = 0; $counter < count($request->feat_sponsor_title); $counter++) {
                if ($request->feat_sponsor_title[$counter]!='') {
                    array_push($feat_sponsors, [
                        'title' => $request->feat_sponsor_title[$counter],
                        'image' => isset($request->feat_sponsor_image[$counter]) ? $request->feat_sponsor_image[$counter] : 
                            isset($other_section) ? (isset(($other_section[$counter])->image) ? ($other_section[$counter])->image : '') : '' ,
                        'link' => $request->feat_sponsor_link[$counter]
                    ]);
                }
            }

            // Sponsors Image path
            // $file_path = '/uploads/page_section_images';
            $feat_images = $request->file('feat_sponsor_image');
            for($counter = 0; $counter < count($request->feat_sponsor_title); $counter++) {
                if ($request->feat_sponsor_title[$counter]!='') {
                    if (isset($feat_images[$counter]) && $feat_images[$counter] != "" ) {
                        $file_upload_path = $this->pageRepository->uploadFilePageSection($feat_images[$counter]);
                        
                        $feat_sponsors[$counter]['image'] = $file_upload_path;
                    }
                }
            }

            $page->other_section = $feat_sponsors;
            $page->save();
            // print_r($feat_sponsors);
            // die('ln297');


            // Events and Campaigns
            $events = array();

            $other_content = json_decode($page->other_content);
            for($counter = 0; $counter < count($request->event_title); $counter++) {
                if ($request->event_title[$counter]!='') {
                    array_push($events, [
                        'title' => $request->event_title[$counter],
                        'image' => isset($request->event_image[$counter]) ? $request->event_image[$counter] : 
                            isset($other_content) ? (isset(($other_content[$counter])->image) ? ($other_content[$counter])->image : '') : '' ,
                        'link' => $request->event_link[$counter]
                    ]);
                }
            }

            // die('ln279');

            // Events and Campaign Image path
            // $file_path = '/uploads/page_section_images';
            $images = $request->file('event_image');
            for($counter = 0; $counter < count($request->event_title); $counter++) {
                if ($request->event_title[$counter]!='') {
                    if (isset($images[$counter]) && $images[$counter] != "" ) {
                        $file_upload_path = $this->pageRepository->uploadFilePageSection($images[$counter]);
                        
                        $events[$counter]['image'] = $file_upload_path;
                    }
                }
            }

            $page->other_content = $events;
            $page->save();
            // print_r($events);
            // die('ln294');
        } */

        return redirect()->route('admin.pages.index')->with('flash_message', [
            'title' => '',
            'message' => 'Page ' . $page->title . ' successfully updated.',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if (!auth()->user()->hasPermissionTo('Delete Page')) {
            abort('401', '401');
        }

        $page = $this->page->findOrFail($id);
        $page->delete();

        return response()->json([
            'status' => true,
            'data' => compact('id'),
            'message' => ['Page successfully deleted.']
        ]);
    }

    public function upload(Request $request)
    {
        if (!$request->hasFile('image'))
            return response()->json([
                'status' => false,
                'message' => 'No file provided',
                'data' => []
            ]);

        $file = $request->file('image');

        $attachment = new Attachment();
        $attachment->alias = str_random() . '.' . $file->getClientOriginalExtension();
        $attachment->folder = 'Form';
        $attachment->mime = $file->getClientMimeType();
        $attachment->name = $file->getClientOriginalName();
        $attachment->extension = $file->getClientOriginalExtension();
        $attachment->save();

        $file->move(storage_path('app/public/Form'), $attachment->alias);

        return response()->json([
            'status' => true,
            'message' => 'Image successfully uploaded',
            'data' => $attachment
        ]);
    }

    /**
     * upload image ckeditor
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function ckEditorImageUpload(Request $request)
    {
//        $CKEditor = $request->get('CKEditor');
        $funcNum = $request->get('CKEditorFuncNum');
        $message = $url = '';
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            if ($file->isValid()) {
//                $filename = $file->getClientOriginalName();
                $filename = uniqid() . time();
                $extension = $file->getClientOriginalExtension();

                $file->move(public_path() . '/uploads/ckeditor/', $filename . '.' . $extension);
                $url = asset('/public/uploads/ckeditor/' . $filename . '.' . $extension);

                /* save image path to browser list */
                $image_json = file_get_contents(public_path() . '/uploads/ckeditor/image_list.json');
                $image_data = json_decode($image_json, true);

                if (!is_array($image_data)) {
                    $image_data = [];
                }

                array_push($image_data, ["image" => $url]);
                $new_image_json = json_encode($image_data);
                file_put_contents(public_path() . '/uploads/ckeditor/image_list.json', $new_image_json);
            } else {
                $message = 'An error occured while uploading the file.';
            }
        } else {
            $message = 'No file uploaded.';
        }
        return '<script>window.parent.CKEDITOR.tools.callFunction(' . $funcNum . ', "' . $url . '", "' . $message . '")</script>';
    }
}
