<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests\User\UserRegisterRequest;
use App\Http\Requests\User\UserLoginRequest;
use App\Http\Requests\Checkout\addCheckout;
use App\Http\Requests\User\UserEmail;
use App\Http\Requests\User\UserPass;


use App\Http\Helper\CartControll;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Category_mini;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Home_page;
use App\Models\Highlight_category;
use App\Models\Slide;
use App\Models\Payment;

use App\Mail\Pass_reset;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index()
    {
        $slide = Slide::all();
        $cateHight = Highlight_category::where('status','>','0')->get();
        $brandList = Brand::all();
        $newPro=Product::where('status','>','0')->orderBy('updated_at','DESC')->take(10)->get();
        $featPro=Product::where('status','>','1')->orderBy('updated_at','DESC')->take(10)->get();
        $topSalePro = Product::
            join('order_details','order_details.pro_id','=','products.id')
            ->select('products.*','order_details.pro_id',DB::raw('COUNT(order_details.order_id) as totalBuy'))
            ->groupBy('order_details.pro_id')
            ->groupBy([
                'products.id',
                'products.name',
                'products.avata',
                'products.price',
                'products.sale',
                'products.cate_id',
                'products.user_id',
                'products.brand_id',
                'products.description',
                'products.status',
                'products.created_at',
                'products.updated_at',
            ])
            ->orderBy('totalBuy','DESC')->take(10)->get();
        return view('frontend.pages.home',compact('slide','newPro','cateHight','brandList','featPro','topSalePro'));
    }
    public function shop()
    {
        $proList = Product::where('status','>','0')->orderBy('status','DESC')->get();
        $cateList = Category::all();
        $brandList = Brand::all();
        $cateMiniList  = Category_mini::all();
        return view('frontend.pages.shop',compact('proList','cateList','brandList','cateMiniList'));
    }

    public function product($id)
    {
        $pro = product::find($id);
        return view('frontend.pages.product-detail',compact('pro'));
    }
    public function shopby($id)
    {
        $user = User::find($id);
        return view('frontend.shopby.info',compact('user'));
    }
    public function shoplistby($id)
    {
        $proList = Product::where('user_id',$id)->where('status','>','0')->orderBy('status','DESC')->get();
        return view('frontend.pages.shop',compact('proList'));
    }
    public function blog()
    {
        return view('frontend.pages.blog');
    }
    public function cart()
    {
        return view('frontend.pages.cart');
    }
    public function checkout()
    {
        $payment = Payment::all();
        return view('frontend.pages.checkout',compact('payment'));
    }
    public function postcheckout(addCheckout $req,Order $order){
        $orders = $order->addOrder($req);
        $cart = new CartControll();
        if ($orders){
            $cart->DoneCheckout();
            return view('frontend.pages.checkout-success'); 
        }
    }
    public function login()
    {
        
        return view('frontend.pages.login');
    }
    public function register()
    {
        return view('frontend.pages.register');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
    public function registerPost(UserRegisterRequest $req,User $us)
    {
        $file_name = "";
        if($req->has('image')){
            $file = $req->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$file_name);
        };
        
    
        if ($us->add($req,$file_name)) {
            return redirect()-> route('user.login')->with('success','Đăng Kí Thành Công ');
        }else{
            return redirect()-> route('user.register')->with('success','Chưa Đăng Khí Thành công  ');
        }
    }

    public function loginPost(UserLoginRequest $req,User $us)
    {
        if(Auth::attempt($req->only('email','password'))){

            return redirect()->route('user.shop');
         }else{
            return redirect()-> route('user.login')->with('fail','Đăng Nhập Không Thành Công ');

         };
    }
    public function pass_reset(){

        return view('frontend.pages.retrievepassword');
    }
    public function post_pass_reset(UserEmail $req){
       $check = User::where('email',$req->email)->first();
       if($check) {
           DB::table('password_resets')->insert([
               'email'=>$req->email,
               'token'=>$req->_token
           ]);
           Mail::to($req->email)->send(new Pass_reset($req->_token));
           return redirect()-> route('pass_reset') ->with('msg','Vui Lòng Check Email');
       }else{
           return redirect()-> route('pass_reset') ->with('fail','Email Không Đúng Vui Lòng Nhập Lại Email');
       }
    }
    public function pass_use(Request $req){
         $info = DB::table('password_resets')->where('token',$req->token)->first();
         $email = $info->email;
        return view('frontend.pages.pass_use',compact('email'));
    } 

    public function post_pass_use(UserPass $req){
       $user=User::where('email',$req->email)->first();
       $user->update([
           'password'=>Hash::make($req->password)
       ]);
       $info = DB::table('password_resets')->where('email',$req->email)->update([
        'token'=>''
       ]);
      
        return redirect()-> route('user.login') ->with('msg','Lấy Lại Tài Khoản Thành Công Mời Bạn Đăng Nhập ');
    }
}
