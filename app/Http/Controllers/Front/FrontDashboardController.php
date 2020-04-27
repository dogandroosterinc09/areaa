<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Models\Members;

use Illuminate\Http\Request;

use App\Repositories\PageRepository;

use DB;

class FrontDashboardController extends Controller
{
    public function __construct(PageRepository $pageRepository, Members $members)
    {
        $this->pageRepository = $pageRepository;
        $this->members = $members;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // return view('front.pages.dashboard.index');

        $page = $this->pageRepository->getActivePageBySlug('dashboard-main');

        $active = 'dashboard';

        return view('front.pages.custom-pages-index', compact('page', 'active'));
    }

    public function showMemberDirectory() {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-memberdirectory');
        $members = $this->members->paginate(10);
        $active = 'member_directory';

        return view('front.pages.custom-pages-index', compact('page', 'members', 'active'));
    }

    public function showMemberDetail($id) {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-memberdirectory-detail');

        $member = $this->members->where('user_id', $id)->get()->first();

        if (!$member) {
            abort('404', '404');
        }

        return view('front.pages.custom-pages-index', compact('page', 'member'));
    }

    public function searchMemberDirectory(Request $request) {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-memberdirectory');
        $active = 'member_directory';

        $keyword = $request->keyword;
        $name = $request->name;
        $location = $request->location;

        $members = $this->members->join('users','users.id','=','members.user_id')
            ->when(!empty($keyword), function($query) use ($keyword) {
                return $query->where('language_spoken','like','%'.$keyword.'%');
            })
            ->when(!empty($name), function($query) use ($name) {
                return $query->where(function ($query2) use ($name) {
                    return $query2->where('users.first_name','like','%' . $name .'%' )
                                  ->orWhere('users.last_name','like','%' . $name .'%' )
                                  ->orWhereRaw("CONCAT(users.first_name, ' ', users.last_name) LIKE ?", '%'.$name.'%');
                });
            })
            ->when(!empty($location), function($query) use ($location) {
                return $query->where('location','like', '%' . $location .'%');
            })           
            ->paginate(10);

        $params = "";

        foreach($request->except('page') as $k=>$v) {
            $params .= '&'. $k . '=' . $v ;
        };

        return view('front.pages.custom-pages-index', compact('page', 'members', 'params', 'active'));
    }
}
