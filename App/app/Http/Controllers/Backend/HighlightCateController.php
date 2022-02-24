<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Highlight_category;
use Illuminate\Http\Request;

class HighlightCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hl_cate = Highlight_category::join('categories','highlight_categories.cate_id','=','categories.id')
                      ->select('highlight_categories.*','categories.id as cate_id')
                      ->get();
        return view('backend.HighlightCate.index',compact('hl_cate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.HighlightCate.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hl_cate = Highlight_category::create($request->all());
        if($hl_cate){
            return redirect()->route('highlight-cate.index')->with('success','Thêm mới thành công');
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
        $category = Category::all();
        $hl_cate = Highlight_category::find($id);
        return view('backend.HighlightCate.edit',compact('hl_cate','category'));
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
        $hl_cate = Highlight_category::find($id);
        $hl_cate->update($request->all());
        if($hl_cate){
            return redirect()->route('highlight-cate.index')->with('success','Cập nhật thành công');
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
        $hl_cate = Highlight_category::find($id)->delete();
        if($hl_cate){
            return redirect()->route('highlight-cate.index')->with('success','Xóa thành công');
        }
        else{
            return redirect()->back()->with('success','Xóa không thành công');
        }
    }
}
