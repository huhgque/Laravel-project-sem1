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
        <h5 class="font-weight-medium text-uppercase mb-0">
          Tạo tài khoản admin
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
              Tạo admin
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
    <div class="row">
      <!-- Column -->
      <div class="col-lg-6 m-auto">
        <div class="card">
          <div class="card-body">
            <form action="" method="POST" role="form" enctype="multipart/form-data">
              @csrf
              <div class="form-body">
                <h5 class="card-title">Thông tin</h5>
                <hr />
                
                <div class="col-md-12">
                  <div class="mb-3">
                      <label class="control-label">*Email</label>
                      <input type="text" id="name" name="email" class="form-control"placeholder="Email"
                      />
                      @if($errors->has('email'))
                      <span style="color:red">{{$errors->first('email')}}</span>
                      @endif
                    </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                      <label class="control-label">*Password</label>
                      <input type="password" id="name" name="password" class="form-control"placeholder="Password"
                      />
                      @if($errors->has('password'))
                      <span style="color:red">{{$errors->first('password')}}</span>
                      @endif
                    </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                      <label class="control-label">*Confirm password</label>
                      <input type="password" id="name" name="confirm_password" class="form-control"placeholder="Confirm password"
                      />
                      @if($errors->has('confirm_password'))
                      <span style="color:red">{{$errors->first('confirm_password')}}</span>
                      @endif
                    </div>
                </div>
                  <!--/span-->
                <div class="form-actions">
                  <button
                    type="submit"
                    class="btn btn-success rounded-pill px-4"
                  >
                    Save
                  </button>
                  <a
                    href="/admin/user"
                    class="btn btn-dark rounded-pill px-4"
                  >
                    Cancel
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      
      </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End PAge Content -->
    <!-- -------------------------------------------------------------- -->
    </div>

@endsection
@section('script')
    <script >
        $('#avata_input').change(function () {
            var avata = this.files[0];
            $('#avata_holder').attr('src',window.URL.createObjectURL(avata));
            mercuryJs.PrefixImageByScale('.prefix_img');
        })
    </script>
@endsection