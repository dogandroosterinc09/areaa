<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\EventRegistration;
use App\Http\Controllers\Controller;

class EventRegistrationController extends Controller
{
    /**
     * EventRegistration model instance.
     *
     * @var EventRegistration
     */
    private $event_registration;

    /**
     * Create a new controller instance.
     *
     * @param EventRegistration $event_registration
     */
    public function __construct(EventRegistration $event_registration)
    {
        $this->event_registration = $event_registration;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Event Registration')) {
            abort('401', '401');
        }

        $event_registrations = $this->event_registration->get();

        return view('admin.modules.event_registration.index', compact('event_registrations'));
    }

    public function national() {
        if (!auth()->user()->hasPermissionTo('Read Event Registration')) {
            abort('401', '401');
        }

        $title = 'National';
        $event_registrations = $this->event_registration->where('event_id','<>',0)->get();

        return view('admin.modules.event_registration.index', compact('event_registrations','title'));
    }

    public function chapter() {
        // if (!auth()->user()->hasPermissionTo('Read Event Registration')) {
        //     abort('401', '401');
        // }
        $title = 'Chapter';
        // echo 'chapter_id: '.auth()->user()->chapter_id.'<br>';

        if (auth()->user()->chapter_id > 0) { // Chapter Admin login
            $event_registrations = $this->event_registration->where('event_id',0)->where('event_chapter_id',auth()->user()->chapter_id)->get();
        } else { // Nationals
            $event_registrations = $this->event_registration->where('event_id',0)->get();
        }

        return view('admin.modules.event_registration.index', compact('event_registrations','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Event Registration')) {
            abort('401', '401');
        }

        return view('admin.modules.event_registration.create');
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
        if (!auth()->user()->hasPermissionTo('Create Event Registration')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:event_registrations,name,NULL,id,deleted_at,NULL',
            'slug' => 'required|unique:event_registrations,slug,NULL,id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $event_registration = $this->event_registration->create(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]));

        return redirect()->route('admin.event_registrations.index')->with('flash_message', [
            'title' => '',
            'message' => 'Event Registration ' . $event_registration->name . ' successfully added.',
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
        if (!auth()->user()->hasPermissionTo('Read Event Registration')) {
            abort('401', '401');
        }

        $event_registration = $this->event_registration->findOrFail($id);

        return view('admin.modules.event_registration.show', compact('event_registration'));
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
        if (!auth()->user()->hasPermissionTo('Update Event Registration')) {
            abort('401', '401');
        }

        $event_registration = $this->event_registration->findOrFail($id);

        return view('admin.modules.event_registration.edit', compact('event_registration'));
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
        if (!auth()->user()->hasPermissionTo('Update Event Registration')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required|unique:event_registrations,name,' . $id . ',id,deleted_at,NULL',
            'slug' => 'required|unique:event_registrations,slug,' . $id . ',id,deleted_at,NULL',
            'content' => 'required',
        ]);

        $event_registration = $this->event_registration->findOrFail($id);

        $event_registration->fill(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]))->save();

        return redirect()->route('admin.event_registrations.index')->with('flash_message', [
            'title' => '',
            'message' => 'Event Registration ' . $event_registration->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Event Registration')) {
            abort('401', '401');
        }

        $event_registration = $this->event_registration->findOrFail($id);
        $event_registration->delete();

        return response()->json(status()->success('Event Registration successfully deleted.', compact('id')));
    }
}
