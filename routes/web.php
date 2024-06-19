<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Aboutcontroller;
use App\Http\Controllers\frontend\Admincontactscontroller;
use App\Http\Controllers\frontend\Adminheadercontroller;
use App\Http\Controllers\frontend\Adminorderscontroller;
use App\Http\Controllers\frontend\Adminpagecontroller;
use App\Http\Controllers\frontend\Adminproductscontroller;
use App\Http\Controllers\frontend\Adminupdateproductcontroller;
use App\Http\Controllers\frontend\Adminupdateprofilecontroller;
use App\Http\Controllers\frontend\Adminusrescontroller;
use App\Http\Controllers\frontend\Cartcontroller;
use App\Http\Controllers\frontend\Categorycontroller;
use App\Http\Controllers\frontend\Checkoutcontroller;
use App\Http\Controllers\frontend\Contactcontroller;
use App\Http\Controllers\frontend\Footercontroller;
use App\Http\Controllers\frontend\Getpincodecontroller;
use App\Http\Controllers\frontend\Headercontroller;
use App\Http\Controllers\frontend\Homecontroller;
use App\Http\Middleware\AuthAdmin;
use App\Http\Controllers\frontend\Logincontroller;
use App\Http\Controllers\frontend\Logoutcontroller;
use App\Http\Controllers\frontend\Ordercontroller;
use App\Http\Controllers\frontend\Proceedordercontroller;
use App\Http\Controllers\frontend\Registercontroller;
use App\Http\Controllers\frontend\Searchpagecontroller;
use App\Http\Controllers\frontend\Shopcontroller;
use App\Http\Controllers\frontend\Tempcontroller;
use App\Http\Controllers\frontend\Userprofileupdatecontroller;
use App\Http\Controllers\frontend\Viewpagecontroller;
use App\Http\Controllers\frontend\Wishlistcontroller;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/login' , [Registercontroller::class, 'login']);
Route::post('/loginuser' , [Registercontroller::class, 'loginuser']);

Route::get('/register' ,[Registercontroller::class,'index']);
Route::post('/register' ,[Registercontroller::class,'registeruser']);

Route::get('/home',[Homecontroller::class,'index']);
Route::post('/home',[Homecontroller::class,'index']);



Route::get('/footer',[Footercontroller::class,'index']);

Route::get('/header',[Registercontroller::class,'header']);
Route::post('/header',[Registercontroller::class,'header']);

Route::get('/shop',[Shopcontroller::class,'index']);

Route::get('/about',[Aboutcontroller::class,'index']);

Route::get('/contact',[Homecontroller::class,'contect']);
Route::GET('/feedbackuser',[Homecontroller::class,'feedbackuser']);
Route::post('/feedbackuser',[Homecontroller::class,'feedbackuser']);


Route::get('/order',[Homecontroller::class,'ord']);



Route::get('/get-pincode' ,[Getpincodecontroller::class,'index']);

Route::get('/cart' ,[Homecontroller::class,'cart']);
Route::post('/cart' ,[Homecontroller::class,'cartitem']);
Route::get('/deletecartitem/{id}' ,[Homecontroller::class,'deletecartitem']);
Route::post('/updatecart' ,[Homecontroller::class,'updatecart']);

Route::get('/wishlist' ,[Homecontroller::class,'wishlist']);
Route::post('/wishlist' ,[Homecontroller::class,'wishlistitem']);

Route::get('/category' ,[Categorycontroller::class,'index']);
Route::get('/snacks',[Categorycontroller::class,'snack']);
Route::get('/vegetable',[Categorycontroller::class,'vege']);
Route::get('/nonveg',[Categorycontroller::class,'nonve']);

Route::get('/checkout' ,[Homecontroller::class,'checkout']);
Route::get('/checkoutItem' ,[Homecontroller::class,'checkoutitem']);
Route::post('/checkoutItem' ,[Homecontroller::class,'checkoutItem']);

Route::get('/logout',[Registercontroller::class,'logout']);
Route::post('/logout',[Registercontroller::class,'logout']);

Route::get('/proceed-order' ,[Proceedordercontroller::class,'index']);
Route::get('/search_page' ,[Searchpagecontroller::class,'index']);
Route::get('/temp' ,[Tempcontroller::class,'index']);

Route::get('/user_profile_update' ,[Registercontroller::class,'profile']);
Route::post('/updateprofile' ,[Registercontroller::class,'updateprofile']);

Route::get('/view_page' ,[Homecontroller::class,'view']);


Route::get('/admin_contacts' ,[Homecontroller::class,'adminfeedback']);
Route::get('/admin_contacts/{id}' ,[Homecontroller::class,'feedbackdel']);
Route::get('/admin_header' ,[Adminheadercontroller::class,'index']);

Route::get('/admin_orders' ,[Adminorderscontroller::class,'index']);
Route::get('/admin_orders/{id}' ,[Adminorderscontroller::class,'orderdel']);

Route::get('/admin_page' ,[Adminpagecontroller::class,'index']);
Route::get('/admin_products' ,[Adminproductscontroller::class,'index']);
Route::get('/admin_update_product' ,[Adminupdateproductcontroller::class,'index']);
Route::get('/admin_update_profile' ,[Adminupdateprofilecontroller::class,'index']);

Route::get('/admin_users' ,[Adminusrescontroller::class,'index']);
Route::get('/admin_users/{id}' ,[Adminusrescontroller::class,'userdel']);



