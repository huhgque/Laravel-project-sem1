<?php

namespace App\Http\Controllers\Frontend\Me;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use Auth;
class MyBlogController extends Controller
{
    public function index()
    {
            
        $blogList = Blog::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('frontend.me.blog.index',compact('blogList'));
    }
    public function postblog(Request $req)
    {
        $blog = Blog::find($req->id);
        if($blog){
            $blog->EditOne($req);
        }else{
            $new = new Blog();
            $new->AddOne($req);
        }
        
        return redirect()->back();

    }
    public function deleteblog(Request $req)
    {
        $blog = Blog::find($req->id);
        
        if($blog->user_id == Auth::user()->id){
            $blog->DeleteOne($req->id);
        }
    }
}
