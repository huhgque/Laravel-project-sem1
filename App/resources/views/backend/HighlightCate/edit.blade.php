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
        Edit Highlight Category 
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
            Highlight Category Edit
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
            <form action="{{route('highlight-cate.update',$hl_cate->id)}}" method="POST" role="form">
            @method('PUT')  
            @csrf
                <input type="hidden" value="{{$hl_cate->id}}" name="id">
              <div class="form-body">
                <h5 class="card-title">About Highlight Category</h5>
                <hr />
      
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="control-label">-- Highlight Category Id --</label>
                      <select  class="form-select"name="cate_id" id="" required>
                      @foreach($category as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                          @endforeach
                      </select>
                      @if($errors->has('cate_id'))
                      <span style="color:red">{{$errors->first('cate_id')}}</span>
                      @endif
                    </div>
                  </div>
                  <!--/span-->
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label>* Status</label>
                      <br />
                      <div class="form-check">
                        <label class="form-check-label"id="status"name="status">
                        <input type="radio"id="status"name="status"class="form-check-input" value="0" {{($hl_cate->status == 0)?'checked':''}}/>Ẩn
                        </label>
                    </div>                 
                        <label class="form-check-label"id="status"name="status">
                          <input type="radio"id="status"name="status"class="form-check-input" value="1"{{($hl_cate->status == 1)?'checked':''}} checked/> Hiện
                        </label>
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
                  href="{{route('highlight-cate.index')}}"
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