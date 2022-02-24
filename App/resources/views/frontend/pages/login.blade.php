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
                        <li>Login</li>
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
                    <form class="form-row" method="POST" role="form">
                        @csrf
                        <h1 class="last-title mb-30 text-center">Login to Your Account</h1>
                        @if (Session::has('msg'))
                        <p class="text-success text-center">{{Session::get('msg')}}</p>
                            
                        @endif
                        
                        <div class="form_group col-12">
                            <label class="form-label">Email <span>*</span></label>
                            <input class="input-form" type="text" name="email">
                            @if($errors->has('email'))
                            <span style="color:red">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form_group col-12 position-relative">
                            <label class="form-label">Password <span>*</span></label>
                            <input class="input-form input-login" id="password" type="password" name="password">
                            <button class="show-btn show-pass" for="password" type="button" >Show</button>
                            @if($errors->has('password'))
                            <span style="color:red">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <div class="form_group group_3 col-lg-3">
                            <button class="login-register" type="submit">Login</button>
                        </div>
                        <div class="col-lg-12 text-left">
                            <a class="lost-password" href="/pass_reset">Quên mật khẩu?</a>
                        </div>
                        <div class="col-lg-12 text-left">
                            <p class="register-page"> không có tài khoản? <a href="/register">Đăng ký ở đây</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')
    <script>
        $('.show-pass').click(function(){
            var fr = $(this).attr('for');
            var type = $('#'+fr).attr('type');
            if(type == 'password'){
                $('#'+fr).attr('type','text')
                
            }else{
                $('#'+fr).attr('type','password')

            }
        })
    </script>
@endsection