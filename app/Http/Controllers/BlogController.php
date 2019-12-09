<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $list_blogs = Blog::all();
        return view('blog.index', [
            'blogs' => $list_blogs
        ]);
    }
}
