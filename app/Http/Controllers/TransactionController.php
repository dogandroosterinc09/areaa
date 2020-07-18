<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class TransactionController extends Controller
{

    // public function recordTransaction(Request $request) {
    //     $this->validate($request, [
    //         'first_name' => 'required',
    //         'last_name' => 'required',
    //         'email' => 'required|email',
    //         'is_member' => 'required',
    //         'member_chapter_id' => 'required_if:is_member,1'
    //     ],[
    //         'is_member.required' => "Please indicate if you're a member or not.",
    //         'member_chapter_id.required_if' => 'Please indicate your chapter.'
    //     ]);

    //     $event_registration = $this->event_registration->create($request->all());

    //     return redirect()->back()->with('flash_message', [
    //         'title' => '',
    //         'message' => 'Event registration successful.',
    //         'type' => 'success'
    //     ]);
    // }

}
