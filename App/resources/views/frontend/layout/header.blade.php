<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from template.hasthemes.com/circleshop/circleshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Sep 2021 16:19:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ElectroCity</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    @yield('style_last_priority')


    <link rel="shortcut icon" type="image/x-icon" href="{{asset('common/pageimg/icon.ico.png')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap Min Css -->
    <link rel="stylesheet" href="{{url('asset-frontend')}}/css/vendor/bootstrap.min.css">
    <!-- Font Awesome Css -->
    <!-- <link rel="stylesheet" href="{{url('asset-frontend')}}/css/vendor/font-awesome.min.css"> -->
    <!-- Material Design Font Css -->
    <link rel="stylesheet" href="{{url('asset-frontend')}}/css/vendor/material-design-iconic-font.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{url('asset-frontend')}}/css/vendor/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{url('asset-frontend')}}/css/plugins/magnific-popup.css">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="{{url('asset-frontend')}}/css/plugins/jquery-ui.min.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{url('asset-frontend')}}/css/plugins/plugins.css">

    <link rel="stylesheet" href="{{asset('common/fontawesome/css/all.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{url('asset-frontend')}}/css/style.css">

    <link rel="stylesheet" href="{{asset('common/Mercury.lib/css/all.css')}}">
    @yield('style_top_priority')

</head>

<body>
<div class="header-area">
        <!-- Header Top Start -->
        <div class="header-top full-border">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="header-top-left">
                            <p><span>Số điện thoại liên hệ: </span> {{$pageInfo->PageInfo()->phone}}</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="box-right">
                            <ul>
                                <li class="settings">
                                    
                                    <a class="drop-toggle d-flex flex-row justify-content-center" style="line-height: 45px">
                                        @if (Auth::check())
                                        <div class="" style="width: 45px">
                                            <div class="prefix_img rounded-circle" prefixScale="1,1">
                                                <img src="{{asset('uploads/'.Auth::user()->avata)}}" alt="">
                                            </div>
                                        </div>
                                            <span>{{Auth::user()->name}}</span>
                                        @else
                                            Account
                                        @endif
                                        <i class="fa fa-angle-down"  style="line-height: 45px"></i>
                                    </a>
                                    <ul class="box-dropdown drop-dropdown">
                                        @if (Auth::check())
                                            <li><a href="/me">Cá nhân</a></li>
                                            <li><a href="/logout">Logout</a></li>
                                            
                                        @else
                                            <li><a href="{{route('user.login')}}">Sign In</a></li>
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        <!-- Header Middle Start -->
        <div class="header-middle space-40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-6">
                        <div class="logo">
                            <a href="../"><img src="{{url('common')}}/pageimg/Electro City.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-6">
                        <div class="header-middle-inner">
                            <div class="search-container">
                                <form action="{{route('user.shop')}}" method="GET">
                                    <div class="top-cat">
                                        <select class="select-option" name="cate" id="category2">
                                            <option value="">All</option>

                                            @foreach ($allcate->all() as $cate)
                                                
                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="search_box">
                                        <input class="header-search" name="find" placeholder="Enter your search key ..." type="text">
                                        <button class="header-search-button" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="blockcart">
                                <a href="/cart" class="drop-toggle">
                                    <img src="{{url('asset-frontend')}}/images/cart/cart.png" alt="" class="img-fluid">
                                </a>
                                {{-- <div class="cart-dropdown drop-dropdown">
                                    <ul>
                                        <li class="mini-cart-details">
                                            <div class="innr-crt-img">
                                                <img src="{{url('asset-frontend')}}/images/cart/ear-headphones.jpg" alt="">
                                                <span>1x</span>
                                            </div>
                                            <div class="innr-crt-content">
                                                <span class="product-name">
                                                <a href="#">SonicFuel Wireless Over-Ear Headphones </a>
                                            </span>
                                                <span class="product-price">$32.30</span>
                                                <span class="product-size">Size:  S</span>
                                            </div>
                                        </li>
                                        <li class="mini-cart-details mb-30">
                                            <div class="innr-crt-img">
                                                <img src="{{url('asset-frontend')}}/images/cart/720-degree-cameras-dual.jpg" alt="">
                                                <span>1x</span>
                                            </div>
                                            <div class="innr-crt-content">
                                                <span class="product-name">
                                                <a href="#">720 Degree Panoramic HD 360.. </a>
                                            </span>
                                                <span class="product-price">$29.00</span>
                                                <span class="product-size">Dimension:  40cm X 60cm</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="subtotal-text">Subtotal</span>
                                            <span class="subtotal-price">$61.30</span>
                                        </li>
                                        <li>
                                            <span class="subtotal-text">Shipping</span>
                                            <span class="subtotal-price">$40.20</span>
                                        </li>
                                        <li>
                                            <span class="subtotal-text">Taxes</span>
                                            <span class="subtotal-price">$10.07</span>
                                        </li>
                                        <li>
                                            <span class="subtotal-text">Total</span>
                                            <span class="subtotal-price">$111.57</span>
                                        </li>
                                    </ul>
                                    <div class="checkout-cart">
                                        <a href="checkout.html">Checkout</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Middle End -->
        <!-- Header Bottom Start -->
        