<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Helper\CommonFunction;
use App\Http\Helper\CartControll;
use App\Models\Home_page;
use App\Models\User;
use App\Models\Category_mini;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $pageModel = new Home_page();
        $cateModel = new Category_mini();
        view()->share('cart',new CartControll);
        view()->share('userModel',new User);
        view()->share('pageInfo',$pageModel);
        view()->share('allcate',$cateModel);
    }
}
