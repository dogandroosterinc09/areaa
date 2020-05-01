<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Gallery model instance.
     *
     * @var Gallery
     */
    private $gallery;

    /**
     * Create a new controller instance.
     *
     * @param Gallery $gallery
     */
    public function __construct(Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    public function getGallery(Request $request) {
        return json_encode($this->gallery->find($request->id));
        // return 'getting galler with id: ' . $id;
    }
}