@extends('frontend.master')

@section('main')
    @php
        // dd($cart->GetObject()[0]->GetProduct());
    @endphp
    <!-- =================
    Header Area  End
    =====================-->

    <!--=====================
    Breadcrumb Aera Start
    =========================-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li>
                                <h1><a href="index.html">Home</a></h1>
                            </li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================
    Breadcrumb Aera End
    =========================-->

    <!--======================
    Shopping Cart area Start
    ==========================-->
    <div class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Cart Title Start -->
                    <div class="cart-title">
                        <h5 class="last-title mt-50 mb-20">Shopping Cart</h5>
                    </div>

                    @if (Auth::check())
                        <!-- Cart Title End -->
                        <!-- Cart Table Area Start -->
                        <div class="table-desc">
                            <div class="cart-page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th width="10%" class="product-image">Image</th>
                                            <th width="40%" class="product-name">Product</th>
                                            <th width="40%" class="product-name">Build</th>
                                            <th width="10%" class="product-price">Price</th>
                                            <th width="10%" class="product-quantity">Quantity</th>
                                            <th width="10%" class="product-total">Total</th>
                                            <th width="10%" class="product-remove">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($cart->GetObject() as $unit)
                                        
                                        @php
                                            $pro = $unit->GetProduct()
                                        @endphp
                                        
                                        <tr id="pro_id_{{$unit->pro_id}}">
                                            <td class="product-image" width="100px">
                                                <div  class="prefix_img" prefixScale='3,4'>
                                                    <img  src="{{asset('upload/product/'.$pro->avata)}}" alt="">
                                                </div>
                                            </td>
                                            <td class="product-name"><a href="{{route('user.product',$pro->id)}}">{{$pro->name}}</a></td>
                                            <td class="product-name">
                                                @php
                                                    $build = $unit->GetBuild()
                                                @endphp
                                                @foreach ($build as $comp)
                                                    {{$comp['name']}}
                                                    @if (!$loop->last)
                                                        /
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td class="product-price">$ <price>{{$unit->Price()}}</price></td>
                                            <td class="product-quantity">
                                                {{-- <input type="text" id="attr_{{$unit->quantity}}_max" value="{{$pro->stock}}" hidden> --}}
                                                <button class="btn-secondary rounded-pill mx-2 d-inline-block quantity_btn" instant="1" role="minus" target="{{$pro->id}}" style="width: 50px"><i class="fas fa-minus"></i></button>

                                                <span id="attr_quantiti_{{$pro->id}}">{{$unit->quantity}}</span>

                                                <button class="btn-secondary rounded-pill mx-2 d-inline-block quantity_btn" instant="1" role="plus" target="{{$pro->id}}" style="width: 50px"><i class="fas fa-plus"></i></button>

                                            </td>
                                            <td class="product-total">$<total>{{ $unit->Price() * $unit->quantity }}</total></td>
                                            <td><a class="text-danger product-remove" target="{{$pro->id}}"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                        
                                        @endforeach
                                        <tr>
                                            <td colspan="3">Subtotal</td>
                                            <td colspan="3" id="sumall" >$<total>{{$cart->GetTotal()}}</total></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Cart Table Area End -->
                        <!-- Coupon Area Start -->
                        <div class="coupon-area">
                            <div class="row justify-content-center">
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="coupon-code right">
                                        <h3>Cart Totals</h3>
                                        <div class="coupon-inner">
                                            <div class="cart-subtotal">
                                                <h4>Total</h4>
                                                <p class="cart-amount">$<total>{{$cart->GetTotal()}}</total></p>
                                            </div>
                                            
                                        </div>
                                        @if ( count($cart->Get()) > 0)

                                        <div class="checkout-btn text-center mb-4">
                                            <a href="/checkout">Proceed to Checkout</a>
                                        </div>

                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Coupon Area End -->
                    @else
                        <div class="text-center">
                            <i class="far fa-frown" style="font-size: 12rem"></i>
                            <div class="">Bạn chưa đăng nhập.</div>
                            <a href="{{route('user.login')}}" class="">Click vào đây để đăng nhập.</a >
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    <!--======================
    Shopping Cart area End
    ==========================-->

    <!--===================
     footer area start 
    ===================-->

        <!-- Newslatter area start -->
        
        <!-- Newslatter area End -->
        <!-- Footer Top Start -->
    @section('script')
    <script src="{{asset('asset-frontend/js/page/cart.js')}}">
        
    </script>
    @stop
@stop