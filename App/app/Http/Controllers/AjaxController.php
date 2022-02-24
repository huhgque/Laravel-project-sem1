<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product_comment;
use App\Models\Blog_comment;
use App\Models\Vote;
use App\Models\Product;
use App\Models\Blog;
use App\Models\User;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

use App\Http\Helper\CartControll;
use App\Http\Helper\CommonFunction;

class AjaxController extends Controller
{
    
    public function attrform(Request $req)
    {
        $form = $req->form_num;
        $attr_data = $req->attr_data;
        return view('frontend.me.myshop.template.blankattrform',compact("form","attr_data"));
    }
    public function comment(Request $req)
    {
        
        $user = Auth::user();
        $hasComment = Product_comment::where([
            ['user_id','=',$user->id],
            ['pro_id','=',$req->pro_id]
        ])->first();

        $star = round($req->star);
        if($star > 5) { $star = 5; }
        else if ($star < 1) { $star = 1; }

        if($hasComment){

            $hasComment->update([
                'content'=>$req->comment
            ]);
            
            $vote = Vote::where([
                ['user_id','=',$user->id],
                ['pro_id','=',$req->pro_id]
            ])->first();
            
            if($vote){
                $vote->update(['star'=> $star]);
            } else {
                $vote = Vote::create([
                    'star'=>$star,
                    'user_id'=>$user->id,
                    'pro_id'=>$req->pro_id
                ]);
            }
        } else {
            $hasComment = Product_comment::create([
                'content'=>$req->comment,
                'user_id'=>$user->id,
                'pro_id'=>$req->pro_id
            ]);
            $vote = Vote::create([
                'star'=>$star,
                'user_id'=>$user->id,
                'pro_id'=>$req->pro_id
            ]);
        }
        

        return view('frontend.template.comment',compact('hasComment','vote','user'));
    }

    public function cart(Request $req)
    {
        $cartControll = new CartControll();
        
        switch ($req->work) {
            case 'add':
                $cartControll->Add($req->myOrd);
                break;
            
            case 'del':
                $cartControll->Del($req->attr);
                break;
            
            case 'put':
                // $cartControll->Put($req->id,$req->quan);
                break;
            
            default:
                break;
        }
    }

    public function follow(Request $req)
    {
        $user = User::find($req->id);
        if($user){
            $follow = Auth::user()->isFollowing($req->id);
            if($follow){
                $follow->delete();
                echo "unfollowed";
            } else {            
                Auth::user()->FollowThis($req->id);
                echo "followed";
            }
        }else{
            echo "erro";
        }
    }

    public function filter(Request $req)
    {
        $admin = (Auth::check())?Auth::user()->role:0;
        $common = new CommonFunction($req->table,($admin > 0));
        $filter = $req->filter;

        foreach ($filter as $key => $value) {
            switch ($key) {
                case 'catemini':
                    $common->MakeOrWhere($value,'cate_id');
                    break;

                case 'cate':
                    $mini = [];
                    foreach ($value as $cate) {
                        foreach ($common->CategoryCanHave($cate) as $whatIsThis) {
                            $mini[] = $whatIsThis;
                        }
                    }
                    $common->MakeOrWhere($mini,'cate_id');
                    break;
                
                case 'brand':

                    $common->MakeOrWhere($value,'brand_id');
                    break;
                
                case 'from':
                    if($value){

                        $common->MakeGreater($value,'price');
                    }
                    break;
                
                case 'to':
                    if($value){
                        $common->MakeLessthan($value,'price');
                    }
                    break;
                
                case 'find':
                    if($value){
                        $common->MakeFind($value);
                    }
                    break;
                case 'except':
                    if($value == 'me'){
                        if(Auth::check()){

                            $common->MakeExcept(Auth::user()->id,$filter['exceptCol']);
                        }
                    }
                    break;
                case 'only':
                    if($value){
                        $common->MakeOrWhere([$value],'user_id');
                    }
                    break;
                case 'status':
                    if($value != null){
                        $common->MakeEqual($value,'status');
                    }
                    break;
                case 'role':
                    if($value != null){
                        $common->MakeEqual($value,'role');
                    }
                    break;
                case 'orderBy':
                    if($value){
                        if($filter['rule'] != ""){

                            $common->OrderBy($value,$filter['rule']);
                        }else{
                            $common->OrderBy($value,'DESC');
                        }
                    }else{
                        $common->OrderBy('status','DESC');

                    }
                default:
                    # code...
                    break;
            }
        }
        $totalItem = $common->table->count();
        if(isset($filter['page'])){
            $common->MakePage($filter['page'],$filter['itemper']);
        }
        $data = $common->Search();
        return view('ajaxdump.'.$filter['dumpTo'],compact('totalItem','filter','data'));
        
    }
    public function blog(Request $req)
    {
        $common = new CommonFunction($req->table);
        $filter = $req->pageStats;

        foreach ($filter as $key => $value) {
            switch ($key) {
                
                case 'onlyfollow':
                    
                    if($value){

                        $onlyId=[];
                        foreach (Auth::user()->GetFollowing() as $index => $follow) {
                            $onlyId[] = $follow->follow_id;
                        }
                        $common->MakeOrWhere($onlyId,'user_id');
                    }

                    break;
                
                default:
                    # code...
                    break;
            }
        }
        $common->OrderBy('updated_at','DESC');
        $common->MakePage($filter['page'],6);
        
        $blogList = $common->Search();
        // dd('die here');
        // dd($blogList);
        return view('frontend.template.blog',compact('blogList'));
    }
    public function comment_blog(Request $req)
    {
        $isGood = false;
        
        switch ($req->work) {
            case 'add':
                if($req->content != null){
                    $comment = Blog_comment::create([
                        'user_id'=>Auth::user()->id,
                        'blog_id'=>$req->id,
                        'content'=>$req->content
                    ]);
                    $isGood = true;
                    return view('frontend.template.blog-comment-cell',compact('isGood','comment'));

                }
                break;
            case 'delete':
                Blog_comment::find($req->id)->delete();
                break;
            default:
                # code...
                break;
        }
    }
    public function report(Request $req)
    {
        $reporControl = new Report();
        $report = $req->report;
        $table = $report['table'];
        switch ($table) {
            case 'blogs':
                if($report['reason'] != ""){
                    $reporControl->ReportBlogAdd($report);
                }
                break;
            
            case 'pros':
                if($report['reason'] != ""){
                    $reporControl->ReportProAdd($report);
                }
                break;
            
            case 'users':
                if($report['reason'] != ""){
                    $reporControl->ReportUserAdd($report);
                }
                break;
            
            default:
                # code...
                break;
        }
    }

}