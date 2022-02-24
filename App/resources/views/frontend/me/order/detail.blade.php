@extends('frontend.me.master') @section('main')
<div class="page-breadcrumb border-bottom">
    <div class="row">
        <div class="
            col-lg-3 col-md-4 col-xs-12
            justify-content-start
            d-flex
            align-items-center
            ">  
            <h5 class="font-weight-medium text-uppercase mb-0">
                Invoice Layout
            </h5>
        </div>
        <div class="
            col-lg-9 col-md-8 col-xs-12
            d-flex
            justify-content-start justify-content-md-end
            align-self-center
            ">
            <nav aria-label="breadcrumb" class="mt-2">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin/index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Invoice Layout
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
        <div class="col-md-12">
            <div class="card card-body printableArea">
                <h3><b>INVOICE</b> <span class="pull-right">#{{$order->id}}</span></h3>
                <hr />
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="col-6">
                            <address>
                                    <h3>
                                        &nbsp;<b class="text-danger">{{Auth::user()->name}}</b>
                                    </h3>
                                    <p class="text-muted m-l-5">
                                        {{Auth::user()->address}}
                                    </p>
                                </address>
                        </div>
                        <div class="col-6 text-end">
                            <address>
                                    <h3>To,</h3>
                                    <h4 class="fw-bold">{{$order->GetOrderUser()->name}},</h4>
                                    <p class="text-muted m-l-30">
                                        {{$order->GetOrderUser()->address}}
                                    </p>
                                    <p class="m-t-30">
                                        <b>Invoice Date :</b>
                                        <i class="fa fa-calendar"></i> {{$order->created_at->format('d/m/y')}}
                                    </p>
                                    
                                </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive m-t-40" style="clear: both">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Avata</th>
                                        <th>Product</th>
                                        <th>Status</th>
                                        <th class="text-end">Quantity</th>
                                        <th class="text-end">Unit Cost</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->DetailForShop() as $detail) 
                                        
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <div class="prefix_img" prefixScale="3,4">
                                                <img src="{{asset('upload/product/'.$detail->avata)}}" alt="">
                                            </div>
                                        </td>
                                        <td>{{$detail->name}}</td>
                                        <td><div class="form-group">
                                            <select id="{{$detail->detail_id}}" class="form-control status-change" name="">
                                                <option value="-1" {{($detail->ord_stat == -1)?"selected":""}}><span class="text-danger">Hủy</span></option>
                                                <option value="0" {{($detail->ord_stat == 0)?"selected":""}}>Đang xử lý</option>
                                                <option value="1" {{($detail->ord_stat == 1)?"selected":""}}>Đã đóng gói</option>
                                                <option value="2" {{($detail->ord_stat == 2)?"selected":""}}>Đang vận chuyển</option>
                                                <option value="3" {{($detail->ord_stat == 3)?"selected":""}}>Đã chuyển hàng</option>
                                            </select>
                                        </div></td>
                                        <td class="text-end">{{$detail->quantity}}</td>
                                        <td class="text-end">${{$detail->price}}</td>
                                        <td class="text-end">${{$detail->price * $detail->quantity}}</td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right m-t-30 text-end">
                            <p>Sub - Total amount: $13,848</p>
                            
                            <hr />
                            <h3><b>Total :</b> $13,986</h3>
                        </div>
                        <div class="clearfix"></div>
                        
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
    <script src="{{asset('asset-frontend/js/page/me/ajax.js')}}"></script>
@endsection