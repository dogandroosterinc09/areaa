<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\ChapterPageContactUs;
use App\Http\Controllers\Controller;

use File;

class ChapterPageContactUsController extends Controller
{
    /**
     * ChapterPageContactUs model instance.
     *
     * @var ChapterPageContactUs
     */
    private $chapter_page_contact_us;
    private $chapter;

    /**
     * Create a new controller instance.
     *
     * @param ChapterPageContactUs $chapter_page_contact_us
     */
    public function __construct(Chapter $chapter, ChapterPageContactUs $chapter_page_contact_us)
    {
        $this->chapter_page_contact_us = $chapter_page_contact_us;
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Page Contact Us')) {
            abort('401', '401');
        }

        $chapter = $this->chapter->findOrFail($id);
        $chapter_page_contact_us = $this->chapter_page_contact_us->where('chapter_id',$id)->get()->first();

        if (!$chapter_page_contact_us->section_1) {
            $section_1 = new \stdClass();

            $section_1->location_icon = '';
            $section_1->location_text = '';
            $section_1->telephone_icon = '';
            $section_1->telephone_text = '';
            $section_1->telephone_link = '';
            $section_1->mail_icon = '';
            $section_1->mail_text = '';
            $section_1->mail_link = '';

            $chapter_page_contact_us->section_1 = json_encode($section_1);
        }

        if (!isset($chapter_page_contact_us)) {
            $chapter_page_contact_us = $this->chapter_page_contact_us->create(['chapter_id' => $id]);
        }

        return view('admin.modules.chapter_page_contact_us.edit', compact('chapter_page_contact_us'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Page Contact Us')) {
            abort('401', '401');
        }

        $this->validate($request, [
            
        ]);

        $chapter = $this->chapter->findOrFail($id);
        $chapter_page_contact_us = $this->chapter_page_contact_us->where('chapter_id', $id)->get()->first();

        $section_1 = new \stdClass();

        $section_1->location_icon = $request->location_icon;
        $section_1->location_text = $request->location_text;
        $section_1->telephone_icon = $request->telephone_icon;
        $section_1->telephone_text = $request->telephone_text;
        $section_1->telephone_link = $request->telephone_link;
        $section_1->mail_icon = $request->mail_icon;
        $section_1->mail_text = $request->mail_text;
        $section_1->mail_link = $request->mail_link;

        $chapter_page_contact_us->fill(array_merge($request->all(),[
            'section_1' => json_encode($section_1)
        ]))->save();

        if ($request->hasFile('banner_image')) {
            $file_upload_path = $this->upload($request->file('banner_image'));
            $chapter_page_contact_us->fill(['banner_image' => $file_upload_path])->save();
        }

        if (auth()->user()->roles->first()->name === 'Chapter Admin') {
            return redirect()->route('admin.pages.index')->with('flash_message', [
                'title' => '',
                'message' => 'Chapter Page Event ' . $chapter_page_contact_us->name . ' successfully updated.',
                'type' => 'success',
            ]);
        } else {
            return redirect()->route('admin.chapters.pages',$chapter_page_contact_us->chapter_id)->with('flash_message', [
                'title' => '',
                'message' => 'Chapter Page Event ' . $chapter_page_contact_us->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Chapter Page Contact Us')) {
            abort('401', '401');
        }

        $chapter_page_contact_us = $this->chapter_page_contact_us->findOrFail($id);
        $chapter_page_contact_us->delete();

        return response()->json(status()->success('Chapter Page Contact Us successfully deleted.', compact('id')));
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
