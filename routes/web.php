<?php

use App\Http\Controllers\FooterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_product',[AdminController::class,'add_product']);

//footer
route::get('/home',[FooterController::class,'home']);
route::get('/product_nav',[FooterController::class,'product_nav']);
route::get('/contact',[FooterController::class,'contact']);
route::get('/aboutus',[FooterController::class,'aboutus']);
