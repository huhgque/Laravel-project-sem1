@extends('frontend.me.master')
@section('main')
<div class="page-breadcrumb border-bottom">
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
      <div
        class="
          col-lg-9 col-md-8 col-xs-12
          d-flex
          justify-content-start justify-content-md-end
          align-self-center
        "
      >
        <nav aria-label="breadcrumb" class="mt-2">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="/me">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Sản phẩm đã đăng
            </li>
          </ol>
        </nav>
        <a href="{{Route('product.create')}}" class="btn btn-danger text-white ms-3 d-none d-md-block">
            Thêm 
        </a>
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
    <div class="row el-element-overlay">
      @foreach ($proList as $value)
        
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="el-card-item pb-3">
            <div
              class="el-card-avatar mb-3 el-overlay-1 w-100 overflow-hidden position-relative text-center"
            >
              <div class="prefix_img" prefixScale="4,3">

                <img
                  src="{{asset('upload/product/'.$value->avata) }}"
                  alt="user"
                />
              </div>
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
                </ul>
              </div>
            </div>
            <div class="d-flex no-block align-items-center">
              <div class="ms-3">
                <h4 class="mb-0">{{$value->name}}</h4>
                <span class="text-muted">${{number_format($value->price)}}</span>
              </div>
              <div class="ms-auto me-3">
                <button type="button" class="btn btn-dark btn-circle">
                  @switch($value->status)
                    @case(0)
                      <i class="fas fa-times"></i>
                      @break
                    
                    @case(1)
                      <i class="fas fa-check"></i>
                      @break
                    @case(10)
                      <i class="fas fa-star"></i>
                      @break

                    @default
                      
                  @endswitch
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End PAge Content -->
    <!-- -------------------------------------------------------------- -->
  </div>
@endsection