<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Product_image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'pro_id'
    ];
    public function AddArray($data,$id)
    {
        foreach ($data as $key => $value) {
            $name = Str::random(15);
            $ex = $value->extension();
            Product_image::create([
                'name'=> $name.'.'.$ex,
                'pro_id'=>$id
            ]);
            $value->move(public_path('upload/product/'),$name.'.'.$ex);
        }
    }
    public function UpdateArray($data,$id)
    {
        // dd($data);
        $exarr=[];
        Product_image::where('pro_id',$id)->delete();
        foreach ($data as $key => $value) {
            $name = Str::random(15);
            $ex = $data[$key]->extension();
            $exarr[] = $ex;
            Product_image::create([
                'name'=> $name.'.'.$ex,
                'pro_id'=>$id
            ]);
            $value->move(public_path('upload/product/'),$name.'.'.$ex);
        }
        // dd($exarr);
    }
}
