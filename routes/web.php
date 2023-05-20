<?php

use App\Http\Controllers\FooterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsFormController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/contact', function () {
    return view('/home.contact');
});
Route::get('/product_nav', function () {
    return view('/home.product_nav');
});
Route::get('/userpage', function () {
    return view('/home.userpage');
});
    //admin dashboard
route::get('/redirect',[HomeController::class,'redirect']);

    //product which has viewed, add, show product
route::get('/view_category',[AdminController::class,'view_category']);
route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_product',[AdminController::class,'add_product']);
route::get('/show_product',[AdminController::class,'show_product']);
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);  
route::get('/update_product/{id}',[AdminController::class,'update_product']);   
route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']); 

Route::group(['middleware' => 'web'], function () {
    Route::get('/contact', [ContactUsFormController::class, 'create'])->name('contact.create');
    Route::post('/contact', [ContactUsFormController::class, 'store'])->name('contact.store');
});

//footer
route::get('/home',[FooterController::class,'home']);
route::get('/product_nav',[FooterController::class,'product_nav']);
route::get('/contact',[FooterController::class,'contact']);
route::get('/aboutus',[FooterController::class,'aboutus']);
