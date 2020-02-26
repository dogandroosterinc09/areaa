<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Gallery model instance.
     *
     * @var Gallery
     */
    private $gallery;

    /**
     * Create a new controller instance.
     *
     * @param Gallery $gallery
     */
    public function __construct(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Gallery')) {
            abort('401', '401');
        }

        $galleries = $this->gallery->get();

        return view('admin.modules.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Gallery')) {
            abort('401', '401');
        }

        return view('admin.modules.gallery.create');
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
        if (!auth()->user()->hasPermissionTo('Create Gallery')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:galleries,name,NULL,id,deleted_at,NULL',
            'slug' => 'required|unique:galleries,slug,NULL,id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $gallery = $this->gallery->create(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]));

        return redirect()->route('admin.galleries.index')->with('flash_message', [
            'title' => '',
            'message' => 'Gallery ' . $gallery->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Gallery')) {
            abort('401', '401');
        }

        $gallery = $this->gallery->findOrFail($id);

        return view('admin.modules.gallery.show', compact('gallery'));
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
        if (!auth()->user()->hasPermissionTo('Update Gallery')) {
            abort('401', '401');
        }

        $gallery = $this->gallery->findOrFail($id);

        return view('admin.modules.gallery.edit', compact('gallery'));
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
        if (!auth()->user()->hasPermissionTo('Update Gallery')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:galleries,name,' . $id . ',id,deleted_at,NULL',
            'slug' => 'required|unique:galleries,slug,' . $id . ',id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $gallery = $this->gallery->findOrFail($id);

        $gallery->fill(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]))->save();

        return redirect()->route('admin.galleries.index')->with('flash_message', [
            'title' => '',
            'message' => 'Gallery ' . $gallery->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Gallery')) {
            abort('401', '401');
        }

        $gallery = $this->gallery->findOrFail($id);
        $gallery->delete();

        return response()->json(status()->success('Gallery successfully deleted.', compact('id')));
    }
}
