<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Event model instance.
     *
     * @var Event
     */
    private $event;

    /**
     * Create a new controller instance.
     *
     * @param Event $event
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Event')) {
            abort('401', '401');
        }

        $events = $this->event->get();

        return view('admin.modules.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Event')) {
            abort('401', '401');
        }

        return view('admin.modules.event.create');
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
        if (!auth()->user()->hasPermissionTo('Create Event')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required',
//            'slug' => 'required|unique:events,slug,NULL,id,deleted_at,NULL',
            'description' => 'required',
            'starts_at' => 'required',
            'ends_at' => 'required',
            'location_name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'amount' => 'required',
        ]);

        $event = $this->event->create(array_merge($request->all(), [
            'slug' => str_slug($request->input('name'))
        ]));

        if ($request->hasFile('thumbnail')) {
            $event->attach($request->file('thumbnail'));
        }

        return redirect()->route('admin.events.index')->with('flash_message', [
            'title' => '',
            'message' => 'Event ' . $event->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Event')) {
            abort('401', '401');
        }

        $event = $this->event->findOrFail($id);

        return view('admin.modules.event.show', compact('event'));
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
        if (!auth()->user()->hasPermissionTo('Update Event')) {
            abort('401', '401');
        }

        $event = $this->event->findOrFail($id);

        return view('admin.modules.event.edit', compact('event'));
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
        if (!auth()->user()->hasPermissionTo('Update Event')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'starts_at' => 'required',
            'ends_at' => 'required',
            'location_name' => 'required',
            'time' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'amount' => 'required',
        ]);

        $event = $this->event->findOrFail($id);

        $event->fill(array_merge($request->all(), [
            'slug' => str_slug($request->input('name'))
        ]))->save();

        if ($request->hasFile('thumbnail')) {
            $event->attach($request->file('thumbnail'));
        }

        return redirect()->route('admin.events.index')->with('flash_message', [
            'title' => '',
            'message' => 'Event ' . $event->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Event')) {
            abort('401', '401');
        }

        $event = $this->event->findOrFail($id);
        $event->delete();

        return response()->json(status()->success('Event successfully deleted.', compact('id')));
    }
}
