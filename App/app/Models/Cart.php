<?php

namespace App\Models;

class Cart {
    
    public $pro_id;
    public $attr;
    public $quantity;

    public function __construct($pro_id,$quan,$attr)
    {
        $this->pro_id  = $pro_id;
        $this->quantity = $quan;
        $this->attr = $attr;
    }
    
    public function Put($quan)
    {
        $this->quantity = $quan;
    }

    public function Get()
    {
        return $this->quantity;
    }
    public function Price()
    {
        $build = $this->GetBuild();
        $pro = $this->GetProduct();
        $price = 0;
        foreach ($build as $key => $value) {
            $price += $value['ofset'];
        }
        $return = ($price + $pro->price) - (($price + $pro->price) * $pro->sale / 100);
        return ceil($return);
    }
    public function GetProduct()
    {
        return Product::find($this->pro_id);
    }
    public function GetBuild()
    {
        $build = [];
        $attr = Attribute::where('product_id',$this->pro_id)->get();
        foreach ($attr as $key => $value) {
            $detail = $value->ParseDetail();
            $build[$value->name] = ['name' => $detail[$this->attr[$key]][0] , 'ofset' => $detail[$this->attr[$key]][1]]  ;

        }
        return $build;
    }
    public function GetBuildString()
    {
        $build = '';
        foreach ($this->GetBuild() as $index => $comp) {
            $build .= $comp['name'].":$".$comp['ofset']."/";
        }
        return $build;
    }
}