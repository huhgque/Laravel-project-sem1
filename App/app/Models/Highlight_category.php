<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlight_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'cate_id',
        'status'
    ];
    public function Cate()
    {
        return $cate = Category::find($this->cate_id);
    }
    public function GetCategory()
    {
        return Category::find($this->cate_id);
    }
}
