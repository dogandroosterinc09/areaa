<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TemplateCamelCase;
use App\Http\Controllers\Controller;

class TemplateCamelCaseController extends Controller
{
    /**
     * TemplateCamelCase model instance.
     *
     * @var TemplateCamelCase
     */
    private $template_snake_case;

    /**
     * Create a new controller instance.
     *
     * @param TemplateCamelCase $template_snake_case
     */
    public function __construct(TemplateCamelCase $template_snake_case)
    {
        $this->template_snake_case = $template_snake_case;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read DefaultTemplate')) {
            abort('401', '401');
        }

        $template_snake_case_plural = $this->template_snake_case->get();

        return view('admin.modules.template_snake_case.index', compact('template_snake_case_plural'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create DefaultTemplate')) {
            abort('401', '401');
        }

        return view('admin.modules.template_snake_case.create');
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
        if (!auth()->user()->hasPermissionTo('Create DefaultTemplate')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:template_snake_case_plural,name,NULL,id,deleted_at,NULL',
            'slug' => 'required|unique:template_snake_case_plural,slug,NULL,id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $template_snake_case = $this->template_snake_case->create(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]));

        return redirect()->route('admin.template_snake_case_plural.index')->with('flash_message', [
            'title' => '',
            'message' => 'DefaultTemplate ' . $template_snake_case->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read DefaultTemplate')) {
            abort('401', '401');
        }

        $template_snake_case = $this->template_snake_case->findOrFail($id);

        return view('admin.modules.template_snake_case.show', compact('template_snake_case'));
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
        if (!auth()->user()->hasPermissionTo('Update DefaultTemplate')) {
            abort('401', '401');
        }

        $template_snake_case = $this->template_snake_case->findOrFail($id);

        return view('admin.modules.template_snake_case.edit', compact('template_snake_case'));
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
        if (!auth()->user()->hasPermissionTo('Update DefaultTemplate')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:template_snake_case_plural,name,' . $id . ',id,deleted_at,NULL',
            'slug' => 'required|unique:template_snake_case_plural,slug,' . $id . ',id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $template_snake_case = $this->template_snake_case->findOrFail($id);

        $template_snake_case->fill(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]))->save();

        return redirect()->route('admin.template_snake_case_plural.index')->with('flash_message', [
            'title' => '',
            'message' => 'DefaultTemplate ' . $template_snake_case->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete DefaultTemplate')) {
            abort('401', '401');
        }

        $template_snake_case = $this->template_snake_case->findOrFail($id);
        $template_snake_case->delete();

        return response()->json(status()->success('DefaultTemplate successfully deleted.', compact('id')));
    }
}
