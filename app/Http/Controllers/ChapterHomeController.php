<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ChapterHome;
use App\Http\Controllers\Controller;

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

        $chapter_home->fill(array_merge($request->all()))->save();

        if ($request->hasFile('member_benefits_featured_image')) {
            $chapter_home->attach($request->file('member_benefits_featured_image'));
        }
        
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
}
