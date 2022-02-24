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
                        <h5 class="last-title mb-10 text-center">Creat New Account</h5>
                        <div class="col-lg-12 text-left mb-20">
                            <p class="register-page"> Already have an account? <a href="login.html">Log in instead!</a>
                            </p>
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label"> Name <span>*</span></label>
                            <input class="input-form" type="text" name="name">
                            @if ($errors->has('name'))
                                <span style="color:red">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label">Email<span>*</span></label>
                            <input class="input-form" type="email" name="email">
                        </div>
                        @if ($errors->has('email'))
                            <span style="color:red">{{ $errors->first('email') }}</span>
                        @endif
                        <div class="form_group col-12">
                            <label class="form-label">Phone<span>*</span></label>
                            <input class="input-form" type="text" name="phone">
                            @if ($errors->has('phone'))
                                <span style="color:red">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label">Address<span>*</span></label>
                            <input class="input-form" type="text" name="address">
                            @if ($errors->has('address'))
                                <span style="color:red">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="form_group col-12">
                            <label class="form-label">Avata<span>*</span></label>
                            <input class="input-form" type="file" id="avata_input" name="image">
                            @if ($errors->has('image'))
                                <span style="color:red">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
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
                <div class="prefix_img rounded-circle" prefixScale='1,1'>
                    <img src="" alt="" id="avata_holder">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script >
        $('#avata_input').change(function () {
            var avata = this.files[0];
            $('#avata_holder').attr('src',window.URL.createObjectURL(avata));
            mercuryJs.PrefixImageByScale('.prefix_img');
        })
    </script>
@endsection