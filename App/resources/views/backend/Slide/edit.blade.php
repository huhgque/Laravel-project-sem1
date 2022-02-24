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
          Slide Mini
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
            Slide Edit
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
            <form action="{{route('slide.update',$slide->id)}}" method="POST" role="form" enctype="multipart/form-data">
            @method('PUT')  
            @csrf
            <input type="hidden" value="{{$slide->id}}" name="id">
              <div class="form-body">
                <h5 class="card-title">About Slide</h5>
                <hr />
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="control-label">* Slide Image</label>
                      <input type="file"id="slide_image"name="slide_image"class="form-control"placeholder="Input Category Mini Name" originName ="{{$slide->slide_image}}"/>
                      @if($errors->has('image'))
                      <span style="color:red">{{$errors->first('image')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="control-label">* Slide Link</label>
                      <input type="string"id="link_to"name="link_to"class="form-control"placeholder="Input Category Mini Name" value="{{$slide->link_to}}"/>
                      @if($errors->has('link_to'))
                      <span style="color:red">{{$errors->first('link_to')}}</span>
                      @endif
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
                  href="{{route('slide.index')}}"
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