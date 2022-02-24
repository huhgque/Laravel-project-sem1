<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'content',
        'status'
    ];
    public function AddOne($req)
    {
        $cont = new Blog_content();
        if($req['blog-content'] == null && $req['blog-image'] == null ){
            return false;
        }
        $blog = Blog::create([
            'user_id'=>Auth::user()->id,
            'content'=>$req['blog-content']
        ]);
        if(isset($req['blog-image'])){
            $cont->AddImage($blog->id,$req['blog-image']);
        }
    }
    public function EditOne($req)
    {
        $cont = new Blog_content();
        $hasImg = $this->BlogImage();
        if($this->content == null && $req['blog-image'] == null && $hasImg->count() == 0){
            return false;
        }
        $this->update([
            'user_id'=>Auth::user()->id,
            'content'=>$req['blog-content']
        ]);
        if(isset($req['blog-image'])){
            Blog_content::DeleteFromBlog($req->id);
            $cont->AddImage($this->id,$req['blog-image']);
        }
        return true;
    }
    public function BlogImage()
    {
        return Blog_content::where('blog_id',$this->id)->get();
    }
    public function GetBlogComment()
    {
        return Blog_comment::where('blog_id',$this->id)->where('status','1')->get();
    }
    public function DeleteOne($id)
    {
        Blog_comment::where('blog_id',$id)->delete();
        Blog_content::DeleteFromBlog($id);        
        Blog::find($id)->delete();
    }
    public function GetUser()
    {
        return User::find($this->user_id);
    }
}
