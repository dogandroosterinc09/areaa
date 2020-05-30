<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\BenefitsCategories;
use App\Http\Controllers\Controller;

class BenefitsCategoriesController extends Controller
{
    /**
     * BenefitsCategories model instance.
     *
     * @var BenefitsCategories
     */
    private $benefits_categories;

    /**
     * Create a new controller instance.
     *
     * @param BenefitsCategories $benefits_categories
     */
    public function __construct(BenefitsCategories $benefits_categories)
    {
        $this->benefits_categories = $benefits_categories;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Benefits Categories')) {
            abort('401', '401');
        }

        $benefits_categories = $this->benefits_categories->get();

        return view('admin.modules.benefits_categories.index', compact('benefits_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Benefits Categories')) {
            abort('401', '401');
        }

        return view('admin.modules.benefits_categories.create');
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
        if (!auth()->user()->hasPermissionTo('Create Benefits Categories')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:benefits_categories,name,NULL,id,deleted_at,NULL'
        ]);

        $benefits_categories = $this->benefits_categories->create($request->all());

        return redirect()->route('admin.benefits_categories.index')->with('flash_message', [
            'title' => '',
            'message' => 'Benefits Category ' . $benefits_categories->name . ' successfully added.',
            'type' => 'success'
        ]);
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
        if (!auth()->user()->hasPermissionTo('Update Benefits Categories')) {
            abort('401', '401');
        }

        $benefits_categories = $this->benefits_categories->findOrFail($id);

        return view('admin.modules.benefits_categories.edit', compact('benefits_categories'));
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
        if (!auth()->user()->hasPermissionTo('Update Benefits Categories')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:benefits_categories,name,' . $id . ',id,deleted_at,NULL'
        ]);

        $benefits_categories = $this->benefits_categories->findOrFail($id);

        $benefits_categories->fill($request->all())->save();

        return redirect()->route('admin.benefits_categories.index')->with('flash_message', [
            'title' => '',
            'message' => 'Benefits Category ' . $benefits_categories->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Benefits Categories')) {
            abort('401', '401');
        }

        $benefits_categories = $this->benefits_categories->findOrFail($id);
        $benefits_categories->delete();

        return response()->json(status()->success('Benefits Categories successfully deleted.', compact('id')));
    }
}
