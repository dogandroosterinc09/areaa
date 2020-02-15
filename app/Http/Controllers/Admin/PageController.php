<?php

namespace App\Http\Controllers\Admin;

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

        return view('admin.pages.page.index', compact('pages'));
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

        return view('admin.pages.page.create', compact('page_types'));
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

        $pos = 1;
        $file_upload_path = '';
        if ($request->hasFile('banner_image')) {
            $file_upload_path = $this->pageRepository->uploadFilePageSection($request->file('banner_image'), $page);
        }

        $page->page_sections()->create([
            'section' => 'banner_image',
            'content' => $file_upload_path,
            'type' => 'file',
            'position' => $pos,
        ]);

        $pos++;

        if ($request->has('content')) {
            $page->page_sections()->create([
                'section' => 'content',
                'content' => $request->get('content'),
                'type' => 'ckeditor',
                'position' => $pos,
            ]);
        }

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

        return view('admin.pages.page.edit', compact('page', 'page_types'));
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

        $this->validate($request, [
            'name' => 'required|unique:pages,name,' . $id . ',id,deleted_at,NULL',
            'slug' => 'required|unique:pages,slug,' . $id . ',id,deleted_at,NULL',
//            'content' => 'required',
//            'page_type_id' => 'required',
            'banner_image' => 'mimes:jpg,jpeg,png',
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

        if ($request->hasFile('banner_image')) {
            $file_upload_path = $this->pageRepository->uploadFile($request->file('banner_image'), $page);
            $input['banner_image'] = $file_upload_path;
        }

        $page->fill($input)->save();

        if (!empty($input['page_sections'])) {
            foreach ($input['page_sections'] as $page_section_key => $page_section) {
                $section = $this->pageSection->find($page_section_key);
                if (!empty($section)) {
                    if ($section->type == 'file') {
                        $file_upload_path = $this->pageRepository->uploadFilePageSection($request->file('page_sections.' . $page_section_key), $page);
                        $page_section = $file_upload_path;
                    }
                    $section->content = $page_section;
                    $section->save();
                }
            }
        }

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
