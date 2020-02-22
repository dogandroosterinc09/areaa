<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    /**
     * Faq model instance.
     *
     * @var Faq
     */
    private $faq;

    /**
     * Create a new controller instance.
     *
     * @param Faq $faq
     */
    public function __construct(Faq $faq)
    {
        $this->faq = $faq;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Faq')) {
            abort('401', '401');
        }

        $faqs = $this->faq->orderBy('order')->get();

        return view('admin.modules.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Faq')) {
            abort('401', '401');
        }

        return view('admin.modules.faq.create');
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
        if (!auth()->user()->hasPermissionTo('Create Faq')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = $this->faq->create(array_merge($request->all(), [
            'order' => $this->faq->max('id') + 1
        ]));

        return redirect()->route('admin.faqs.index')->with('flash_message', [
            'title' => '',
            'message' => 'Faq ' . $faq->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Faq')) {
            abort('401', '401');
        }

        $faq = $this->faq->findOrFail($id);

        return view('admin.modules.faq.show', compact('faq'));
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
        if (!auth()->user()->hasPermissionTo('Update Faq')) {
            abort('401', '401');
        }

        $faq = $this->faq->findOrFail($id);

        return view('admin.modules.faq.edit', compact('faq'));
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
        if (!auth()->user()->hasPermissionTo('Update Faq')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = $this->faq->findOrFail($id);

        $faq->fill(array_merge($request->all(), [
            'order' => $faq->order ?? ($this->faq->max('id') + 1),
        ]))->save();

        return redirect()->route('admin.faqs.index')->with('flash_message', [
            'title' => '',
            'message' => 'Faq ' . $faq->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Faq')) {
            abort('401', '401');
        }

        $faq = $this->faq->findOrFail($id);
        $faq->delete();

        return response()->json(status()->success('Faq successfully deleted.', compact('id')));
    }

    public function position(Request $request)
    {
        foreach ($request->input('order') as $item) {
            $this->faq->whereId($item['id'])->update([
                'order' => $item['position']
            ]);
        }

        return response()->json(status()->success('Position updated'));
    }
}
