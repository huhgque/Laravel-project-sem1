@extends('frontend.master')

@section('style_last_priority')
<link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" />

@endsection
@section('main')
@include('frontend.template.report-form')
    <input type="text" id="user_id" value="{{$user->id}}" hidden>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb border-bottom">
        <div class="row">
            <div
                class="
                  col-lg-3 col-md-4 col-xs-12
                  justify-content-start
                  d-flex
                  align-items-center
                ">
                <h5 class="font-weight-medium text-uppercase mb-0">
                    Profile Page
                </h5>
            </div>
            <div
                class="
                  col-lg-9 col-md-8 col-xs-12
                  d-flex
                  justify-content-start justify-content-md-end
                  align-self-center
                ">
               

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- -------------------------------------------------------------- -->
    <!-- Container fluid  -->
    <!-- -------------------------------------------------------------- -->
    <div class="container-fluid page-content">
        <!-- -------------------------------------------------------------- -->
        <!-- Start Page Content -->
        <!-- -------------------------------------------------------------- -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        @if (Auth::check())
                            <div class="float-end">
                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    
                                    <li><a class="dropdown-item cur-pointer report-btn" data-bs-toggle="modal" data-bs-target="#report-form" target="{{$user->id}}" >Tố cáo</a></li>
                                </ul>
                            </div>
                        @endif
                        <center class="mt-4">
                            <label for="avata_input" class="w-50" >
                                <div class="prefix_img rounded-circle" prefixScale='1,1' >
                                    <img src="{{asset('uploads/'.$user->avata)}}"
                                    class="" id="avata_holder"/>
                                </div>
                            </label>
                            @if ($errors->has('avata'))
                            <div class="text-danger">
                                {{$errors->first('avata')}}
                            </div>
                            @endif
                            <h4 class="card-title mt-2">{{$user->name}}</h4>
                            
                            @if ((Auth::check() && Auth::user()->id != $user->id))
                            
                                <button class="btn btn-info transition-normal text-white" id="follow_btn" >
                                    @if (Auth::user()->isFollowing($user->id))
                                        <span class="state">Bỏ theo dõi</span> 
                                    @else
                                        <span class="state">Theo dõi</span> 
                                    @endif
                                </button>

                            @endif
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4">
                                    <a class="link" title="Follower"><i class="icon-people"></i>
                                        <font class="font-weight-medium" id="follow_number">{{$user->GetFollowed()->count()}}</font>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="link"><i class="fas fa-cubes" title="Product verified"></i></i>
                                        <font class="font-weight-medium">{{$user->GetAllMyProduct()->count()}}</font>
                                    </a>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="card-body">
                        <small class="text-muted">Email address </small>
                        <h6>{{$user->email}}</h6>
                        <small class="text-muted pt-4 db">Phone</small>
                        <h6>{{$user->phone}}</h6>
                        <small class="text-muted pt-4 db">Address</small>
                        <h6>{{$user->address}}</h6>
                        
                        
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Tabs -->
                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-timeline-tab" data-bs-toggle="pill" href="#current-month"
                                role="tab" aria-controls="pills-timeline" aria-selected="true">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{route('user.shop',['only'=>$user->id])}}">Shop</a>
                        </li>
                        
                        
                    </ul>
                    <!-- time line -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="current-month" role="tabpanel"
                            aria-labelledby="pills-timeline-tab">
                            <div class="card-body">
                                <div class="profiletimeline mt-0">

                                    @foreach ($user->MyProduct() as $pro)
                                        

                                    <div class="sl-item align-items-start">
                                        <div class="sl-left " style="width: 40px">
                                            <div class="prefix_img rounded-circle" prefixScale="1,1">
                                                
                                                <img src="{{asset('uploads/'.$user->avata)}}"
                                                alt="user" class="" />
                                            </div>
                                        </div>
                                        <div class="sl-right col-10">
                                            <div>
                                                <a href="javascript:void(0)" class="link">{{$user->name}}</a>
                                                <span class="sl-date">{{$pro->updated_at->format('d/m/y')}}</span>
                                                <p>
                                                    Post a product
                                                    <a href="{{route('user.product',$pro->id)}}">
                                                        {{$pro->name}}</a>
                                                </p>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 mb-3">
                                                        <img src="{{asset('upload/product/'.$pro->avata)}}"
                                                        class="img-fluid rounded" />
                                                    </div>
                                                    @foreach ($pro->GetImage() as $img)
                                                    <div class="col-lg-3 col-md-6 mb-3">
                                                        <img src="{{asset('upload/product/'.$img->name)}}"
                                                        class="img-fluid rounded" />
                                                    </div>
                                                    @endforeach
                                                    
                                                </div>
                                                <div class="like-comm">
                                                    <a class="link me-2"><i class="far fa-comment-alt"></i> {{$pro->GetComment()->count()}}</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />

                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- -------------------------------------------------------------- -->
        <!-- End PAge Content -->
        <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Container fluid  -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- footer -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- End footer -->
    <!-- -------------------------------------------------------------- -->

@endsection

@section('script')
    <script src="{{asset('asset-frontend/js/page/userinfo.js')}}"></script>
    <script src="{{asset('asset-frontend/js/report.js')}}"></script>
    <script >
        SetReport('users')
        ActiveReportButton()
    </script>
@endsection
