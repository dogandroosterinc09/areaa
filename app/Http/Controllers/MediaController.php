<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    /**
     * Media model instance.
     *
     * @var Media
     */
    private $media;

    /**
     * Create a new controller instance.
     *
     * @param Media $media
     */
    public function __construct(Media $media)
    {
        $this->media = $media;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Media')) {
            abort('401', '401');
        }

        $media = $this->media->get();

        return view('admin.modules.media.index', compact('media'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Media')) {
            abort('401', '401');
        }

        return view('admin.modules.media.create');
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
        if (!auth()->user()->hasPermissionTo('Create Media')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:media,name,NULL,id,deleted_at,NULL',
            'slug' => 'required|unique:media,slug,NULL,id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $media = $this->media->create(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]));

        return redirect()->route('admin.media.index')->with('flash_message', [
            'title' => '',
            'message' => 'Media ' . $media->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Media')) {
            abort('401', '401');
        }

        $media = $this->media->findOrFail($id);

        return view('admin.modules.media.show', compact('media'));
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
        if (!auth()->user()->hasPermissionTo('Update Media')) {
            abort('401', '401');
        }

        $media = $this->media->findOrFail($id);

        return view('admin.modules.media.edit', compact('media'));
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
        if (!auth()->user()->hasPermissionTo('Update Media')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:media,name,' . $id . ',id,deleted_at,NULL',
            'slug' => 'required|unique:media,slug,' . $id . ',id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $media = $this->media->findOrFail($id);

        $media->fill(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]))->save();

        return redirect()->route('admin.media.index')->with('flash_message', [
            'title' => '',
            'message' => 'Media ' . $media->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Media')) {
            abort('401', '401');
        }

        $media = $this->media->findOrFail($id);
        $media->delete();

        return response()->json(status()->success('Media successfully deleted.', compact('id')));
    }
}
