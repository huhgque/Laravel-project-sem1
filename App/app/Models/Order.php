<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Http\Helper\CartControll;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'address',
        'email',
        'total',
        'status',
        'payment_id'
    ];
    public function addOrder($rep){
        $ord_detail = new Order_detail();
        $cart = new CartControll();
        $order = Order::create([
            'user_id'=>Auth::user()->id,
            'name'=>$rep->name,
            'phone'=>$rep->phone,
            'address'=>$rep->address,
            'email'=>$rep->email,
            'total'=>$cart->GetTotal(),
            'payment_id'=>$rep->payment_id
        ]);
        $ord_detail->AddDetail($order->id);
        return $order;
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function OrderStatus()
    {
        $query = Order_detail::join('products','pro_id','=','products.id')
            ->select('products.*','order_details.*',  'order_details.id as detail_id' ,'order_details.status as ord_stat')
            ->where('order_id',$this->id)->get();
        $minStatus = 0;
        foreach ($query as $key => $value) {
            if($value->status < $query[$minStatus]->status ){
                $minStatus = $key;
            }
        }
        return $query[$minStatus]->Status();
    }
    public function Payment()
    {
        return Payment::find($this->payment_id);
    }
    public function hasPayment()
    {
        return Order::hasOne(Payment::class,'id','payment_id');
        
    }
    public function Detail()
    {
        $query = Order_detail::join('products','pro_id','=','products.id')
            ->select('products.*','order_details.*',  'order_details.id as detail_id' ,'order_details.status as ord_stat')
            ->where('order_id',$this->id)
            ->get();

        return $query;
    }
    public function GetOrderUser()
    {
        return User::find($this->user_id);
    }
    
    public function DetailForShop()
    {
        $query = Order_detail::join('products','pro_id','=','products.id')
            ->select('products.*','order_details.*',  'order_details.id as detail_id' ,'order_details.status as ord_stat')
            ->where('order_id',$this->id)
            ->where('products.user_id','=',Auth::user()->id)->get();
        return $query;
    }
    public function StatusForShop()
    {
        $query = Order_detail::join('products','pro_id','=','products.id')
            ->select('products.*','order_details.*',  'order_details.id as detail_id' ,'order_details.status as ord_stat')
            ->where('order_id',$this->id)
            ->where('products.user_id','=',Auth::user()->id)->get();
        $minStatus = 0;
        foreach ($query as $key => $value) {
            if($value->status < $query[$minStatus]->status ){
                $minStatus = $key;
            }
        }
        return $query[$minStatus]->Status();
    }
    public function GroupByAll()
    {
        $return = [];
        foreach ($this->fillable as $key => $value) {
            $return[] = "orders.".$value;
        }
        $return[] = "orders.id";
        $return[] = "orders.created_at";
        $return[] = "orders.updated_at";

        return $return;
    }
}
