@extends('frontend.me.master')
@section('main')

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
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a
                                href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin/index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Profile Page
                        </li>
                    </ol>
                </nav>

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
                        <center class="mt-4">
                            <label for="avata_input" class="w-50" >
                                <div class="prefix_img rounded-circle" prefixScale='1,1' >
                                    <img src="{{asset('uploads/'.Auth::user()->avata)}}"
                                    class="" id="avata_holder"/>
                                </div>
                            </label>
                            @if ($errors->has('avata'))
                            <div class="text-danger">
                                {{$errors->first('avata')}}
                            </div>
                            @endif
                            <h4 class="card-title mt-2">{{Auth::user()->name}}</h4>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                        <font class="font-weight-medium">{{Auth::user()->GetFollowing()->count()}}</font>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                        <font class="font-weight-medium">{{Auth::user()->GetAllMyProduct()->count()}}</font>
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
                        <h6>{{Auth::user()->email}}</h6>
                        <small class="text-muted pt-4 db">Phone</small>
                        <h6>{{Auth::user()->phone}}</h6>
                        <small class="text-muted pt-4 db">Address</small>
                        <h6>{{Auth::user()->address}}</h6>
                        
                        
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
                            <a class="nav-link" id="pills-setting-tab" data-bs-toggle="pill" href="#previous-month"
                                role="tab" aria-controls="pills-setting" aria-selected="false">Setting</a>
                        </li>
                    </ul>
                    <!-- Tabs -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="current-month" role="tabpanel"
                            aria-labelledby="pills-timeline-tab">
                            <div class="card-body">
                                <div class="profiletimeline mt-0">
                                    @foreach (Auth::user()->MyProduct() as $pro)
                                        

                                    <div class="sl-item align-items-start">
                                        <div class="sl-left " style="width: 40px">
                                            <div class="prefix_img rounded-circle" prefixScale="1,1">
                                                
                                                <img src="{{asset('uploads/'.Auth::user()->avata)}}"
                                                alt="user" class="" />
                                            </div>
                                        </div>
                                        <div class="sl-right col-10">
                                            <div>
                                                <a href="javascript:void(0)" class="link">{{Auth::user()->name}}</a>
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
                        
                        <div class="tab-pane fade" id="previous-month" role="tabpanel"
                            aria-labelledby="pills-setting-tab">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" hidden name="avata" id="avata_input">
                                    <div class="mb-3">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Full name" name="name"
                                                class="form-control form-control-line" value="{{Auth::user()->name}}"/>
                                                
                                        </div>
                                        @if ($errors->has('name'))
                                        <div class="text-danger">
                                            {{$errors->first('name')}}
                                        </div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="09*******" name="phone"
                                                class="form-control form-control-line" value="{{Auth::user()->phone}}"/>
                                        </div>
                                        @if ($errors->has('phone'))
                                        <div class="text-danger">
                                            {{$errors->first('phone')}}
                                        </div>
                                        @endif
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="col-sm-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="XX,YY,ZZ" name="address"
                                                class="form-control form-control-line" value="{{Auth::user()->address}}"/>
                                        </div>
                                        @if ($errors->has('address'))
                                        <div class="text-danger">
                                            {{$errors->first('address')}}
                                        </div>
                                        @endif
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="col-md-12">New Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" placeholder="New password"
                                                class="form-control form-control-line" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-md-12">Confirm New Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="conf_password" placeholder="Confirm"
                                                class="form-control form-control-line" />
                                        </div>
                                        @if ($errors->has('conf_password'))
                                        <div class="text-danger">
                                            {{$errors->first('conf_password')}}
                                        </div>
                                        @endif
                                    </div>
                                    
                                    <div class="mb-3">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">
                                                Update Profile
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
    

@endsection

@section('js')
    <script>
        $('#avata_input').change(function () {
            var avata = this.files[0];
            $('#avata_holder').attr('src',window.URL.createObjectURL(avata));
        })
    </script>
@endsection
