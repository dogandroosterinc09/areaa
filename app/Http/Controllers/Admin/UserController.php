<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

use File;


class UserController extends Controller
{
    /**
     * User model instance.
     *
     * @var User
     */
    private $user;

    /**
     * Role model instance.
     *
     * @var Role
     */
    private $role;

    /**
     * User repository instance.
     *
     * @var UserRepository
     */
    private $userRepository;

    /**
     * Create a new controller instance.
     *
     * @param User $user
     * @param UserRepository $userRepository
     * @param Role $role
     */
    public function __construct(User $user, Role $role, UserRepository $userRepository)
    {
        $this->user = $user;
        $this->role = $role;
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read User')) {
            abort('401', '401');
        }

        $all_users = $this->user->get();
        $users = [];
        if (!auth()->user()->hasRole('Super Admin')) {
            foreach ($all_users as $all_user) {
                if (!$all_user->hasRole('Super Admin')) {
                    $users[] = $all_user;
                }
            }
        } else {
            $users = $all_users;
        }
        $users = collect($users);

        return view('admin.modules.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create User')) {
            abort('401', '401');
        }

        $roles = $this->role->get();

        return view('admin.modules.user.create', compact('roles'));
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
        if (!auth()->user()->hasPermissionTo('Create User')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required|unique:users,user_name,NULL,id,deleted_at,NULL',
            'email' => 'required|unique:users,email,NULL,id,deleted_at,NULL',
            'password' => 'required|min:8|confirmed',
            // 'chapter_id' => 'unique:users,chapter_id',
            'roles' => 'required',
            'profile_image' =>  'mimes:jpg,jpeg,png'
        ], [
            // 'chapter_id.unique' => 'An admin has already been assigned for this chapter.'
        ]
        );
        
        $role = Role::find($request['roles'])->first();
        
        if ($role->name === 'Chapter Admin') {
            if (!empty($request['chapter_id'])) {
                $user = $this->user->create($request->only('first_name', 'last_name', 'user_name', 'email', 'password', 'chapter_id'));
            } else {
                return redirect()->back()->withInput()->withErrors(['chapter_id' => 'Chapter is required.']);
            }
        } else {
            $user = $this->user->create($request->only('first_name', 'last_name', 'user_name', 'email', 'password'));
        } 

        $roles = $request['roles'];
        if (isset($roles)) {
            foreach ($roles as $role) {
                $role_r = $this->role->where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r);
            }
        }

        if ($request->hasFile('profile_image')) {
            $file_upload_path = $this->userRepository->uploadFile($request->file('profile_image'));
            $user->fill(['profile_image' => $file_upload_path])->save();
        }

        // return redirect()->route('admin.users.index')->with('flash_message', [
        return redirect()->route('admin.user.index_admin')->with('flash_message', [
            'title' => '',
            'message' => 'User successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read User')) {
            abort('401', '401');
        }

        $user = $this->user->findOrFail($id);

        if (!auth()->user()->hasRole('Super Admin')) {
            if ($user->hasRole('Super Admin')) {
                abort('401', '401');
            }
        }

        return view('admin.modules.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->hasPermissionTo('Update User')) {
            abort('401', '401');
        }

        $user = $this->user->findOrFail($id);

        if (!auth()->user()->hasRole('Super Admin')) {
            if ($user->hasRole('Super Admin')) {
                abort('401', '401');
            }
        }

        $roles = $this->role->get();

        return view('admin.modules.user.edit', compact('user', 'roles'));
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
        // dd($request);
        if (!auth()->user()->hasPermissionTo('Update User')) {
            abort('401', '401');
        }

        $user = $this->user->findOrFail($id);

        if (!auth()->user()->hasRole('Super Admin')) {
            if ($user->hasRole('Super Admin')) {
                abort('401', '401');
            }
        }

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required|unique:users,user_name,' . $id . ',id,deleted_at,NULL',
            'email' => 'required|unique:users,email,' . $id . ',id,deleted_at,NULL',
            'password' => 'required_if:change_password,==,1|min:8|confirmed',
            'profile_image' =>  'mimes:jpg,jpeg,png'
        ]);

        if ($request->get('change_password') == '1') {
            $input = $request->only(['first_name', 'last_name', 'user_name', 'email', 'is_active', 'is_featured', 'password']);
        } else {
            $input = $request->only(['first_name', 'last_name', 'user_name', 'email', 'is_active', 'is_featured']);
        }

        $input['is_active'] = isset($input['is_active']) ? 1 : 0;
        $input['is_featured'] = isset($input['is_featured']) ? 1 : 0;
        $roles = $request['roles'];
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);
        } else {
            $user->roles()->detach();
        }

        if ($request->hasFile('profile_image')) {
            $file_upload_path = $this->userRepository->uploadFile($request->file('profile_image'));
            $user->fill(['profile_image' => $file_upload_path])->save();
        }

        return redirect()->route('admin.users.index')->with('flash_message', [
            'title' => '',
            'message' => 'Member successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete User')) {
            abort('401', '401');
        }

        $user = $this->user->findOrFail($id);

        if (!auth()->user()->hasRole('Super Admin')) {
            if ($user->hasRole('Super Admin')) {
                abort('401', '401');
            }
        }

        $user->delete();

        return response()->json(status()->success('User successfully deleted.', compact('id')));
    }

    /**
     * Datatables draw
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function draw(Request $request)
    {
        $columns = array(
            0 => 'full_name',
            1 => 'user_name',
            2 => 'email',
            3 => 'user_roles',
            4 => 'action',
        );

        $user_role = $request->input('columns.3.search.value');

        if (!auth()->user()->hasRole('Super Admin')) {
            if ($user_role != '') {
                $totalData = $this->user
                    ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                    ->role([$user_role])
                    ->count();
            } else {
                $totalData = $this->user
                    ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                    ->role(['Admin', 'Customer'])
                    ->count();
            }
        } else {
            if ($user_role != '') {
                $totalData = $this->user
                    ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                    ->role([$user_role])
                    ->count();
            } else {
                $totalData = $this->user
                    ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                    ->count();
            }
        }

        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            if ($limit == -1) {
                if (!auth()->user()->hasRole('Super Admin')) {
                    if ($user_role != '') {
                        $users = $this->user
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role([$user_role])
                            ->orderBy($order, $dir)
                            ->get();
                    } else {
                        $users = $this->user
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role(['Admin', 'Customer'])
                            ->orderBy($order, $dir)
                            ->get();
                    }
                } else {
                    if ($user_role != '') {
                        $users = $this->user
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role([$user_role])
                            ->orderBy($order, $dir)
                            ->get();
                    } else {
                        $users = $this->user
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->orderBy($order, $dir)
                            ->get();
                    }
                }
            } else {
                if (!auth()->user()->hasRole('Super Admin')) {
                    if ($user_role != '') {
                        $users = $this->user
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role([$user_role])
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get();
                    } else {
                        $users = $this->user
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role(['Admin', 'Customer', 'Chapter Admin'])
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get();
                    }

                } else {
                    if ($user_role != '') {
                        $users = $this->user
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role([$user_role])
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get();
                    } else {
                        $users = $this->user
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get();
                    }
                }
            }
        } else {
            $search = $request->input('search.value');

            if ($limit == -1) {
                if (!auth()->user()->hasRole('Super Admin')) {
                    if ($user_role != '') {
                        $users = $this->user
                            ->orWhere('user_name', 'LIKE', "%{$search}%")
                            ->orWhere('email', 'LIKE', "%{$search}%")
                            ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role([$user_role])
                            ->orderBy($order, $dir)
                            ->get();
                    } else {
                        $users = $this->user
                            ->orWhere('user_name', 'LIKE', "%{$search}%")
                            ->orWhere('email', 'LIKE', "%{$search}%")
                            ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role(['Admin', 'Customer'])
                            ->orderBy($order, $dir)
                            ->get();
                    }
                } else {
                    if ($user_role != '') {
                        $users = $this->user
                            ->orWhere('user_name', 'LIKE', "%{$search}%")
                            ->orWhere('email', 'LIKE', "%{$search}%")
                            ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role([$user_role])
                            ->orderBy($order, $dir)
                            ->get();
                    } else {
                        $users = $this->user
                            ->orWhere('user_name', 'LIKE', "%{$search}%")
                            ->orWhere('email', 'LIKE', "%{$search}%")
                            ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->orderBy($order, $dir)
                            ->get();
                    }
                }
            } else {
                if (!auth()->user()->hasRole('Super Admin')) {
                    if ($user_role != '') {
                        $users = $this->user
                            ->orWhere('user_name', 'LIKE', "%{$search}%")
                            ->orWhere('email', 'LIKE', "%{$search}%")
                            ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role([$user_role])
                            ->orderBy($order, $dir)
                            ->get();
                    } else {
                        $users = $this->user
                            ->orWhere('user_name', 'LIKE', "%{$search}%")
                            ->orWhere('email', 'LIKE', "%{$search}%")
                            ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role(['Admin', 'Customer'])
                            ->orderBy($order, $dir)
                            ->get();
                    }
                } else {
                    if ($user_role != '') {
                        $users = $this->user
                            ->orWhere('user_name', 'LIKE', "%{$search}%")
                            ->orWhere('email', 'LIKE', "%{$search}%")
                            ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->role([$user_role])
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get();
                    } else {
                        $users = $this->user
                            ->orWhere('user_name', 'LIKE', "%{$search}%")
                            ->orWhere('email', 'LIKE', "%{$search}%")
                            ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                            ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get();
                    }
                }
            }

            if (!auth()->user()->hasRole('Super Admin')) {
                if ($user_role != '') {
                    $totalFiltered = $this->user
                        ->orWhere('user_name', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                        ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                        ->role([$user_role])
                        ->orderBy($order, $dir)
                        ->count();
                } else {
                    $totalFiltered = $this->user
                        ->orWhere('user_name', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                        ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                        ->role(['Admin', 'Customer'])
                        ->orderBy($order, $dir)
                        ->count();
                }
            } else {
                if ($user_role != '') {
                    $totalFiltered = $this->user
                        ->orWhere('user_name', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                        ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                        ->role([$user_role])
                        ->orderBy($order, $dir)
                        ->count();
                } else {
                    $totalFiltered = $this->user
                        ->orWhere('user_name', 'LIKE', "%{$search}%")
                        ->orWhere('email', 'LIKE', "%{$search}%")
                        ->orWhere((DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`)")), 'LIKE', "%{$search}%")
                        ->select('users.*', (DB::raw("CONCAT(`users`.`first_name`, ' ', `users`.`last_name`) as full_name")))
                        ->orderBy($order, $dir)
                        ->count();
                }
            }
        }

        $data = [];
        if (!empty($users)) {
            foreach ($users as $user) {
                $view = '';
                $edit = '';
                $delete = '';
                $nestedData['id'] = $user->id;
                $nestedData['full_name'] = $user->first_name . ' ' . $user->last_name;
                $nestedData['user_name'] = $user->user_name;
                $nestedData['email'] = $user->email;
                $nestedData['user_roles'] = $user->roles()->pluck('name')->implode(', ');

                if (auth()->user()->can('Read User')) {
                    $view = '<a href="' . route('admin.users.show', $user->id) . '"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>';
                }

                if (auth()->user()->can('Update User')) {
                    $edit = '<a href="' . route('admin.users.edit', $user->id) . '"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>';
                }

                if (auth()->user()->can('Delete User')) {
                    $delete = '<a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-user-btn"
                                       data-original-title="Delete"
                                       data-user-id="' . $user->id . '"
                                       data-user-route="' . route('admin.users.destroy', $user->id) . '">
                                        <i class="fa fa-times"></i>
                                    </a>';
                }

                $nestedData['action'] = '<div class="btn-group btn-group-xs">' . $view . $edit . $delete . '</div>';
                $data[] = $nestedData;
            }
        }

        $response = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data,
            "request" => $request->all()
        );

        return json_encode($response);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editAccount(Request $request) {
        // if (!auth()->user()->hasPermissionTo('Update User')) {
        //     abort('401', '401');
        // }

        $user_id = $request->user()->id;
        $user = $this->user->findOrFail($user_id);

        // if (!auth()->user()->hasRole('Super Admin')) {
        //     if ($user->hasRole('Super Admin')) {
        //         abort('401', '401');
        //     }
        // }
        // $roles = $this->role->get();
        // return view('admin.modules.user.edit', compact('user', 'roles'));

        return view('admin.modules.account.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateAccount(Request $request)
    {
        // if (!auth()->user()->hasPermissionTo('Update User')) {
        //     abort('401', '401');
        // }
        echo $id = $request->user()->id;

        $user = $this->user->findOrFail($id);
        // dd($user);
        // if (!auth()->user()->hasRole('Super Admin')) {
        //     if ($user->hasRole('Super Admin')) {
        //         abort('401', '401');
        //     }
        // }

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required|unique:users,user_name,' . $id . ',id,deleted_at,NULL',
            'email' => 'required|unique:users,email,' . $id . ',id,deleted_at,NULL',
            'password' => 'required_if:change_password,==,1|min:8|confirmed',
        ]);

        if ($request->get('change_password') == '1') {
            $input = $request->only(['first_name', 'last_name', 'user_name', 'email', 'is_active', 'admin_notes', 'password']);
        } else {
            $input = $request->only(['first_name', 'last_name', 'user_name', 'email', 'is_active', 'admin_notes']);
        }

        $input['is_active'] = 1;
        // $input['is_active'] = isset($input['is_active']) ? 1 : 0;
        // $roles = $request['roles'];
        $user->fill($input)->save();

        // if (isset($roles)) {
        //     $user->roles()->sync($roles);
        // } else {
        //     $user->roles()->detach();
        // }
        return redirect()->route('admin.account.edit')->with('flash_message', [
            'title' => '',
            'message' => 'Account successfully updated.',
            'type' => 'success'
        ]);
    }



    public function displayAllMembers() {

        // die('229');
        // $start = microtime(true);

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
            ->select('members.id as member_id', 'members.*', 'users.*')
            // ->take(10)
            ->get();

        // echo 'count: '.count($members).'<br>';
        // print_r($members);
        // die();
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

        return view('admin.modules.user.index-2', compact('members'));
    }



    public function generateCSV($id) {

        // echo $id;
        // die('----');

        // Chapter Admin
        if ($id > 0) {
            $members = DB::table('members')
                ->join('users', 'members.user_id', '=', 'users.id')
                ->where('users.chapter_id','=',$id)
                ->join('member_addresses', 'member_addresses.user_id', '=', 'users.id')
                ->select('members.id as member_id',
                    'users.user_name',
                    'users.first_name', 
                    'users.last_name',
                    'users.email',
                    'users.phone',
                    'member_addresses.street_address1',
                    'member_addresses.street_address2',
                    'member_addresses.city',
                    'member_addresses.state',
                    'member_addresses.country',
                    'member_addresses.zipcode',
                    'member_addresses.company as company_name',
                    'member_addresses.phone as company_phone',
                    'users.chapter_id',
                    'users.is_active',
                    'members.joined_date',
                    'members.expires',
                    'users.is_featured',
                    'users.is_alist',
                    'users.alist_years',
                    'users.is_luxury',
                    'members.position',
                    'members.role',
                    'members.location',
                    'members.company',
                    'members.language_spoken',
                    'members.designations',
                    'members.area_of_specialty',
                    'members.social_media',
                    // 'members.authorize_profile_id',
                    // 'members.authorize_payment_profile_id',
                    // 'members.authorize_address_id',
                    // 'members.authorize_subscription_id',
                    // 'members.subscription_status',
                    // 'members.paypal_id',
                    'members.bio',
                    'users.admin_notes')
                ->get();


        // Webmaster (All members export)
        } else {
    
            $members = DB::table('members')
                ->join('users', 'members.user_id', '=', 'users.id')
                ->join('member_addresses', 'member_addresses.user_id', '=', 'users.id')
                ->select('members.id as member_id',
                    'users.user_name',
                    'users.first_name', 
                    'users.last_name',
                    'users.email',
                    'users.phone',
                    'member_addresses.street_address1',
                    'member_addresses.street_address2',
                    'member_addresses.city',
                    'member_addresses.state',
                    'member_addresses.country',
                    'member_addresses.zipcode',
                    'member_addresses.company as company_name',
                    'member_addresses.phone as company_phone',
                    'users.chapter_id',
                    'users.is_active',
                    'members.joined_date',
                    'members.expires',
                    'users.is_featured',
                    'users.is_alist',
                    'users.alist_years',
                    'users.is_luxury',
                    'members.position',
                    'members.role',
                    'members.location',
                    'members.company',
                    'members.language_spoken',
                    'members.designations',
                    'members.area_of_specialty',
                    'members.social_media',
                    'members.authorize_profile_id',
                    'members.authorize_payment_profile_id',
                    'members.authorize_address_id',
                    'members.authorize_subscription_id',
                    'members.subscription_status',
                    'members.paypal_id',
                    'members.bio',
                    'users.admin_notes')
                // ->take(10)
                ->get();
        }

            foreach ($members as $member) {

                if ($member->chapter_id > 0) {
                    $chapter = \App\Models\Chapter::find($member->chapter_id);
                    $member->chapter_id = $chapter->name;
                } else {
                    $member->chapter_id = 'National';
                }

                $member->is_active      = ($member->is_active == 1)? 'yes': 'no';
                $member->is_featured    = ($member->is_featured == 1)? 'yes': 'no';
                $member->is_alist       = ($member->is_alist == 1)? 'yes': 'no';
                $member->is_luxury      = ($member->is_luxury == 1)? 'yes': 'no';
            }


// return $members;
// die('xxx');

    // $member_headers = explode(',', 'member_id,first_name,last_name,user_name,email,phone,chapter_name,is_active,is_featured,is_alist,alist_years,is_luxury,bio,position,expires');
    $member_headers = explode(',', 'member_id,user_name,first_name,last_name,email,phone,street_address1,street_address2,city,state,country,zipcode,company,phone,chapter_name,is_active,joined_date,expires,is_featured,is_alist,alist_years,is_luxury,position,role,location,company,language_spoken,designations,area_of_specialty,social_media,authorize_profile_id,authorize_payment_profile_id,authorize_address_id,authorize_subscription_id,subscription_status,paypal_id,bio,admin_notes');

// echo 'ln 771<br>';
// // download_send_headers("data_export_" . date("Y-m-d") . ".csv");

    if($id > 0) { // Chapter Admin
        $filename = "member_data_export_".strtolower($chapter->name)."_". date("Y-m-d") . ".csv";

        $member_headers = explode(',', 'member_id,user_name,first_name,last_name,email,phone,street_address1,street_address2,city,state,country,zipcode,company,phone,chapter_name,is_active,joined_date,expires,is_featured,is_alist,alist_years,is_luxury,position,role,location,company,language_spoken,designations,area_of_specialty,social_media,bio,admin_notes');
    } else { // Webmaster
        $filename = "member_data_export_all_" . date("Y-m-d") . ".csv";

        $member_headers = explode(',', 'member_id,user_name,first_name,last_name,email,phone,street_address1,street_address2,city,state,country,zipcode,company,phone,chapter_name,is_active,joined_date,expires,is_featured,is_alist,alist_years,is_luxury,position,role,location,company,language_spoken,designations,area_of_specialty,social_media,authorize_profile_id,authorize_payment_profile_id,authorize_address_id,authorize_subscription_id,subscription_status,paypal_id,bio,admin_notes');
    }

    // disable caching
    $now = gmdate("D, d M Y H:i:s");
    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
    header("Last-Modified: ".$now." GMT");

    // force download  
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");

    // disposition / encoding on response body
    header("Content-Disposition: attachment;filename=".$filename."");
    header("Content-Transfer-Encoding: binary");
// echo 'ln 789<br>';

// // echo array2csv($members);
//    if (count($members) == 0) {
//      return null;
//    }


   ob_start();
   $df = fopen("php://output", 'w');
   fputcsv($df, $member_headers);
   // fputcsv($df, array_keys(reset($members)));
   foreach ($members as $row) {
      // fputcsv($df, $row);
        $arrayRow = (array) $row;
        // print_r($arrayRow);
        // echo '<br>- - - - - <br>';
      fputcsv($df, $arrayRow);
   }
   fclose($df);
   return ob_get_clean();

    die('802');

    // return redirect()->route('admin.user.index_members')->with('flash_message', [
    //     'title' => '',
    //     'message' => 'Download completed',
    //     'type' => 'success'
    // ]);

// download_send_headers("data_export_" . date("Y-m-d") . ".csv");
// echo array2csv($array);
// die();

        // echo 'count: '.count($members).'<br>';
        // print_r($members);
        // die();
        // foreach ($members as $member) {
        //     if ($member->chapter_id > 0) {
        //         $chapter = \App\Models\Chapter::find($member->chapter_id);
        //         $member->chapter_name = $chapter->name;
        //     } else {

        //         $member->chapter_name = 'National';
        //     }
        //     // echo 'member: '.$member->user->first_name.'<br>';
        //     // echo 'member: '.$member->first_name.' > chapter: '.$member->chapter_name.'<br>';
        // }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editMember(Request $request, $id)
    {
        if (!auth()->user()->hasPermissionTo('Update Members')) {
            abort('401', '401');
        }

        // echo $id;
        // die();
        // //Logged in user
        // $user_id = $request->user()->id;
        // echo $user_id;

        $user = $this->user->findOrFail($id);
        // dd($user);
        // $members = $this->members->findOrFail($id);
        // $members = $this->members->where('user_id','=',$id)->get();
        // dd($members->user());

        return view('admin.modules.user.edit-2', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateMember(Request $request, $id)
    {
        if (!auth()->user()->hasPermissionTo('Update Members')) {
            abort('401', '401');
        }

        // echo $id;
        // die();
        $user = $this->user->findOrFail($id);

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

        // if (isset($roles)) {
        //     $user->roles()->sync($roles);
        // } else {
        //     $user->roles()->detach();
        // }

        if ($request->hasFile('profile_image')) {
            $file_upload_path = $this->userRepository->uploadFile($request->file('profile_image'));
            $user->fill(['profile_image' => $file_upload_path])->save();
        }

        return redirect()->route('admin.user.index_members')->with('flash_message', [
            'title' => '',
            'message' => 'Member successfully updated.',
            'type' => 'success'
        ]);
    }


    public function displayAllAdmin() {

        $members = DB::table('users')
            // ->join('users', 'members.user_id', '=', 'users.id')
            // ->join('chapters', 'chapters.id', '=', 'users.chapter_id')
            ->join('user_has_roles', 'user_has_roles.user_id', '=', 'users.id')
            // ->where('user_has_roles.role_id',4) // 1, 2, 4
            ->whereIn('user_has_roles.role_id',array('1','2','4')) // 1, 2, 4
            // ->take(1000)
            ->get();
        foreach ($members as $member) {
            if ($member->chapter_id == NULL) {
                $member->name = '- - -';
            } elseif ($member->chapter_id == 0) {
                $member->name = 'National';
            } else {
                $chapter = \App\Models\Chapter::find($member->chapter_id);
                $member->name = $chapter->name;
            }

            if ($member->role_id == 1) {
                $member->role_name = 'Super Admin';
            } elseif ($member->role_id == 2) {
                $member->role_name = 'Webmaster';
            } elseif ($member->role_id == 4) {
                $member->role_name = 'Chapter Admin';
            }
        }
        // print_r($members);
        // die('273');

        return view('admin.modules.user.index-1', compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editAdmin(Request $request, $id)
    {
        if (!auth()->user()->hasPermissionTo('Update Members')) {
            abort('401', '401');
        }

        // $user = $this->user->findOrFail($id);
        $user = $this->user::where('users.id',$id)
                ->join('user_has_roles', 'user_has_roles.user_id','users.id')
                ->first();
        $roles = $this->role->get();
        // dd($user);

        return view('admin.modules.user.edit-1', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateAdmin(Request $request, $id)
    {
        if (!auth()->user()->hasPermissionTo('Update Members')) {
            abort('401', '401');
        }

        echo $id;
        // die();
        $user = $this->user->findOrFail($id);

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required|unique:users,user_name,' . $id . ',id,deleted_at,NULL',
            'email' => 'required|unique:users,email,' . $id . ',id,deleted_at,NULL',
            'password' => 'required_if:change_password,==,1|min:8|confirmed',
            'profile_image' =>  'mimes:jpg,jpeg,png'
        ]);

        if ($request->get('change_password') == '1') {
            $input = $request->only(['first_name', 'middle_name', 'last_name', 'user_name', 'email', 'is_active', 'is_featured', 'password']);
        } else {
            $input = $request->only(['first_name', 'middle_name', 'last_name', 'user_name', 'email', 'is_active', 'is_featured']);
        }

        $input['is_active'] = isset($input['is_active']) ? 1 : 0;
        $input['is_featured'] = isset($input['is_featured']) ? 1 : 0;
        // $roles = $request['roles'];
        $user->fill($input)->save();

        // if (isset($roles)) {
        //     $user->roles()->sync($roles);
        // } else {
        //     $user->roles()->detach();
        // }

        if ($request->hasFile('profile_image')) {
            $file_upload_path = $this->userRepository->uploadFile($request->file('profile_image'));
            $user->fill(['profile_image' => $file_upload_path])->save();
        }

        return redirect()->route('admin.user.index_admin')->with('flash_message', [
            'title' => '',
            'message' => 'Member successfully updated.',
            'type' => 'success'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createAdmin()
    {
        if (!auth()->user()->hasPermissionTo('Create User')) {
            abort('401', '401');
        }

        $roles = $this->role->get();

        return view('admin.modules.user.create-1', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeAdmin(Request $request)
    {
        if (!auth()->user()->hasPermissionTo('Create User')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required|unique:users,user_name,NULL,id,deleted_at,NULL',
            'email' => 'required|unique:users,email,NULL,id,deleted_at,NULL',
            'password' => 'required|min:8|confirmed',
            // 'chapter_id' => 'unique:users,chapter_id',
            'roles' => 'required',
            'profile_image' =>  'mimes:jpg,jpeg,png'
        ], [
            // 'chapter_id.unique' => 'An admin has already been assigned for this chapter.'
        ]
        );
        
        $role = Role::find($request['roles'])->first();
        
        if ($role->name === 'Chapter Admin') {
            if (!empty($request['chapter_id'])) {
                $user = $this->user->create($request->only('first_name', 'last_name', 'user_name', 'email', 'password', 'chapter_id'));
            } else {
                return redirect()->back()->withInput()->withErrors(['chapter_id' => 'Chapter is required.']);
            }
        } else {
            $user = $this->user->create($request->only('first_name', 'last_name', 'user_name', 'email', 'password'));
        } 

        $roles = $request['roles'];
        if (isset($roles)) {
            foreach ($roles as $role) {
                $role_r = $this->role->where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r);
            }
        }
        // $user->roles()->sync($roles);


        if ($request->hasFile('profile_image')) {
            $file_upload_path = $this->userRepository->uploadFile($request->file('profile_image'));
            $user->fill(['profile_image' => $file_upload_path])->save();
        }

        return redirect()->route('admin.user.index_admin')->with('flash_message', [
            'title' => '',
            'message' => 'Admin successfully added.',
            'type' => 'success'
        ]);
    }


}
