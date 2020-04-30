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

        $active = 'member_directory';

        return view('front.pages.custom-pages-index', compact('page', 'member', 'active'));
    }

    public function searchMemberDirectory(Request $request) {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-memberdirectory');
        $active = 'member_directory';

        $keyword = $request->keyword;
        $name = $request->name;
        $location = $request->location;
        $company = $request->company;
        $chapter = $request->chapter;
        $designation = $request->designation;

        $members = $this->members->join('users','users.id','=','members.user_id')
            ->join('chapters','chapters.id','=','users.chapter_id')
            ->when(!empty($keyword), function($query) use ($keyword) {                
                return $query->where(function ($query2) use ($keyword) {
                    return $query2->where('users.first_name','like','%' . $keyword .'%' )
                                  ->orWhere('users.last_name','like','%' . $keyword .'%' )
                                  ->orWhereRaw("CONCAT(users.first_name, ' ', users.last_name) LIKE ?", '%'.$keyword.'%')
                                  ->orwhere('language_spoken','like','%'.$keyword.'%')
                                  ->orWhere('location','like', '%' . $keyword .'%');
                });
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
            ->when(!empty($company), function($query) use ($company) {
                return $query->where('company','like', '%' . $company .'%');
            })
            ->when(!empty($chapter), function($query) use ($chapter) {
                return $query->where('chapters.name','like', '%' . $chapter .'%');
            })
            ->when(!empty($designation), function($query) use ($designation) {
                return $query->where('designations','like', '%' . $designation .'%');
            })
            
            ->paginate(10);

        $params = "";

        foreach($request->except('page') as $k=>$v) {
            $params .= '&'. $k . '=' . $v ;
        };

        return view('front.pages.custom-pages-index', compact('page', 'members', 'params', 'active'));
    }
}
