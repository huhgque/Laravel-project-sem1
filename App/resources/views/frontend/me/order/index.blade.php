@extends('frontend.me.master')
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
          Danh sách đơn hàng.
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
            <li class="breadcrumb-item"><a href="/me">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Danh sách đơn hàng
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
    <!-- basic table -->
    <div class="row">
      <div class="col-12">
        <div class="card" >
          <div class="card-body " >
            <h4 class="card-title">Danh sách đơn hàng</h4>
            <h6 class="card-subtitle">
              
            </h6>
            <div class="table-responsive" style="overflow: visible;">
              <table id="file_export" class="table table-bordered">
                <thead>
                  <tr>
                    
                    <th>STT</th>
                    <th>Order by</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Payment</th>
                    <th>Product</th>
                    <th>Status</th>
                    <th>Order date</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($orderList as $value)
                  <tr>
                    
                    
                    <td>{{$loop->index+1}}</td>
                    <td>{{$userModel->find($value->user_id)->name}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->Payment()->name}}</td>
                    <td>
                        @foreach ($value->DetailForShop() as $detail)
                            
                        <div class="">{{$detail->GetProduct()->name}} <strong> x {{$detail->quantity}}</strong></div>
                        @endforeach
                        
                    </td>
                    <td>{{$value->StatusForShop()}}</td>
                    <td>{{$value->created_at->format('d/m/y')}}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-light-primary text-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="/me/order/{{$value->id}}">
                            <i data-feather="eye" class="feather-sm me-2"></i>
                            Open
                          </a>
                          
                          
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