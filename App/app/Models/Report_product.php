<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Http\Helper\Trait\ReportTrait;

class Report_product extends Model
{
    use HasFactory;
    use ReportTrait;

    protected $fillable = [
        'user_id',
        'pro_id',
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
            'pro_id'=>$req['id'],
            'why'=>$req['reason']
        ]);
        
    }
    public function GetProduct()
    {
        return Product::find($this->pro_id);
    }
}
