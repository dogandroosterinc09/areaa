<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Benefits;
use App\Http\Controllers\Controller;

class BenefitsController extends Controller
{
    /**
     * Benefits model instance.
     *
     * @var Benefits
     */
    private $benefits;

    /**
     * Create a new controller instance.
     *
     * @param Benefits $benefits
     */
    public function __construct(Benefits $benefits)
    {
        $this->benefits = $benefits;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Benefits')) {
            abort('401', '401');
        }

        $benefits = $this->benefits->get();

        return view('admin.modules.benefits.index', compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Benefits')) {
            abort('401', '401');
        }

        return view('admin.modules.benefits.create');
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
        if (!auth()->user()->hasPermissionTo('Create Benefits')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'image' => 'required',
            'title' => 'required',
            'details' => 'required',
            // 'name' => 'required|unique:benefits,name,NULL,id,deleted_at,NULL',
            // 'slug' => 'required|unique:benefits,slug,NULL,id,deleted_at,NULL',
            // 'content' => 'required',

        ]);

        $benefits = $this->benefits->create(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]));

        return redirect()->route('admin.benefits.index')->with('flash_message', [
            'title' => '',
            'message' => 'Benefits ' . $benefits->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Benefits')) {
            abort('401', '401');
        }

        $benefits = $this->benefits->findOrFail($id);

        return view('admin.modules.benefits.show', compact('benefits'));
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
        if (!auth()->user()->hasPermissionTo('Update Benefits')) {
            abort('401', '401');
        }

        $benefits = $this->benefits->findOrFail($id);

        return view('admin.modules.benefits.edit', compact('benefits'));
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
        if (!auth()->user()->hasPermissionTo('Update Benefits')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:benefits,name,' . $id . ',id,deleted_at,NULL',
            'slug' => 'required|unique:benefits,slug,' . $id . ',id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $benefits = $this->benefits->findOrFail($id);

        $benefits->fill(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]))->save();

        return redirect()->route('admin.benefits.index')->with('flash_message', [
            'title' => '',
            'message' => 'Benefits ' . $benefits->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Benefits')) {
            abort('401', '401');
        }

        $benefits = $this->benefits->findOrFail($id);
        $benefits->delete();

        return response()->json(status()->success('Benefits successfully deleted.', compact('id')));
    }
}
