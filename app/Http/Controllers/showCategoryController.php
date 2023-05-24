<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class showCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('home.userpage',compact('categories'));
    }
    public function show_categories(Request $request, $categoryName)
    {
        // Retrieve products based on the category name
        $product = Product::where('category', $categoryName)->paginate(6);
        $categories = Category::all();

        // Pass the products and category name to the view
        return view('home.categories_product', compact('product', 'categoryName','categories'));
    }

  
}
