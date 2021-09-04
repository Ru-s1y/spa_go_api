<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post) {
        // $this->middleware('auth');
        $this->post = $post;
    }

    public function show() {
        var_dump($this->post);
        return view('user.posts.show');
    }
}
