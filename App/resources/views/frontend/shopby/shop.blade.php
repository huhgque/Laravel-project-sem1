@extends('frontend.master')

@section('style_last_priority')
<link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" />

@endsection
@section('main')

  <div class="page-breadcrumb border-bottom">
    <div class="container">
  
      <div class="row">
        <div
          class="
            col-lg-3 col-md-4 col-xs-12
            justify-content-start
            d-flex
            align-items-center
          "
          >
          <h5 class="font-weight-medium text-uppercase mb-0">Products</h5>
        </div>
        
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
    <div class="container">
      <div class="row el-element-overlay">
        @foreach ($proList as $value)
          
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="el-card-item pb-3">
              <div
                class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center"
              >
                <img
                  src="{{asset('upload/product/'.$value->avata) }}"
                  class="d-block position-relative w-100"
                  alt="user"
                />
                <div class="el-overlay w-100 overflow-hidden">
                  <ul
                    class="
                      list-style-none
                      el-info
                      text-white text-uppercase
                      d-inline-block
                      p-0
                    "
                  >
                    <li class="el-item d-inline-block my-0 mx-1">
                      <a
                        class="
                          btn
                          default
                          btn-outline
                          image-popup-vertical-fit
                          el-link
                          text-white
                          border-white
                        "
                        href="{{Route('product.show',$value->id)}}"
                        ><i class="icon-magnifier"></i
                      ></a>
                    </li>
                    <li class="el-item d-inline-block my-0 mx-1">
                      <a
                        class="
                          btn
                          default
                          btn-outline
                          el-link
                          text-white
                          border-white
                        "
                        href="javascript:void(0);"
                        ><i class="icon-link"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="d-flex no-block align-items-center">
                <div class="ms-3">
                  <h4 class="mb-0">{{$value->name}}</h4>
                  <span class="text-muted">globe type chair for rest</span>
                </div>
                <div class="ms-auto me-3">
                  <button type="button" class="btn btn-dark btn-circle">
                    {{$value->GetAttr()->count()}}
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
      
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- End PAge Content -->
    <!-- -------------------------------------------------------------- -->
  </div>
@endsection
@section('script')
    <script src="{{asset('asset-frontend/js/page/userinfo.js')}}"></script>
    
@endsection