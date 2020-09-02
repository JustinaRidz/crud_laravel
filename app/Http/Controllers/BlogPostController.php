<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    // array imitates our model
    private $blogPosts = [
        ['id' => 1, 'title' => 'Title 1', 'text' => 'Some text 1'],
        ['id' => 2, 'title' => 'Title 2', 'text' => 'Some text 2'],
        ['id' => 3, 'title' => 'Title 3', 'text' => 'Some text 3']
    ];

    public function index() {
        return view('blogposts', ['posts' => $this->blogPosts]);
    }

    public function show($id) {
        foreach ($this->blogPosts as $blogPost) {
            if ($blogPost['id'] == $id) {
                return $blogPost;
            }
        }
    }

}
