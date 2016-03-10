<?php

namespace App\Controllers;

use App\Models\Post;
use Sectorr\Core\View;
use App\Models\User;

class PostsController extends Controller
{
    /**
     * Show list of all posts.
     *
     * @return string
     * @throws \Sectorr\Core\Exceptions\ViewNotFoundException
     */
    public function index()
    {
        // @TODO We reverse it for now, as there is no Order By in Sectorr yet
        $posts = array_reverse(Post::where('is_published', 1)->get());

        return View::make('index', compact('posts'));
    }

    /**
     * Show individual post.
     *
     * @param $slug
     * @return string
     * @throws \Sectorr\Core\Exceptions\ViewNotFoundException
     */
    public function post($slug)
    {
        if(! $post = Post::where('slug', $slug)->first()) {
            http_response_code(404);
            return View::make('404');
        }

        return View::make('post', compact('post'));
    }
}
