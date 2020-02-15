<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\Repositories\PermissionGroupRepository;


class RoleController extends Controller
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
     * @param PermissionGroupRepository $permissionGroupRepository
     */
    public function __construct(Role $role, Permission $permission, PermissionGroupRepository $permissionGroupRepository)
    {
        $this->role = $role;
        $this->permission = $permission;
        $this->permissionGroupRepository = $permissionGroupRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Role')) {
            abort('401', '401');
        }

        $roles = $this->role->get();

        return view('admin.pages.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Role')) {
            abort('401', '401');
        }

        $permission_groups = $this->permissionGroupRepository->getAllWithPermissions();

        return view('admin.pages.role.create', compact('permission_groups'));
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
        if (!auth()->user()->hasPermissionTo('Create Role')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:roles|max:75',
            'permissions' => 'required',
        ]);

        $role = $this->role->create($request->only('name'));
        $permissions = $request['permissions'];

        foreach ($permissions as $permission) {
            $p = $this->permission->where('id', '=', $permission)->firstOrFail();
            $role->givePermissionTo($p);
        }

        return redirect()->route('admin.roles.index')->with('flash_message', [
            'title' => '',
            'message' => 'Role ' . $role->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Role')) {
            abort('401', '401');
        }

        return redirect('admin/roles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->hasPermissionTo('Update Role')) {
            abort('401', '401');
        }

        $role = $this->role->findOrFail($id);
        $permission_groups = $this->permissionGroupRepository->getAllWithPermissions();

        return view('admin.pages.role.edit', compact('role', 'permission_groups'));
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
        if (!auth()->user()->hasPermissionTo('Update Role')) {
            abort('401', '401');
        }

        $role = $this->role->findOrFail($id);
        $this->validate($request, [
            'name' => 'required|max:75|unique:roles,name,' . $id,
            'permissions' => 'required',
        ]);

        $input = $request->only(['name']);
        $permissions = $request['permissions'];
        $role->fill($input)->save();

        $p_all = $this->permission->get();

        foreach ($p_all as $p) {
            $role->revokePermissionTo($p);
        }

        foreach ($permissions as $permission) {
            $p = $this->permission->where('id', '=', $permission)->firstOrFail();
            $role->givePermissionTo($p);
        }

        return redirect()->route('admin.roles.index')->with('flash_message', [
            'title' => '',
            'message' => 'Role ' . $role->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Role')) {
            abort('401', '401');
        }

        $role = $this->role->findOrFail($id);


        if ($role->name == "Super Admin" || $role->name == "Admin" || $role->name == "Customer") {
            return response()->json(status()->error('Cannot delete this Role!', compact('id')));
        }

        $role->delete();

        return response()->json(status()->success('Role successfully deleted', compact('id')));
    }
}