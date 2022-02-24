@foreach ($data as $value)
    <tr>

        <td>{{ $loop->index + 1 }}</td>
        <td><img src="{{ url('uploads') }}/{{ $value->avata }}" alt="" width="50px"></td>
        <td> <a href="{{route('user.info',$value->id)}}">{{ $value->name }}</a></td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->phone }}</td>
        <td>{{ $value->address }}</td>
        {{-- <td>{!!($value->role ==1) ? '<span class="btn btn-success">Admin</span>' :'<span class="btn btn-danger">Người dùng</span>'!!}</td> --}}
        <td>
            @if (Auth::user()->role == 10)
                <div class="form-group">
                    <select id="{{$value->id}}" class="form-control user-role" required="required">
                        <option value="0" {{ $value->role == 0 ? 'selected' : '' }}>Người dùng</option>
                        <option value="1" {{ $value->role == 1 ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>
            @else
                {{ $value->Role() }}
            @endif
        </td>
        <td>
            @if (Auth::user()->role > $value->role)
                <div class="form-group">
                    <select id="{{$value->id}}" class="form-control user-status" required="required">
                        <option value="0" {{ $value->status == 0 ? 'selected' : '' }}>Bình Thường</option>
                        <option value="-1" {{ $value->status == -1 ? 'selected' : '' }}>Giới Hạn</option>
                        <option value="-2" {{ $value->status == -2 ? 'selected' : '' }}>Cấm</option>
                    </select>
                </div>
            @else
                {{ $value->Status() }}
            @endif

        </td>

        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-light-primary text-primary dropdown-toggle"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-cog"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('user.info', $value->id) }}">
                        <i data-feather="eye" class="feather-sm me-2"></i>
                        Trang cá nhân
                    </a>
                    <a class="dropdown-item apply-change" id="{{$value->id}}">
                        <i data-feather="edit-2" class="feather-sm me-2"></i>
                        Áp dụng thay đổi
                    </a>
                </div>
            </div>
        </td>

    </tr>
@endforeach
<tr class="">
    <td colspan="9">
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
