@foreach ($data as $pro)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>
            <div class="prefix_img" prefixScale="4,3">
                <img src="{{ asset('upload/product/' . $pro->avata) }}" alt="">
            </div>
        </td>
        <td>
            <div class="">{{ $pro->name }}</div>
                      <div class=""><span class=" text-muted">
                bởi:</span><a href="{{ route('user.info', $pro->Uploader()->id) }}">{{ $pro->Uploader()->name }}</a>
            </div>
        </td>
        <td>${{ number_format($pro->price) }}</td>
        <td>{{ $pro->sale }}(${{ number_format($pro->Price()) }})</td>
        <td>{{ $pro->Status() }}</td>
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-light-primary text-primary dropdown-toggle"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-cog"></i>
                </button>
                <div class="dropdown-menu">
                    
                    <a class="dropdown-item" href="/admin/product/{{ $pro->id }}">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        Xem
                    </a>
                    <form class="dropdown-item" style="cursor: pointer;"
                        action="{{ Route('payment.destroy', $pro->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn p-0 text-danger" type="submit">

                            <i class="fa fa-trash" aria-hidden="true"></i>
                            Xóa
                        </button>
                    </form>

                </div>
            </div>
        </td>
    </tr>
@endforeach
    <tr class="">
        <td colspan="7">
            @php
                $maxPage = ceil($totalItem/$filter['itemper']); 
                $start = $filter['page'] - 2;
                $end = $filter['page'] + 2;
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
                @if ($filter['page'] != 1)
                    <a class="page-select " page="{{$filter['page']-1}}" >Pre</a>
                @endif

                @if($dotStart)
                <span class="page-select">...</span>
                @endif
            
                <?php for ($i=$start; $i <= $end; $i++) {?>
                <a class="page-select {{$filter['page'] == $i ? 'page-current' : ''}}" page="{{$i}}">{{$i}}</a>
                <?php } ?>

                @if($dotEnd)
                <span class="page-select">...</span>
                @endif

                @if ($filter['page'] < $maxPage)
                    <a class="page-select" page="{{$filter['page']+1}}" >Next</a>
                @endif
            </div>
        </td>
    </tr>

