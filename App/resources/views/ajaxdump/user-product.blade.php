<div class="row shop-wrapper grid_3">
    
    @foreach ($data as $pro)
    
    
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-20">
        <!-- Single-Product-Start -->
        <div class="item-product pt-0">
            <div class="product-thumb">
                <a class="prefix_img" prefixScale="4,3" href="{{route('user.product',$pro->id)}}">
                    <img src="{{asset('upload/product/'.$pro->avata) }}" alt="" class="">
                </a>
                
                @if ($pro->sale > 0)

                <div class="box-label">
                    <div class="label-product-new">
                        <span>-{{$pro->sale}}%</span>
                    </div>
                </div>

                @endif

                <div class="action-link">
                    <a class="quick-view same-link" href="{{route('user.product',$pro->id)}}" ><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                </div>
            </div>
            <div class="product-caption">
                <div class="product-name">
                    <a href="{{route('user.product',$pro->id)}}">{{$pro->name}}</a>
                </div>
                <div class="upby">
                    <a class="transparent-50" href="{{route('user.info',$pro->user_id)}}">{{$userModel->find($pro->user_id)->name}}</a>
                </div>
                <div class="rating">
                    @for ($i=0;$i<5;$i++)
                        
                    <span class="{{($pro->AvgStar() > $i)?"yellow":''}}"><i class="fa fa-star" aria-hidden="true"></i></span>
                    @endfor
                </div>
                <div class="price-box">
                    <span class="regular-price">
                        ${{$pro->price}} 
                        
                    </span>
                    {{-- <span class="old-price"><del>$350.50</del></span> --}}
                </div>
                
            </div>
            
            <div class="grid-list-caption align-items-center p-4">
                <div class="product-name">
                    <a href="{{route('user.product',$pro->id)}}">{{$pro->name}}</a>
                </div>
                
                <div class="rating">
                    @for ($i=0;$i<5;$i++)
                        
                    <span class="{{($pro->AvgStar() > $i)?"yellow":''}}"><i class="fa fa-star" aria-hidden="true"></i></span>
                    @endfor
                </div>
                
                <div class="price-box">
                    <span class="regular-price">
                        ${{ number_format($pro->price) }}
                    </span>
                </div>
                
                <p>{{$pro->description}}</p>
                
                <div class="text-available">
                    <p><strong>Availabe:</strong>
                        <span> 
                        @php
                            $stock = 0;
                            
                            echo $stock;
                        @endphp
                        
                        In Stock</span>
                    </p>
                </div>
                
                <div class="by">
                    <p>
                        <strong>By:</strong>
                        <span>{{ $pro->UploaderName() }}</span>
                    </p>
                </div>
                
                <div class="action-link">
                    <a class="quick-view same-link" href="{{route('user.product',$pro->id)}}" ><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                </div>
            </div>
            
        </div>
        <!-- Single-Product-End -->
    </div>

    @endforeach


</div>

<div class="toolbar-shop toolbar-bottom">
    <div class="page-amount">
        <p>Showing {{( $filter['page'] - 1 ) * $filter['itemper'] + 1 }} - {{($filter['page'] - 1 ) * $filter['itemper'] + $data->count()}} of {{$totalItem}} results</p>
    </div>
    <div class="pagination">
        <ul>
            @if ($filter['page'] > 1)
            <li class="previous page-select" page="{{$filter['page']-1}}"><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                
            @endif

            @for ($i=0 ; $i < $totalItem/$filter['itemper'] ; $i++)

            <li class="{{($i+1 == $filter['page'])?"current":""}} page-select" page="{{$i+1}}" >{{$i+1}}</li>
                
            @endfor

            @if ($filter['page'] < $totalItem/$filter['itemper'])
                
            <li class="next page-select" page="{{$filter['page']+1}}"><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
            @endif
        </ul>
    </div>
</div>