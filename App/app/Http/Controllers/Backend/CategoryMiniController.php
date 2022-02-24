<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryMini\CategoryMiniAddRequest;
use App\Http\Requests\CategoryMini\CategoryMiniEditRequest;
use App\Models\Category_mini;
use Illuminate\Http\Request;

class CategoryMiniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_mini = Category_mini::all();
        return view('backend.Categorymini.index',compact('category_mini'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.Categorymini.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryMiniAddRequest $request)
    {
        //
        $category_mini = Category_Mini::create($request->all());
        if($category_mini){
            return redirect()->route('category-mini.index')->with('success','Thêm mới thành công');
        }
        else{
            return redirect()->back()->with('success','Thêm mới không thành công');
        }
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
        $category_mini = Category_mini::find($id);
        return view('backend.Categorymini.edit',compact('category_mini'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryMiniEditRequest $request, $id)
    {
        $category_mini = Category_mini::find($id);
        $category_mini->update($request->all());
        if($category_mini){
            return redirect()->route('category-mini.index')->with('success','Cập nhật thành công');
        }
        else{
            return redirect()->back()->with('success','Cập nhật không thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category_mini = Category_mini::find($id)->delete();
        if($category_mini){
            return redirect()->route('category-mini.index')->with('success','Xóa thành công');
        }
        else{
            return redirect()->back()->with('success','Xóa không thành công');
        }
    }
}
