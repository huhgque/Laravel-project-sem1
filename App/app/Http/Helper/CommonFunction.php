<?php

namespace App\Http\Helper;

use App\Models\Product;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category_Detail;

use Illuminate\Support\Facades\DB;
class CommonFunction{
    public $table;
    public function __construct($table,$isAdmin = false)
    {
        switch ($table) {
            case 'products':
                $this->table = new Product();
                
                break;
            case 'blogs':
                $this->table = new Blog();
                break;
            case 'users':
                $this->table = new User();
                break;
            default:
                # code...
                break;
        }
        if(!$isAdmin){
            $this->table = $this->table->Where('status','>','0');
        }
    }
    public function Search()
    {
        return $this->table->get();
    }
    public function MakeOrWhere($req,$col)
    {
        $this->table = $this->table->where( function ($query) use ($req,$col)
        {
            foreach ($req as $key => $value) {
                $query->orWhere($col,'=',$value);
            }
        });
    }
    public function MakeGreater($val,$col)
    {
        $this->table = $this->table->where($col,'>=',$val);
    }
    public function MakeLessthan($val,$col)
    {
        $this->table = $this->table->where($col,'<=',$val);
    }
    public function MakeEqual($val,$col)
    {
        $this->table = $this->table->where($col,'=',$val);
    }
    public function MakeExcept($val,$col)
    {
        $this->table = $this->table->where($col,'!=',$val);
    }

    public function CategoryCanHave($parent)
    {
        $query = Category_Detail::where('cate',$parent)->get();
        $return = [];
        foreach ($query as $key => $value) {
            $return[] = $value->cate_mini;
        }
        return $return;
    }
    public function MakePage($page,$itemNum)
    {
        $skip = ($page - 1) * $itemNum;
        $this->table = $this->table->skip($skip)->take($itemNum);
    }
    public function MakeFind($val)
    {
        $this->table = $this->table->where('name','like','%'.$val.'%');
    }
    public function OrderBy($col,$rule)
    {
        $this->table = $this->table->orderBy($col,$rule);
    }
}
