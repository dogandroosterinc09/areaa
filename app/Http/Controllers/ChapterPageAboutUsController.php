<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ChapterPageAboutUs;
use App\Http\Controllers\Controller;
use File;

class ChapterPageAboutUsController extends Controller
{
    /**
     * ChapterPageAboutUs model instance.
     *
     * @var ChapterPageAboutUs
     */
    private $chapter_page_about_us;

    /**
     * Create a new controller instance.
     *
     * @param ChapterPageAboutUs $chapter_page_about_us
     */
    public function __construct(ChapterPageAboutUs $chapter_page_about_us)
    {
        $this->chapter_page_about_us = $chapter_page_about_us;
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Page About Us')) {
            abort('401', '401');
        }

        $chapter_page_about_us = $this->chapter_page_about_us->find($id);

        if (!isset($chapter_page_about_us)) {
            $chapter_page_about_us = $this->chapter_page_about_us->create(['chapter_id' => $id]);
        }

        return view('admin.modules.chapter_page_about_us.edit', compact('chapter_page_about_us'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Page About Us')) {
            abort('401', '401');
        }

        $this->validate($request, [
            
        ]);

        $chapter_page_about_us = $this->chapter_page_about_us->findOrFail($id);

        $db_section_1 = json_decode($chapter_page_about_us->section_1);
        $db_section_2 = json_decode($chapter_page_about_us->section_2);
        
        //Section 1
        $section_1 = new \stdClass();
        $section_1->featured_image = isset($db_section_1->featured_image) ? $db_section_1->featured_image : (isset($request->section_1_featured_image) ? $request->section_1_featured_image : '') ;
        $section_1->alt_text = $request->section_1_alt_text;
        $section_1->title = $request->section_1_title;
        $section_1->content = $request->section_1_content;
        $section_1->button_text = $request->section_1_button_text;
        $section_1->button_link = $request->section_1_button_link;

        //Section 2
        $section_2 = new \stdClass();
        $section_2->featured_image = isset($db_section_2->featured_image) ? $db_section_2->featured_image : (isset($request->section_2_featured_image) ? $request->section_2_featured_image : '') ;
        $section_2->alt_text = $request->section_2_alt_text;
        $section_2->title = $request->section_2_title;
        $section_2->content = $request->section_2_content;
        $section_2->button_text = $request->section_2_button_text;
        $section_2->button_link = $request->section_2_button_link;

        $chapter_page_about_us->fill(array_merge($request->all()))->save();

        $chapter_page_about_us->fill([
            'section_1' => json_encode($section_1),
            'section_2' => json_encode($section_2)
        ])->save();

        if ($request->hasFile('banner_image')) {
            $file_upload_path = $this->upload($request->file('banner_image'));
            $chapter_page_about_us->fill(['banner_image' => $file_upload_path])->save();
        }

        if ($request->hasFile('section_1_featured_image')) {
            $file_upload_path = $this->upload($request->file('section_1_featured_image'));
            
            $section_1->featured_image =  $file_upload_path;

            $chapter_page_about_us->fill(['section_1'=>json_encode($section_1)])->save();
        }

        if ($request->hasFile('section_2_featured_image')) {
            $file_upload_path = $this->upload($request->file('section_2_featured_image'));
            
            $section_2->featured_image =  $file_upload_path;

            $chapter_page_about_us->fill(['section_2'=>json_encode($section_2)])->save();
        }

        if (auth()->user()->roles->first()->name === 'Chapter Admin') {
            return redirect()->route('admin.pages.index')->with('flash_message', [
                'title' => '',
                'message' => 'Chapter Page About Us ' . $chapter_page_about_us->chapter . ' successfully updated.',
                'type' => 'success',
            ]);
        } else {
            return redirect()->route('admin.chapters.pages',$chapter_page_about_us->chapter_id)->with('flash_message', [
                'title' => '',
                'message' => 'Chapter Page About Us ' . $chapter_page_about_us->chapter . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Chapter Page About Us')) {
            abort('401', '401');
        }

        $chapter_page_about_us = $this->chapter_page_about_us->findOrFail($id);
        $chapter_page_about_us->delete();

        return response()->json(status()->success('Chapter Page About Us successfully deleted.', compact('id')));
    }

    public function upload($file) {
        $extension = $file->getClientOriginalExtension();
        $file_name = substr((pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)), 0, 30) . '-' . time() . '.' . $extension;
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
}
