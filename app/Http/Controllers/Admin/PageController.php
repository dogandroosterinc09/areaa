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

        // IF Sponsors page - save to sponsors to table 'page' on field 'other_content' where 'id' = 52
        if ($id==52) {
            $other_sponsors = array();

            $db_other_sponsors = json_decode($page->other_content);
            for($counter = 0; $counter < count($request->sponsor_category); $counter++) {
                if ($request->sponsor_category[$counter]!='') {

                    array_push($other_sponsors, [
                        'badge_icon' => $request->sponsor_category[$counter],
                        'image' => isset($request->chapter_sponsor_image[$counter]) ? $request->chapter_sponsor_image[$counter] : 
                            isset($db_other_sponsors) ? (isset(($db_other_sponsors[$counter])->image) ? ($db_other_sponsors[$counter])->image : '') : '' ,
                        'image_alt' => $request->chapter_alt_text[$counter]
                    ]);
                }
            }

            // Sponsors Image path
            // $file_path = '/uploads/page_section_images';
            $images = $request->file('chapter_sponsor_image');
            for($counter = 0; $counter < count($request->sponsor_category); $counter++) {
                if ($request->sponsor_category[$counter]!='') {
                    if (isset($images[$counter]) && $images[$counter] != "" ) {
                        $file_upload_path = $this->pageRepository->uploadFilePageSection($images[$counter]);
                        
                        $other_sponsors[$counter]['image'] = $file_upload_path;
                    }
                }
            }

            $page->other_content = $other_sponsors;
            $page->save();
            // print_r($other_sponsors);
            // die('ln263');
        }

        /*
        // IF Sponsors page - save to table 'sections' on field 'value' where section 'id' = 28
        if ($id==52) {
            echo 'sponsors page';
    
            $sponsors = \App\Models\Section::findOrFail(28);
            // Sponsors
            $other_sponsors = array();

            // $db_other_sponsors = json_decode($chapter_home['other_sponsors']);
            $db_other_sponsors = json_decode($sponsors->value);
            for($counter = 0; $counter < count($request->sponsor_category); $counter++) {
                if ($request->sponsor_category[$counter]!='') {

                    array_push($other_sponsors, [
                        'badge_icon' => $request->sponsor_category[$counter],
                        'image' => isset($request->chapter_sponsor_image[$counter]) ? $request->chapter_sponsor_image[$counter] : 
                            isset($db_other_sponsors) ? (isset(($db_other_sponsors[$counter])->image) ? ($db_other_sponsors[$counter])->image : '') : '' ,
                        'image_alt' => $request->chapter_alt_text[$counter]
                    ]);
                }
            }

            // print_r($other_sponsors);
            // die('ln244');
            // $sponsors->value = $other_sponsors;
            // $sponsors->save();

            // Other Sponsors Image        
            // $file_path = '/uploads/page_section_images';
            $images = $request->file('chapter_sponsor_image');
            for($counter = 0; $counter < count($request->sponsor_category); $counter++) {
                if ($request->sponsor_category[$counter]!='') {
                    if (isset($images[$counter]) && $images[$counter] != "" ) {
                        $file_upload_path = $this->pageRepository->uploadFilePageSection($images[$counter]);
                        
                        $other_sponsors[$counter]['image'] = $file_upload_path;
                    }
                }
            }

            $sponsors->value = $other_sponsors;
            $sponsors->save();
            print_r($other_sponsors);
            // die('ln263');
        }
        */


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
