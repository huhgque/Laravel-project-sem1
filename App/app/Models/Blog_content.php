<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog_content extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_id',
        'image'
    ];

    public function AddImage($blogid,$images)
    {
        foreach ($images as $key => $image) {
            $extendsion = $image->extension();
            $name = Str::random(15);
            Blog_content::create([
                'blog_id'=>$blogid,
                'image'=>$name.".".$extendsion
            ]);
            $image->move(public_path('upload/blog'),$name.".".$extendsion);
        }
    }
    static function DeleteFromBlog($blogid)
    {
        $content = Blog_content::where('blog_id',$blogid);
        foreach ($content->get() as $key => $cont) {
            if(file_exists(public_path('upload/blog/'.$cont->image))){

                unlink(public_path('upload/blog/'.$cont->image));
            }
        }
        $content->delete();
    }
}
