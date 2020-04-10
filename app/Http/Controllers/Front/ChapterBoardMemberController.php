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

    public function showChapterBoardMembers($slug) {
        $chapter = \App\Models\Chapter::where('slug',$slug)->get()->first();

        $page = $this->pageRepository->getActivePageBySlug('chapter-leadership');
        
        //Redirect to 404 when chapter does not exist
        if (!$chapter) {
            abort(404);
        }

        return view('front.pages.custom-pages-index', compact('page', 'chapter'));
    }
}