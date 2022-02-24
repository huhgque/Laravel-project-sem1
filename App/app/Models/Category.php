<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'status'
    ];
    public function Add($req)
    {
        $catemain = Category::create([
            'name'=>$req->name
        ]);
        foreach ($req->catemini as $key => $value) {
            Category_Detail::create([
                'cate'=>$catemain->id,
                'cate_mini'=>$value
            ]);
        }
    }
    public function UpdateCate($req,$id)
    {
        Category_Detail::where('cate',$id)->delete();
        foreach ($req->catemini as $key => $value) {
            Category_Detail::create([
                'cate'=>$id,
                'cate_mini'=>$value
            ]);
        }
    }

    public function GetThisSubcate()
    {
        $query =  Category_Detail::join('category_minis','cate_mini','=','category_minis.id')->select('category_minis.*')->where('cate',$this->id)->get();
        return $query;
    }

    public function HasThisSubcate($subcate)
    {
        $query = Category_Detail::where('cate','=',$this->id)->where('cate_mini','=',$subcate)->first();
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function IsHighLight()
    {
        $sub = $this->GetThisSubcate();
        $prolist = [];
        $taked = 0;
        foreach ($sub as $key => $value) {
            $query = Product::where('cate_id',$value->id)->where('status','=','10')->take(5 - $taked)->get();
            foreach ($query as $queryindex => $que) {
                # code...
                if($que != []){
                    $prolist[] = $que;
                }
            }
            $taked = count($prolist);
            if($taked == 5){
                break;
            }
        }
        if( count($prolist) < 5){
            foreach ($sub as $key => $value) {
                $query = Product::where('cate_id',$value->id)->where('status','=','1')->take(5-$taked)->get();
                foreach ($query as $queryindex => $que) {
                    # code...
                    if($que != []){
                        $prolist[] = $que;
                    }
                }
                $taked = count($prolist);
                if($taked == 5){
                    break;
                }
            }
            
        }
        return $prolist;
    }
}
