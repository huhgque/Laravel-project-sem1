<?php

namespace App\Http\Controllers\Frontend\Me;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Order;

class MeController extends Controller
{
    public function index()
    {
        return view('frontend.me.index');
    }
    public function updateme(UserUpdateRequest $req,User $user)
    {
        $user->updateMe($req);
        return redirect()->back();;

    }
    public function history(Request $req)
    {
        $myOrder = Auth::user()->MyOrder()->paginate(10);
        $maxOrder = Auth::user()->MyOrder()->count();
        return view('frontend.me.myHistory',compact('myOrder','maxOrder'));
    }
    public function historyDetail($id)
    {   
        $order = Order::find($id);
        return view('frontend.me.history-detail',compact('order'));
        
    }
}
