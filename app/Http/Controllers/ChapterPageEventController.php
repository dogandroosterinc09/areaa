<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\ChapterPageEvent;
use App\Http\Controllers\Controller;

use File;

class ChapterPageEventController extends Controller
{
    /**
     * ChapterPageEvent model instance.
     *
     * @var ChapterPageEvent
     */
    private $chapter_page_event;
    private $chapter;

    /**
     * Create a new controller instance.
     *
     * @param ChapterPageEvent $chapter_page_event
     */
    public function __construct(Chapter $chapter, ChapterPageEvent $chapter_page_event)
    {
        $this->chapter_page_event = $chapter_page_event;
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Page Event')) {
            abort('401', '401');
        }                

        $chapter = $this->chapter->findOrFail($id);
        $chapter_page_event = $this->chapter_page_event->where('chapter_id',$id)->get()->first();

        if (!isset($chapter_page_event)) {
            $chapter_page_event = $this->chapter_page_event->create(['chapter_id' => $id]);
        }

        return view('admin.modules.chapter_page_event.edit', compact('chapter_page_event'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Page Event')) {
            abort('401', '401');
        }

        $this->validate($request, [
            
        ]);

        $chapter = $this->chapter->findOrFail($id);
        $chapter_page_event = $this->chapter_page_event->where('chapter_id', $id)->get()->first();

        $chapter_page_event->fill($request->all())->save();

        if ($request->hasFile('banner_image')) {
            $file_upload_path = $this->upload($request->file('banner_image'));
            $chapter_page_event->fill(['banner_image' => $file_upload_path])->save();
        }

        return redirect()->route('admin.chapters.pages',$chapter_page_event->chapter_id)->with('flash_message', [
            'title' => '',
            'message' => 'Chapter Page Event ' . $chapter_page_event->name . ' successfully updated.',
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
        if (!auth()->user()->hasPermissionTo('Delete Chapter Page Event')) {
            abort('401', '401');
        }

        $chapter = $this->chapter->findOrFail($id);
        $chapter_page_event = $this->chapter_page_event->where('chapter_id', $id)->get()->first();
        $chapter_page_event->delete();

        return response()->json(status()->success('Chapter Page Event successfully deleted.', compact('id')));
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
