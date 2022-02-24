<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\PaymentAddRequest;
use App\Http\Requests\Payment\PaymentEditRequest;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment = Payment::all();
        return view('backend.Payment.index',compact('payment'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.Payment.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentAddRequest $request)
    {
        
        $payment = Payment::create($request->all());
        if($payment){
            return redirect()->route('payment.index')->with('success','Thêm mới thành công');
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
        $payment = Payment::find($id);
        return view('backend.Payment.edit',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentEditRequest $request, $id)
    {
        $payment = Payment::find($id);
        $payment->update($request->all());
        if($payment){
            return redirect()->route('payment.index')->with('success','Thêm mới thành công');
        }
        else{
            return redirect()->back()->with('success','Thêm mới không thành công');
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
        $payment = Payment::find($id)->delete();
        if($payment){
            return redirect()->route('payment.index')->with('success','Xóa thành công');
        }
        else{
            return redirect()->back()->with('success','Xóa không thành công');
        }
    }
}
