<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\Repositories\PermissionRepository;
use App\Repositories\PermissionGroupRepository;


class PermissionController extends Controller
{
    /**
     * Role model instance.
     *
     * @var Role
     */
    private $role;

    /**
     * Permission model instance.
     *
     * @var Permission
     */
    private $permission;

    /**
     * Permission repository instance.
     *
     * @var PermissionRepository
     */
    private $permissionRepository;

    /**
     * PermissionGroup repository instance.
     *
     * @var PermissionGroupRepository
     */
    private $permissionGroupRepository;


    /**
     * Create a new controller instance.
     *
     * @param Role $role
     * @param Permission $permission
     * @param PermissionRepository $permissionRepository
     * @param PermissionGroupRepository $permissionGroupRepository
     */
    public function __construct(Role $role,
                                Permission $permission,
                                PermissionRepository $permissionRepository,
                                PermissionGroupRepository $permissionGroupRepository
    )
    {
        $this->role = $role;
        $this->permission = $permission;
        $this->permissionRepository = $permissionRepository;
        $this->permissionGroupRepository = $permissionGroupRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Permission')) {
            abort('401', '401');
        }

        $permissions = $this->permissionRepository->getAllWithPermissionGroup();

        return view('admin.modules.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Permission')) {
            abort('401', '401');
        }

        $roles = $this->role->get();
        $permission_groups = $this->permissionGroupRepository->getAll();

        return view('admin.modules.permission.create', compact('roles', 'permission_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (!auth()->user()->hasPermissionTo('Create Permission')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:permissions|max:75',
            'permission_group_id' => 'required',
        ]);

        $permission = $this->permission->create($request->only('name', 'permission_group_id'));
//        $roles = $request['roles'];
//
//        if (!empty($request['roles'])) {
//            foreach ($roles as $role) {
//                $r = $this->role_model->where('id', '=', $role)->firstOrFail();
//                $r->givePermissionTo($permission);
//            }
//        }

        return redirect()->route('admin.permissions.index')->with('flash_message', [
            'title' => '',
            'message' => 'Permission ' . $permission->name . ' successfully added.',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function show($id)
    {
        if (!auth()->user()->hasPermissionTo('Read Permission')) {
            abort('401', '401');
        }

        return redirect('admin/permissions');
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
        if (!auth()->user()->hasPermissionTo('Update Permission')) {
            abort('401', '401');
        }

        $roles = $this->role->get();
        $permission = $this->permission->findOrFail($id);
        $permission_groups = $this->permissionGroupRepository->getAll();

        return view('admin.modules.permission.edit', compact('roles', 'permission', 'permission_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->hasPermissionTo('Update Permission')) {
            abort('401', '401');
        }

        $permission = $this->permission->findOrFail($id);
        $this->validate($request, [
            'name' => 'required|max:75|unique:permissions,name,' . $id,
            'permission_group_id' => 'required',
        ]);
        $input = $request->only(['name', 'permission_group_id']);
//        $roles = $request['roles'];
        $permission->fill($input)->save();

//        if (isset($roles)) {
//            $permission->roles()->sync($roles);
//        } else {
//            $permission->roles()->detach();
//        }

        return redirect()->route('admin.permissions.index')->with('flash_message', [
            'title' => '',
            'message' => 'Permission ' . $permission->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Permission')) {
            abort('401', '401');
        }

        $permission = $this->permission->findOrFail($id);

//        if ($permission->name == "Read Permission") {
//            $response['message'][] = 'Cannot delete this Permission!';
//            $response['data']['id'] = $id;
//            $response['status'] = FALSE;
//
//            return json_encode($response);
//        }

        $permission->delete();

        return response()->json([
            'status' => true,
            'data' => compact('id'),
            'message' => ['Permission successfully deleted.']
        ]);
    }
}