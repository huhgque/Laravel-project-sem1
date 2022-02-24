<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Detail extends Model
{
    use HasFactory;
    protected $fillable=['cate','cate_mini'];
}
