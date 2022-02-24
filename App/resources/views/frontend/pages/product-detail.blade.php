@extends('frontend.master')
@section('main')

@php
    $proAttr = $pro->GetAttr();
@endphp

@include('frontend.template.report-form')

<input type="text" name="pro-id" id="pro-id" hidden value="{{$pro->id}}">
<div class="product-area product-details-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 mt-50">
                <!-- Product Zoom Image start -->
                <div class="product-slider-container arrow-center text-center">
                    
                    {{-- @foreach ($proAttr as $attr) --}}
                        <div class="product-item">
                            <a href="{{asset('upload/product/'.$pro->avata)}}"><img src="{{asset('upload/product/'.$pro->avata)}}" class="img-fluid" alt="" /></a>
                        </div>
                        @foreach ($pro->GetImage() as $img)
                            
                        <div class="product-item">
                            <a href="{{asset('upload/product/'.$pro->avata)}}"><img src="{{asset('upload/product/'.$img->name)}}" class="img-fluid" alt="" /></a>
                        </div>
                    
                        @endforeach

                    {{-- @endforeach --}}
                </div>
                <!-- Product Zoom Image End -->
                <!-- Product Thumb Zoom Image Start -->
                <div class="product-details-thumbnail arrow-center text-center">
                    
                    {{-- @foreach ($proAttr as $attr) --}}
                        <div class="product-item-thumb">
                            <img src="{{asset('upload/product/'.$pro->avata)}}" class="img-fluid" alt="" />
                        </div>
                        @foreach ($pro->GetImage() as $img)
                            
                        <div class="product-item-thumb">
                            <img src="{{asset('upload/product/'.$img->name)}}" class="img-fluid" alt="" />
                        </div>
                    
                        @endforeach

                    {{-- @endforeach --}}
                    
                </div>
            </div>
            <div class="col-lg-7 col-12 mt-45">
                <!-- Product Summery Start -->
                <div class="product-summery position-relative">
                    @if (Auth::check())
                        
                    <div class="float-end">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item cur-pointer report-btn" data-bs-toggle="modal" data-bs-target="#report-form" target="{{$pro->id}}" >Tố cáo</a></li>
                        </ul>
                    </div>
                    @endif
                    <div class="product-head">
                        <h1 class="product-title">{{$pro->name}}</h1>
                        <div class="product-arrows text-right">
                            <a href="#"><i class="fa fa-long-arrow-left"></i></a>
                            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="rating-meta d-flex">
                        <div class="rating">
                            @for ($i=0;$i<5;$i++)
                            <span class="{{($pro->AvgStar() > $i)?"yellow":''}}"><i class="fa fa-star" aria-hidden="true"></i></span>
                            @endfor
                        </div>
                        <ul class="meta d-flex">
                            <li>
                                <a href="{{route('user.info',$pro->user_id)}}"><i class="far fa-user"></i>{{$pro->UploaderName()}}</a>
                            </li>
                            <li>
                                <a><i class="fa fa-commenting-o"></i>Đánh giá({{$pro->GetComment()->count()}})</a>
                            </li>
                            
                        </ul>
                    </div>

                    <div class="price-box">
                        @if ($pro->sale != 0)
                        <span class="text-decoration-line-through text-muted">$ <span >{{$pro->price}}</span></span>
                        <span class="regular-price d-inline-block">$ <span id="baseprice">{{ $pro->Price()}}</span></span>
                        @else
                        <span class="regular-price">$ <span id="baseprice">{{ $pro->Price()}}</span></span>

                        @endif
                    </div>
                    
                    {{-- tạo nút theo attr --}}

                    <div class="version_box mb-3">
                        <table>
                            <tbody id="attr-table">

                            @foreach ($proAttr as $index=>$attr)
                                @php
                                    $stock = $attr->ParseStock();
                                @endphp
                                <tr>
                                    <td><h6>{{$attr->name}}</h6></td>
                                    <td>
                                        
                                        @foreach ($attr->ParseDetail() as $detail)
                                        <button class="btn btn-secondary m-1 rounded-pill {{($loop->first)?'active':''}} attr_select" 
                                            ofset="{{$detail[1]}}"
                                            key="{{$index}}"
                                            val="{{$loop->index}}"
                                            stock="{{$stock[$loop->index]}}">
                                            {{$detail[0]}}
                                        </button>
                                        @endforeach

                                    </td>
                                </tr>
                                
                            @endforeach

                            </tbody>

                        </table>

                    </div>

                    <div class="">
                        <button class="btn btn-secondary rounded-pill quantity_btn" role="minus">
                            <i class="fas fa-minus"></i>
                        </button>
                        <span id="quantiti">1</span>
                        <button class="btn btn-secondary rounded-pill quantity_btn" role="plus">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn btn-secondary rounded-pill" id="add_to_cart">Add to cart</button>
                    </div>

                    <div class="product-description">
                        <p>{{$pro->description}}</p>
                    </div>
                    <div class="product-meta">
                        <div class="desc-content">
                            <div class="social_sharing d-flex">
                                <h5>Category:</h5>
                                <p>{{$pro->CateName()}}</p>
                            </div>
                        </div>
                        <div class="desc-content">
                            <div class="social_sharing d-flex">
                                <h5>Brand:</h5>
                                <p>{{$pro->BrandName()}}</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Product Summery End -->
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-lg-3 col-sm-3 col-md-2">
                <!-- Product Description Tab Start -->
                <div class="product-desc-tab">
                    <ul class="nav flex-column" role="tablist">
                        <li><a href="#reviews" role="tab" data-bs-toggle="tab" aria-selected="true">Reviews</a></li>
                    </ul>
                </div>
                <!-- Product Description Tab End -->
            </div>
            <div class="col-lg-9 col-sm-9 col-md-10">
                <div class="product-desc-tab-content">
                    
                    <!-- Start Single Content -->

                        

                    <div role="tabpanel" id="reviews" class="product_tab_content fade active show">
                        <!-- Start RAting Area -->
                        @if (Auth::check())
                            @if (Auth::user()->OrderedThis($pro->id))
                            @php
                                $myComment = Auth::user()->MyComment($pro->id)
                            @endphp

                                <div class="comments_form">
                                    <h3>Để lại bình luận </h3>
                                    <div class="rating_wrap mt-20 row">
                                        <h4 class="last-title col-3">Your Rating</h4>
                                        <div class="rating_list col-4">
                                            <!-- Start Single List -->
                                            <div class="rating cur-pointer" id="rating_block" >
                                                @if ($myComment)
                                                    @for ($i = 0 ; $i<5 ; $i++)
                                                    <span class=" vote " 
                                                        style="color : @if ($i < $myComment->GetVote()->star) yellow @endif" 
                                                        star='{{$i+1}}'><i class="fa fa-star" ></i></span>
                                                        
                                                    @endfor
                                                    
                                                @else
                                                    <span class=" vote" style="color:  yellow" star='1'><i class="fa fa-star" ></i></span>
                                                    <span class=" vote" style="color:  yellow" star='2'><i class="fa fa-star" ></i></span>
                                                    <span class=" vote" style="color:  yellow" star='3'><i class="fa fa-star" ></i></span>
                                                    <span class=" vote" style="color:  yellow" star='4'><i class="fa fa-star" ></i></span>
                                                    <span class=" vote" style="color:  yellow" star='5'><i class="fa fa-star" ></i></span>
                                                @endif
                                            </div>
                                            <input type="number" hidden name="star">
                                            <!-- End Single List -->
                                        </div>
                                    </div>
                                    <div action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="avata col-2 ">

                                                        <div class="prefix_img rounded-circle" prefixScale="1,1">
                                                            <img src="{{asset('uploads/'.Auth::user()->avata)}}" alt="">
                                                        </div>
                                                    </div>
                                                    <textarea type="text" name="myComment" id="comment_input" class="col-8">{{($myComment)?$myComment->content:''}}</textarea>
                                                    <button class="button col-2" id="post-comment">Post Comment</button>

                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            @else
                                <p>Mua sản phẩm này để có thể bình luận</p>
                            @endif
                        
                        @else

                            <a class="" href="/login">Đăng nhập để bình luận.</a>

                        @endif

                        <!-- End RAting Area -->
                        <div class="review_address_inner mt-20">

                            <h5 class="text-muted my-3">Bình luận gần đây</h5>

                            <div class="review_box">

                                @foreach ($pro->GetComment() as $comment)
                                
                                @php
                                    $user = $comment->GetUser();
                                    $vote = $comment->GetVote();
                                @endphp

                                <!-- Start Single Review -->
                                <div class="pro_review my-2">
                                    <div class="col-1">
                                        <div class=" rounded-circle  prefix_img" prefixScale='1,1'>
                                            <img src="{{asset('uploads/'.$user->avata)}}" alt="review images">
                                        </div>
                                    </div>
                                    <div class="px-3 review_details col-11">
                                        <div class="review_info">
                                            <a class="last-title" href="#">{{$user->name}}</a>
                                            <div class="rating">
                                                @for ($i = 0 ; $i<5 ; $i++)
                                                    <span class="" style=" color :
                                                    @if ($i < $vote->star)
                                                    yellow
                                                    @endif
                                                    "><i class="fa fa-star"></i></span>
                                                    
                                                @endfor
                                            </div>
                                            
                                        </div>
                                        <div class="review_date">
                                            <span>{{$comment->created_at->format('d/m/y')}} at {{$comment->created_at->format('H:i')}}</span>
                                        </div>
                                        <p>{{$comment->content}}</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                                
                                @endforeach
                            </div>

                        </div>
                        
                        
                    </div>

                    
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-details-home2 mt-45 mb-15">
                    <div class="block-title">
                        <h6>Related Products</h6>
                    </div>
                    <div class="product-carousel-home2 slick-custom slick-custom-default nav-top">
                        @foreach ($pro->RelateProduct() as $relate)
                            
                        <div class="product-row">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a class="d-block" href="{{route('user.product',$relate->id)}}">
                                        <div class="prefix_img" PrefixScale="4,3">
                                            <img src="{{asset('upload/product/'.$relate->avata)}}" alt="" class="">

                                        </div>
                                    </a>
                                    @if ($relate->sale != 0)
                                        
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>{{$relate->sale}}%</span>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-bs-toggle="modal" data-bs-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">{{$relate->name}}</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price" >
                                            ${{$relate->price}}
                                        </span>
                                        {{-- <span class="old-price"><del>$350.50</del></span> --}}
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{asset('asset-frontend/js/report.js')}}"></script>
    <script src="{{asset('asset-frontend/js/page/product-detail.js')}}"></script>
    <script>
        SetReport('pros');
        ActiveReportButton();
    </script>
@endsection