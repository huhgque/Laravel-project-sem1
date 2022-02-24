<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\DashBoard;

class AdminController extends Controller
{
    public function index(DashBoard $dash)
    {
        $newPro = $dash->NewPro();
        $newUser = $dash->NewUser();
        $newBlog = $dash->NewBlog();
        $topIncome = $dash->TopIncome();
        $topPro = $dash->TopPro();
        $topNewPro = $dash->TopNewPro();
        $topNewBlog = $dash->TopNewBlog(); 
        return view('backend.dashboard',compact('newPro','newUser','newBlog','topIncome','topPro','topNewPro','topNewBlog'));
    }
    public function login()
    {
        return view('backend.login');
    }
    public function loginPost(UserLoginRequest $req)
    {
        if(Auth::attempt($req->only('email','password'))){
            return redirect('/admin');
        }else{
            return redirect()->route('admin.login')->with('msg','Tài khoản hoặc mật khẩu không chính xác');
        };
    }
}
