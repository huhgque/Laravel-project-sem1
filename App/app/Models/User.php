<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

use Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'avata',
        'status',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function add($req,$image){
       
        $user = User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'address'=>$req->address,
            'avata'=>$image,
            'password'=>Hash::make($req->password)
        ]);
        return $user;
    }

    public function updateMe($req)
    {
        $user = Auth::user();
        $update=[
            'name'=>$req->name,
            'phone'=>$req->phone,
            'address'=>$req->address
        ];
        if($req->avata){

            if(file_exists(public_path('uploads/'.$user->avata)) && $user->avata != ''){
                
                unlink(public_path('uploads/'.$user->avata));
            }
            $ext = $req->avata->extension();
            $update['avata'] = Str::random(15).'.'.$ext;
            $req->avata->move(public_path('uploads/'), $update['avata']);
        }
        if($req->password){
            $update['password'] = Hash::make($req->password);
        }
        $user->update($update);
    }

    public function GetFollowing()
    {
        return Follow_user::where('user_id',$this->id)->get();
    }
    public function GetFollowed()
    {
        return Follow_user::where('follow_id',$this->id)->get();

    }
    public function FollowThis($id)
    {
        Follow_user::create([
            'user_id'=>Auth::user()->id,
            'follow_id'=>$id
        ]);
    }

    public function GetAllMyProduct()
    {
        return Product::where('user_id',$this->id)->get();
    }
    public function MyComment($pro)
    {
        return Product_comment::where('user_id',$this->id)->where('pro_id',$pro)->first();
    }
    public function isFollowing($id)
    {
        $follow = Follow_user::where('user_id',$this->id)->where('follow_id',$id)->first();
        return $follow;
    }
    public function MyProduct()
    {
        return Product::where('user_id',$this->id)->get();
    }
    public function MyOrder()
    {
        return Order::where('user_id',$this->id);
    }
    public function BlogComment($id)
    {
        return Blog_comment::where('user_id',$this->id)->where('blog_id',$id)->get();
    }
    public function Status()
    {
        switch ($this->status) {
            case '0':
                return "Bình thường";
                break;
            
            case '-1':
                return "Hạn chế";
                break;
            
            case '-2':
                return "Cấm";
                break;
            
            default:
                # code...
                break;
        }
    }
    public function Role()
    {
        switch ($this->role) {
            case '0':
                return "Người dùng";
                break;
            
            case '1':
                return "Admin";
                break;
            
            case '10':
                return "Boss";
                break;
            
            default:
                # code...
                break;
        }
    }

    public function add_admin($req){
        $user = User::create([
            'name'=>"Admin #".$this->all()->last()->id+1,
            'email'=>$req->email,
            'phone'=>"00000000",
            'role'=>1,
            'address'=>"Admin",
            'avata'=>"DefaultAdmin.png",
            'password'=>Hash::make($req->password)
        ]);
        return $user;
    }
    
    static public function GroupByAll()
    {
        $user = new User();
        $return =[];
        foreach ($user->fillable as $key => $value) {
            $return[]= 'users.'. $value;
        }
        $return[] = 'users.id';
        $return[] = 'users.email_verified_at';
        $return[] = 'users.remember_token';
        $return[] = 'users.created_at';
        $return[] = 'users.updated_at';
        return $return;
    }
    public function OrderedThis($pro)
    {
        return Order::join('order_details','order_details.order_id','=','orders.id')
        ->where('orders.user_id','=',Auth::user()->id)
        ->where('order_details.pro_id','=',$pro)
        ->where('order_details.status','=',3)
        ->first();
    }
}
