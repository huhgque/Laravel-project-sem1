@extends('frontend.master')
@section('main')
<div class="slider_section mb-60">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="slider_area slider-one mt-30">
                        @foreach ($slide as $img)
                            
                        <div class="single_slider" style="max-height: 500px">
                            <a href="{{$img->link_to}}" class="d-block h-100">
                                <img src="{{asset('uploads/'.$img->slide_image)}}" style="max-height: 500px" alt="" class="m-auto img-fluid">
                            </a>
                        </div>
                        @endforeach
                        <!-- Single Slider Start -->
                        <!-- Single Slider End -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======================
     slider area End
    ==========================-->


    <!--======================
    Shipping area Start
    ==========================-->
    <div class="shipping-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="all-shipping">
                        <div class="single-shipping">
                            <div class="block-wrapper">
                                <div class="shipping-content">
                                    <h5 class="ship-title">Free Delivery</h5>
                                    <p>Free shipping on all order</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-shipping">
                            <div class="block-wrapper2">
                                <div class="shipping-content">
                                    <h5 class="ship-title">Online Support 24/7</h5>
                                    <p>Free shipping on all order</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-shipping single-shipping-last">
                            <div class="block-wrapper3">
                                <div class="shipping-content">
                                    <h5 class="ship-title">Money Return</h5>
                                    <p>Free shipping on all order</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======================
    Shipping area End
    ==========================-->


    <!-- =================
    Product Area Start 
    =====================-->
    <div class="product-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs theme-tabs" role="tablist">
                        <li class="nav-item highlightselect">
                            <a class="nav-link active" id="one-tab" data-bs-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">New Arrival</a>
                        </li>
                        <li class="nav-item highlightselect">
                            <a class="nav-link" id="two-tab" data-bs-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">Bestseller</a>
                        </li>
                        <li class="nav-item highlightselect">
                            <a class="nav-link" id="three-tab" data-bs-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false">Featured Product</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <div class="product-thing slick-custom slick-custom-default">

                                @foreach ($newPro as $pro)
                                
                                    <!-- Single-Product-Start -->
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a class="w-100 d-block" href="{{route('user.product',$pro->id)}}">
                                            <div class="prefix_img" prefixScale="3,4">
                                                <img src="{{asset('upload/product/'.$pro->avata)}}" alt="" class="">

                                            </div>
                                        </a>
                                        @if ($pro->sale)
                                            
                                        <div class="box-label">
                                            <div class="label-product-new">
                                                <span>-{{$pro->sale}}%</span>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="{{route('user.product',$pro->id)}}">{{$pro->name}}</a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">${{number_format($pro->price)}}</span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- Single-Product-End -->
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <div class="product-thing slick-custom slick-custom-default">
                                @foreach ($topSalePro as $pro)
                                
                                    <!-- Single-Product-Start -->
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a class="w-100 d-block" href="{{route('user.product',$pro->id)}}">
                                            <div class="prefix_img" prefixScale="3,4">
                                                <img src="{{asset('upload/product/'.$pro->avata)}}" alt="" class="">

                                            </div>
                                        </a>
                                        @if ($pro->sale)
                                            
                                        <div class="box-label">
                                            <div class="label-product-new">
                                                <span>-{{$pro->sale}}%</span>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="{{route('user.product',$pro->id)}}">{{$pro->name}}</a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">${{number_format($pro->price)}}</span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- Single-Product-End -->
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
                            <div class="product-thing slick-custom slick-custom-default">
                                @foreach ($featPro as $pro)
                                
                                    <!-- Single-Product-Start -->
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a class="w-100 d-block" href="{{route('user.product',$pro->id)}}">
                                            <div class="prefix_img" prefixScale="3,4">
                                                <img src="{{asset('upload/product/'.$pro->avata)}}" alt="" class="">

                                            </div>
                                        </a>
                                        @if ($pro->sale)
                                            
                                        <div class="box-label">
                                            <div class="label-product-new">
                                                <span>-{{$pro->sale}}%</span>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="{{route('user.product',$pro->id)}}">{{$pro->name}}</a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">${{number_format($pro->price)}}</span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- Single-Product-End -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================
    Product Area End
    =====================-->


    <!-- =================
    Category Product Area Start 
    =====================-->
    <div class="product-category-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs category-tabs">

                        @foreach ($cateHight as $cate)
                        @php
                            $active = "";
                            if($loop->first){
                                $active = "active";
                            }
                        @endphp
                        <li class="nav-item highlightselect">
                            <a class="nav-link {{$active}}" id="{{$cate->Cate()->name}}-tab" data-bs-toggle="tab" href="#cate_{{$cate->id}}">
                                <span>{{$cate->Cate()->name}}</span>
                            </a>
                        </li>
                            
                        @endforeach
                        
                    </ul>
                    <div class="tab-content">
                        @foreach ($cateHight as $cate)
                        @php
                            $active = "";
                            if($loop->first){
                                $active = "show active";
                            }
                        @endphp
                        <div class="product-thing-tab slick-custom-default tab-pane fade {{$active}}" id="cate_{{$cate->id}}">

                            @foreach ($cate->Cate()->IsHighLight() as $pro)
                            
                                <!-- Single-Product-Start -->
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a class="w-100 d-block" href="{{route('user.product',$pro->id)}}">
                                            <div class="prefix_img" prefixScale="3,4">
                                                <img src="{{asset('upload/product/'.$pro->avata)}}" alt="" class="">

                                            </div>
                                        </a>
                                        @if ($pro->sale)
                                            
                                        <div class="box-label">
                                            <div class="label-product-new">
                                                <span>-{{$pro->sale}}%</span>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="{{route('user.product',$pro->id)}}">{{$pro->name}}</a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">${{number_format($pro->price)}}</span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- Single-Product-End -->
                            @endforeach
                            
                        </div>
                            
                        @endforeach
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================
    Product Area End
    =====================-->


    <!-- ================
    Brand Logo Area Start
    =====================-->
    <div class="brand-area mt-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="brand-logo">

                        @foreach ($brandList as $brand)
                            
                            <div class="single-brand">
                                <a class="position-relative">
                                    <img src="{{asset('uploads/'.$brand->image)}}" alt="" class="img-fluid">

                                </a>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================
    Brand Logo Area End
    =====================-->

    {{-- <!-- ================
    Latest Post Area Start
    =====================-->
    <div class="latest-post-area mt-50">
        <div class="container">
            <div class="row">
                <!-- Blog Post Area Start -->
                <div class="col-lg-6 col-12">
                    <div class="block-title">
                        <h6>From Our blog</h6>
                    </div>
                    <div class="blog-post-carousel slick-custom slick-custom-default nav-top">
                        <div class="blog-post-container">
                            <div class="single_blog mb-35">
                                <div class="blog_thumb single-banner">
                                    <a href="blog-fullwidth.html"><img src="assets/images/blog/blog-post-1.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="blog_content">
                                    <h6><a href="blog-fullwidth.html">This is Secound Post For XipBlog</a></h6>
                                    <div class="date_post mt-15 mb-15">
                                        <span>01 Jan 2020</span>
                                    </div>
                                    <p class="post-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...</p>
                                </div>
                            </div>
                            <div class="single_blog">
                                <div class="blog_thumb single-banner">
                                    <a href="blog-fullwidth.html"><img src="assets/images/blog/blog-post-2.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="blog_content">
                                    <h6><a href="blog-fullwidth.html">This is Secound Post For XipBlog</a></h6>
                                    <div class="date_post mt-15 mb-15">
                                        <span>01 Jan 2020</span>
                                    </div>
                                    <p class="post-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post-container">
                            <div class="single_blog mb-35">
                                <div class="blog_thumb single-banner">
                                    <a href="blog-fullwidth.html"><img src="assets/images/blog/blog-post-3.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="blog_content">
                                    <h6><a href="blog-fullwidth.html">This is Secound Post For XipBlog</a></h6>
                                    <div class="date_post mt-15 mb-15">
                                        <span>01 Jan 2020</span>
                                    </div>
                                    <p class="post-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...</p>
                                </div>
                            </div>
                            <div class="single_blog">
                                <div class="blog_thumb single-banner">
                                    <a href="blog-fullwidth.html"><img src="assets/images/blog/blog-post-4.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="blog_content">
                                    <h6><a href="blog-fullwidth.html">This is Secound Post For XipBlog</a></h6>
                                    <div class="date_post mt-15 mb-15">
                                        <span>01 Jan 2020</span>
                                    </div>
                                    <p class="post-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Post Area End -->
                <!-- Testimonial Area Start -->
                <div class="col-lg-6 col-12">
                    <div class="block-title">
                        <h6>What Client Say</h6>
                    </div>
                    <div class="testimonial-carousel slick-custom slick-custom-default nav-top">
                        <div class="single_testimonial text-center">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feuga</p>
                            <img src="assets/images/testimonial/testimonial-1.png" alt="" class="img-fluid">
                            <span class="name">Kathy Young</span>
                            <span class="job_title">CEO of SunPark</span>
                            <div class="rating">
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                            </div>
                        </div>
                        <div class="single_testimonial text-center">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feuga</p>
                            <img src="assets/images/testimonial/testimonial-2.jpg" alt="" class="img-fluid">
                            <span class="name">Alex Aya</span>
                            <span class="job_title">Art Director</span>
                            <div class="rating">
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Area End -->
            </div>
        </div>
    </div> --}}
    @section('script')
        <script>
            mercuryJs.PrefixImageByScale('.prefix_img')
            $('.highlightselect').click(function(){
                setTimeout(() => {
                    mercuryJs.PrefixImageByScale('.prefix_img')
                    
                }, 155);

            })
        </script>
    @endsection
    @stop