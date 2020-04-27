<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomeSlide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\HomeSlideRepository;

use File;

class HomeSlideController extends Controller
{
    /**
     * HomeSlide model instance.
     *
     * @var HomeSlide
     */
    private $homeSlide;

    /**
     * HomeSlideRepository repository instance.
     *
     * @var HomeSlideRepository
     */
    private $homeSlideRepository;

    /**
     * Create a new controller instance.
     *
     * @param HomeSlide $homeSlide
     * @param HomeSlideRepository $homeSlideRepository
     */
    public function __construct(HomeSlide $homeSlide, HomeSlideRepository $homeSlideRepository)
    {
        $this->homeSlide = $homeSlide;
        $this->homeSlideRepository = $homeSlideRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Home Slide')) {
            abort('401', '401');
        }

        $home_slides = $this->homeSlide->get();

        return view('admin.modules.home_slide.index', compact('home_slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Home Slide')) {
            abort('401', '401');
        }

        return view('admin.modules.home_slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if (!auth()->user()->hasPermissionTo('Create Home Slide')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required',
            'content' => 'required',            
            'background_image' => 'mimes:jpg,jpeg,png',
            'thumbnail_image' =>  'mimes:jpg,jpeg,png'
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        $home_slide = $this->homeSlide->create($input);

        if ($request->hasFile('background_image')) {
            $file_upload_path = $this->homeSlideRepository->uploadFile($request->file('background_image'));
            $home_slide->fill(['background_image' => $file_upload_path])->save();
        }

        if ($request->hasFile('thumbnail_image')) {
            $file_upload_path = $this->upload($request->thumbnail_image, '/thumbnail');
            $home_slide->fill(['thumbnail_image'=>$file_upload_path])->save();
        }

        return redirect()->route('admin.home_slides.index')->with('flash_message', [
            'title' => '',
            'message' => 'Home Slide ' . $home_slide->title . ' successfully added.',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        return redirect()->route('admin.home_slides.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->hasPermissionTo('Update Home Slide')) {
            abort('401', '401');
        }

        $home_slide = $this->homeSlide->findOrFail($id);

        return view('admin.modules.home_slide.edit', compact('home_slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->hasPermissionTo('Update Home Slide')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'name' => 'required',
            'button_label' => 'required',
            'button_link' => 'required',
            'background_image' => 'required_if:remove_background_image,==,1|mimes:jpg,jpeg,png',
            'thumbnail_image' =>  'mimes:jpg,jpeg,png'
        ]);

        $home_slide = $this->homeSlide->findOrFail($id);
        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($request->hasFile('background_image')) {
            $file_upload_path = $this->homeSlideRepository->uploadFile($request->file('background_image'));
            $input['background_image'] = $file_upload_path;
        }

        $home_slide->fill($input)->save();

        if ($request->hasFile('thumbnail_image')) {
            $file_upload_path = $this->upload($request->thumbnail_image, '/thumbnail');
            $home_slide->fill(['thumbnail_image'=>$file_upload_path])->save();
        }

        return redirect()->route('admin.home_slides.index')->with('flash_message', [
            'title' => '',
            'message' => 'Home Slide ' . $home_slide->title . ' successfully updated.',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if (!auth()->user()->hasPermissionTo('Delete Home Slide')) {
            abort('401', '401');
        }

        $home_slide = $this->homeSlide->findOrFail($id);
        $home_slide->delete();

        return response()->json([
            'status' => true,
            'data' => compact('id'),
            'message' => ['Home Slide successfully deleted.']
        ]);
    }

    public function upload($file, $dir) {
        $extension = $file->getClientOriginalExtension();
        $file_name = substr((pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)), 0, 30) . '.' . $extension;
        $file_name = preg_replace("/[^a-z0-9\_\-\.]/i", '', $file_name);
        $file_path = '/uploads/homeslides' . $dir;
        $directory = public_path() . $file_path;

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777);
        }

        $file->move($directory, $file_name);
        $file_upload_path = 'public' . $file_path . '/' . $file_name;
        return $file_upload_path;
    }
}
