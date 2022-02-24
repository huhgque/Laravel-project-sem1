<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();
        return view('backend.Slide.index',compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $slide = Slide::all();
        return view('backend.Slide.add',compact('slide'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Slide $slide)
    {
        if($request->has('slide_image')){
            $file = $request->slide_image;
            $file_name = Str::random(15);
            $file->move(public_path('uploads'),$file_name);
        }
        $sl = $slide->add($request,$file_name);
        return redirect()->route('slide.index')->with('success','Thêm mới thành công');
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
        $slide = Slide::find($id);
        return view('backend.Slide.edit',compact('slide'));
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
        $slide = Slide::find($id);
        if($request->has('image')){
            $edit_file = public_path('uploads/').$slide->image;
            if (file_exists($edit_file)) {
                unlink($edit_file);
            }
            $file = $request->slide_image;
            $file_name = Str::random(15);
            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $slide->slide_image;
        }
        $sl = $slide->update([
            'slide_image'=>$file_name,
            'link_to'=>$request->link_to
        ]);
        return redirect()->route('slide.index')->with('success','Thêm mới thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id)->delete();
        if($slide){
            return redirect()->route('slide.index')->with('success','Xóa thành công');
        }
        else{
            return redirect()->back()->with('success','Xóa không thành công');
        }
    }
}
