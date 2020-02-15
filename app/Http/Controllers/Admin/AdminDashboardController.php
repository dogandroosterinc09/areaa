<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class AdminDashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('admin.pages.dashboard.index');
    }
}
