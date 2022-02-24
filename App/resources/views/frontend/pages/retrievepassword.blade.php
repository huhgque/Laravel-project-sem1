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
                        <li>Lost Your Password</li>
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
login area Start
==========================-->
<div class="login-area mt-25">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="checkout_info mb-20">
                    <form class="form-row" action="#" method="POST" role="form">
                        @csrf
                       
                        <h1 class="last-title mb-30 text-center">Lost Your Password</h1>
                        @if(Session::has('msg'))
                        
                        <p class="text-success text-center">{{Session::get('msg')}}</p>    
                        
                        @endif
                        @if(Session::has('fail'))
                        
                        <p class="text-center text-danger">{{Session::get('fail')}}</p>    
                        
                        @endif
                        <div class="form_group col-12">
                            <label class="form-label">Email <span>*</span></label>
                            <input class="input-form" type="text" name="email">
                            
                            @if($errors->has('email'))
                            <span style="color:red">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form_group group_3 col-lg-3">
                            <button class="login-register" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop