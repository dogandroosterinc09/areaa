<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    /**
     * Contact model instance.
     *
     * @var Contact
     */
    private $contact;

    /**
     * ContactRepository repository instance.
     *
     * @var ContactRepository
     */
    private $contactRepository;

    /**
     * Create a new controller instance.
     *
     * @param Contact $contact
     * @param ContactRepository $contactRepository
     */
    public function __construct(Contact $contact, ContactRepository $contactRepository)
    {
        $this->contact = $contact;
        $this->contactRepository = $contactRepository;
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

        return view('admin.pages.contact.index', compact('contacts'));
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

        return view('admin.pages.contact.show', compact('contact'));
    }
}
