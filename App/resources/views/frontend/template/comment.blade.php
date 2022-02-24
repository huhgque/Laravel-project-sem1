<div class="pro_review my-2" id="mypreviouscomment">
    <div class="col-1">
        <div class="review_thumb rounded-circle prefix_img" prefixScale='1,1'>
            <img src="{{asset('uploads/'.$user->avata)}}" alt="review images">
        </div>
    </div>
    <div class="review_details col-11 px-3">
        <div class="review_info">
            <a class="last-title" href="#">{{$user->name}}</a>
            <div class="rating">
                @for ($i = 0 ; $i<5 ; $i++)
                    <span class="
                    @if ($i < $vote->star)
                    yellow
                    @endif
                    "><i class="fa fa-star"></i></span>
                    
                @endfor
            </div>
            
        </div>
        <div class="review_date">
            <span>{{$hasComment->created_at->format('d/m/y')}} at {{$hasComment->created_at->format('H:i')}}</span>
        </div>
        <p>{{$hasComment->content}}</p>
    </div>
</div>