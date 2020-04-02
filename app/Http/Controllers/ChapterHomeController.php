<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ChapterHome;
use App\Http\Controllers\Controller;

class ChapterHomeController extends Controller
{
    /**
     * ChapterHome model instance.
     *
     * @var ChapterHome
     */
    private $chapter_home;

    /**
     * Create a new controller instance.
     *
     * @param ChapterHome $chapter_home
     */
    public function __construct(ChapterHome $chapter_home)
    {
        $this->chapter_home = $chapter_home;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Chapter Home')) {
            abort('401', '401');
        }

        $chapter_homes = $this->chapter_home->get();

        return view('admin.modules.chapter_home.index', compact('chapter_homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Chapter Home')) {
            abort('401', '401');
        }

        return view('admin.modules.chapter_home.create');
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
        if (!auth()->user()->hasPermissionTo('Create Chapter Home')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:chapter_homes,name,NULL,id,deleted_at,NULL',
            'slug' => 'required|unique:chapter_homes,slug,NULL,id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $chapter_home = $this->chapter_home->create(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]));

        return redirect()->route('admin.chapter_homes.index')->with('flash_message', [
            'title' => '',
            'message' => 'Chapter Home ' . $chapter_home->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Chapter Home')) {
            abort('401', '401');
        }

        $chapter_home = $this->chapter_home->findOrFail($id);

        return view('admin.modules.chapter_home.show', compact('chapter_home'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Home')) {
            abort('401', '401');
        }

        $chapter_home = $this->chapter_home->findOrFail($id);

        return view('admin.modules.chapter_home.edit', compact('chapter_home'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editHome($id) {
        if (!auth()->user()->hasPermissionTo('Update Chapter Home')) {
            abort('401', '401');
        }

        $chapter_home = $this->chapter_home->where('chapter_id',$id)->get()->first();

        //Create new entry if no entry is found
        if (!$chapter_home) {
            $chapter_home = $this->chapter_home->create(['chapter_id' => $id]);
        }

        return view('admin.modules.chapter_home.edit', compact('chapter_home'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Home')) {
            abort('401', '401');
        }

        $this->validate($request, [
            
        ]);

        $chapter_home = $this->chapter_home->findOrFail($id);

        $chapter_home->fill(array_merge($request->all()))->save();

        return redirect()->route('admin.chapters.pages',$chapter_home->chapter_id)->with('flash_message', [
            'title' => '',
            'message' => 'Chapter Home ' . $chapter_home->chapter . ' successfully updated.',
            'type' => 'success',            
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
        if (!auth()->user()->hasPermissionTo('Delete Chapter Home')) {
            abort('401', '401');
        }

        $chapter_home = $this->chapter_home->findOrFail($id);
        $chapter_home->delete();

        return response()->json(status()->success('Chapter Home successfully deleted.', compact('id')));
    }
}
