
@extends('backend.master')
@section('main')
  
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
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
            <h5 class="font-weight-medium text-uppercase mb-0">Dashboard</h5>
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
                  Dashboard
                </li>
              </ol>
            </nav>
            
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="page-content container-fluid">
        <!-- ============================================================== -->
        <!-- Card Group  -->
        <!-- ============================================================== -->
        <div class="card-group">
          <div class="card p-2 p-lg-3">
            <div class="p-lg-3 p-2">
              <div class="d-flex align-items-center">
                <button
                  class="btn btn-circle btn-danger text-white btn-lg"
                  href="javascript:void(0)"
                >
                  <i class="ti-clipboard"></i>
                </button>
                <div class="ms-4" style="width: 38%">
                  <h4 class="fw-normal">Sản phẩm mới</h4>
                  
                </div>
                <div class="ms-auto">
                  <h2 class="display-7 mb-0">{{$newPro->count()}}</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="card p-2 p-lg-3">
            <div class="p-lg-3 p-2">
              <div class="d-flex align-items-center">
                <button
                  class="btn btn-circle btn-cyan text-white btn-lg"
                  href="javascript:void(0)"
                >
                  <i class="fas fa-user"></i>
                </button>
                <div class="ms-4" style="width: 38%">
                  <h4 class="fw-normal">Người dùng mới</h4>
                  
                </div>
                <div class="ms-auto">
                  <h2 class="display-7 mb-0">{{$newUser->count()}}</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="card p-2 p-lg-3">
            <div class="p-lg-3 p-2">
              <div class="d-flex align-items-center">
                <button
                  class="btn btn-circle btn-warning text-white btn-lg"
                  
                >
                <i class="fas fa-pen-square"></i>
                </button>
                <div class="ms-4" style="width: 38%">
                  <h4 class="fw-normal">Bài viết mới</h4>
                  
                </div>
                <div class="ms-auto">
                  <h2 class="display-7 mb-0">{{$newBlog->count()}}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- Manage Table & Walet Cards Section  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card w-100">
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="users" role="tabpanel">
                  <div class="row py-4 px-5 no-gutters mt-3">
                    <div
                      class="col-sm-12 col-md-6 d-flex justify-content-start"
                    >
                      <h3 class="card-title mb-0">Top thu nhập</h3>
                    </div>
                   
                  </div>
                  <div class="bg-light">
                    <div
                      class="
                        table-responsive
                        border-top
                        manage-table
                        px-4
                        py-3
                      "
                    >
                      <table class="table no-wrap">
                        <thead>
                          <tr>
                            <th scope="col" class="border-0"></th>
                            <th scope="col" class="border-0">Tên</th>
                            <th scope="col" class="border-0">Thu nhập</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($topIncome as $top)
                            
                          <tr class="">
                            
                            <td width="50px">
                              <div class="prefix_img rounded-circle" PrefixScale="1,1"> 
                                <img src="{{asset('uploads/'.$top->avata)}}" class=""/>
                              </div>
                            </td>
                            <td> <a href="{{route('user.info',$top->id)}}">{{$top->name}}</a></td>
                            <td>${{number_format($top->total)}}</td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card w-100">
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="users" role="tabpanel">
                  <div class="row py-4 px-5 no-gutters mt-3">
                    <div
                      class="col-sm-12 col-md-6 d-flex justify-content-start"
                    >
                      <h3 class="card-title mb-0">Sản phẩm bán chạy nhất</h3>
                    </div>
                   
                  </div>
                  <div class="bg-light">
                    <div
                      class="
                        table-responsive
                        border-top
                        manage-table
                        px-4
                        py-3
                      "
                    >
                      <table class="table no-wrap">
                        <thead>
                          <tr>
                            <th scope="col" class="border-0"></th>
                            <th scope="col" class="border-0">Tên</th>
                            <th scope="col" class="border-0">Đã bán</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($topPro as $top)
                            
                          <tr class="">
                            
                            <td width="100px">
                              <div class="prefix_img rounded" PrefixScale="4,3"> 
                                <img src="{{asset('upload/product/'.$top->avata)}}" class=""/>
                              </div>
                            </td>
                            <td> <a href="admin/product/{{$top->id}}">{{$top->name}}</a></td>
                            <td>{{$top->total}}</td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card w-100">
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="users" role="tabpanel">
                  <div class="row py-4 px-5 no-gutters mt-3">
                    <div
                      class="col-sm-12 col-md-6 d-flex justify-content-start"
                    >
                      <h3 class="card-title mb-0">Nhiều sản phẩm mới nhất</h3>
                    </div>
                   
                  </div>
                  <div class="bg-light">
                    <div
                      class="
                        table-responsive
                        border-top
                        manage-table
                        px-4
                        py-3
                      "
                    >
                      <table class="table no-wrap">
                        <thead>
                          <tr>
                            <th scope="col" class="border-0"></th>
                            <th scope="col" class="border-0">Tài khoản</th>
                            <th scope="col" class="border-0">Sản phẩm mới</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($topNewPro as $top)
                            
                            
                          <tr class="">
                            
                            <td width="50px">
                              <div class="prefix_img rounded-circle" PrefixScale="1,1"> 
                                <img src="{{asset('uploads/'.$top->avata)}}" class=""/>
                              </div>
                            </td>
                            <td> <a href="{{route('user.info',$top->id)}}">{{$top->name}}</a></td>
                            <td>{{number_format($top->total)}}</td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card w-100">
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="users" role="tabpanel">
                  <div class="row py-4 px-5 no-gutters mt-3">
                    <div
                      class="col-sm-12 col-md-6 d-flex justify-content-start"
                    >
                      <h3 class="card-title mb-0">Nhiều bài viết mới nhất</h3>
                    </div>
                   
                  </div>
                  <div class="bg-light">
                    <div
                      class="
                        table-responsive
                        border-top
                        manage-table
                        px-4
                        py-3
                      "
                    >
                      <table class="table no-wrap">
                        <thead>
                          <tr>
                            <th scope="col" class="border-0"></th>
                            <th scope="col" class="border-0">Tài khoản</th>
                            <th scope="col" class="border-0">Số bài viết</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($topNewBlog as $top)
                            
                          <tr class="">
                            
                            <td width="50px">
                              <div class="prefix_img rounded-circle" PrefixScale="1,1"> 
                                <img src="{{asset('uploads/'.$top->avata)}}" class=""/>
                              </div>
                            </td>
                            <td> <a href="{{route('user.info',$top->id)}}">{{$top->name}}</a></td>
                            <td>{{number_format($top->total)}}</td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div>
          
        </div>
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        
      </div>
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
@endsection

@section('js')
  <!-- This Page JS -->
  {{-- <script src="{{asset('backend/assets/js/page/dashboard.js')}}"></script> --}}
  <script src="{{asset('backend/assets/libs/moment/moment.js')}}"></script>
  <script>
  // $("#calendar").fullCalendar("option", "height", 650);
  </script>
@endsection