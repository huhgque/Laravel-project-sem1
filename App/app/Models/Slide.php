<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    protected $fillable = [
        'slide_image',
        'link_to',
        
    ];
    public function add($request,$image){
        $slide = Slide::create([
            'slide_image'=> $image,
            'link_to'=> $request->link_to
        ]);
        return $slide;
    }
}
