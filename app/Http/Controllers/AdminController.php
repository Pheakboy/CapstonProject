<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

use App\Models\New_product;

use App\Models\Top_product;

class AdminController extends Controller
{

            //view category
    public function view_category()
    {
        $data=category::all();
        return view('admin.category', compact('data'));
    }
        //add category
    public function add_category(Request $request)
    {
       $date = new category;

       $date->category_name= $request->category;

       $date->save();

      return redirect()->back()->with('message', 'Category Added Successfully');
    }
        //delete category
    public function delete_category($id)
    {
        $data=category::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Category Deleted Success');
    }
        //view product
    public function view_product()
    {
        $category=category::all();
        return view('admin.product', compact('category'));
    }
            //add product
    public function add_product(request $request)
    {
        $product=new product();

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->dis_price;

        $product->category=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Product Added Successully');
    }
        //show product
    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }
        //delete product
    public function delete_product($id)
    {
        $product=product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Delete Product Successfully');
    }
        //update product or edit product
    public function update_product($id)
    {
        $product=product::find($id);

        $category=category::all();

        return view('admin.update_product',compact('product','category'));
    }
        // update_product confirm  or edit_product confirm
    public function update_product_confirm(Request $request, $id)
    {
        $product=product::find($id);

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->dis_price;

        $product->category=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Product Updated Successully');
    }
        //view new product
    public function view_new_product()
    {
        $category=category::all();
        return view('admin.new_product',compact('category'));
    }
            //add new product
    public function add_new_product(Request $request)
    {
        $product=new new_product();

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->dis_price;

        $product->category=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('new_product',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','New Product Added Successully');
    }
            //show new product
    public function show_new_product()
    {
        $product=new_product::all();
        return view('admin.show_new_product',compact('product'));
    }
            //delete new product
    public function delete_new_product($id)
    {
        $product=new_product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Delete New Product Successfully');
    }
        //update new product
    public function update_new_product($id)
    {
        $product=new_product::find($id);

        $category=category::all();

        return view('admin.update_new_product',compact('product','category'));
    }

    //update new product comfirm

    public function update_new_product_confirm(Request $request, $id)
    {
        $product=new_product::find($id);

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->dis_price;

        $product->category=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('new_product',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','New Product Updated Successully');
    }

    public function view_top_product()
    {
        $category=category::all();
        return view('admin.top_product',compact('category'));
    }

    public function add_top_product(Request $request)
    {
        $product=new top_product();

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->dis_price;

        $product->category=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('top_product',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Top Product Added Successully');
    }

    public function show_top_product()
    {
        $product=top_product::all();
        return view('admin.show_top_product',compact('product'));
    }

    public function delete_top_product($id)
    {
        $product=top_product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Delete Top Product Successfully');
    }

    public function update_top_product($id)
    {
        $product=top_product::find($id);

        $category=category::all();

        return view('admin.update_top_product',compact('product','category'));
    }

    public function update_top_product_confirm(Request $request, $id)
    {
        $product=top_product::find($id);

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->dis_price;

        $product->category=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('top_product',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Top Product Updated Successully');
    }

}
