<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        return view('admin.category');
    }

    public function add_category(Request $request)
    {
       $date = new category;

       $date->category_name= $request->category;

       $date->save();

      return redirect()->back()->with('message', 'Category Added Successfully');
    }
}
