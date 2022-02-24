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
          Lịch sử mua hàng
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
              Lịch sử mua hàng
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
            <h4 class="card-title">Danh sách</h4>
            <h6 class="card-subtitle">
              
            </h6>
            <div class="table-responsive" style="overflow: visible;">
              <table id="file_export" class="table table-bordered">
                <thead>
                  <tr>
                    
                    <th>STT</th>
                    <th>Trạng thái</th>
                    <th>Tổng</th>
                    <th>Phương thức thanh toán</th>
                    <th>Sản phẩm</th>
                    <th>Địa chỉ</th>
                    <th>Ngày đặt</th>
                    <th></th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($myOrder as $value)
                  <tr>
                    
                    
                    <td>{{$loop->index+1}}</td>
                    <td>{{$value->OrderStatus()}}</td>
                    <td>${{$value->total}}</td>
                    <td>{{$value->Payment()->name}}</td>
                    <td>
                        @foreach ($value->Detail() as $detail)
                            
                        <div class="">{{$detail->GetProduct()->name}}</div>
                        @endforeach
                        
                    </td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->created_at->format('d/m/y')}}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-light-primary text-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="/me/history/{{$value->id}}">
                            <i data-feather="eye" class="feather-sm me-2"></i>
                            Xem
                          </a>                          
                          
                        </div>
                      </div>
                    </td>             
                  </tr>
                    @endforeach
                    <tr class="">
                      <td colspan="7">
                          @php
                              $maxPage = ceil($maxOrder/10); 
                              $page = (isset($_GET['page']))?$_GET['page']:1;
                              $start = $page - 2;
                              $end = $page + 2;
                              $dotStart = true;
                              $dotEnd = true;
                              if ($start <= 1) {
                                  $start = 1;
                                  $dotStart = false;
                              }
                              if ($end >= $maxPage) {
                                  $end = $maxPage;
                                  $dotEnd = false;
              
                              }
                          @endphp
                          <div class="page_select_box col-12 mt-5">
                              @if ($page != 1)
                                  <a class="page-select " href="/me/history?page={{$page-1}}" page="{{$page-1}}" >Pre</a>
                              @endif
              
                              @if($dotStart)
                              <span class="page-select">...</span>
                              @endif
                          
                              <?php for ($i=$start; $i <= $end; $i++) {?>
                              <a href="/me/history?page={{$i}}" class="page-select {{$page == $i ? 'page-current' : ''}}"  page="{{$i}}">{{$i}}</a>
                              <?php } ?>
              
                              @if($dotEnd)
                              <span class="page-select">...</span>
                              @endif
              
                              @if ($page < $maxPage)
                                  <a href="/me/history?page={{$page+1}}" class="page-select" page="{{$page+1}}" >Next</a>
                              @endif
                          </div>
                      </td>
                    </tr>
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