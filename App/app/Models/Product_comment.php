<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pro_id',
        'content',
        'status'
    ];
    public function GetUser()
    {
        return User::find($this->user_id);
    }
    public function GetVote()
    {
        return Vote::where('user_id',$this->user_id)->where('pro_id',$this->pro_id)->first();
    }
}
