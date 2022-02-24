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
        <h5 class="font-weight-medium text-uppercase mb-0">
          Thêm sản phẩm
        </h5>
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
            <li class="breadcrumb-item"><a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin/index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Thêm sản phẩm
            </li>
          </ol>
        </nav>
        <a href="{{route('product.index')}}" class="btn btn-danger text-white ms-3 d-none d-md-block">
          Quay lại
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
    <div class="row">
      <!-- Column -->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form action="{{Route('product.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
              <div class="form-body">
                <h5 class="card-title">Thông tin sản phẩm</h5>
                <hr />
                <div class="row">
                  <div class="col-8">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Tên sản phẩm</label>
                          @if ($errors->has('name'))
                          <div class="text-danger">
                              {{$errors->first('name')}}
                          </div>
                          @endif
                          <input
                            type="text"
                            id="firstName"
                            name="name"
                            class="form-control"
                            placeholder="Product name"
                          />
                        </div>
                      </div>
                      
                      <!--/span-->
                      
                      <!--/span-->
                    </div>
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="control-label">Ảnh đại diện sản phẩm</label>
                        @if ($errors->has('avata'))
                        <div class="text-danger">
                            {{$errors->first('avata')}}
                        </div>
                        @endif
                        <input
                          type="file"
                          id="avata"
                          name="avata"
                          class="form-control"
                          placeholder="Rounded Chair"
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Giá gốc</label>
                          @if ($errors->has('price'))
                          <div class="text-danger">
                              {{$errors->first('price')}}
                          </div>
                          @endif
                          <input
                            type="text"
                            id="baseprice"
                            name="price"
                            class="form-control"
                            placeholder="Product price"
                          />
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Giảm giá (%)</label>
                          @if ($errors->has('sale'))
                          <div class="text-danger">
                              {{$errors->first('sale')}}
                          </div>
                          @endif
                          
                        </div>
                      </div>
                      <div class="col-6">
                        <input
                          type="text"
                          id="sale"
                          name="sale"
                          class="form-control"
                          placeholder="Product sale(%)"
                        />
                      </div>
                      <div class="col-6">
                        <span id="sale_res"></span>
                        
                      </div>
                    </div>
                    <!--/row-->
                    <!--/row-->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Danh mục</label>
                          <select
                            name="cate_id"
                            class="form-select"
                            data-placeholder="Choose a Category"
                            tabindex="1"
                          >
                            @foreach ($cateList as $value)
                              <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Hãng</label>
                          <select
                            name="brand_id"
                            class="form-select"
                            data-placeholder="Choose a Category"
                            tabindex="1"
                          >
                            @foreach ($brandList as $value)
                              <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      
                      
                      <!--/span-->
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="col-md-12">
                      <div class="mb-3">
                        
                        <div class="col-12">
  
                          <div class="prefix_img" prefixScale="4,3">
                            <img src="" id="avata_holder" alt="" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!--/row-->
                
                <h5 class="card-title mt-5">Mô tả sản phẩm</h5>
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <textarea class="form-control" name="description" rows="4"></textarea>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mb-4">
                      <label for="VersionList"><h5 class="card-title mt-5">Danh sách cấu hình </h5></label>
                      <select id="VersionList" class="form-control" name="">
                        <option value="0">Cấu hình 1</option>
                        <option value="new" id="more_version">Thêm cấu hình</option>
                      </select>
                      <div class="text-danger">
                        @if ($errors->has('attr_label.*'))
                          <div class="">
                            {{ $errors->first('attr_label.*')}}
                          
                          </div>
                        @endif
                        
                        @if ($errors->has('stock.*'))
                          <div class="">
                            {{$errors->first('stock.*')}}
                          
                          </div>
                        @endif
                        
                        @if ($errors->has('attr_name.*.*'))
                          <div class="">
                            {{$errors->first('attr_name.*.*')}}
                          
                          </div>
                        @endif
                        @if ($errors->has('attr_val.*'))
                          <div class="">
                            {{$errors->first('attr_val.*.*')}}
                          
                          </div>
                        @endif
                        {{-- @if ($errors->has('attr_img'))
                          <div class="">
                            {{$errors->first('attr_img')}}
                          </div>
                        @endif
                        @if ($errors->has('attr_img.*.*'))
                          <div class="">
                            {{$errors->first('attr_img.*.*')}}
                          </div>
                        @endif
                         --}}
                      </div>
                      
                    </div>
                    
                    <div class="version_box">
                      
                    </div>
                    <div class="col-md-12 mb-5">
                      <h5 class="card-title mt-3">Ảnh mô tả</h5>
                      
                      <div class="btn btn-info waves-effect waves-light">
                        <span>Ảnh mô tả</span>
                        <input type="file" name="pro_img[]" multiple  class="upload image_selector" />
                      </div>
                      <div class="image_holder row p-3">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button
                  type="submit"
                  class="btn btn-success rounded-pill px-4"
                >
                  Xong
                </button>
                <a
                  href="{{route('product.index')}}"
                  class="btn btn-dark rounded-pill px-4"
                >
                  Bỏ
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Column -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End PAge Content -->
    <!-- -------------------------------------------------------------- -->
  </div>

@endsection


@section('js')
  <script src="{{asset('asset-frontend/js/page/me/addproduct.js')}}"></script>

  <script>
    getattrform();
  </script>
@endsection
