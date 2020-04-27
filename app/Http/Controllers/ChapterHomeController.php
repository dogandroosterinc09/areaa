<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ChapterHome;
use App\Http\Controllers\Controller;
use File;

class ChapterHomeController extends Controller
{
    /**
     * ChapterHome model instance.
     *
     * @var ChapterHome
     */
    private $chapter_home;

    /**
     * Create a new controller instance.
     *
     * @param ChapterHome $chapter_home
     */
    public function __construct(ChapterHome $chapter_home)
    {
        $this->chapter_home = $chapter_home;
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id) {
        if (!auth()->user()->hasPermissionTo('Update Chapter Home')) {
            abort('401', '401');
        }

        if (auth()->user()->roles->first()->name == 'Chapter Admin') {
            $chapter = \App\Models\Chapter::find(auth()->user()->chapter_id);

            if ($id != $chapter->id) {
                abort('401', '401');
            }
        }

        $chapter_home = $this->chapter_home->where('chapter_id',$id)->get()->first();

        //Create new entry if no entry is found
        if (!$chapter_home) {
            $chapter_home = $this->chapter_home->create(['chapter_id' => $id]);
        }

        return view('admin.modules.chapter_home.edit', compact('chapter_home'));
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
        if (!auth()->user()->hasPermissionTo('Update Chapter Home')) {
            abort('401', '401');
        }        

        $this->validate($request, [
            
        ]);

        $chapter_home = $this->chapter_home->findOrFail($id);

        //Sponsors Filters
        $sponsors_filters = array();

        for($counter = 0; $counter < count($request->sponsor_filter_icon); $counter++) {
            array_push($sponsors_filters, [
                'icon' => $request->sponsor_filter_icon[$counter],
                'text' => $request->sponsor_filter_text[$counter],
                'link' => $request->sponsor_filter_link[$counter]
            ]);
        }

        //Top Sponsor
        $top_sponsor = new \stdClass();
        $top_sponsor->badge_icon = $request->top_sponsor_badge_icon;
        $top_sponsor->image =  isset($chapter_home->top_sponsor_image) ? $chapter_home->top_sponsor_image : $request->top_sponsor_image;
        $top_sponsor->image_alt = $request->top_sponsor_image_alt;

        //Other Sponsors
        $other_sponsors = array();

        $db_other_sponsors = json_decode($chapter_home['other_sponsors']);

        for($counter = 0; $counter < count($request->other_sponsors_badge_icon); $counter++) {
            array_push($other_sponsors, [
                'badge_icon' => $request->other_sponsors_badge_icon[$counter],
                'image' => isset($request->other_sponsors_image[$counter]) ? $request->other_sponsors_image[$counter] : 
                    isset($db_other_sponsors) ? (isset(($db_other_sponsors[$counter])->image) ? ($db_other_sponsors[$counter])->image : '') : '' ,
                'image_alt' => $request->other_sponsors_image_alt[$counter]
            ]);
        }

        $chapter_home->fill(array_merge($request->all()), [
            'top_sponsor' => $top_sponsor,
            'other_sponsors' => $other_sponsors
        ])->save();

        if ($request->hasFile('who_we_are_featured_video')) {
            $file_upload_path = $this->upload($request->file('who_we_are_featured_video'));
            $chapter_home->fill(['who_we_are_featured_video'=>$file_upload_path])->save();
        }

        if ($request->hasFile('who_we_are_video_cover_image')) {
            $file_upload_path = $this->upload($request->file('who_we_are_video_cover_image'));
            $chapter_home->fill(['who_we_are_video_cover_image'=>$file_upload_path])->save();
        }

        $chapter_home->fill(['sponsors_filters' => $sponsors_filters])->save();

        //Member Benefits Featured Image
        if ($request->hasFile('member_benefits_featured_image')) {
            $file_upload_path = $this->upload($request->file('member_benefits_featured_image'));
            $chapter_home->fill(['member_benefits_featured_image'=>$file_upload_path])->save();
        } else {
            // $chapter_home->fill(['member_benefits_featured_image'=>null])->save();
        }

        //Top Sponsor Image
        if ($request->hasFile('top_sponsor_image')) {
            $file_upload_path = $this->upload($request->file('top_sponsor_image'));
            
            $top_sponsor->badge_icon = $request->top_sponsor_badge_icon;
            $top_sponsor->image = $file_upload_path;
            $top_sponsor->image_alt = $request->top_sponsor_image_alt;

            $chapter_home->fill(['top_sponsor'=>json_encode($top_sponsor)])->save();
        }

        //Other Sponsors Image        

        $images = $request->file('other_sponsors_image');
       
        for($counter = 0; $counter < count($request->other_sponsors_badge_icon); $counter++) {
            if (isset($images[$counter]) && $images[$counter] != "" ) {
                $file_upload_path = $this->upload($images[$counter]);
                
                $other_sponsors[$counter]['image'] = $file_upload_path;
            }
        }

        $chapter_home->fill(['other_sponsors'=>$other_sponsors])->save();        

        if (auth()->user()->roles->first()->name === 'Chapter Admin') {
            return redirect()->route('admin.pages.index')->with('flash_message', [
                'title' => '',
                'message' => 'Chapter Home ' . $chapter_home->chapter . ' successfully updated.',
                'type' => 'success',
            ]);
        } else {
            return redirect()->route('admin.chapters.pages',$chapter_home->chapter_id)->with('flash_message', [
                'title' => '',
                'message' => 'Chapter Home ' . $chapter_home->chapter . ' successfully updated.',
                'type' => 'success',
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
        if (!auth()->user()->hasPermissionTo('Delete Chapter Home')) {
            abort('401', '401');
        }

        $chapter_home = $this->chapter_home->findOrFail($id);
        $chapter_home->delete();

        return response()->json(status()->success('Chapter Home successfully deleted.', compact('id')));
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
