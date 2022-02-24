<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Helper\CartControll;

class Order_detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'pro_id',
        'status',
        'build',
        'price',
        'quantity'

    ];

    public function AddDetail($id)
    {
        $cart = new CartControll();
        $build = "";
        foreach ($cart->GetObject() as $key => $value) {
            
            $build = substr($value->GetBuildString(),0,-1);
            $query = Order_detail::create([
                'order_id'=>$id,
                'pro_id'=>$value->pro_id,
                'build'=>$build,
                'price'=>$value->Price(),
                'quantity'=>$value->quantity
            ]);
        }
    }
    public function GetProduct()
    {
        return Product::find($this->pro_id);
    }
    public function Status()
    {
        switch ($this->status) {
            case '0':
                return "Đang xử lý";
                break;
            
            case '1':
                return "Đã đóng gói";
                break;
            
            case '2':
                return "Đang vận chuyển";
                break;
            
            case '3':
                return "Đã giao";
                break;
            
            case '-1':
                return "Đã hủy";
                break;
            
            default:
                # code...
                break;
        }
    }
    static public function GroupByAll()
    {
        $user = new Order_Detail();
        $return =[];
        foreach ($user->fillable as $key => $value) {
            $return[]= 'order_details.'. $value;
        }
        $return[] = 'order_details.id';
        $return[] = 'order_details.created_at';
        $return[] = 'order_details.updated_at';
        return $return;
    }
}
