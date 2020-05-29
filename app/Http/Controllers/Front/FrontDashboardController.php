<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Models\Members;
use App\Models\User;

use Illuminate\Http\Request;

use App\Repositories\PageRepository;

use File;
use DB;

class FrontDashboardController extends Controller
{
    public function __construct(PageRepository $pageRepository, Members $members, User $user)
    {
        $this->pageRepository = $pageRepository;
        $this->members = $members;
        $this->user = $user;
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

    public function showEvents() {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-events-login');

        $active = 'events';
        
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

        $social_media = json_decode($member->social_media) ? : new \stdClass();

        $social_media->facebook = isset($social_media->facebook) ? $social_media->facebook : '' ;
        $social_media->instagram = isset($social_media->instagram) ? $social_media->instagram : '' ;
        $social_media->twitter = isset($social_media->twitter) ? $social_media->twitter : '' ;

        if (!$member) {
            abort('404', '404');
        }

        $active = 'member_directory';

        return view('front.pages.custom-pages-index', compact('page', 'member', 'active', 'social_media'));
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

        // $social_media = json_decode($member->social_media) ? : new \stdClass();

        // $social_media->facebook = isset($social_media->facebook) ? $social_media->facebook : '' ;
        // $social_media->instagram = isset($social_media->instagram) ? $social_media->instagram : '' ;
        // $social_media->twitter = isset($social_media->twitter) ? $social_media->twitter : '' ;

        return view('front.pages.custom-pages-index', compact('page', 'members', 'params', 'active'));
    }

    public function showProfile() {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-profile');
        $active = 'profile';
        $profile = $this->members->where('user_id', auth()->user()->id)->get()->first();

        $social_media = json_decode($profile->social_media) ? : new \stdClass;

        $social_media->facebook = isset($social_media->facebook) ? $social_media->facebook : '' ;
        $social_media->instagram = isset($social_media->instagram) ? $social_media->instagram : '' ;
        $social_media->twitter = isset($social_media->twitter) ? $social_media->twitter : '' ;

        return view('front.pages.custom-pages-index', compact('page', 'active', 'profile', 'social_media'));
    }

    public function updateProfile(Request $request) {      
        // return $request->all();

        $social_media = new \stdClass;

        $social_media->facebook = $request->facebook;
        $social_media->instagram = $request->instagram;
        $social_media->twitter = $request->twitter;

        // return json_encode($social_media);

        $member = $this->members->where('user_id', auth()->user()->id)->get()->first();
        $user = $this->user->find(auth()->user()->id);
        
        $member->fill(array_merge($request->all(),[
            'social_media' => json_encode($social_media)
        ]))->save();
        $user->fill([
            'email' => $request->email,
            'phone' => $request->phone
        ])->save();

        if ($request->hasFile('avatar')) {
            $file_upload_path = $this->upload($request->file('avatar'));
            $user->fill(['profile_image' => $file_upload_path])->save();            
        }

        return redirect()->back()->with('flash_message', [
            'title' => '',
            'message' => 'Profile successfully updated.',
            'type' => 'success'
        ]);;
    }

    public function showSupport() {
        $page = $this->pageRepository->getActivePageBySlug('dashboard-support');

        $active = 'support';

        return view('front.pages.custom-pages-index', compact('page', 'active'));
    }

    public function upload($file) {
        $extension = $file->getClientOriginalExtension();
        $file_name = substr((pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)), 0, 30) . '-' . time() . '.' . $extension;
        $file_name = preg_replace("/[^a-z0-9\_\-\.]/i", '', $file_name);
        $file_path = '/uploads/profile_image';
        $directory = public_path() . $file_path;

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777);
        }

        $file->move($directory, $file_name);
        $file_upload_path = 'public' . $file_path . '/' . $file_name;
        return $file_upload_path;
    }
}
