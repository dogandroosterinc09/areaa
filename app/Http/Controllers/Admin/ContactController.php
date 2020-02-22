<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Contact model instance.
     *
     * @var Contact
     */
    private $contact;

    /**
     * Create a new controller instance.
     *
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Contact')) {
            abort('401', '401');
        }

        $contacts = $this->contact->get();

        return view('admin.modules.contact.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        if (!auth()->user()->hasPermissionTo('Read Contact')) {
            abort('401', '401');
        }

        $contact = $this->contact->findOrFail($id);

        return view('admin.modules.contact.show', compact('contact'));
    }
}
