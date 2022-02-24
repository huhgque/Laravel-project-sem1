<?php
namespace App\Models;


class Report{
    protected $user;
    protected $blog;
    protected $pro;
    public function __construct()
    {
        $this->user = new Report_user();
        $this->blog = new Report_blog();
        $this->pro  = new Report_product();
    }
    public function ReportBlogAdd($req)
    {
        $this->blog->AddOne($req);
    }
    public function ReportProAdd($req)
    {
        $this->pro->AddOne($req);
    }
    public function ReportUserAdd($req)
    {
        $this->user->AddOne($req);
    }
    
}