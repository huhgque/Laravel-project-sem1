@extends('backend.master')
@section('main')

@if(Session::has('success'))
<div class="alert alert-success">
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
          Contact List
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
            <li class="breadcrumb-item"><a href="{{route('contact.index')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Contact List
            </li>
          </ol>
        </nav>
        <a href="{{Route('contact.create')}}" class="btn btn-danger text-white ms-3 d-none d-md-block">
          Add new
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
    <!-- basic table -->
    <div class="row">
      <div class="col-12">
        <div class="card" >
          <div class="card-body " >
            <h4 class="card-title">Contact List</h4>
            <h6 class="card-subtitle">
              
            </h6>
            <div class="table-responsive" style="overflow: visible;">
              <table id="file_export" class="table table-bordered">
                <thead>
                  <tr>
                   
                    <th>STT</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email Contact</th>
                    <th>Tương tác</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($contact as $value)
                  <tr>
                    
                    <td>{{$loop->index+1}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->email}}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-light-primary text-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          
                          <a class="dropdown-item" href="{{Route('contact.edit',$value->id)}}">
                            <i data-feather="edit-2" class="feather-sm me-2"></i>
                            Edit
                          </a>
                          <form class="dropdown-item" style="cursor: pointer;" action="{{Route('contact.destroy',$value->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn p-0 text-danger" type="submit">

                              <span type="submit" data-feather="trash-2"
                                class="feather-sm me-2"
                              >
                              </span>Delete
                            </button>
                          </form>
                          
                        </div>
                      </div>
                    </td>                  
                  </tr>
                    @endforeach
                </tbody>
              </table>
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