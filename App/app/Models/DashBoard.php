<?php
namespace App\Models;
class DashBoard{
    public function NewPro()
    {
        // $return = Product::selectRaw('CURRENT_TIMESTAMP() , created_at , CURRENT_TIMESTAMP() - created_at')->get();
        $return = Product::whereRaw('created_at > DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 7 DAY)')->get();
        return $return;
    }
    
    public function NewUser()
    {
        $return = User::whereRaw('created_at > DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 7 DAY)')->get();
        return $return;

    }
    public function NewBlog()
    {
        $return = Blog::whereRaw('created_at > DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 7 DAY)')->get();
        return $return;

    }
    public function TopIncome()
    {
        $return = Order_Detail::
            join('products','order_details.pro_id','=','products.id')->
            join('users','products.user_id','=','users.id')->
            where('order_details.status','=','3')->
            whereRaw('order_details.created_at > DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 7 DAY)')->
            selectRaw('SUM(order_details.price * order_details.quantity) as total,users.*')->
            groupBy(User::GroupByAll())->
            orderBy('total','DESC')

            ->take(10)->get()
        ;
        return $return;
    }
    public function TopPro()
    {
        $return = Order_Detail::
            join('products','order_details.pro_id','=','products.id')->
            where('order_details.status','=','3')->
            whereRaw('order_details.created_at > DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 7 DAY)')->
            selectRaw('COUNT(products.id) as total,products.*')->
            groupBy(Product::GroupByAll())->
            orderBy('total','DESC')

            ->take(10)->get()
        ;
        // $return = Order_Detail::where('status','3')->selectRaw('COUNT()')->groupBy('pro_id')->get();
        return $return;
    }
    public function TopNewPro()
    {
        $return = User::
            join('products','products.user_id','=','users.id')->
            whereRaw('products.created_at > DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 7 DAY)')->
            selectRaw('COUNT(products.id) as total,users.*')->
            groupBy('users.id')->
            orderBy('total','DESC')
            ->take(10)->get()

        ;
        return $return;
    }
    public function TopNewBlog()
    {
        $return = User::
            join('blogs','blogs.user_id','=','users.id')->
            whereRaw('blogs.created_at > DATE_SUB(CURRENT_TIMESTAMP(), INTERVAL 7 DAY)')->
            selectRaw('COUNT(blogs.id) as total,users.*')->
            groupBy('users.id')->
            orderBy('total','DESC')
            ->take(10)->get()

        ;
        return $return;
    }

}