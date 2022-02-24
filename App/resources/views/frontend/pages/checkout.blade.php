@extends('frontend.master')

@section('main')

<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li>
                            <h1><a href="index.html">Home</a></h1>
                        </li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================
Breadcrumb Aera End
=========================-->

<!--======================
Checkout area Start
==========================-->
<div class="checkout-area mt-50">
    <div class="container">
        @if(Auth::check())
        {{-- @dd($cart->Get()) --}}
        @if ( $cart->GetObject() != [] )
        <div class="row">
            <form class="form-row row" method="POST" >
                @csrf
                <div class="col-lg-6 col-md-6">
                        <div class="col-lg-12">
                            <h5 class="form-head">Billing Details</h5>
                        </div>
                        <div class="form_group col-12 ">
                            <label class="form-label"> Name <span>*</span></label>
                            <input class="input-form" type="text" name="name" value="{{Auth::user()->name}}">
                            @if($errors->has('name'))
                            <span style="color:red">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        
                        <div class="form_group col-12">
                            <label class="form-label"> Address <span>*</span></label>
                            <input class="input-form" type="text" name="address" value="{{Auth::user()->address}}">
                            @if($errors->has('address'))
                            <span style="color:red">{{$errors->first('address')}}</span>
                            @endif
                        </div>
                        <div class="form_group col-12 ">
                            <label class="form-label">Phone <span>*</span></label>
                            <input class="input-form" type="text" name="phone" value="{{Auth::user()->phone}}">
                            @if($errors->has('phone'))
                            <span style="color:red">{{$errors->first('phone')}}</span>
                            @endif
                        </div>
                        <div class="form_group col-12 ">
                            <label class="form-label">Email <span>*</span></label>
                            <input class="input-form" type="text" name="email" value="{{Auth::user()->email}}">
                            @if($errors->has('email'))
                            <span style="color:red">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label" for="state">Payment <span>*</span></label>
                            <select class="niceselect-option nice-select select-option" name="payment_id"id="state">
                                @foreach($payment as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                </div>
                <div class="col-lg-6 col-md-6">
                        <div class="col-lg-12">
                            <h5 class="form-head rs-padding">Your Order</h5>
                        </div>
                        <div class="col-lg-12">
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th width="25%">Product</th>
                                            <th width="25%">Build</th>
                                            <th width="10%"></th>
                                            <th width="25%">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart->GetObject() as $unit)
                                            
                                        <tr class="w-100">
                                            <td> {{$unit->GetProduct()->name}} </td>
                                            <td> 
                                                @foreach ($unit->GetBuild() as $comp)
                                                    <div class="">{{$comp['name']}}</div>
                                                @endforeach
                                            </td>
                                            <td><strong> × {{$unit->quantity}}</strong></td>
                                            <td> ${{$unit->Price() * $unit->quantity}}</td>
                                        </tr>

                                        @endforeach
                                        
                                    </tbody>
                                    <tfoot>
                                        
                                        <tr class="order_total">
                                            <th colspan="2">Order Total</th>
                                            <td colspan="2"><strong>${{$cart->GetTotal()}}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    <div class="form-row text-center mt-20 mb-20">
                        @if ( count($cart->Get()) > 0)
                            
                        <button type="submit" class="btn-secondary">Confirm</button>
                        @endif
                    </div>
                </div>
            </form >
        </div>
        @else
        <div class="text-center">
            <div class="">Không có mặt hàng nào trong giỏ hàng.</div>
            <a href="{{route('user.shop')}}">Quay lại shop.</a>
        </div>
        @endif
        @else
        <div class="row">
        <div class="alert alert-danger">
            <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
            <strong>Vui Lòng Đăng Nhập Để Mua Hàng </strong> <a href="{{route('user.login',['page'=>'checkout'])}}">Login</a>
        </div>
        </div>
        @endif
    </div>
</div>
@stop