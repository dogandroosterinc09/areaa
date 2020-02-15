<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class FrontDashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('front.pages.dashboard.index');
    }
}
