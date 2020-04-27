<?php

namespace App\Http\Controllers\Front;

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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, $slug)
    {   
        $chapter = \App\Models\Chapter::where('slug', $slug)->get()->first();

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            // 'g-recaptcha-response' => 'required|captcha'
        ]);

        $chapter_contact = $this->chapter_contact->create(array_merge($request->all(),
            ['chapter_id' => $chapter->id]
        ));

        //Add send to email

        return redirect()->back()->with('flash_message', [
            'title' => '',
            'message' => 'Thanks! We will get back to you soon.',
            'type' => 'success'
        ]);
    }

}
