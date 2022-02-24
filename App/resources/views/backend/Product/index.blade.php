@extends('backend.master')
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
            <li class="breadcrumb-item"><a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin/index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Products
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
    <div class="">
      <h3>Lọc sản phẩm</h3>
      <div >
        <div class="row">
          <div class="col-12 my-3">
            <div class="form-group">
              <label for="my-input">Tìm kiếm</label>
              <input id="search_val" class="form-control rounded" type="text" placeholder="Tìm kiếm theo tên sản phẩm" name="">
            </div>
          </div>


          <div class="mb-3 col-3">
            <label class="control-label">Lọc bởi</label>
            <select id="status-select" class="form-control" name="status" value="">
              <option value=""   >Mặc định</option>
              <option value="0"  >Chưa được duyệt</option>
              <option value="1"  >Đã được duyệt</option>
              <option value="10" >Ưu tiên</option>
            </select>
          </div>
          <div class="mb-3 col-3">
            <label class="control-label">Xắp xếp theo</label>
            <select id="orderBy" class="form-control" name="order" value="">
              <option value="name"  > Tên</option>
              <option value="price"  >Giá</option>
              <option value="status"  >Trạng thái</option>
              <option value="updated_at"  >Ngày cập nhật</option>
              <option value="created_at"  >Ngày thêm</option>
            </select>
          </div>
          <div class="mb-3 col-3">
            <label class="control-label">Thứ tự</label>
            <select id="rule" class="form-control" name="rule" value="">
              <option value="ASC"  >Tăng dần</option>
              <option value="DESC"  >Giảm dần</option>
            </select>
          </div>
          


          <div class="col-4">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#category-select" aria-expanded="false" aria-controls="category-select">
                  Lọc danh mục
                </button>
              </h2>
              <div id="category-select" class="accordion-collapse collapse" aria-labelledby="headingThree" >
                <div class="accordion-body">
                  <div class="row">

                    @foreach ($cateList as $cate)
                            
                      <div class="form-check col-4 form-switch">
                        <input class="form-check-input cate" cate_id="{{$cate->id}}" type="checkbox" value="{{$cate->id}}" id="cate_{{$cate->id}}">
                        <label class="form-check-label" for="cate_{{$cate->id}}">{{$cate->name}}</label>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#brand-select" aria-expanded="false" aria-controls="brand-select">
                  Lọc hãng
                </button>
              </h2>
              <div id="brand-select" class="accordion-collapse collapse" aria-labelledby="headingThree" >
                <div class="accordion-body">
                  <div class="row">

                    @foreach ($brandList as $brand)
                            
                      <div class="form-check col-4 form-switch">
                        <input class="form-check-input brand" brand_id="{{$brand->id}}" type="checkbox" value="{{$brand->id}}" id="brand_{{$brand->id}}">
                        <label class="form-check-label" for="brand_{{$brand->id}}">{{$brand->name}}</label>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sub-category-select" aria-expanded="false" aria-controls="sub-category-select">
                  Lọc danh mục con
                </button>
              </h2>
              <div id="sub-category-select" class="accordion-collapse collapse" aria-labelledby="headingThree" >
                <div class="accordion-body">
                  <div class="row">

                    @foreach ($subcateList as $catemini)
                            
                      <div class="form-check col-4 form-switch">
                        <input class="form-check-input catemini" catemini_id="{{$catemini->id}}" type="checkbox" value="{{$catemini->id}}" id="catemini_{{$catemini->id}}">
                        <label class="form-check-label" for="catemini_{{$catemini->id}}">{{$catemini->name}}</label>
                      </div>

                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-3 col-12">
            <Button class="btn btn-primary" id="search-submit">Tìm</Button>
          </div>

        </div>
        
      </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- Start Page Content -->
    <div class="row">
      <div class="col-12">
        <div class="card" >
          <div class="card-body " >
            <h4 class="card-title">Danh sách sản phẩm</h4>
            <h6 class="card-subtitle">
              
            </h6>
            <div class="table-responsive" style="overflow: visible;">
              <table id="file_export" class="table table-bordered">
                <thead>
                  <tr>
                    
                    <th>STT</th>
                    <th width="10%">Avata</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Giảm giá(%)</th>
                    <th>Trạng thái</th>
                    <th>Tương tác</th>
                    
                  </tr>
                </thead>
                <tbody id="data-dump">
                
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    
    <!-- -------------------------------------------------------------- -->
    <!-- End PAge Content -->
    <!-- -------------------------------------------------------------- -->
  </div>
@endsection

@section('js')
  <script src="{{asset('backend/assets/js/page/product.js')}}"></script>
  <script >
    AjaxStart()
  </script>
@endsection