<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('toastr-notification',[\App\Http\Controllers\ToastrNotificationController::class,'toastrNotification']);

Route::prefix('/')->group(function (){
   
    Route::view('index', 'website.home')-> name('/home');
    Route::view('product', 'website.product')-> name('/product');
    Route::view('productdetail', 'website.productdetail')-> name('/productdetail');
  
});



/*Route::get('/',function(){
    return view('website.home');

} );

Route::get('/a',function(){
    return view('website.product');

} );

Route::get('/b',function(){
    return view('website.productdetail');

} );*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', 'App\Http\Controllers\UserController@dashboard');

Route::prefix('/admin')->group(function (){
   
    Route::view('/','control.parent');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
  
});

