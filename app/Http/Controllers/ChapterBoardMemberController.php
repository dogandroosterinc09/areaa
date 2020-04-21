<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ChapterBoardMember;
use App\Http\Controllers\Controller;

class ChapterBoardMemberController extends Controller
{
    /**
     * ChapterBoardMember model instance.
     *
     * @var ChapterBoardMember
     */
    private $chapter_board_member;

    /**
     * Create a new controller instance.
     *
     * @param ChapterBoardMember $chapter_board_member
     */
    public function __construct(ChapterBoardMember $chapter_board_member)
    {
        $this->chapter_board_member = $chapter_board_member;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Chapter Board Member')) {
            abort('401', '401');
        }

        if (auth()->user()->roles->first()->name === 'Chapter Admin') {
            $chapter_board_members = $this->chapter_board_member->where('chapter_id',auth()->user()->chapter_id)->get();
        } else {
            $chapter_board_members = $this->chapter_board_member->get();
        }

        return view('admin.modules.chapter_board_member.index', compact('chapter_board_members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Chapter Board Member')) {
            abort('401', '401');
        }

        return view('admin.modules.chapter_board_member.create');
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
        if (!auth()->user()->hasPermissionTo('Create Chapter Board Member')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            // 'type' => 'required',
            'chapter_id' => 'required'
        ],[
            'chapter_id.required' => 'The chapter field is required.'
        ]);

        $chapter_board_member = $this->chapter_board_member->create(array_merge($request->all(), [
            'order' => $chapter_board_member->order ?? ($this->chapter_board_member->max('id') + 1),
            'slug' => str_slug($request->input('first_name').' '.$request->input('last_name')),
            'is_active' => $request->has('is_active')
        ]));

        if ($request->hasFile('avatar')) {
            $chapter_board_member->attach($request->file('avatar'));
        }

        return redirect()->route('admin.chapter_board_members.index')->with('flash_message', [
            'title' => '',
            'message' => 'Chapter Board Member ' . $chapter_board_member->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Chapter Board Member')) {
            abort('401', '401');
        }

        $chapter_board_member = $this->chapter_board_member->findOrFail($id);

        return view('admin.modules.chapter_board_member.show', compact('chapter_board_member'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Board Member')) {
            abort('401', '401');
        }

        $chapter_board_member = $this->chapter_board_member->findOrFail($id);

        return view('admin.modules.chapter_board_member.edit', compact('chapter_board_member'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Board Member')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'chapter_id' => 'required'
        ],[
            'chapter_id.required' => 'The chapter field is required.'
        ]);
        
        $chapter_board_member = $this->chapter_board_member->findOrFail($id);

        $chapter_board_member->fill(array_merge($request->all(), [
            'order' => $chapter_board_member->order ?? ($this->chapter_board_member->max('id') + 1),
            'slug' => str_slug($request->input('first_name').' '.$request->input('last_name')),
            'is_active' => $request->has('is_active')
        ]))->save();

        if ($request->hasFile('avatar')) {
            $chapter_board_member->attach($request->file('avatar'));
        }

        return redirect()->route('admin.chapter_board_members.index')->with('flash_message', [
            'title' => '',
            'message' => 'Chapter Board Member ' . $chapter_board_member->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Chapter Board Member')) {
            abort('401', '401');
        }

        $chapter_board_member = $this->chapter_board_member->findOrFail($id);
        $chapter_board_member->delete();

        return response()->json(status()->success('Chapter Board Member successfully deleted.', compact('id')));
    }
}
