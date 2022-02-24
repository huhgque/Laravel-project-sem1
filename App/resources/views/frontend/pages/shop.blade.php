@extends('frontend.master')

@section('main')
    <!-- =================
    Header Area  End 
    =====================-->

    <!--=====================
    Breadcrumb Aera Start
    =========================-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li>
                                <h1><a href="index.html">Home</a></h1>
                            </li>
                            <li>Shop</li>
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
    Shop area Start
    ==========================-->
    <div class="shop-area" id="toplist">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <aside class="sidebar-widget mt-50">
                        
                        <div class="widget_inner widget-background mt-50">
                            <div class="widget_list widget_filter">
                                <div class="sidebar-title">
                                    <h4 class="title-shop">Search by name</h4>
                                </div>
                                <input type="text" class="form-control" id="search_val" placeholder="Search name" name="text" />
                            </div>
                            <div class="widget_list widget_filter">
                                <div class="sidebar-title">
                                    <h4 class="title-shop">Filter by Price</h4>
                                    <input type="text" id="maxPrice" hidden value="{{$cart->AllProductMaxPrice()}}">
                                </div>
                                <form>
                                    
                                    <div id="slider-range"></div>
                                    <input type="text" name="text" id="amount" disabled/>
                                </form>
                            </div>
                            <div class="widget_list widget_categories mt-20">
                                <div class="sidebar-title">
                                    <h4 class="title-shop">Categories</h4>
                                </div>
                                <ul>
                                    @foreach ($cateList as $cate)
                                        
                                    <li>
                                        <input type="checkbox" class="cate" cate_id="{{$cate->id}}">
                                        <a href="#">{{$cate->name}}</a>
                                        <span class="checkmark"></span>

                                    </li>

                                    @endforeach

                                    
                                </ul>
                            </div>
                            <div class="widget_list widget_categories mt-20">
                                <div class="sidebar-title">
                                    <h4 class="title-shop">Manufacturer</h4>
                                </div>
                                <ul>

                                    @foreach ($brandList as $brand)
                                        
                                    <li>
                                        <input type="checkbox" class='brand' brand_id="{{$brand->id}}">
                                        <a href="#">{{$brand->name}}</a>
                                        <span class="checkmark"></span>
                                    </li>

                                    @endforeach

                                    
                                </ul>
                            </div>
                            <div class="widget_list widget_categories mt-20">
                                <div class="sidebar-title">
                                    <h4 class="title-shop">Sub category</h4>
                                </div>
                                <ul>
                                    @foreach ($cateMiniList as $cateMini)
                                        
                                    <li>
                                        <input type="checkbox" class="catemini" catemini_id="{{$cateMini->id}}">
                                        <a href="#">{{$cateMini->name}}</a>
                                        <span class="checkmark"></span>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            <button class="btn btn-primary rounded-pill" id="search-submit">Filter</button>

                        </div>
                        
                    </aside>
                </div>
                <div class="col-lg-9 order-first order-lg-last">
                    
                    <!-- Shop Toolbar Start -->
                    <div class="toolbar-shop mb-50">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_3" class="btn-grid-3 active"></button>
                            <button data-role="grid_list" class="btn-list"></button>
                        </div>
                        <div class="page-amount">
                        </div>
                        <div class="col-5 row flex-row justify-content-end">

                            <div class="col-8 d-flex justify-content-end">
                                <div class="nice-select select-option">
                                    <select name="select" id="orderBy">
                                        <option class="option" value="">Short By Default</option>
                                        <option class="option" value="name">Short By Name</option>
                                        <option class="option" value="updated_at">Short By Date</option>
                                        <option class="option" value="price">Short By Price</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-2 text-center"><span id="rule" rule="DESC" class="d-inline-block rotate-0 transition-normal cur-pointer" style="font-size: 24px"><i class="fas fa-sort-down"></i></span></div>

                        </div>
                    </div>
                    <!-- Shop Toolbar End -->
                    <!-- Shop Wrapper Start -->
                    <div class="" id="dataholder">
                        
                        
                    </div>
                    <!-- Shop Wrapper End -->
                    <!-- Shop Toolbar Start -->
                    
                    <!-- Shop Toolbar End -->
                </div>
            </div>
        </div>
    </div>
    <!--======================
    Shop area End
    ==========================-->

    <!--===================
     footer area start 
    ===================-->
    @stop

    @section('script')

        <script src="{{asset('asset-frontend/js/page/shop.js')}}"></script>
        <script>
            @if (isset($_GET['only']))
                SetOnly( {{ $_GET['only'] }} );
            @endif
            @if (isset($_GET['cate']))
                SetCate( {{ $_GET['cate'] }} );
            @endif
            @if (isset($_GET['find']))
                SetFind( `{{ $_GET['find'] }}`);
            @endif
            AjaxStart();
        </script>
    @endsection
