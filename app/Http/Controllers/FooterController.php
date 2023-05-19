<?php

namespace App\Http\Controllers;

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
        return view('home.contact');
    }
}
