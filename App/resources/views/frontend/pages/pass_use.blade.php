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
                        <li>Register</li>
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
    Register area Start
    ==========================-->
<div class="register-area login-area mt-25">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="checkout_info mb-20">
                    <form class="form-row" action="#" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        @if(Session::has('success'))
                        
                        <span style="color:red">{{Session::get('success')}}</span>    
                      
                        @endif
                        <h5 class="last-title mb-10 text-center">Enter New Password</h5>
                        
                        <div class="form_group col-12">
                            <label class="form-label">Email<span>*</span></label>
                            <input class="input-form" type="email" name="email" value="{{$email}}">
                        </div>
                        @if ($errors->has('email'))
                            <span style="color:red">{{ $errors->first('email') }}</span>
                        @endif
                        <div class="form_group col-12">
                            <label class="form-label">Password <span>*</span></label>
                            <input class="input-form input-login" type="password" name="password">
                            <button class="show-btn">Show</button>
                            @if ($errors->has('password'))
                                <span style="color:red">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label">Confirm password<span>*</span></label>
                            <input class="input-form input-login" type="password" name="confirm_password">
                            <button class="show-btn">Show</button>
                            @if ($errors->has('confirm_password'))
                                <span style="color:red">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>
                        <div class="form-row mt-20">
                            <input type="submit" class="btn-secondary" value="Register">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-3">
                <div class="prefix_img" prefixScale='1,1'>
                    <img src="" alt="" id="avata_holder">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

