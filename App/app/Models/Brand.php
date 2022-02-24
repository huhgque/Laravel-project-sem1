<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'image'
    ];
    public function add($request,$image){
        $brand = Brand::create([
            'name' => $request->name,
            'image'=> $image,
            'status'=> $request->status
        ]);
        return $brand;
    }
}
