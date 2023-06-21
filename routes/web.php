<?php

use App\Http\Controllers\FooterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsFormController;
use App\Models\Category;
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
route::get('/show_contactForm',[ContactUsFormController::class,'show_contactForm']);
route::post('/store',[ContactUsFormController::class,'store'])->name('store-contact');
route::get('/show_product_nav',[HomeController::class,'show_product_nav']);

Route::get('/userpage', function () {
    return view('/home.userpage');
});
    //admin dashboard
route::get('/redirect',[HomeController::class,'redirect']) ->middleware('auth','verified');

    //product which has viewed, add, show product
route::get('/view_category',[AdminController::class,'view_category']);

route::get('/view_product',[AdminController::class,'view_product']);

route::post('/add_product',[AdminController::class,'add_product']);

route::post('/add_category',[AdminController::class,'add_category']);

Route::get('/show_categories/{categoryName}', [HomeController::class, 'show_categories'])->name('show_categories');



route::get('/show_product',[AdminController::class,'show_product']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);  

route::get('/update_product/{id}',[AdminController::class,'update_product']);   

route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']); 

route::get('/view_new_product',[AdminController::class,'view_new_product']);

route::post('/add_new_product',[AdminController::class,'add_new_product']);

route::get('/show_new_product',[AdminController::class,'show_new_product']);

route::get('/delete_new_product/{id}',[AdminController::class,'delete_new_product']);

route::get('/update_new_product/{id}',[AdminController::class,'update_new_product']);

route::post('/update_new_product_confirm/{id}',[AdminController::class,'update_new_product_confirm']); 

route::get('/view_top_product',[AdminController::class,'view_top_product']);

route::post('/add_top_product',[AdminController::class,'add_top_product']);

route::get('/show_top_product',[AdminController::class,'show_top_product']);

route::get('/delete_top_product/{id}',[AdminController::class,'delete_top_product']);

route::get('/update_top_product/{id}',[AdminController::class,'update_top_product']);

route::post('/update_top_product_confirm/{id}',[AdminController::class,'update_top_product_confirm']); 

route::get('/product_detials/{id}',[HomeController::class,'product_detials']); 

route::get('/new_product_detials/{id}',[HomeController::class,'new_product_detials']);

route::get('/top_product_detials/{id}',[HomeController::class,'top_product_detials']);

route::post('/add_cart/{id}',[HomeController::class,'add_cart']);  

route::post('/add_cart_newp/{id}',[HomeController::class,'add_cart_newp']);

route::post('/add_cart_topp/{id}',[HomeController::class,'add_cart_topp']);

route::get('/show_cart',[HomeController::class,'show_cart']);  

route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);

route::get('/cash_order',[HomeController::class,'cash_order']);

route::get('/order',[AdminController::class,'order']);

route::get('/delivered/{id}',[AdminController::class,'delivered']);

route::get('/search',[AdminController::class,'searchdata']);









Route::get('/stripe/{totalprice}', [HomeController::class, 'stripe'])->name('stripe');

Route::post('stripe/{totalprice}',[HomeController::class, 'stripePost'])->name('stripe.post');

route::get('/show_order',[HomeController::class,'show_order']);

route::get('/Cancel_order/{id}',[HomeController::class,'Cancel_order']);

route::post('/add_comment',[HomeController::class,'add_comment'])->name('Store_comment');

route::post('/add_reply',[HomeController::class,'add_reply']);

route::get('/product_search',[HomeController::class,'product_search']);




//     //contact us 
// Route::group(['middleware' => 'web'], function () {
//     Route::get('/contact', [ContactUsFormController::class, 'create'])->name('contact.create');
//     Route::post('/contact', [ContactUsFormController::class, 'store'])->name('contact.store');
// });

//footer
route::get('/home',[FooterController::class,'home']);
route::get('/product_nav',[FooterController::class,'product_nav']);
route::get('/contact',[FooterController::class,'contact']);
route::get('/aboutus',[FooterController::class,'aboutus']);
