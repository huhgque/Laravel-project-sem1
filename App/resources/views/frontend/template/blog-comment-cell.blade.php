@if ($isGood)
    <input type="text" id="return_status" value="{{$isGood}}"> 

    <div class="comment-signle my-2 row py-3" comment-id="{{$comment->id}}">
        <div class="col-1">
            <div class="review_thumb rounded-circle prefix_img" prefixScale='1,1'>
                <img src="{{asset('uploads/'.$comment->GetUser()->avata)}}" alt="review images">
            </div>
        </div>
        <div class="review_details bg-white  rounded-3 col-10 px-3">
        <div class="review_info">
            <a class="last-title" href="{{route('user.info',$comment->user_id)}}">{{$comment->GetUser()->name}}</a>
            <div class="float-end">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item cur-pointer blog-editor-btn" do="edit" target="{{$comment->id}}">Sửa</a></li>
                <li><a class="dropdown-item cur-pointer blog-editor-btn" do="edit" target="{{$comment->id}}">Xóa</a></li>
                </ul>
            </div>                                 
        </div>
        <div class="review_date">
            <span>{{$comment->created_at->format('d/m/y')}} at {{$comment->created_at->format('H:i')}}</span>
        </div>
        <p class="">{!!($comment->content)?$comment->content:""!!}</p>
        </div>
    </div>
@else
    <input type="text" id="return_status" hidden value="{{$isGood}}"> 
@endif