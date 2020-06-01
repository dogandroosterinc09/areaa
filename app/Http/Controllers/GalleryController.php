<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use File;

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
            'title' => 'required',
            'description' => 'required'
        ]);

        $photos = $this->moveImage($request);

        $gallery = $this->gallery->create(array_merge($request->all(), [
            'photos' => implode(',',$photos),
            'user_id' => auth()->user()->id
        ]));

        return redirect()->route('admin.galleries.index')->with('flash_message', [
            'title' => '',
            'message' => 'Gallery ' . $gallery->title . ' successfully added.',
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
            'title' => 'required',
            'description' => 'required'
        ]);

        $gallery = $this->gallery->findOrFail($id);

        $photos = $this->moveImage($request);

        if (!empty($gallery->photos)) $photos = array_merge(explode(',',$gallery->photos),$photos);

        $gallery->fill(array_merge($request->all(), [
            'photos' => implode(',',$photos),
            'user_id' => auth()->user()->id
        ]))->save();

        return redirect()->route('admin.galleries.index')->with('flash_message', [
            'title' => '',
            'message' => 'Gallery ' . $gallery->title . ' successfully updated.',
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

    public function upload_images(Request $request) {        
        // $path = storage_path('tmp/gallery');
        $path = public_path('uploads/tmp/gallery');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    private function upload($file) {
        // $extension = $file->getClientOriginalExtension();
        // $file_name = substr((pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)), 0, 30) . '.' . $extension;
        $file_name = public_path('uploads/tmp/gallery/') . $file;
        // return $file_name;
        // $file_name = preg_replace("/[^a-z0-9\_\-\.]/i", '', $file_name);
        $file_path = '/uploads/gallery' . $file;
        $directory = public_path() . $file_path;

        // return $directory;

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777);
        }        

        // $file->move($directory, $file_name);
        $file_upload_path = 'public' . $file_path . '/' . $file_name;
        return $file_upload_path;
    }

    private function moveImage(Request $request) {
        $photos = [];

        foreach ($request->input('document', []) as $file) {
            $old_path = public_path('uploads/tmp/gallery/') . $file;
            $file_path = '/uploads/gallery/' . $file;
            $new_path = public_path() . $file_path;
            $move = File::move($old_path, $new_path);

            $file_upload_path = 'public' . $file_path;

            if ($move) {
                array_push($photos, $file_upload_path);
            }
        }

        return $photos;
    }
}
