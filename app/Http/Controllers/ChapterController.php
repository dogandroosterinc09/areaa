<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\ChapterHome;
use App\Models\ChapterPageAboutUs;
use App\Models\ChapterPageContactUs;
use App\Models\ChapterPageEvent;
use App\Models\ChapterPageLeadership;
use App\Models\Members;
use App\Http\Controllers\Controller;

use File, DB;

class ChapterController extends Controller
{
    /**
     * Chapter model instance.
     *
     * @var Chapter
     */
    private $chapter;
    private $chapter_home;
    private $chapter_page_about_us;
    private $chapter_page_contact_us;
    private $chapter_page_event;
    private $chapter_page_leadership;
    private $members;

    /**
     * Create a new controller instance.
     *
     * @param Chapter $chapter
     */
    public function __construct(Chapter $chapter,
                                ChapterHome $chapter_home,
                                ChapterPageAboutUs $chapter_page_about_us,
                                ChapterPageContactus $chapter_page_contact_us,
                                ChapterPageEvent $chapter_page_event,
                                ChapterPageLeadership $chapter_page_leadership,
                                Members $members)
    {
        $this->chapter = $chapter;
        $this->chapter_home = $chapter_home;
        $this->chapter_page_about_us = $chapter_page_about_us;
        $this->chapter_page_contact_us = $chapter_page_contact_us;
        $this->chapter_page_event = $chapter_page_event;
        $this->chapter_page_leadership = $chapter_page_leadership;
        $this->memberes = $members;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Chapter')) {
            abort('401', '401');
        }

        $chapters = $this->chapter->get();



        return view('admin.modules.chapter.index', compact('chapters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Chapter')) {
            abort('401', '401');
        }

        return view('admin.modules.chapter.create');
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
        if (!auth()->user()->hasPermissionTo('Create Chapter')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $chapter = $this->chapter->create($request->all());
        $chapter_home = $this->chapter_home->create(['chapter_id' => $chapter->id]);
        $chapter_page_about_us = $this->chapter_page_about_us->create(['chapter_id' => $chapter->id]);
        $chapter_page_contact_us = $this->chapter_page_contact_us->create(['chapter_id' => $chapter->id]);
        $chapter_page_event = $this->chapter_page_event->create(['chapter_id' => $chapter->id]);
        $chapter_page_leadership = $this->chapter_page_leadership->create(['chapter_id' => $chapter->id]);

        if ($request->hasFile('thumbnail')) {
            // $chapter->attach($request->file('thumbnail'), 'thumbnail');
            $chapter->attach($request->file('thumbnail'));
        }

        return redirect()->route('admin.chapters.index')->with('flash_message', [
            'title' => '',
            'message' => 'Chapter ' . $chapter->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Chapter')) {
            abort('401', '401');
        }

        $chapter = $this->chapter->findOrFail($id);

        return view('admin.modules.chapter.show', compact('chapter'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter')) {
            abort('401', '401');
        }

        $chapter = $this->chapter->findOrFail($id);

        return view('admin.modules.chapter.edit', compact('chapter'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:chapters,name,' . $id . ',id,deleted_at,NULL',
            'slug' => 'required|unique:chapters,slug,' . $id . ',id,deleted_at,NULL',
            // 'content' => 'required',
        ]);

        $chapter = $this->chapter->findOrFail($id);

        $chapter->fill(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            // 'slug' => str_slug($request->input('name'))
        ]))->save();

        if ($request->hasFile('thumbnail')) {
            $file_upload_path = $this->upload($request->thumbnail);
            $chapter->fill(['thumbnail'=>$file_upload_path])->save();
        }

        return redirect()->route('admin.chapters.index')->with('flash_message', [
            'title' => '',
            'message' => 'Chapter ' . $chapter->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Chapter')) {
            abort('401', '401');
        }

        $chapter = $this->chapter->findOrFail($id);
        $chapter->delete();

        return response()->json(status()->success('Chapter successfully deleted.', compact('id')));
    }

    public function pages($id) {
        if (!auth()->user()->hasPermissionTo('Read Chapter Page')) {
            abort('401', '401');
        }

        $chapter = $this->chapter->findOrFail($id);

        return view('admin.modules.chapter.pages', compact('chapter'));
    }

    public function members($id) {

        $members = DB::table('members')
            ->join('users', 'members.user_id', '=', 'users.id')
            ->where('users.chapter_id', $id)
            ->select('members.id as member_id', 'members.*', 'users.*')
            ->get();

        // $chapter = \App\Models\Chapter::find($id);
        // $members = \App\Models\Members::
        //             whereHas('user', function($q) use($id) {
        //                 $q->where('chapter_id',$id);
        //             })
        //             ->get();
        
        $chapter = $this->chapter->findOrFail($id);
        $members->chaptername = $chapter->name;
        foreach ($members as $member) {
            $member->chapter_name = $chapter->name;
        }

        $is_chapter = true;

        return view('admin.modules.members.index', compact('members','is_chapter','chapter'));
    }

    public function upload($file) {
        $extension = $file->getClientOriginalExtension();
        $file_name = substr((pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)), 0, 30) . '.' . $extension;
        $file_name = preg_replace("/[^a-z0-9\_\-\.]/i", '', $file_name);
        $file_path = '/uploads';
        $directory = public_path() . $file_path;

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777);
        }

        $file->move($directory, $file_name);
        $file_upload_path = 'public' . $file_path . '/' . $file_name;
        return $file_upload_path;
    }
}
