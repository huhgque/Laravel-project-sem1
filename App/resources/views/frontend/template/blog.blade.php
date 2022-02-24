@foreach ($blogList as $blog)
    
    <div class="card my-4" blog="{{$blog->id}}" id="blog_id_{{$blog->id}}">
        <div class="card-body">
            <div class="blog-signle mb-3">
                <div class="bloginfo row">
                    {{-- avata --}}
                    <div class="avata col-1">
                        <div class="prefix_img rounded-circle" prefixScale="1,1">
                            <img src="{{ asset('uploads/' . $blog->GetUser()->avata) }}" alt="">
                        </div>
                    </div>
                    {{-- /avata --}}
                    <div class="name col-10">
                        <div class=""><a href=" {{ route('user.info', $blog->GetUser()->id) }}">
                            <h3>{{$blog->GetUser()->name}}</h3></a>
                        </div>
                        <div class="">{{$blog->created_at->format('d/m/y')}}</div>
                    </div>

                    @if (Auth::check())
                        

                    @if ($blog->user_id != Auth::user()->id)
                        
                    <div class="col-1">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item cur-pointer report-btn"  target="{{$blog->id}}" data-bs-toggle="modal" data-bs-target="#report-form">Tố cáo</a></li>
                        </ul>
                    </div>
                    @endif

                    @endif

                    
                </div>
                <div class="blog-content py-3" id="blog-content-{{$blog->id}}">{!!$blog->content!!}</div>
                <div class="" >
                    <div class="row text-center" id="blog-image-{{$blog->id}}">
                        @php
                            $max_img = $blog->BlogImage()->count();
                            $min_col = 3;

                            if ($max_img < 4) {
                                $min_col = 12/(($max_img)?$max_img:1);
                            }
                        @endphp
                        @foreach ($blog->BlogImage() as $img)
                        @if ($loop->index < 4)
                        <div class="col-{{$min_col}} my-3 blog-image">
                            <img style="max-height: 50vh ; max-width: 100%;" src="{{ asset('upload/blog/' . $img->image) }}" 
                            alt="{{$img->image}}">
                        </div>
                        @else
                        <div class="col-3 my-3 blog-image being_hidden_{{$blog->id}}" style="display:none">
                            <img style="max-height: 50vh ; max-width: 100%;"  src="{{ asset('upload/blog/' . $img->image) }}" 
                            alt="{{$img->image}}">
                        </div>
                        @endif
                        @endforeach
                        @if ($max_img > 4)
                        <div class="col-12">

                        <button class="w-25 m-auto d-block btn btn-primary view-hidden" show="0" target="{{$blog->id}}">View more</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            
                
            <div id="comment">
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#comment-{{$blog->id}}" aria-expanded="true" aria-controls="comment-{{$blog->id}}">
                    Comment
                    </button>
                </h2>
                <div id="comment-{{$blog->id}}" class="accordion-collapse collapse collapse" aria-labelledby="headingOne" data-bs-parent="#comment">
                    <div class="accordion-body">
                        <div role="tabpanel" id="reviews" class="blog_tab_content fade active show">
                            <!-- Start RAting Area -->
                            @if (Auth::check())
                                @php
                                    $myComment = Auth::user()->BlogComment($blog->id);
                                @endphp
            
                                <div class="comments_form">
                                    <div action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
            
                                                    <div class="avata p-0" style="width : 50px">
            
                                                        <div class="prefix_img rounded-circle" prefixScale="1,1">
                                                            <img src="{{asset('uploads/'.Auth::user()->avata)}}" alt="">
                                                        </div>
                                                    </div>
                                                    <textarea style="height: 50px;" placeholder="Viết bình luận" type="text" name="myComment" id="comment_input_{{$blog->id}}" class="col-9 p-2"></textarea>
                                                   
                                                    <button class="button post-blog-cmt col-2" id="{{$blog->id}}">Post Comment</button>
            
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                            @else
            
                                <a class="text-primary" href="/login">Đăng nhập để bình luận</a>
            
                            @endif
            
                            
                            
                        </div>
                        @if ($blog->GetBlogComment()->count() > 0)

                        @foreach ($blog->GetBlogComment() as $comment)
                            
                        <div class="comment-signle my-2 row py-3" comment-id="{{$comment->id}}">
                            <div class="col-1">
                                <div class="review_thumb rounded-circle prefix_img" prefixScale='1,1'>
                                    <img src="{{asset('uploads/'.$comment->GetUser()->avata)}}" alt="review images">
                                </div>
                            </div>
                            <div class="review_details bg-white  rounded-3 col-10 px-3">
                            <div class="review_info">
                                <a class="last-title" href="{{route('user.info',$comment->GetUser()->id)}}">{{$comment->GetUser()->name}}</a>  
                                @if(Auth::check() && Auth::user()->id == $comment->user_id)
                                    <div class="float-end">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item cur-pointer blog-editor-btn" do="edit" target="{{$comment->id}}">Sửa</a></li>
                                        <li><a class="dropdown-item cur-pointer blog-editor-btn" do="delete" target="{{$comment->id}}" >Xóa</a></li>
                                        </ul>
                                    </div>              
                                @endif                          
                            </div>
                            <div class="review_date">
                                <span>{{$comment->created_at->format('d/m/y')}} at {{$comment->created_at->format('H:i')}}</span>
                            </div>
                            <p class="">{!!($comment->content)?$comment->content:""!!}</p>
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>
                </div>
                </div>
                
            </div>


        </div>
        
    </div>
@endforeach