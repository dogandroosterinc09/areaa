<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\BoardMember;

use App\Repositories\PageRepository;
use App\Http\Controllers\Controller;

class BoardMemberController extends Controller {

    const TYPE_EXECUTIVE = 1;
    const TYPE_DELEGATE = 2;

    public function __construct(PageRepository $pageRepository,                                
                                BoardMember $boardMember
    )
    {
        $this->pageRepository = $pageRepository;
        $this->boardMember = $boardMember;
    }

    public function showDelegate($slug) {
        $page = $this->pageRepository->getActivePageBySlug('board-detail');

        $data = $this->getBoardMember($slug, self::TYPE_DELEGATE);

        $boardMember = $data['boardMember'];
        $previousBoardMember = $data['previousBoardMember'];
        $nextBoardMember = $data['nextBoardMember'];

        return view('front.pages.custom-pages-index', compact('page', 'boardMember', 'previousBoardMember', 'nextBoardMember', 'data'));
    }

    public function showExecutive($slug) {
        $page = $this->pageRepository->getActivePageBySlug('board-detail');

        $data = $this->getBoardMember($slug, self::TYPE_EXECUTIVE);

        $boardMember = $data['boardMember'];
        $previousBoardMember = $data['previousBoardMember'];
        $nextBoardMember = $data['nextBoardMember'];
        
        return view('front.pages.custom-pages-index', compact('page', 'boardMember', 'previousBoardMember', 'nextBoardMember'));
    }
    
    public function getBoardMember($slug, $type) {
        $boardMember = $this->boardMember->where('slug','=',$slug)->get()->first();
        $previousBoardMember = $this->previousBoardMember($boardMember,  $type);
        $nextBoardMember = $this->nextBoardMember($boardMember, $type);

        return [
                'boardMember' => $boardMember,
                'previousBoardMember' => $previousBoardMember,
                'nextBoardMember' => $nextBoardMember
               ];
    }

    public function nextBoardMember($board_member, $type) {
        return $board_member->where('order', '>', $board_member->order)
                ->where('type','=', $type)
                ->orderBy('order')
                ->get()->first();
    }

    public function previousBoardMember($board_member, $type) {
        return $board_member->where('order', '<', $board_member->order)
                ->where('type','=', $type)
                ->orderBy('order')
                ->get()->last();
    }

}
