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
          Add Category
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
              Category Edit
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
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form action="{{route('category.store')}}" method="POST" role="form">
              @csrf
              <div class="form-body">
                <h5 class="card-title">About Category</h5>
                <hr />
      
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="control-label">* Category Name</label>
                      <input type="text" id="name" name="name" class="form-control"placeholder="Category Name"
                      />
                      @if($errors->has('name'))
                      <span style="color:red">{{$errors->first('name')}}</span>
                      @endif
                    </div>
                  </div>
      
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="control-label">* Sub Category</label>
                      @if($errors->has('catemini'))
                      <span class="d-block" style="color:red">{{$errors->first('catemini')}}</span>
                      @endif

                      <div class="my-3">
                        <label class="control-label">Search Sub Category</label>
                        <input type="text" class="form-control"placeholder="Search value"
                        />
                      <div class="row p-3">

                        @foreach ($category_mini as $catemini)
                          
                        <div class="form-check col-3 form-switch">
                          <input class="form-check-input" name="catemini[]" type="checkbox" value="{{$catemini->id}}" id="catemini_{{$catemini->id}}">
                          <label class="form-check-label" for="catemini_{{$catemini->id}}">{{$catemini->name}}</label>
                        </div>
                        @endforeach

                      </div>

                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label>* Status</label>
                      <br />
                      <div class="form-check">
                        <label class="form-check-label"id="status"name="status">
                        <input type="radio"id="status"name="status"class="form-check-input" value="0"/>Ẩn
                        </label>
                    </div>                 
                        <label class="form-check-label"id="status"name="status">
                          <input type="radio"id="status"name="status"class="form-check-input" value="1" checked/> Hiện
                        </label>
                      </div>
                    </div>
                  </div> 
                  <div class="form-actions">
                <button
                  type="submit"
                  class="btn btn-success rounded-pill px-4"
                >
                  Save
                </button>
                <a
                  href="{{route('category.index')}}"
                  class="btn btn-dark rounded-pill px-4"
                >
                  Cancel
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

@section('head')
  <link rel="stylesheet" href="{{asset('backend/assets/libs/customswitch/switch.css')}}">
@endsection

@section('js')
  <script src="{{asset('backend/assets/libs/customswitch/switch.js')}}"></script>
  <script>
    $(function () {
      $("#chkToggle2").bootstrapToggle();
    });
  </script>
@endsection