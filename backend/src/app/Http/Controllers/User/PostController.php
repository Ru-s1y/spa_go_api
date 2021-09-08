<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post) {
        // $this->middleware('auth');
        $this->post = $post;
    }

    public function index(Request $request) {
        return view('user.posts.index');
    }

    public function show(Request $request) {
        return view('user.posts.show');
    }

    public function create() {
        return view('user.posts.create');
    }

    public function store(Request $request) {
        return redirect()->route('post.index');
    }

    public function edit($postId) {
        $post = $this->post->find($postId);
        return view('user.posts.edit', compact('post'));
    }

    public function update() {
        return redirect()->route('post.index');
    }
}
