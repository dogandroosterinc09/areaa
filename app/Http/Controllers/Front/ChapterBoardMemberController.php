<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\ChapterBoardMember;
use App\Http\Controllers\Controller;

use App\Repositories\PageRepository;

class ChapterBoardMemberController extends Controller
{
    /**
     * ChapterEvent model instance.
     *
     * @var ChapterBoardMember
     */
    private $chapter_board_member;

    /**
     * Create a new controller instance.
     *
     * @param ChapterEvent $chapter_event
     */
    public function __construct(ChapterBoardMember $chapter_board_member,
                                PageRepository $pageRepository)
    {
        $this->chapter_board_member = $chapter_board_member;
        $this->pageRepository = $pageRepository;
    }

    public function showChapterBoardMemberDetail($slug, $board_slug) {
        // $chapter = \App\Models\Chapter::where('slug',$slug)->get()->first();
        // $chapter_board_member = $this->chapter_board_member->where('slug',$board_slug)->get()->first();

        $chapter = \App\Models\Chapter::where('slug',$slug)->get()->first();
        $chapter_board_member = $this->chapter_board_member->where('is_active',1)->where('slug',$board_slug)->get()->first();
        
        //Redirect to 404 when chapter does not exist
        if (!$chapter || !$chapter_board_member) {
            abort(404);
        }

        $page = $this->pageRepository->getActivePageBySlug('chapter-leadership-detail');

        $previousBoardMember = $this->previousBoardMember($chapter_board_member, $chapter->id);
        $nextBoardMember = $this->nextBoardMember($chapter_board_member, $chapter->id);
        
        
        return view('front.pages.custom-pages-index', compact('page', 'chapter', 'chapter_board_member', 'nextBoardMember', 'previousBoardMember'));
    }

    public function previousBoardMember($chapter_board_member, $chapter_id) {
        return  $chapter_board_member->where('id', '<', $chapter_board_member->id)
                    ->where('chapter_id',$chapter_id)->where('is_active',1)
                    // ->orderBy('type')->get()->last();
                    ->orderBy('type')->orderBy('id')->get()->last();
    }

    public function nextBoardMember($chapter_board_member, $chapter_id) {
        return  $chapter_board_member->where('id', '>', $chapter_board_member->id)
                    ->where('chapter_id',$chapter_id)->where('is_active',1)
                    // ->orderBy('type')->get()->first();
                    ->orderBy('id')->orderBy('type')->first();
    }
}