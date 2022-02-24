<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

use App\Http\Helper\Trait\ReportTrait;


class Report_user extends Model
{
    use ReportTrait;
    use HasFactory;
    protected $fillable = [
        'user_id',
        'report_id',
        'why',
        'isAnswered'
    ];
    public function GetAll()
    {
        return $this->all();
    }
    public function AddOne($req)
    {
        return $this->create([
            'user_id'=>Auth::user()->id,
            'report_id'=>$req['id'],
            'why'=>$req['reason']
        ]);
        
    }
}
