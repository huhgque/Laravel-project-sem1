@extends('frontend.master')

@section('main')

@include('frontend.template.report-form')

<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li>
                            <h1><a href="index.html">Home</a></h1>
                        </li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================
    Breadcrumb Aera End
=========================-->

<div class="blog-details-area">
    <div class="container">
            
        

        <div class="row justify-content-center ">
            <div class="col-lg-9 order-lg-1">
                
                <ul class="list-group list-group-horizontal">
                    @if(Auth::check())
                    <li class="transition-normal p-0 list-group-item col-6 bg-frontend-theme" id="blog-newest"> <button  class="btn d-block w-100"> Mới nhất</button></li>
                    <li class="transition-normal p-0 list-group-item col-6" id="blog-follow"> <button  class="btn d-block w-100"> Theo dõi</button></li>
                    @else
                    <li class="p-0 list-group-item col-6 m-auto bg-frontend-theme "> <button id="blog-newest" class="btn d-block w-100 text-white"> Mới nhất</button></li>

                    @endif
                    
                </ul>
                    
                <div class=" bg-light" id="blog_holder">
                    
                </div>
                <!-- Blog Toolbar Start -->
                <div class="">
                    <button class="btn d-block w-25 m-auto btn-secondary" id="view-more-btn">Xem thêm</button>
                </div>
                <!-- Blog Toolbar End -->
            </div>
            
        </div>
    </div>
</div>

    <!-- =================
    Header Area  End
    =====================-->
    @section('style_top_priority')
        <link rel="stylesheet" href="{{asset('backend/assets/libs/quilljs/quill.snow.css')}}">
    @endsection
    
    @section('script')
    <script src="{{asset('asset-frontend/js/report.js')}}"></script>
    <script src="{{asset('backend/assets/libs/quilljs/quill.js')}}"></script>
    <script src="{{asset('asset-frontend/js/page/blog.js')}}"></script>
    <script>
        $(document).ready(function(){
            LoadBlog();
            SetReport('blogs');
            
        })
    </script>
    @stop
@stop