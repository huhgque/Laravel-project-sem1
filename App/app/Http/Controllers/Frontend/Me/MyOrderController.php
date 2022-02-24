<?php

namespace App\Http\Controllers\Frontend\Me;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use Auth;


class MyOrderController extends Controller
{
    public function index()
    {
        $orderList = [];
        $orderidList = Order::
            join('order_details','order_details.order_id','=','orders.id')
            ->join('products','order_details.pro_id','=','products.id')
            ->select('orders.id')
            ->where('orders.user_id','!=',Auth::user()->id)
            ->where('products.user_id','=',Auth::user()->id)
            ->groupBy('orders.id')
            ->orderBy('orders.id','DESC')
            ->get();
        
        foreach ($orderidList as $key => $value) {
            $orderList[] = Order::find($value->id);
        }
        return view('frontend.me.order.index',compact('orderList'));
    }

    public function detail($id)
    {
        $order = Order::find($id);
        return view('frontend.me.order.detail',compact('order'));
    }

    public function orderupdate(Request $req)
    {
        $ord = Order_detail::find($req->id);
        // var_dump($ord->all());
        // echo $ord->id;
        // dd();
        $ord->update([
            'status'=>$req->status
        ]);
    }
    
}
