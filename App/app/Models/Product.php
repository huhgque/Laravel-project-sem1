<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'avata',
        'price',
        'sale',
        'cate_id',
        'user_id',
        'brand_id',
        'description',
        'status'
    ];

    public function ShortenAdd($req,$avata_name)
    {
        return Product::create([
            'name'=>$req->name,
            'avata'=>$avata_name,
            'user_id'=>Auth::user()->id,
            'price'=>$req->price,
            'sale'=>($req->sale)?$req->sale:0,
            'brand_id'=>$req->brand_id,
            'cate_id'=>$req->cate_id,
            'description'=>$req->description
        ]);
    }
    public function MakeDetailString($attr_name,$attr_val)
    {   
        $detail = '';
        foreach ($attr_name as $index => $name) {
            $val = $attr_val[$index];
            if( ($name!='') ){
                $detail .= $name . ":" .$val."\\";
            }
        }
        return $detail;
    }
    public function MakeStockString($stock)
    {
        $re = '';
        foreach ($stock as $stk) {
            $re .= $stk."\\" ;
        }
        return $re;
    }
    public function GetAttr()
    {
        return Attribute::where('product_id',$this->id)->get();
    }
    public function GetImg()
    {
        return Product_image::where('pro_id',$this->id)->get();
    }
    public function Add($req)
    {
        $avata_name = Str::random(15);
        $pro_img = new Product_image;
        $query = $this->ShortenAdd($req,$avata_name);
        $req->avata->move(public_path('upload/product'),$avata_name);
        foreach ($req->attr_label as $key => $label) {
            $detail = $this->MakeDetailString($req->attr_name[$key],$req->attr_val[$key]);
            $stock = $this->MakeStockString($req->stock[$key]);
            
            $attradded = Attribute::create([
                'name'=>$label,
                'product_id'=>$query->id,
                'detail'=>$detail,
                'stock'=>$stock
            ]);
            
            // $pro_img->AddArray($req->attr_img[$key],$attradded->id);
        }
        if(isset($req->pro_img)){
            $pro_img->AddArray($req->pro_img,$query->id);
        }
        return redirect()->route('product.index');
    }
    public function UpdateProduct($req)
    {
        $pro_img = new Product_image;
        $avata_name = Str::random(15);
        $attradded = Attribute::where('product_id',$this->id)->get();

        if(isset($req->avata)){
            unlink(public_path('upload/product/'.$this->avata));
            $req->avata->move(public_path('upload/product'),$avata_name);
        }else{
            $avata_name=$this->avata;
        }
        $query = $this->update([
            'name'=>$req->name,
            'sale'=>$req->sale,
            'avata'=>$avata_name,
            'brand_id'=>$req->brand_id,
            'cate_id'=>$req->cate_id,
            'description'=>$req->description
        ]);
        foreach ($req->attr_label as $key => $label) {
            $detail = $this->MakeDetailString($req->attr_name[$key],$req->attr_val[$key]);
            $stock = $this->MakeStockString($req->stock[$key]);

            $attradded[$key]->update([
                'name'=>$label,
                'detail'=>$detail,
                'stock'=>$stock
            ]);
            
        }
        if(isset($req->pro_img)){
            $pro_img->UpdateArray($req->pro_img,$this->id);
        }
    }
    public function DeleteProduct()
    {

        Product_comment::where('pro_id',$this->id)->delete();
        Vote::where('pro_id',$this->id)->delete();

        $attr_img_list = Product_image::where('pro_id','=',$this->id)->get();
        foreach ($attr_img_list as $key => $value) {
            if(file_exists(public_path('upload/product/'.$value->name))){
                unlink(public_path('upload/product/'.$value->name));
            }
        }
        Product_image::where('pro_id','=',$this->id)->delete();
        Attribute::where('product_id',$this->id)->delete();
    }

    public function BrandName()
    {
        return Brand::find($this->brand_id)->name;
    }

    public function UploaderName()
    {
        return User::find($this->user_id)->name;
    }
    public function Uploader()
    {
        return User::find($this->user_id);
    }
    public function CateName()
    {
        return Category_mini::find($this->cate_id)->name;
    }
    public function GetImage()
    {
        return Product_image::where('pro_id',$this->id)->get();
    }
    public function GetComment()    
    {
        $comment = Product_comment::where('pro_id',$this->id)->where('status','=','1');
        if(Auth::check()){
            // $comment->where('user_id','!=',Auth::user()->id);
        }
        return $comment->get();
    }
    public function RelateProduct()
    {
        return Product::where([
            ['cate_id',$this->cate_id],
            ['id','!=',$this->id],
            ['status','>',0],
            ])->take(4)->get();
    }
    public function Price()
    {
        return $this->price - ($this->price*$this->sale/100);
    }
    public function Status()
    {
        switch ($this->status) {
            case '0':
                return "Không được duyệt";
                break;
            
            case '1':
                return "Được duyệt";
                break;
            
            case '10':
                return "Ưu tiên";
                break;
            
            default:
                return "Không hợp lệ";
                break;
        }
    }
    public function AvgStar()
    {
        $rateList = Vote::where('pro_id',$this->id)->get();
        if($rateList->count() == 0){
            return 5;
        }
        $star = 0;
        foreach ($rateList as $key => $value) {
            $star += $value->star;
        }
        return $star / $rateList->count();
    }
    static public function GroupByAll()
    {
        $user = new Product();
        $return =[];
        foreach ($user->fillable as $key => $value) {
            $return[]= 'products.'. $value;
        }
        $return[] = 'products.id';
        $return[] = 'products.created_at';
        $return[] = 'products.updated_at';
        return $return;
    }
}
