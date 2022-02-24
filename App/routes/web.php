<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryMiniController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\HighlightCateController;
use App\Http\Controllers\Backend\SlideController;

use App\Http\Controllers\Frontend\Me\MeController;
use App\Http\Controllers\Frontend\Me\ProductUserController;
use App\Http\Controllers\Frontend\Me\MyOrderController;
use App\Http\Controllers\Frontend\Me\MyBlogController;

use App\Http\Controllers\AjaxController;

use App\Http\Controllers\Frontend\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
Route::group(['prefix'=>'admin','middleware'=>'check_admin'],function(){
    Route::get('/',[AdminController::class,'index']);
    Route::get('/product',[ProductController::class,'index']);
    Route::post('/product',[ProductController::class,'filter']);
    Route::get('/product/{id}',[ProductController::class,'ProductDetail']);
    Route::post('/product/{id}',[ProductController::class,'ProductStatus']);
    Route::get('/blog/{id}',[BlogController::class,'blogsignle'])->name('blog-single');
    Route::post('/report',[ReportController::class,'reportstatus'])->name('report-status');
    Route::get('/report-blog',[ReportController::class,'blog']);
    Route::get('/report-user',[ReportController::class,'user']);
    Route::get('/report-pro',[ReportController::class,'pro']);
    Route::get('/report/{id}',[ReportController::class,'index']);
    Route::get('/user',[UserController::class,'index']);
    Route::get('/user/{id}',[UserController::class,'index']);
    Route::resource('/category-mini', CategoryMiniController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/payment', PaymentController::class);
    Route::resource('/brand', BrandController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/slide', SlideController::class);
    Route::resource('/highlight-cate', HighlightCateController::class);
    Route::get('/create-admin',[UserController::class,'add_admin'])->name('add_admin');
    Route::post('/user',[UserController::class,'post_user'])->name('update.user');
    Route::post('/create-admin',[UserController::class,'post_add_admin']);
});


Route::group(['prefix'=>'/me','middleware'=>'check_me'],function(){
    Route::get('/',[MeController::class,'index']);
    Route::post('/',[MeController::class,'updateme']);
    Route::get('/myshop',[MeController::class,'index']);
    Route::get('/blog',[MyBlogController::class,'index']);
    Route::post('/blog',[MyBlogController::class,'postblog']);
    Route::post('/blog/delete',[MyBlogController::class,'deleteblog']);
    Route::get('/order',[MyOrderController::class,'index']);
    Route::post('/order',[MyOrderController::class,'orderupdate']);
    Route::get('/order/{id}',[MyOrderController::class,'detail']);
    Route::get('/history',[MeController::class,'history']);
    Route::get('/history/{id}',[MeController::class,'historyDetail']);
    Route::resource('/product', ProductUserController::class);
    // Route::resource('/myblog', AttributeController::class);
    // Route::resource('/brand', OrderController::class);
});

Route::get('/',[CustomerController::class,'index'])->name('user.home');
Route::get('/shop',[CustomerController::class,'shop'])->name('user.shop');
Route::get('/shop/{id}',[CustomerController::class,'shopby'])->name('user.info');
Route::get('/shop/{id}/list',[CustomerController::class,'shoplistby'])->name('user.shoplist');

Route::get('/product/{id}',[CustomerController::class,'product'])->name('user.product');

Route::get('/blog',[CustomerController::class,'blog'])->name('user.blog');

Route::post('/cart',[CustomerController::class,'cart'])->name('user.cart');
Route::get('/checkout',[CustomerController::class,'checkout'])->name('user.checkout');
Route::post('/checkout',[CustomerController::class,'postcheckout']);


Route::get('/login',[CustomerController::class,'login'])->name('user.login');
Route::post('/login',[CustomerController::class,'loginPost'])->name('user.postlogin');


Route::get('/register',[CustomerController::class,'register'])->name('user.register');
Route::post('/register',[CustomerController::class,'registerPost'])->name('user.register');

Route::get('/logout',[CustomerController::class,'logout'])->name('user.logout');

Route::get('/pass_reset',[CustomerController::class,'pass_reset'])->name('pass_reset');
Route::post('/pass_reset',[CustomerController::class,'post_pass_reset'])->name('pass_reset');

Route::get('/pass_use',[CustomerController::class,'pass_use'])->name('pass_use');
Route::post('/pass_use',[CustomerController::class,'post_pass_use']);

Route::get('/adminlogin',[AdminController::class,'login'])->name('admin.login');
Route::post('/adminlogin',[AdminController::class,'loginPost'])->name('admin.login');

Route::group(['prefix'=>'/ajax'],function(){
    Route::post('/attrform',[AjaxController::class,'attrform']);
    Route::post('/comment',[AjaxController::class,'comment']);
    Route::post('/cart',[AjaxController::class,'cart']);
    Route::post('/follow',[AjaxController::class,'follow']);
    Route::post('/filter',[AjaxController::class,'filter']);
    Route::post('/blog',[AjaxController::class,'blog']);
    Route::post('/report',[AjaxController::class,'report']);
    Route::post('/comment-blog',[AjaxController::class,'comment_blog']);
});