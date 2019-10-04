<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Repositories\PostRepository;

/**
 * Class PostController
 * @package App\Http\Controllers
 * @author Randall Anthony Bondoc
 */
class PostController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Post Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles posts.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @param Post $post_model
     * @param PostRepository $post_repository
     */
    public function __construct(Post $post_model,
                                PostRepository $post_repository
    )
    {
        /*
         * Model namespace
         * using $this->post_model can also access $this->post_model->where('id', 1)->get();
         * */
        $this->post_model = $post_model;

        /*
         * Repository namespace
         * this class may include methods that can be used by other controllers, like getting of posts with other data (related tables).
         * */
        $this->post_repository = $post_repository;

//        $this->middleware(['isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if (!auth()->user()->hasPermissionTo('Read Post')) {
            abort('401', '401');
        }

        $posts = $this->post_model->get();

        return view('admin.pages.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->hasPermissionTo('Create Post')) {
            abort('401', '401');
        }

        return view('admin.pages.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->hasPermissionTo('Create Post')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'title' => 'required|max:100',
            'body' => 'required',
        ]);

        $post = $this->post_model->create($request->only(['title', 'body']));

        return redirect()->route('admin.posts.index')
            ->with('flash_message', [
                'title' => '',
                'message' => 'Article ' . $post->title . ' successfully added.',
                'type' => 'success'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!auth()->user()->hasPermissionTo('Read Post')) {
            abort('401', '401');
        }

        $post = $this->post_model->findOrFail($id);

        return view('admin.pages.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!auth()->user()->hasPermissionTo('Update Post')) {
            abort('401', '401');
        }

        $post = $this->post_model->findOrFail($id);

        return view('admin.pages.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!auth()->user()->hasPermissionTo('Update Post')) {
            abort('401', '401');
        }

        $this->validate($request, [
            'title' => 'required|max:100',
            'body' => 'required',
        ]);

        $post = $this->post_model->findOrFail($id);
        $input = $request->only(['title', 'body']);
        $post->fill($input)->save();

        return redirect()->route('admin.posts.show', $post->id)
            ->with('flash_message', [
                'title' => '',
                'message' => 'Article ' . $post->title . ' successfully updated.',
                'type' => 'success'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->hasPermissionTo('Delete Post')) {
            abort('401', '401');
        }

        $post = $this->post_model->findOrFail($id);
        $post->delete();

        $response = array(
            'status' => FALSE,
            'data' => array(),
            'message' => array(),
        );

        $response['message'][] = 'Article successfully deleted.';
        $response['data']['id'] = $id;
        $response['status'] = TRUE;

        return json_encode($response);
    }
}
