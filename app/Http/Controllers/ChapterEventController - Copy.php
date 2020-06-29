<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ChapterEvent;
use App\Http\Controllers\Controller;

class ChapterEventController extends Controller
{
    /**
     * ChapterEvent model instance.
     *
     * @var ChapterEvent
     */
    private $chapter_event;

    /**
     * Create a new controller instance.
     *
     * @param ChapterEvent $chapter_event
     */
    public function __construct(ChapterEvent $chapter_event)
    {
        $this->chapter_event = $chapter_event;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Chapter Event')) {
            abort('401', '401');
        }

        if (auth()->user()->roles->first()->name == 'Chapter Admin') {
            $chapter_events = $this->chapter_event->where('chapter_id', auth()->user()->chapter_id)->get();
        } else {
            $chapter_events = $this->chapter_event->get();
        }

        return view('admin.modules.chapter_event.index', compact('chapter_events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Chapter Event')) {
            abort('401', '401');
        }

        return view('admin.modules.chapter_event.create');
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
        if (!auth()->user()->hasPermissionTo('Create Chapter Event')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required',
            'chapter_id' => 'required',
            'description' => 'required',
            'starts_at' => 'required',
            'ends_at' => 'required',
            'time' => 'required',
            'location_name' => 'required',
            // 'city' => 'required',
            // 'state' => 'required',
            // 'zip' => 'required',
            // 'country' => 'required',
            // 'latitude' => 'required',
            // 'longitude' => 'required',
        ], [
            'chapter_id.required' => 'The chapter field is required.'
        ]);

        $chapter_event = $this->chapter_event->create(array_merge($request->all(), [
            'slug' => str_slug($request->input('name'))
        ]));

        if ($request->hasFile('thumbnail')) {
            $chapter_event->attach($request->file('thumbnail'));
        }

        return redirect()->route('admin.chapter_events.index')->with('flash_message', [
            'title' => '',
            'message' => 'Chapter Event ' . $chapter_event->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Chapter Event')) {
            abort('401', '401');
        }

        $chapter_event = $this->chapter_event->findOrFail($id);

        return view('admin.modules.chapter_event.show', compact('chapter_event'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Event')) {
            abort('401', '401');
        }

        $chapter_event = $this->chapter_event->findOrFail($id);

        return view('admin.modules.chapter_event.edit', compact('chapter_event'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Event')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required',
            'chapter_id' => 'required',
            'description' => 'required',
            'starts_at' => 'required',
            'ends_at' => 'required',
            'location_name' => 'required',
            'time' => 'required',
            // 'city' => 'required',
            // 'state' => 'required',
            // 'zip' => 'required',
            // 'country' => 'required',
            // 'latitude' => 'required',
            // 'longitude' => 'required',
            // 'amount' => 'required',
        ]);

        $chapter_event = $this->chapter_event->findOrFail($id);

        $chapter_event->fill(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]))->save();

        if ($request->hasFile('thumbnail')) {
            $chapter_event->attach($request->file('thumbnail'));
        }

        return redirect()->route('admin.chapter_events.index')->with('flash_message', [
            'title' => '',
            'message' => 'Chapter Event ' . $chapter_event->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Chapter Event')) {
            abort('401', '401');
        }

        $chapter_event = $this->chapter_event->findOrFail($id);
        $chapter_event->delete();

        return response()->json(status()->success('Chapter Event successfully deleted.', compact('id')));
    }
}
