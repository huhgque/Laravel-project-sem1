<?php

namespace App\Http\Controllers\Frontend\Me;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\Product\ProductAddRequest;
use App\Http\Requests\Product\ProductEditRequest;


use App\Models\Category;
use App\Models\Category_mini;
use App\Models\Product;
use App\Models\Brand;

use Illuminate\Support\Facades\Auth;


class ProductUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proList = Product::where('user_id',Auth::user()->id)->get();
        return view('frontend.me.myshop.index',compact('proList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cateList = Category_mini::all();
        $brandList = Brand::all();
        return view('frontend.me.myshop.add',compact('cateList','brandList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductAddRequest $request,Product $pro)
    {
        $pro->Add($request);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cateList = Category_mini::all();
        $brandList = Brand::all();
        $pro = Product::find($id);
        return view('frontend.me.myshop.edit',compact('cateList','brandList','pro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductEditRequest $request, $id)
    {
        $pro = Product::find($id);
        $pro->UpdateProduct($request);
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::find($id);
        $pro->DeleteProduct();
        $pro->delete();
        return redirect()->route('product.index')->with('msg','Delete Success');
    }
}
