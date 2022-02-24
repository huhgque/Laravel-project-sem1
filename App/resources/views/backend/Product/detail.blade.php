@extends('backend.master')
@section('main')

@php
  $attr = $pro->GetAttr();
@endphp
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
          Product Edit
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
              Product Edit
            </li>
          </ol>
        </nav>
        <form method="POST" action="{{route('product.destroy',$pro->id)}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger text-white ms-3 d-none d-md-block">
            Delete product
          </button>
        </form>
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
            <form action="/admin/product/{{$pro->id}}" enctype="multipart/form-data" method="POST">
                @csrf
              <div class="form-body">
                <h5 class="card-title">About Product</h5>
                <hr />
                <div class="row">
                  <div class="col-8">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Product Name</label>
                          <input
                            type="text"
                            id="firstName"
                            disabled
                            class="form-control"
                            placeholder="Rounded Chair"
                            value="{{$pro->name}}"
                          />
                        </div>
                      </div>
                      
                      <!--/span-->
                      
                      <!--/span-->
                    </div>
                    <!--/row-->
                    <!--/row-->
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="mb-3 row">
                          <label class="control-label col-2">Price</label>
                          <span class="control-label col-6">${{$pro->price}}</span>
                          
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3 row">
                          <label class="control-label col-2">Sale</label>
                          <span class="control-label col-6">{{$pro->sale}}%</span>
                          
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3 row">
                          <label class="control-label col-2">Brand</label>
                          <a href="{{route('brand.edit',$pro->brand_id)}}" class="control-label col-6">{{$pro->BrandName()}}</a>
                          
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3 row">
                          <label class="control-label col-2">Category</label>
                          <a href="{{route('category.edit',$pro->cate_id)}}" class="control-label col-6">{{$pro->CateName()}}</a>
                          
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Status</label>
                          <select  class="form-control" name="status" value="">
                            <option value="0"  {{($pro->status==0)?'selected':''}}>Ẩn</option>
                            <option value="1"  {{($pro->status==1)?'selected':''}}>Hiện</option>
                            <option value="10" {{($pro->status==10)?'selected':''}}>Ưu tiên</option>
                          </select>
                        </div>
                      </div>
                      
                      <!--/span-->
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="col-md-12">
                      <div class="mb-3">
                        
                        <div class="col-12">
  
                          <div class="prefix_img" prefixScale="4,3">
                            <img src="{{asset('upload/product/'.$pro->avata)}}" id="avata_holder" alt="" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <h5 class="card-title mt-5">Product Description</h5>
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                        <div class="" name="description" rows="4">{{$pro->description}}</div>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mb-4">
                      <label for="VersionList"><h5 class="card-title mt-5">Attr list</h5></label>
                      <select id="VersionList" class="form-control">
                        @foreach ($attr as $index => $value)
                        <option value="{{$index}}">Attribute {{$index+1}}</option>
                          
                        @endforeach
                      </select>
                    </div>
                    
                    <div class="version_box">
                      @foreach ($attr as $index=>$value)
                        @php
                          $attr_detail = explode("\\",$value->detail);
                          $attr_stock = explode("\\",$value->stock);
                        @endphp
                        <div class="version" id="version_{{$index}}" {{($index != 0)?"style=display:none":''}}>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="mb-3">
                                <label>Attribute Name</label>
                                <div class="input-group mb-3">
                                  <input
                                    disabled
                                    type="text"
                                    name="attr_label[]"
                                    class="form-control"
                                    placeholder="Version Name"
                                    aria-label="price"
                                    aria-describedby="basic-addon1"
                                    value="{{$value->name}}"
                                    />
                                  
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          
                          
                              
                          <div class="table-responsive">
                            <table class="table table-bordered td-padding">
                              <thead>
                                <tr class="text-center">
                                  <th>Name</th>
                                  <th>Ofset Price</th>
                                  <th>Stock</th>
                                </tr>
                              </thead>
                              <tbody id="attr-holder-{{$index}}">
                                @foreach ($attr_detail as $detail)
                                
                                @if (!$loop->last)
                                  
                                <tr class="attr-group">
                                  <td>
                                    <input
                                    disabled
                                    type="text"
                                    name="attr_name[{{$index}}][]"
                                    class="form-control"
                                    placeholder="Attribute name"
                                    value="{{explode(':',$detail)[0]}}"
                                    />
                                  </td>
                                  <td>
                                    <input
                                    disabled
                                    type="text"
                                    name="attr_val[{{$index}}][]"
                                    class="form-control"
                                    placeholder="Attribute value"
                                    value="{{ explode(':',$detail)[1] }}"

                                    />
                                  </td>
                                  <td>
                                    <input
                                    disabled
                                    type="number"
                                    name="stock[{{$index}}][]"
                                    class="form-control"
                                    placeholder="Stock"
                                    aria-label="price"
                                    aria-describedby="basic-addon1"
                                    value="{{$attr_stock[$loop->index]}}"
                                    />
                                  </td>
                                </tr>
                                @endif

                                @endforeach

                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                      @endforeach        

                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <h5 class="card-title mt-3">Image Uploaded</h5>
                  
                  
                  <div class="image_holder_{{$index}} row p-3">
                    @foreach ($pro->GetImage() as $img)
                      
                    <div class="prefix col-2 p-0">
                      <img width="100%" src="{{asset('upload/product/'.$img->name)}}"/>
                    </div>
                    @endforeach
                  </div>  
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
                  href="/admin/product"
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


@section('js')
  <script>


    
    $(document).ready(function () {
      mercuryJs.PrefixImageByScale('.prefix_img');
      
    })

  </script>
@endsection
