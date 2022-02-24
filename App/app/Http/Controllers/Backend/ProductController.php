<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category_mini;
use App\Models\Category;

class ProductController extends Controller
{
    protected $statusAvailable = ['0','1','10'];
    protected $orderAvailable = ['created_at','updated_at'];
    protected $ruteAvailable = ['DESC','ASC'];

    public function index()
    {
        $proList = Product::all();
        $brandList = Brand::all();
        $subcateList = Category_mini::all();
        $cateList = Category::all();
        return view('backend.Product.index',compact('proList','brandList','subcateList','cateList'));
    }

    public function filter(Request $req)
    {
        $where = [];
        $query ;
        if(in_array($req->status,$this->statusAvailable)){

            if($req->status != ""){
                $where[] = ['status','=',$req->status];
                $query = Product::where($where);
            }
        } else {
            $query = Product::where('status','>=','0');
        }

        if(in_array($req->order,$this->orderAvailable)){

            if(in_array($req->rule,$this->ruteAvailable)){

                $query = $query->orderBy($req->order,$req->rule);
            }
            
        } else {
            $query = $query->orderBy('id','DESC');
        }

        $proList = $query->get();

        return view('backend.Product.index',compact('proList','req'));

    }

    public function ProductDetail($id)
    {
        $pro = Product::find($id);
        return view('backend.Product.detail',compact('pro'));
    }
    public function ProductStatus(Request $req , $id)
    {
        $pro = Product::find($id);
        if(in_array($req->status,$this->statusAvailable)){
            $pro->update([
                'status'=>$req->status
            ]);
            return redirect('/admin/product')->with('msg','Đã thay đổi status thành công');
        } else {
            return redirect('/admin/product')->with('msg','Thay đổi status không thành công');

        }

    }
}
