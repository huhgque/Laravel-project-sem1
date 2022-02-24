@extends('backend.master')
@section('main')

@if(Session::has('success'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>{{Session::get('success')}}</strong>.
</div>
@endif


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
          Danh sách người dùng
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
            <li class="breadcrumb-item"><a href="/admin/user">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Danh sách người dùng
            </li>
          </ol>
        </nav>
        @if(Auth::user()->role == 10)
        <a href="{{Route('add_admin')}}" class="btn btn-danger text-white ms-3 d-none d-md-block">
          Tạo tài khoản admin
        </a>
        @endif
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
    <div class="">
      <h3>Lọc người dùng</h3>
      <div >
        <div class="row">
          <div class="col-12 my-3">
            <div class="form-group col-6 m-auto">
              <label for="my-input">Tìm kiếm</label>
              <input id="search_val" class="form-control rounded" type="text" placeholder="Tìm kiếm theo tên người dùng" name="">
            </div>
          </div>


          <div class="mb-3 col-3">
            <label class="control-label">Lọc bởi đối tượng</label>
            <select id="role-select" class="form-control" name="role" value="">
              <option value=""   >Mặc định</option>
              <option value="0"  >Người dùng</option>
              <option value="1"  >Admin</option>
            </select>
          </div>
          <div class="mb-3 col-3">
            <label class="control-label">Lọc bởi trạng thái</label>
            <select id="status-select" class="form-control" name="status" value="">
              <option value=""   >Bình thường</option>
              <option value="-1"  >Giới hạn</option>
              <option value="-2"  >Cấm</option>
            </select>
          </div>
          <div class="mb-3 col-3">
            <label class="control-label">Xắp xếp theo</label>
            <select id="orderBy" class="form-control" name="order" value="">
              <option value="name"  > Tên</option>
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
          

          <div class="my-3 col-12">
            <Button class="btn btn-primary" id="search-submit">Tìm</Button>
          </div>

        </div>
        
      </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- basic table -->
    <div class="row">
      <div class="col-12">
        <div class="card" >
          <div class="card-body " >
            <h4 class="card-title">Payment List</h4>
            <h6 class="card-subtitle">
              
            </h6>
            <div class="table-responsive" style="overflow: visible;">
              <table id="file_export" class="table table-bordered">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Avata</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>Status</th>
                    
                  </tr>
                </thead>
                <tbody id="data-dump">
                  
                </tbody>
              </table>
              {{-- cai j day --}}
              
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End PAge Content -->
    <!-- -------------------------------------------------------------- -->
  </div>
@endsection

@section('js')
  <script src="{{asset('backend/assets/js/page/user.js')}}"></script>
  <script>
    AjaxStart();
  </script>
@endsection