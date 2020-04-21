<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ChapterLogo;
use App\Http\Controllers\Controller;
use File;

class ChapterLogoController extends Controller
{
    /**
     * ChapterLogo model instance.
     *
     * @var ChapterLogo
     */
    private $chapter_logo;

    /**
     * Create a new controller instance.
     *
     * @param ChapterLogo $chapter_logo
     */
    public function __construct(ChapterLogo $chapter_logo)
    {
        $this->chapter_logo = $chapter_logo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Chapter Logo')) {
            abort('401', '401');
        }

        $chapter_logos = $this->chapter_logo->get();

        return view('admin.modules.chapter_logo.index', compact('chapter_logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id)
    {
        if (!auth()->user()->hasPermissionTo('Create Chapter Logo')) {
            abort('401', '401');
        }

        return view('admin.modules.chapter_logo.create');
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
        if (!auth()->user()->hasPermissionTo('Create Chapter Logo')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'chapter_id' => 'required',
            'image' => 'required'
        ],[
            'chapter_id.required' => 'Chapter is required.'
        ]);

        $chapter_logo = $this->chapter_logo->where('chapter_id', $request->chapter_id)->get()->first() ? $this->chapter_logo->where('chapter_id', $request->chapter_id)->get()->first() : new $this->chapter_logo;

        $chapter_logo->fill($request->all())->save();        

        if ($request->hasFile('image')) {
            $file_upload_path = $this->upload($request->image);
            $chapter_logo->fill(['image'=>$file_upload_path])->save();
        }

        return redirect()->route('admin.chapters.index')->with('flash_message', [
            'title' => '',
            'message' => 'Chapter Logo ' . $chapter_logo->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Delete Chapter Logo')) {
            abort('401', '401');
        }

        $chapter_logo = $this->chapter_logo->findOrFail($id);
        $chapter_logo->delete();

        return response()->json(status()->success('Chapter Logo successfully deleted.', compact('id')));
    }

    /*
    */
    public function uploadLogo($id) {
        if (!auth()->user()->hasPermissionTo('Create Chapter Logo')) {
            abort('401', '401');
        }

        $chapter_logo = $this->chapter_logo->where('chapter_id', $id)->get()->last();

        return view('admin.modules.chapter_logo.create', compact('chapter_logo','id'));
    }

    /*
    */
    public function upload($file) {
        $extension = $file->getClientOriginalExtension();
        $file_name = substr((pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)), 0, 30) . '.' . $extension;
        $file_name = preg_replace("/[^a-z0-9\_\-\.]/i", '', $file_name);
        $file_path = '/uploads/logos';
        $directory = public_path() . $file_path;

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777);
        }

        $file->move($directory, $file_name);
        $file_upload_path = 'public' . $file_path . '/' . $file_name;
        return $file_upload_path;
    }
}
