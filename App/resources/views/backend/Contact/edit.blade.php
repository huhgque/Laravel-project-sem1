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
          Edit Contact 
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
              Contact Edit
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
            <form action="{{route('contact.update',$contact->id)}}" method="POST" role="form">
                @method('PUT')
              @csrf
              <input type="hidden" value="{{$contact->id}}" name="id">
              <div class="form-body">
                <h5 class="card-title">About Contact</h5>
                <hr />
      
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="control-label">* Address</label>
                      <input type="text"id="address"name="address"class="form-control"placeholder="Input Category Mini Name" value="{{$contact->address}}"/>
                      @if($errors->has('address'))
                      <span style="color:red">{{$errors->first('address')}}</span>
                      @endif
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="control-label">* Phone Number</label>
                      <input type="number"id="phone"name="phone"class="form-control"placeholder="Input Category Mini Name" value="{{$contact->phone}}"/>
                      @if($errors->has('phone'))
                      <span style="color:red">{{$errors->first('phone')}}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="control-label">* Email Contact</label>
                      <input type="email"id="email"name="email"class="form-control"placeholder="Input Category Mini Name" value="{{$contact->email}}"/>
                      @if($errors->has('email'))
                      <span style="color:red">{{$errors->first('email')}}</span>
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
                  href="{{route('contact.index')}}"
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