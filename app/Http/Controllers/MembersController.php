<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Members;
use App\Models\MemberAddress;
use App\Models\User;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

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
     * MemberAddress model instance.
     *
     * @var MemberAddress
     */
    private $memberAddress;

    /**
     * User repository instance.
     *
     * @var UserRepository
     */
    private $userRepository;

    /**
     * User model instance.
     *
     * @var User
     */
    private $user;

    /**
     * Create a new controller instance.
     *
     * @param Members $members
     */
    public function __construct(Members $members, MemberAddress $memberAddress, User $user, UserRepository $userRepository)
    {
        $this->members = $members;
        $this->memberAddress = $memberAddress;
        $this->user = $user;
        $this->userRepository = $userRepository;
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

            // Chapter Members
            // $members = $this->members
            //         ->whereHas('user', function($q) {
            //             $q->where('chapter_id',auth()->user()->chapter_id);
            //         })
            //         ->get();

            $members = DB::table('members')
                ->join('users', 'members.user_id', '=', 'users.id')
                ->where('users.chapter_id', auth()->user()->chapter_id)
                ->select('members.id as member_id', 'members.*', 'users.*')
                ->get();

            $chapter = \App\Models\Chapter::find(auth()->user()->chapter_id);
            $members->chaptername = $chapter->name;
            foreach ($members as $member) {
                $member->chapter_name = $chapter->name;
            }

        } else { 

            // National Members
            $members = DB::table('members')
                ->join('users', 'members.user_id', '=', 'users.id')
                ->where('users.chapter_id', 0)
                ->select('members.id as member_id', 'members.*', 'users.*')
                ->get();

            // $members = $this->members
            //         ->whereHas('user', function($q) {
            //             $q->where('chapter_id',0);
            //         })
            //         ->get();
            foreach ($members as $member) {
                $member->chapter_name = 'National';
            }

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

        // $members = $this->members->findOrFail($id);
        $user = $this->user->findOrFail($id);

        // return view('admin.modules.members.edit', compact('members'));
        return view('admin.modules.members.edit', compact('user'));
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

        // return $request->all();
        $user = $this->user->findOrFail($id);
        $member = $this->members->where('user_id',$id)->first();
        $billing = $this->memberAddress->where('user_id',$id)->first();
        // return $member;

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required|unique:users,user_name,' . $id . ',id,deleted_at,NULL',
            'email' => 'required|unique:users,email,' . $id . ',id,deleted_at,NULL',
            'password' => 'required_if:change_password,==,1|min:8|confirmed',
            'profile_image' =>  'mimes:jpg,jpeg,png'
        ]);

        if ($request->get('change_password') == '1') {
            $input = $request->only(['first_name', 'middle_name', 'last_name', 'user_name', 'email', 'is_active', 'is_featured', 'is_alist','alist_years', 'is_luxury', 'password']);
        } else {
            $input = $request->only(['first_name', 'middle_name', 'last_name', 'user_name', 'email', 'is_active', 'is_featured', 'is_alist','alist_years', 'is_luxury']);
        }

        $input['is_active'] = isset($input['is_active']) ? 1 : 0;
        $input['is_featured'] = isset($input['is_featured']) ? 1 : 0;
        $input['is_alist'] = isset($input['is_alist']) ? 1 : 0;
        $input['is_luxury'] = isset($input['is_luxury']) ? 1 : 0;
        // $roles = $request['roles'];
        $user->fill($input)->save();

        if ($request->hasFile('profile_image')) {
            $file_upload_path = $this->userRepository->uploadFile($request->file('profile_image'));
            $user->fill(['profile_image' => $file_upload_path])->save();
        }

        $billing_data = $request->only(['street_address1', 'street_address2', 'city', 'state', 'country', 'zipcode', 'company', 'phone']);
        $billing->fill($billing_data)->save();


        $member_input = $request->only(['bio', 'position', 'location', 'language_spoken', 'joined_date', 'expires']);
        if (isset($request->joined_date)) {
            $member_input['joined_date'] = date('m/d/Y', strtotime($request->joined_date));
        }
        if (isset($request->change_expiry)) {
            $member_input['expires'] = date('m/d/Y', strtotime($request->expires));
        } else {
            $member_input['expires'] = 'Never';
        }
        $member->fill($member_input)->save();

        return redirect()->route('admin.members.index')->with('flash_message', [
            'title' => '',
            'message' => 'Member successfully updated.',
            'type' => 'success'
        ]);


        // $this->validate($request, [
            
        // ]);

        // $members = $this->members->findOrFail($id);

        // $members->fill(array_merge($request->all(), [
        //     'is_active' => $request->has('is_active') ? 1 : 0,
        //     'slug' => str_slug($request->input('name'))
        // ]))->save();

        // return redirect()->route('admin.members.index')->with('flash_message', [
        //     'title' => '',
        //     'message' => 'Members ' . $members->name . ' successfully updated.',
        //     'type' => 'success'
        // ]);
    }



    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param int $id
    //  *
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    //  */
    // public function edit2($id)
    // {
    //     if (!auth()->user()->hasPermissionTo('Update Members')) {
    //         abort('401', '401');
    //     }
    //     echo $id;

    //     $members = $this->members->findOrFail($id);
    //     // $members = $this->members->where('user_id','=',$id)->get();
    //     // dd($members->user());

    //     return view('admin.modules.members.edit-2', compact('members'));
    // }

    // *
    //   * Update the specified resource in storage.
    //   *
    //   * @param \Illuminate\Http\Request $request
    //   * @param int $id
    //   * @return \Illuminate\Http\RedirectResponse
    //   * @throws \Illuminate\Validation\ValidationException
      
    // public function update2(Request $request, $id)
    // {
    //     if (!auth()->user()->hasPermissionTo('Update Members')) {
    //         abort('401', '401');
    //     }

    //     return $request->all();

    //     $this->validate($request, [
            
    //     ]);

    //     $members = $this->members->findOrFail($id);
    //     dd($members);

    //     // $members->fill(array_merge($request->all(), [
    //     //     'is_active' => $request->has('is_active') ? 1 : 0,
    //     //     'slug' => str_slug($request->input('name'))
    //     // ]))->save();

    //     return redirect()->route('admin.members.index-2')->with('flash_message', [
    //         'title' => '',
    //         'message' => 'Members ' . $members->name . ' successfully updated.',
    //         'type' => 'success'
    //     ]);
    // }

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


    // public function displayAllMembers() {

    //     // die('229');
    //     // $start = microtime(true);

    //     // $members = $this->members
    //     //         ->whereHas('user', function($q) {
    //     //             $q->where('chapter_id',0);
    //     //         })
    //     //         // ->take(1000)
    //     //         ->get();

    //     // $members = $this->members
    //     //         ->whereHas('user', function($q) {
    //     //             $q->where('chapter_id','<>',NULL);
    //     //         })
    //     //         ->get();

    //     // $members = DB::table('members')
    //     //     ->join('users', 'members.user_id', '=', 'users.id')
    //     //     // ->join('chapters', 'chapters.id', '=', 'users.chapter_id')
    //     //     // ->where('users.chapter_id', '<>',NULL)
    //     //     ->where('users.chapter_id', 0)
    //     //     ->take(1000)
    //     //     ->get();

    //     $members = DB::table('members')
    //         ->join('users', 'members.user_id', '=', 'users.id')
    //         // ->join('chapters', 'chapters.id', '=', 'users.chapter_id')
    //         // ->where('users.chapter_id', '<>',NULL)
    //         // ->where('users.chapter_id', 0)
    //         ->select('members.id as member_id', 'members.*', 'users.*')
    //         ->take(100)
    //         ->get();

    //     // echo 'count: '.count($members).'<br>';
    //     // print_r($members);
    //     // die();
    //     foreach ($members as $member) {
    //         if ($member->chapter_id > 0) {
    //             $chapter = \App\Models\Chapter::find($member->chapter_id);
    //             $member->chapter_name = $chapter->name;
    //         } else {

    //             $member->chapter_name = 'National';
    //         }
    //         // echo 'member: '.$member->user->first_name.'<br>';
    //         // echo 'member: '.$member->first_name.' > chapter: '.$member->chapter_name.'<br>';
    //     }
    //     // $time_elapsed_secs = microtime(true) - $start;

    //     // echo 'time_elapsed_secs: '.$time_elapsed_secs.'<br>';
    //     // die('236');

    //     return view('admin.modules.members.index-2', compact('members'));
    // }

    // public function displayAllAdmin() {

    //     $members = DB::table('users')
    //         // ->join('users', 'members.user_id', '=', 'users.id')
    //         ->join('chapters', 'chapters.id', '=', 'users.chapter_id')
    //         ->join('user_has_roles', 'user_has_roles.user_id', '=', 'users.id')
    //         ->where('user_has_roles.role_id',4)
    //         // ->take(1000)
    //         ->get();

    //     // print_r($members);
    //     // die('273');

    //     return view('admin.modules.user.index-3', compact('members'));
    // }


}
