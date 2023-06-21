<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class FooterController extends Controller
{
    public function home()
    {
        return view('home.userpage');
    }
    public function product_nav()
    {
        return view('home.product_nav');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function aboutus()
    {
        $categories = Category :: all();
        return view('home.aboutus',compact('categories'));
    }
}
