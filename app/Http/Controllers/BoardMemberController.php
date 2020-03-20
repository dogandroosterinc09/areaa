<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\BoardMember;
use App\Http\Controllers\Controller;

class BoardMemberController extends Controller
{
    /**
     * BoardMember model instance.
     *
     * @var BoardMember
     */
    private $board_member;

    /**
     * Create a new controller instance.
     *
     * @param BoardMember $board_member
     */
    public function __construct(BoardMember $board_member)
    {
        $this->board_member = $board_member;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Board Member')) {
            abort('401', '401');
        }

        $board_members = $this->board_member->orderBy('order')->get();

        return view('admin.modules.board_member.index', compact('board_members'));
    }

    /**
     * Display a listing of the resource that are executives.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function executives()
    {
        if (!auth()->user()->hasPermissionTo('Read Board Member')) {
            abort('401', '401');
        }

        $board_members = $this->board_member->executives()->orderBy('order')->get();
        $title = 'Executive';

        return view('admin.modules.board_member.index', compact('board_members', 'title'));
    }

    /**
     * Display a listing of the resource that are delegates.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delegates()
    {
        if (!auth()->user()->hasPermissionTo('Read Board Member')) {
            abort('401', '401');
        }

        $board_members = $this->board_member->delegates()->orderBy('order')->get();
        $title = 'Delegate';

        return view('admin.modules.board_member.index', compact('board_members', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Board Member')) {
            abort('401', '401');
        }

        return view('admin.modules.board_member.create');
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
        if (!auth()->user()->hasPermissionTo('Create Board Member')) {
            abort('401', '401');
        }
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'type' => 'required'
        ]);

        $board_member = $this->board_member->create(array_merge($request->all(), [
            'order' => $this->board_member->max('id') + 1,
            'slug' => str_slug($request->input('first_name').' '.$request->input('last_name')),
            'is_active' => $request->has('is_active')
        ]));

        if ($request->hasFile('avatar')) {
            $board_member->attach($request->file('avatar'));
        }

        $route = $board_member->isExecutive ? 'admin.board_members.executives' : 'admin.board_members.delegates';

        return redirect()->route($route)->with('flash_message', [
            'title' => '',
            'message' => 'Board Member ' . $board_member->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Board Member')) {
            abort('401', '401');
        }

        $board_member = $this->board_member->findOrFail($id);

        return view('admin.modules.board_member.show', compact('board_member'));
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
        if (!auth()->user()->hasPermissionTo('Update Board Member')) {
            abort('401', '401');
        }

        $board_member = $this->board_member->findOrFail($id);

        return view('admin.modules.board_member.edit', compact('board_member'));
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
        if (!auth()->user()->hasPermissionTo('Update Board Member')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'type' => 'required'
        ]);

        $board_member = $this->board_member->findOrFail($id);

        $board_member->fill(array_merge($request->all(), [
            'order' => $board_member->order ?? ($this->board_member->max('id') + 1),
            'slug' => str_slug($request->input('first_name').' '.$request->input('last_name')),
            'is_active' => $request->has('is_active')
        ]))->save();

        if ($request->hasFile('avatar')) {
            $board_member->attach($request->file('avatar'));
        }

        $route = $board_member->isExecutive ? 'admin.board_members.executives' : 'admin.board_members.delegates';

        return redirect()->route($route)->with('flash_message', [
            'title' => '',
            'message' => 'Board Member ' . $board_member->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Board Member')) {
            abort('401', '401');
        }

        $board_member = $this->board_member->findOrFail($id);
        $board_member->delete();

        return response()->json(status()->success('Board Member successfully deleted.', compact('id')));
    }

    public function position(Request $request)
    {
        foreach ($request->input('order') as $item) {
            $this->board_member->whereId($item['id'])->update([
                'order' => $item['position']
            ]);
        }

        return response()->json(status()->success('Position updated'));
    }
}
