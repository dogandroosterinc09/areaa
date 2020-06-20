<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Members;
use App\Http\Controllers\Controller;

use DB;

class MembersController extends Controller
{
    /**
     * Members model instance.
     *
     * @var Members
     */
    private $members;

    /**
     * Create a new controller instance.
     *
     * @param Members $members
     */
    public function __construct(Members $members)
    {
        $this->members = $members;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        // if (!auth()->user()->hasPermissionTo('Read Members')) {
        //     abort('401', '401');
        // }

        if (auth()->user()->getRoleNames()->first() === 'Chapter Admin') {
            // die('41');
            $members = $this->members
                    ->whereHas('user', function($q) {
                        $q->where('chapter_id',auth()->user()->chapter_id);
                    })
                    ->get();
        } else {
            // die('48');
            $members = $this->members
                    ->whereHas('user', function($q) {
                        $q->where('chapter_id',0);
                    })
                    ->get();
            // $members = $this->members
            //         ->whereHas('user', function($q) {
            //             $q->where('chapter_id','<>',NULL);
            //         })
            //         ->get();
        }

        return view('admin.modules.members.index', compact('members'));
    }

    public function national()
    {
        if (!auth()->user()->hasPermissionTo('Read Members')) {
            abort('401', '401');
        }

        $members = $this->members
                    ->whereHas('user', function($q) {
                        $q->where('chapter_id',0);
                    })
                    ->get();

        return view('admin.modules.members.index', compact('members'));
    }

    public function chapter()
    {
        if (!auth()->user()->hasPermissionTo('Read Members')) {
            abort('401', '401');
        }

        $members = $this->members
                    ->whereHas('user', function($q) {
                        $q->where('chapter_id','<>',0);
                    })
                    ->get();

        return view('admin.modules.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Members')) {
            abort('401', '401');
        }

        return view('admin.modules.members.create');
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
        if (!auth()->user()->hasPermissionTo('Create Members')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:members,name,NULL,id,deleted_at,NULL',
            'slug' => 'required|unique:members,slug,NULL,id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $members = $this->members->create(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]));

        return redirect()->route('admin.members.index')->with('flash_message', [
            'title' => '',
            'message' => 'Members ' . $members->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Members')) {
            abort('401', '401');
        }

        $members = $this->members->findOrFail($id);

        return view('admin.modules.members.show', compact('members'));
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
        if (!auth()->user()->hasPermissionTo('Update Members')) {
            abort('401', '401');
        }

        $members = $this->members->findOrFail($id);

        return view('admin.modules.members.edit', compact('members'));
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
        if (!auth()->user()->hasPermissionTo('Update Members')) {
            abort('401', '401');
        }

        return $request->all();

        $this->validate($request, [
            
        ]);

        $members = $this->members->findOrFail($id);

        $members->fill(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]))->save();

        return redirect()->route('admin.members.index')->with('flash_message', [
            'title' => '',
            'message' => 'Members ' . $members->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Members')) {
            abort('401', '401');
        }

        $members = $this->members->findOrFail($id);
        $members->delete();

        return response()->json(status()->success('Members successfully deleted.', compact('id')));
    }


    public function displayAllMembers() {

        // die('229');
        $start = microtime(true);

        // $members = $this->members
        //         ->whereHas('user', function($q) {
        //             $q->where('chapter_id',0);
        //         })
        //         // ->take(1000)
        //         ->get();

        // $members = $this->members
        //         ->whereHas('user', function($q) {
        //             $q->where('chapter_id','<>',NULL);
        //         })
        //         ->get();

        // $members = DB::table('members')
        //     ->join('users', 'members.user_id', '=', 'users.id')
        //     // ->join('chapters', 'chapters.id', '=', 'users.chapter_id')
        //     // ->where('users.chapter_id', '<>',NULL)
        //     ->where('users.chapter_id', 0)
        //     ->take(1000)
        //     ->get();

        $members = DB::table('members')
            ->join('users', 'members.user_id', '=', 'users.id')
            // ->join('chapters', 'chapters.id', '=', 'users.chapter_id')
            // ->where('users.chapter_id', '<>',NULL)
            // ->where('users.chapter_id', 0)
            // ->take(100)
            ->get();

        // echo 'count: '.count($members).'<br>';
        // print_r($members);
        foreach ($members as $member) {
            if ($member->chapter_id > 0) {
                $chapter = \App\Models\Chapter::find($member->chapter_id);
                $member->chapter_name = $chapter->name;
            } else {

                $member->chapter_name = 'National';
            }
            // echo 'member: '.$member->user->first_name.'<br>';
            // echo 'member: '.$member->first_name.' > chapter: '.$member->chapter_name.'<br>';
        }
        // $time_elapsed_secs = microtime(true) - $start;

        // echo 'time_elapsed_secs: '.$time_elapsed_secs.'<br>';
        // die('236');

        return view('admin.modules.members.index-2', compact('members'));
    }

    public function displayAllAdmin() {

        $members = DB::table('users')
            // ->join('users', 'members.user_id', '=', 'users.id')
            ->join('chapters', 'chapters.id', '=', 'users.chapter_id')
            ->join('user_has_roles', 'user_has_roles.user_id', '=', 'users.id')
            ->where('user_has_roles.role_id',4)
            // ->take(1000)
            ->get();

        // print_r($members);
        // die('273');

        return view('admin.modules.user.index-3', compact('members'));
    }


}
