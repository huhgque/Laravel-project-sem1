<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'product_id',
        'detail',
        'stock',
    ];
    public function GetImage()
    {
        return Product_image::where('attr_id',$this->id)->get();
    }
    public function ParseDetail()
    {
        $return = [];
        $attr_detail = explode("\\",$this->detail);
        unset($attr_detail[count($attr_detail)-1]);
        foreach ($attr_detail as $key => $value) {
            $return[] = explode(':',$value);
        }
        return $return;
    }
    public function ParseStock()
    {
        $return = [];
        $return = explode("\\",$this->stock);
        unset($return[count($return)-1]);
        
        return $return;
    }
    
}
