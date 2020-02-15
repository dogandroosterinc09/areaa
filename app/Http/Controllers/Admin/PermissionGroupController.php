<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PermissionGroup;
use App\Http\Controllers\Controller;
use App\Repositories\PermissionGroupRepository;


class PermissionGroupController extends Controller
{
    /**
     * PermissionGroup model instance.
     *
     * @var PermissionGroup
     */
    private $permissionGroup;

    /**
     * PermissionGroup repository instance.
     *
     * @var PermissionGroupRepository
     */
    private $permissionGroupRepository;

    /**
     * Create a new controller instance.
     *
     * @param PermissionGroup $permissionGroup
     * @param PermissionGroupRepository $permissionGroupRepository
     */
    public function __construct(PermissionGroup $permissionGroup, PermissionGroupRepository $permissionGroupRepository)
    {
        $this->permissionGroup = $permissionGroup;
        $this->permissionGroupRepository = $permissionGroupRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Permission Group')) {
            abort('401', '401');
        }

        $permission_groups = $this->permissionGroupRepository->getAllWithPermissions();

        return view('admin.pages.permission_group.index', compact('permission_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Permission Group')) {
            abort('401', '401');
        }

        return view('admin.pages.permission_group.create');
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
        if (!auth()->user()->hasPermissionTo('Create Permission Group')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|max:75',
        ]);

        $permission_group = $this->permissionGroup->create($request->only('name'));

        return redirect()->route('admin.permission_groups.index')->with('flash_message', [
            'title' => '',
            'message' => 'Permission Group ' . $permission_group->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Permission Group')) {
            abort('401', '401');
        }

        return redirect('admin/permission_groups');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->hasPermissionTo('Update Permission Group')) {
            abort('401', '401');
        }

        $permission_group = $this->permissionGroup->findOrFail($id);

        return view('admin.pages.permission_group.edit', compact('permission_group'));
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
        if (!auth()->user()->hasPermissionTo('Update Permission Group')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|max:75',
        ]);

        $permission_group = $this->permissionGroup->findOrFail($id);
        $input = $request->only(['name']);
        $permission_group->fill($input)->save();

        return redirect()->route('admin.permission_groups.index')->with('flash_message', [
            'title' => '',
            'message' => 'Permission Group ' . $permission_group->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Permission Group')) {
            abort('401', '401');
        }

        $permission_group = $this->permissionGroup->findOrFail($id);
        $permission_group->delete();

        return response()->json(status()->success('Permission Group successfully deleted.', compact('id')));
    }
}
