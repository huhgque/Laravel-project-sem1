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
          Danh sách tố cáo người dùng
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
              Danh sách tố cáo người dùng
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
          <div class="card-body">
            <h4 class="card-title">Danh sách tố cáo người dùng</h4>
            <div class="table-responsive" style="overflow: visible !important">
              {{-- <table id="file_export" class="table table-bordered"> --}}
              <table  class="table table-bordered"  >
                <thead>
                  <tr>
                    
                    <th>Tương tác</th>
                    <th>Tố cáo bởi</th>
                    <th>Đối tượng bị tố cáo</th>
                    <th>Lý do tố cáo</th>
                    <th>Trạng thái tố cáo này</th>
                    <th>Ngày tố cáo</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($reportList as $report)
                  <tr>
                      
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td><a href="{{route('user.info',$report->user_id)}}">{{$userModel->find($report->user_id)->name}}</a></td>
                    <td><a href="/shop/{{$report->report_id}}">{{$userModel->find($report->report_id)->name}}</a></td>
                    <td>{{$report->why}}</td>
                    <td><div class="form-group">
                      <select id="statuschange" target="{{$report->id}}" class="form-control" name="">
                        <option value="0" {{($report->isAnswered == 0)?"selected":""}}>Chưa phản hồi</option>
                        <option value="1" {{($report->isAnswered == 1)?"selected":""}}>Đã phản hồi</option>
                      </select>
                    </div></td>
                    <td>{{$report->Status()}}</td>
                    <td>{{$report->created_at->format('d/m/y')}}</td>

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

@section('js')
  <script src="{{asset('backend/assets/js/page/statchange.js')}}"></script>
  <script>
    SetTable('report-users');
  </script>
@endsection