<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

use App\Http\Helper\Trait\ReportTrait;

class Report_blog extends Model
{
    use ReportTrait;
    use HasFactory;
    protected $fillable = [
        'user_id',
        'blog_id',
        'why',
        'isAnswered'
    ];
    public function GetAll()
    {
        return $this->all();
    }
    public function AddOne($req)
    {
        return Report_blog::create([
            'user_id'=>Auth::user()->id,
            'blog_id'=>$req['id'],
            'why'=>$req['reason']
        ]);
        
    }
}
