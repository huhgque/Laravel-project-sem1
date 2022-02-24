@extends('frontend.me.master')
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
          Sửa sản phẩm
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
              Sửa sản phẩm
            </li>
          </ol>
        </nav>
        <form method="POST" action="{{route('product.destroy',$pro->id)}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger text-white ms-3 d-none d-md-block">
            Xóa sản phẩm
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
            <form action="{{Route('product.update',$pro->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
              <div class="form-body">
                <h5 class="card-title">Thông tin sản phẩm</h5>
                <hr />
                <div class="row">
                  <div class="col-8">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Tên sản phẩm</label>
                          @if ($errors->has('name'))
                          <div class="text-danger">
                              {{$errors->first('name')}}
                          </div>
                          @endif
                          <input
                            type="text"
                            id="firstName"
                            name="name"
                            class="form-control"
                            placeholder="Rounded Chair"
                            value="{{$pro->name}}"
                          />
                        </div>
                      </div>
                      
                      <!--/span-->
                      
                      <!--/span-->
                    </div>
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="control-label">Ảnh đại diện sản phẩm</label>
                        <input
                          type="file"
                          id="avata"
                          name="avata"
                          class="form-control"
                          placeholder="Rounded Chair"
                          onchange="SetAvata()"
                        />
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Giá gốc</label>
                          @if ($errors->has('price'))
                          <div class="text-danger">
                              {{$errors->first('price')}}
                          </div>
                          @endif
                          <input
                            type="text"
                            id="baseprice"
                            name="price"
                            class="form-control"
                            placeholder="Product price"
                            value="{{$pro->price}}"
                          />
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Sale (%)</label>
                          @if ($errors->has('name'))
                          <div class="text-danger">
                              {{$errors->first('name')}}
                          </div>
                          @endif
                          
                        </div>
                      </div>
                      <div class="col-6">
                        <input
                          type="text"
                          id="sale"
                          name="sale"
                          class="form-control"
                          placeholder="Product sale(%)"
                          value="{{$pro->sale}}"
                        />
                      </div>
                      <div class="col-6">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Result"
                        />
                      </div>
                    </div>
                    <!--/row-->
                    <!--/row-->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Category</label>
                          <select
                            name="cate_id"
                            class="form-select"
                            data-placeholder="Choose a Category"
                            tabindex="1"
                            value="{{$pro->cate_id}}"
                          >
                            @foreach ($cateList as $value)
                              <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="control-label">Brand</label>
                          <select
                            name="brand_id"
                            class="form-select"
                            data-placeholder="Choose a Category"
                            tabindex="1"
                            value="{{$pro->brand_id}}"

                          >
                            @foreach ($brandList as $value)
                              <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
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
                        <textarea class="form-control" name="description" rows="4">{{$pro->description}}</textarea>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mb-4">
                      <label for="VersionList"><h5 class="card-title mt-5">Attr list</h5></label>
                      <select id="VersionList" class="form-control" name="">
                        @foreach ($attr as $index => $value)
                        <option value="{{$index}}">Attribute {{$index+1}}</option>
                          
                        @endforeach
                        <option value="new" id="more_version">More version</option>
                      </select>
                      <div class="text-danger">
                        @if ($errors->has('attr_label.*'))
                          <div class="">
                            {{ $errors->first('attr_label.*')}}
                          
                          </div>
                        @endif
                        
                        @if ($errors->has('stock.*'))
                          <div class="">
                            {{$errors->first('stock.*')}}
                          
                          </div>
                        @endif
                        @if ($errors->has('price.*'))
                          <div class="">
                            {{$errors->first('price.*')}}
                          
                          </div>
                        @endif
                        @if ($errors->has('sale_price.*'))
                          <div class="">
                            {{$errors->first('sale_price.*')}}
                          
                          </div>
                        @endif
                        @if ($errors->has('attr_name.*.*'))
                          <div class="">
                            {{$errors->first('attr_name.*.*')}}
                          
                          </div>
                        @endif
                        @if ($errors->has('attr_val.*'))
                          <div class="">
                            {{$errors->first('attr_val.*.*')}}
                          
                          </div>
                        @endif
                        @if ($errors->has('attr_img.*.*'))
                          <div class="">
                            {{$errors->first('attr_img.*.*')}}
                          </div>
                        @endif
                        
                      </div>
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
                                <label>Tên cấu hình</label>
                                <div class="input-group mb-3">
                                  <input
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
                              <tbody id="attr-holder-{{$index}}">
                                @foreach ($attr_detail as $detail)
                                
                                @if (!$loop->last)
                                  
                                <tr class="attr-group" index="{{$loop->index}}">
                                  <td width="40%">
                                    <input
                                    type="text"
                                    name="attr_name[{{$index}}][]"
                                    class="form-control"
                                    placeholder="Attribute name"
                                    value="{{explode(':',$detail)[0]}}"
                                    />
                                  </td>
                                  <td width="40%">
                                    <input
                                    type="text"
                                    name="attr_val[{{$index}}][]"
                                    class="form-control"
                                    placeholder="Attribute value"
                                    value="{{ explode(':',$detail)[1] }}"

                                    />
                                  </td >
                                  <td width="20%">
                                    <input
                                    type="number"
                                    name="stock[{{$index}}][]"
                                    class="form-control"
                                    placeholder="Stock"
                                    aria-label="price"
                                    aria-describedby="basic-addon1"
                                    value="{{$attr_stock[$loop->index]}}"
                                    />
                                  </td>
                                  <td width="20%">
                                    <button type="button" class="btn attr_row_remove text-danger" row_id="{{$loop->index}}" attr_id="{{$index}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                  </td>
                                </tr>
                                @endif

                                @endforeach

                              </tbody>
                            </table>
                            <button type="button" attr_target="{{$index}}" class="add_more_attr btn btn-info rounded-pill w-25 m-auto d-block">Add more</button>
                          </div>
                          
                        </div>
                      @endforeach        

                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <h5 class="card-title mt-3">Upload Image</h5>
                  
                  <div class="btn btn-info waves-effect waves-light">
                    <span>Upload Image</span>
                    <input type="file" name="pro_img[]" multiple id=""  class="upload image_selector" />
                  </div>
                  <div class="image_holder row p-3">
                    @foreach ($pro->GetImage() as $img)
                    <div class="col-2 p-0">

                      <div class="prefix_img" PrefixScale="4,3">
                        <img src="{{asset('upload/product/'.$img->name)}}"/>
                      </div>
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
                  Lưu
                </button>
                <a
                  href="{{route('product.index')}}"
                  class="btn btn-dark rounded-pill px-4"
                >
                  Bỏ
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
  <script src="{{asset('asset-frontend/js/page/me/addproduct.js')}}"></script>
  <script>

    CellActive();

    
    $(document).ready(function () {
      mercuryJs.PrefixImageByScale('.prefix_img');
      SetPageState();
    })

  </script>
@endsection
