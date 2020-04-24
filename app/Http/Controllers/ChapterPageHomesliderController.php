<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ChapterPageHomeslider;
use App\Http\Controllers\Controller;
use File;

class ChapterPageHomesliderController extends Controller
{
    /**
     * ChapterPageHomeslider model instance.
     *
     * @var ChapterPageHomeslider
     */
    private $chapter_page_homeslider;

    /**
     * Create a new controller instance.
     *
     * @param ChapterPageHomeslider $chapter_page_homeslider
     */
    public function __construct(ChapterPageHomeslider $chapter_page_homeslider)
    {
        $this->chapter_page_homeslider = $chapter_page_homeslider;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Chapter Page Homeslider')) {
            abort('401', '401');
        }

        $chapter_page_homesliders = $this->chapter_page_homeslider->get();

        return view('admin.modules.chapter_page_homeslider.index', compact('chapter_page_homesliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Chapter Page Homeslider')) {
            abort('401', '401');
        }

        return view('admin.modules.chapter_page_homeslider.create');
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
        if (!auth()->user()->hasPermissionTo('Create Chapter Page Homeslider')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'chapter_id' => 'required',
            'name' => 'required',
            'content' => 'required',
            'background_image' => 'mimes:jpg,jpeg,png',
            'thumbnail_image' =>  'mimes:jpg,jpeg,png'
        ],[
            'chapter_id.required' => 'Chapter is required.'
        ]);

        $chapter_page_homeslider = $this->chapter_page_homeslider->create(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]));

        if ($request->hasFile('background_image')) {
            $file_upload_path = $this->upload($request->background_image, '');
            $chapter_page_homeslider->fill(['background_image'=>$file_upload_path])->save();
        }

        if ($request->hasFile('thumbnail_image')) {
            $file_upload_path = $this->upload($request->thumbnail_image, '/thumbnail');
            $chapter_page_homeslider->fill(['thumbnail_image'=>$file_upload_path])->save();
        }

        return redirect()->route('admin.chapter_page_homesliders.index')->with('flash_message', [
            'title' => '',
            'message' => 'Chapter Page Homeslider ' . $chapter_page_homeslider->name . ' successfully added.',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        if (!auth()->user()->hasPermissionTo('Read Chapter Page Homeslider')) {
            abort('401', '401');
        }

        $chapter_page_homeslider = $this->chapter_page_homeslider->findOrFail($id);

        return view('admin.modules.chapter_page_homeslider.show', compact('chapter_page_homeslider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->hasPermissionTo('Update Chapter Page Homeslider')) {
            abort('401', '401');
        }

        $chapter_page_homeslider = $this->chapter_page_homeslider->findOrFail($id);

        return view('admin.modules.chapter_page_homeslider.edit', compact('chapter_page_homeslider'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Page Homeslider')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'chapter_id' => 'required',
            'name' => 'required',
            'content' => 'required',
            'background_image' => 'mimes:jpg,jpeg,png',
            'thumbnail_image' =>  'mimes:jpg,jpeg,png'
        ],[
            'chapter_id.required' => 'Chapter is required.'
        ]);

        $chapter_page_homeslider = $this->chapter_page_homeslider->findOrFail($id);

        $chapter_page_homeslider->fill(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]))->save();

        if ($request->hasFile('background_image')) {
            $file_upload_path = $this->upload($request->background_image, '');
            $chapter_page_homeslider->fill(['background_image'=>$file_upload_path])->save();
        }

        if ($request->hasFile('thumbnail_image')) {
            $file_upload_path = $this->upload($request->thumbnail_image, '/thumbnail');
            $chapter_page_homeslider->fill(['thumbnail_image'=>$file_upload_path])->save();
        }

        return redirect()->route('admin.chapter_page_homesliders.index')->with('flash_message', [
            'title' => '',
            'message' => 'Chapter Page Homeslider ' . $chapter_page_homeslider->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Chapter Page Homeslider')) {
            abort('401', '401');
        }

        $chapter_page_homeslider = $this->chapter_page_homeslider->findOrFail($id);
        $chapter_page_homeslider->delete();

        return response()->json(status()->success('Chapter Page Homeslider successfully deleted.', compact('id')));
    }

    public function upload($file, $dir) {
        $extension = $file->getClientOriginalExtension();
        $file_name = substr((pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)), 0, 30) . '.' . $extension;
        $file_name = preg_replace("/[^a-z0-9\_\-\.]/i", '', $file_name);
        $file_path = '/uploads/homeslides' . $dir;
        $directory = public_path() . $file_path;

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777);
        }

        $file->move($directory, $file_name);
        $file_upload_path = 'public' . $file_path . '/' . $file_name;
        return $file_upload_path;
    }
}
