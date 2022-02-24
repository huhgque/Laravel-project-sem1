<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_page extends Model
{
    use HasFactory;
    protected $fillable = [
        'address',
        'phone',
        'email',
    ];
    public function PageInfo()
    {
        return $this->orderBy('updated_at','DESC')->first();
    }
}
