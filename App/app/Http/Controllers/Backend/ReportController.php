<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Report_product;
use App\Models\Report_blog;
use App\Models\Report_user;

use App\Models\Product;
use App\Models\Blog;
use App\Models\User;

class ReportController extends Controller
{
    public function blog(Request $req)
    {
        $reportList = Report_blog::paginate(10);
        return view('backend.Report.blog',compact('reportList'));
    }
    public function user()
    {
        $reportList = Report_user::paginate(10);

        return view('backend.Report.user',compact('reportList'));
    }
    public function pro()
    {
        $reportList = Report_product::paginate(10);

        return view('backend.Report.pro',compact('reportList'));
    }
    public function index()
    {
        return view('backend.Report.index');
    }
    public function reportstatus(Request $req)
    {
        $table = $req->table;
        switch ($table) {
            case 'blogs':
                if($req->status != null){
                    Blog::find($req->id)->update(['status'=>$req->status]);
                }
                break;
            
            case 'pros':
                if($req->status != null){
                    Product::find($req->id)->update(['status'=>$req->status]);

                }
                break;
            
            case 'users':
                if($req->status != null){
                    User::find($req->id)->update(['status'=>$req->status]);

                }
                break;
            
            case 'report-blogs':
                if($req->status != null){
                    Report_blog::find($req->id)->update(['isAnswered'=>$req->status]);
                }
                break;
            
            case 'report-pros':
                if($req->status != null){
                    Report_product::find($req->id)->update(['isAnswered'=>$req->status]);

                }
                break;
            
            case 'report-users':
                if($req->status != null){
                    Report_user::find($req->id)->update(['isAnswered'=>$req->status]);

                }
                break;
            
            default:
                # code...
                break;
        }
    }
    
}
