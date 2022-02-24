<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function blogsignle($id)
    {
        $blog = Blog::find($id);
        return view('backend.Blog.blogdetail',compact('blog'));
    }
}
