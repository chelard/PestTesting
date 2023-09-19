<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function __invoke()
    {
        $blogs = Blog::all();

        return view('blog', compact('blogs'));

    }
}
