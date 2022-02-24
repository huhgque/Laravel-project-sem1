<?php

namespace App\Http\Helper;

use Illuminate\Support\Facades\Session;   

use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\Product;

use Auth;

class CartControll{
    protected $cartList =[];
    protected $cartObject = [];
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        // unset($_SESSION['cart']);
        if(isset($_SESSION['cart'])){

            $cart = $_SESSION['cart'];
        } else {
            $cart = [];
        };

        $this->cartList = $cart;
        // dd($cart);
        foreach ($cart as $userid => $signlecart) {
            foreach ($signlecart as $proid => $pro) {
                $this->cartObject[$userid][$proid] = new Cart($pro['id'],$pro['quantity'],$pro['attr']);
            }
        }
        
        // dd($this->GetObject());
    }

    // Get method
    
    public function Get()
    {
        return $this->cartList;
    }
    public function GetObject()
    {
        if(!isset($this->cartObject[Auth::user()->id])){
            $this->cartObject[Auth::user()->id] = [];
        }
        return $this->cartObject[Auth::user()->id];
    }
    public function GetTotal()
    {
        $total = 0;
        foreach ($this->cartObject[Auth::user()->id] as $key => $value) {
            $total += $value->Price();
        }
        return $total;
    }

    // crud method

    public function Add($ord)
    {
        // dd($ord);
        $this->cartList[Auth::user()->id][$ord['id']] = $ord;
        $this->Save();
        
    }
    public function Put($quan,$key)
    {
        $this->cartList[Auth::user()->id][$key]['quantity'] = $quan;
    }
    public function Del($id)
    {
        unset($this->cartList[Auth::user()->id][$id]);
        $this->Save();
    }
    public function DoneCheckout()
    {
        unset($this->cartList[Auth::user()->id]);
        $this->Save();

    }
    public function Save()
    {
        $_SESSION['cart'] = $this->cartList;
    }


    public function AllProductMaxPrice()
    {
        $return = Product::where('status','>','0')->orderBy('price','DESC')->first();
        if($return){
            return $return->price;
        } else {
            return "";
        }
    }
    public function __destruct()
    {
    }


}