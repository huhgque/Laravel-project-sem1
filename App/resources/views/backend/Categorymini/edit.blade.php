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
          Edit Category Mini
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
            <li class="breadcrumb-item"><a href="{{route('category-mini.index')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Category Mini Edit
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
            <form action="{{route('category-mini.update',$category_mini->id)}}" method="POST" role="form">
                @method('PUT')
                @csrf
                <input type="hidden" value="{{$category_mini->id}}" name="id">
              <div class="form-body">
                <h5 class="card-title">About Category Mini</h5>
                <hr />
      
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="control-label">* Category Mini Name</label>
                      <input type="text"id="name"name="name"class="form-control"placeholder="Input Category Mini Name" value="{{$category_mini->name}}"/>
                      @if($errors->has('name'))
                      <span style="color:red">{{$errors->first('name')}}</span>
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
                        <input type="radio"id="status"name="status"class="form-check-input" value="0" {{($category_mini->status == 0)?'checked':''}}/>???n
                        </label>
                    </div>                 
                        <label class="form-check-label"id="status"name="status">
                          <input type="radio"id="status"name="status"class="form-check-input" value="1" {{($category_mini->status == 1)?'checked':''}}/> Hi???n
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
                      href="{{route('category-mini.index')}}"
                      class="btn btn-dark rounded-pill px-4"
                    >
                      Cancel
                    </a>
            </form>

                    <form class="d-inline" method="POST" action="{{route('category-mini.destroy',$category_mini->id)}}">
                      @method('DELETE')
                      @csrf
                      <button
                      type="submit"
                      class="btn btn-danger rounded-pill px-4"
                      >
                      Delete
                      </button>
                    </form>
                  </div>
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