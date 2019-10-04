<?php

namespace App\Repositories;

use App\Models\Post;

/**
 * Class PostRepository
 * @package App\Repositories
 * @author Randall Anthony Bondoc
 */
class PostRepository
{
    /**
     * Get single instance
     *
     * @param  $id
     *
     * @return App/Models/Post;
     */
    public function get($id)
    {
        $item = Post::findOrFail($id);
        return $item;
    }
}