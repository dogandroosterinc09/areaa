<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ChapterContact;
use App\Http\Controllers\Controller;

class ChapterContactController extends Controller
{
    /**
     * ChapterContact model instance.
     *
     * @var ChapterContact
     */
    private $chapter_contact;

    /**
     * Create a new controller instance.
     *
     * @param ChapterContact $chapter_contact
     */
    public function __construct(ChapterContact $chapter_contact)
    {
        $this->chapter_contact = $chapter_contact;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Chapter Contact')) {
            abort('401', '401');
        }

        if (auth()->user()->roles->first()->name === 'Chapter Admin') {
            $chapter_contacts = $this->chapter_contact->where('chapter_id', auth()->user()->chapter_id)->get();
        } else {
            $chapter_contacts = $this->chapter_contact->get();
        }

        return view('admin.modules.chapter_contact.index', compact('chapter_contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        if (!auth()->user()->hasPermissionTo('Read Chapter Contact')) {
            abort('401', '401');
        }

        $chapter_contact = $this->chapter_contact->findOrFail($id);

        return view('admin.modules.chapter_contact.show', compact('chapter_contact'));
    }
    
}
