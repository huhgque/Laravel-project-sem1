<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return view('backend.Brand.index',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        return view('backend.Brand.add',compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Brand $brand)
    {
        if($request->has('image')){
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$file_name);
        }
        $br = $brand->add($request,$file_name);
        return redirect()->route('brand.index')->with('success','Thêm mới thành công');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.Brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        if($request->has('image')){
            $edit_file = public_path('uploads/').$brand->image;
            if (file_exists($edit_file)) {
                unlink($edit_file);
            }
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $brand->image;
        }
        $br = $brand->update([
            'name'=>$request->name,
            'status'=>$request->status,
            'image'=>$file_name]);
        return redirect()->route('brand.index')->with('success','Thêm mới thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id)->delete();
        if($brand){
            return redirect()->route('brand.index')->with('success','Xóa thành công');
        }
        else{
            return redirect()->back()->with('success','Xóa không thành công');
        }
    }
}
