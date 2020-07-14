<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Webinars;
use App\Http\Controllers\Controller;

use File;

class WebinarsController extends Controller
{
    /**
     * Webinars model instance.
     *
     * @var Webinars
     */
    private $webinars;

    /**
     * Create a new controller instance.
     *
     * @param Webinars $webinars
     */
    public function __construct(Webinars $webinars)
    {
        $this->webinars = $webinars;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {

        if (!auth()->user()->hasPermissionTo('Read Webinars')) {
            abort('401', '401');
        }

        // $webinars = $this->webinars->get();
        $webinars = $this->webinars->orderby('created_at','desc')->get();

        return view('admin.modules.webinars.index', compact('webinars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Webinars')) {
            abort('401', '401');
        }

        return view('admin.modules.webinars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if (!auth()->user()->hasPermissionTo('Create Webinars')) {
            abort('401', '401');
        }        

        $this->validate($request, [
            // 'link' => 'required',
            'title' => 'required',
            'media_category_id' => 'required',
        ],[
            'media_category_id.required' => 'Category field is required.'
        ]);

        $webinars = $this->webinars->create(array_merge($request->all(), [
            'is_active' => $request->has('is_active') ? 1 : 0,
            'slug' => str_slug($request->input('name'))
        ]));

        $assets = array();

        if (isset($request->asset_title)) {
            for($ctr = 0; $ctr < count($request->asset_title); $ctr++) {
                $asset_item = new \stdClass;
                $asset_item->title = $request->asset_title[$ctr];
                
                $asset_item->link = $request->asset_link[$ctr];

                if (isset($request->file[$ctr])) {
                    $asset_item->link = $this->upload($request->file[$ctr]);
                }

                if (!empty($request->asset_title[$ctr])) {
                    array_push($assets, $asset_item);
                }
            }

            $webinars->fill([
                'assets' => json_encode($assets)
            ])->save();
        }

        return redirect()->route('admin.webinars.index')->with('flash_message', [
            'title' => '',
            'message' => 'Webinars ' . $webinars->name . ' successfully added.',
            'type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        if (!auth()->user()->hasPermissionTo('Read Webinars')) {
            abort('401', '401');
        }

        $webinars = $this->webinars->findOrFail($id);

        return view('admin.modules.webinars.show', compact('webinars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->hasPermissionTo('Update Webinars')) {
            abort('401', '401');
        }

        $webinars = $this->webinars->findOrFail($id);

        return view('admin.modules.webinars.edit', compact('webinars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->hasPermissionTo('Update Webinars')) {
            abort('401', '401');
        }

        $this->validate($request, [            
            // 'link' => 'required',
            'title' => 'required',
            'media_category_id' => 'required',
        ],[
            'media_category_id.required' => 'Category field is required.'
        ]);

        $webinars = $this->webinars->findOrFail($id);

        $webinars->fill(array_merge($request->all(), [
            'slug' => str_slug($request->input('name'))
        ]))->save();

        $assets = array();

        if (isset($request->asset_title)) {
            for($ctr = 0; $ctr < count($request->asset_title); $ctr++) {
                $asset_item = new \stdClass;
                $asset_item->title = $request->asset_title[$ctr];
                
                $asset_item->link = $request->asset_link[$ctr];

                if (isset($request->file[$ctr])) {
                    $asset_item->link = $this->upload($request->file[$ctr]);
                }

                if (!empty($request->asset_title[$ctr])) {
                    array_push($assets, $asset_item);
                }
            }

            $webinars->fill([
                'assets' => json_encode($assets)
            ])->save();
        } else {
            $webinars->fill([
                'assets' => ''
            ])->save();
        }

        return redirect()->route('admin.webinars.index')->with('flash_message', [
            'title' => '',
            'message' => 'Webinars ' . $webinars->name . ' successfully updated.',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if (!auth()->user()->hasPermissionTo('Delete Webinars')) {
            abort('401', '401');
        }

        $webinars = $this->webinars->findOrFail($id);
        $webinars->delete();

        return response()->json(status()->success('Webinars successfully deleted.', compact('id')));
    }

    public function upload($file) {
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $file_name = substr((pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)), 0, 30) . '.' . $extension;
            $file_name = preg_replace("/[^a-z0-9\_\-\.]/i", '', $file_name);
            $file_path = '/uploads';
            $directory = public_path() . $file_path;

            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777);
            }

            $file->move($directory, $file_name);
            $file_upload_path = 'public' . $file_path . '/' . $file_name;
            return $file_upload_path;
        }

        return $file;
    }
}
