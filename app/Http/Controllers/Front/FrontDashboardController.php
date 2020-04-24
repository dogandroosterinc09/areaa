<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Models\Members;

use Illuminate\Http\Request;

use App\Repositories\PageRepository;

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

        return view('front.pages.custom-pages-index', compact('page'));
    }

    public function showMemberDirectory() {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-memberdirectory');
        $members = $this->members->paginate(10);
        return view('front.pages.custom-pages-index', compact('page', 'members'));
    }

    public function showMemberDetail($id) {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-memberdirectory-detail');

        $member = $this->members->find($id);
        
        if (!$member) {
            abort('404', '404');
        }

        return view('front.pages.custom-pages-index', compact('page', 'member'));
    }

    public function searchMemberDirectory(Request $request) {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-memberdirectory');        

        // $request->location = 'los';

        $members = $this->members->join('users','users.id','=','members.user_id')
            // ->where('users.first_name','like','%' . $request->name .'%' )
            // ->orWhere('users.last_name','like','%' . $request->name .'%' )
            // ->orWhereRaw("CONCAT(users.first_name, ' ', users.last_name) LIKE ?", '%'.$request->name.'%')

            // ->where('location','like', '%' . $request->location .'%')
            ->where('language_spoken','like','%'.$request->keyword.'%')
            ->paginate(10);
        
        $params = "";
        
        foreach($request->except('page') as $k=>$v) {
            $params .= '&'. $k . '=' . $v ;
        };        

        return view('front.pages.custom-pages-index', compact('page', 'members', 'params'));
    }
}
