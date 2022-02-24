<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\Useradmin;

use App\Models\User;
use Auth;
class UserController extends Controller
{
    public function index(Request $req)
    {   
        $user = User::where('role',1)-> paginate(10);
        return view('backend.User.index',compact('user'));
    }
    public function post_user(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $user -> update([
            'status'=>$request->status,
            'role'=>($request->role != null)?$request->role:"0"
        ]);
    }
    public function add_admin(){
        if(Auth::user()->role == 10){
            return view('backend.User.add_admin');
            
        }
        return redirect()->back();
    }
    public function post_add_admin(Useradmin $req, User $us){

        
        
        if ($us->add_admin($req)) {
            return redirect('/admin/user')->with('success','Đăng Kí Thành Công ');
        }else{
            return redirect()-> route('add_admin')->with('success','Chưa Đăng Khí Thành công  ');
        }
    }
}
