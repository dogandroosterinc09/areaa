<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\ChapterPageLeadership;
use App\Http\Controllers\Controller;

use File;

class ChapterPageLeadershipController extends Controller
{
    /**
     * ChapterPageLeadership model instance.
     *
     * @var ChapterPageLeadership
     */
    private $chapter_page_leadership;
    private $chapter;

    /**
     * Create a new controller instance.
     *
     * @param ChapterPageLeadership $chapter_page_leadership
     */
    public function __construct(Chapter $chapter, ChapterPageLeadership $chapter_page_leadership)
    {
        $this->chapter_page_leadership = $chapter_page_leadership;
        $this->chapter = $chapter;
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Page Leadership')) {
            abort('401', '401');
        }

        $chapter = $this->chapter->findOrFail($id);
        $chapter_page_leadership = $this->chapter_page_leadership->where('chapter_id',$id)->get()->first();

        if (!isset($chapter_page_leadership)) {
            $chapter_page_leadership = $this->chapter_page_leadership->create(['chapter_id' => $id]);
        }

        return view('admin.modules.chapter_page_leadership.edit', compact('chapter_page_leadership'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Page Leadership')) {
            abort('401', '401');
        }

        $this->validate($request, [
            
        ]);

        $chapter = $this->chapter->findOrFail($id);
        $chapter_page_leadership = $this->chapter_page_leadership->where('chapter_id', $id)->get()->first();

        $chapter_page_leadership->fill($request->all())->save();

        if ($request->hasFile('banner_image')) {
            $file_upload_path = $this->upload($request->file('banner_image'));
            $chapter_page_leadership->fill(['banner_image' => $file_upload_path])->save();
        }

        if (auth()->user()->roles->first()->name === 'Chapter Admin') {
            return redirect()->route('admin.pages.index')->with('flash_message', [
                'title' => '',
                'message' => 'Chapter Page Event ' . $chapter_page_leadership->name . ' successfully updated.',
                'type' => 'success',
            ]);
        } else {
            return redirect()->route('admin.chapters.pages',$chapter_page_leadership->chapter_id)->with('flash_message', [
                'title' => '',
                'message' => 'Chapter Page Event ' . $chapter_page_leadership->name . ' successfully updated.',
                'type' => 'success'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if (!auth()->user()->hasPermissionTo('Delete Chapter Page Leadership')) {
            abort('401', '401');
        }

        $chapter_page_leadership = $this->chapter_page_leadership->findOrFail($id);
        $chapter_page_leadership->delete();

        return response()->json(status()->success('Chapter Page Leadership successfully deleted.', compact('id')));
    }

    public function upload($file) {
        $extension = $file->getClientOriginalExtension();
        $file_name = substr((pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)), 0, 30) . '-' . time() . '.' . $extension;
        $file_name = preg_replace("/[^a-z0-9\_\-\.]/i", '', $file_name);
        $file_path = '/uploads/banners';
        $directory = public_path() . $file_path;

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777);
        }

        $file->move($directory, $file_name);
        $file_upload_path = 'public' . $file_path . '/' . $file_name;
        return $file_upload_path;
    }
}
