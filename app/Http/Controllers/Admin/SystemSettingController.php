<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SystemSetting;
use App\Http\Controllers\Controller;
use App\Http\Traits\SystemSettingTrait;
use App\Repositories\SystemSettingRepository;


class SystemSettingController extends Controller
{
    use SystemSettingTrait;

    /**
     * SystemSetting model instance.
     *
     * @var SystemSetting
     */
    private $systemSetting;

    /**
     * SystemSetting repository instance.
     *
     * @var SystemSettingRepository
     */
    private $systemSettingRepository;

    /**
     * Create a new controller instance.
     *
     * @param SystemSetting $systemSetting
     * @param SystemSettingRepository $systemSettingRepository
     */
    public function __construct(SystemSetting $systemSetting, SystemSettingRepository $systemSettingRepository)
    {
        $this->systemSetting = $systemSetting;
        $this->systemSettingRepository = $systemSettingRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read System Setting')) {
            abort('401', '401');
        }

        $system_settings = $this->systemSetting->get();

        return view('admin.pages.system_setting.index', compact('system_settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create System Setting')) {
            abort('401', '401');
        }

        $max_code = $this->generateSystemCode($this->systemSetting, 'SS');

        return view('admin.pages.system_setting.create', compact('max_code'));
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
        if (!auth()->user()->hasPermissionTo('Create System Setting')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'code' => 'required|max:25',
            'name' => 'required|max:75',
            'value' => 'required',
        ]);

        $system_setting = $this->systemSetting->create($request->only('code', 'name', 'value'));

        return redirect()->route('admin.system_settings.index')->with('flash_message', [
            'code' => '',
            'message' => 'System setting ' . $system_setting->name . ' successfully added.',
            'type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (!auth()->user()->hasPermissionTo('Update System Setting')) {
            abort('401', '401');
        }

        $system_setting = $this->systemSetting->findOrFail($id);

        return view('admin.pages.system_setting.edit', compact('system_setting'));
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
        if (!auth()->user()->hasPermissionTo('Update System Setting')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'code' => 'required|max:25',
            'name' => 'required|max:75',
            'value' => 'required',
        ]);

        $system_setting = $this->systemSetting->findOrFail($id);
        $input = $request->only(['code', 'name', 'value']);
        if ($system_setting->type == 'file') {
            $file_upload_path = $this->systemSettingRepository->uploadFile($request->file('value'));
            $input['value'] = $file_upload_path;
        }
        $system_setting->fill($input)->save();

        return redirect()->route('admin.system_settings.index')->with('flash_message', [
            'code' => '',
            'message' => 'System setting ' . $system_setting->name . ' successfully updated.',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if (!auth()->user()->hasPermissionTo('Delete System Setting')) {
            abort('401', '401');
        }

        $system_setting = $this->systemSetting->findOrFail($id);
        $system_setting->delete();

        return response()->json(status()->success('System Setting successfully deleted.', compact('id')));
    }
}
