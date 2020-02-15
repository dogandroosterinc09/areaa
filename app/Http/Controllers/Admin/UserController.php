<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;


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
        ]);

        $user = $this->user->create($request->only('first_name', 'last_name', 'user_name', 'email', 'password'));

        $roles = $request['roles'];
        if (isset($roles)) {
            foreach ($roles as $role) {
                $role_r = $this->role->where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r);
            }
        }

        return redirect()->route('admin.users.index')->with('flash_message', [
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
        ]);

        if ($request->get('change_password') == '1') {
            $input = $request->only(['first_name', 'last_name', 'user_name', 'email', 'is_active', 'password']);
        } else {
            $input = $request->only(['first_name', 'last_name', 'user_name', 'email', 'is_active']);
        }

        $input['is_active'] = isset($input['is_active']) ? 1 : 0;
        $roles = $request['roles'];
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);
        } else {
            $user->roles()->detach();
        }
        return redirect()->route('admin.users.index')->with('flash_message', [
            'title' => '',
            'message' => 'User successfully updated.',
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
                            ->role(['Admin', 'Customer'])
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
}
