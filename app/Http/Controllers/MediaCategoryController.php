<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\MediaCategory;
use App\Http\Controllers\Controller;

class MediaCategoryController extends Controller
{
    /**
     * MediaCategory model instance.
     *
     * @var MediaCategory
     */
    private $media_category;

    /**
     * Create a new controller instance.
     *
     * @param MediaCategory $media_category
     */
    public function __construct(MediaCategory $media_category)
    {
        $this->media_category = $media_category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Media Category')) {
            abort('401', '401');
        }

        $media_categories = $this->media_category->get();

        return view('admin.modules.media_category.index', compact('media_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Media Category')) {
            abort('401', '401');
        }

        return view('admin.modules.media_category.create');
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
        if (!auth()->user()->hasPermissionTo('Create Media Category')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:media_categories,name,NULL,id,deleted_at,NULL',            
        ]);

        $media_category = $this->media_category->create($request->all());

        return redirect()->route('admin.media_categories.index')->with('flash_message', [
            'title' => '',
            'message' => 'Media Category ' . $media_category->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Media Category')) {
            abort('401', '401');
        }

        $media_category = $this->media_category->findOrFail($id);

        return view('admin.modules.media_category.show', compact('media_category'));
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
        if (!auth()->user()->hasPermissionTo('Update Media Category')) {
            abort('401', '401');
        }

        $media_category = $this->media_category->findOrFail($id);

        return view('admin.modules.media_category.edit', compact('media_category'));
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
        if (!auth()->user()->hasPermissionTo('Update Media Category')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:media_categories,name,' . $id . ',id,deleted_at,NULL'
        ]);

        $media_category = $this->media_category->findOrFail($id);

        $media_category->fill($request->all())->save();

        return redirect()->route('admin.media_categories.index')->with('flash_message', [
            'title' => '',
            'message' => 'Media Category ' . $media_category->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Media Category')) {
            abort('401', '401');
        }

        $media_category = $this->media_category->findOrFail($id);
        $media_category->delete();

        return response()->json(status()->success('Media Category successfully deleted.', compact('id')));
    }
}
