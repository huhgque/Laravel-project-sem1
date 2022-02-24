<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pro_id',
        'star'
    ];
    public function GetUser()
    {
        return User::find($this->user_id);
    }
}
