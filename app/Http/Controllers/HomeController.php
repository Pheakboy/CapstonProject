<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\new_product;

use App\Models\top_product;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;



class HomeController extends Controller
{
    public function index()
{
    $product = Product::paginate(3);
    $product1 = new_product::paginate(6);
    $product2 = top_product::paginate(6);
    $categories = Category::all();

    // dd($categories);
    
    return view('home.userpage', compact('product', 'product1','product2', 'categories'));
}

    public function redirect()
    {
        if(!empty(Auth::user()) && Auth::user()->usertype == 1 )
        {
            return view('admin.home');
        }
        else 
        {
            $product=Product::paginate(3);
            $product1=new_product::paginate(6);
            $product2 = top_product::paginate(6);
            $categories = Category::all(); 
            return view('home.userpage',compact('product','product1','product2','categories'));
            
        }
    }

    public function product_detials($id)
    {
        $product=product::find($id);
        $categories=Category::all();
        return view('home.product_detials', compact('product','categories'));
    }

    //add_cart funtion

    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $product = product::find($id);
            $cart = new cart;
            $cart -> name = $user -> name; 
            $cart -> email = $user -> email;
            $cart -> phone = $user -> phone;
            $cart -> address = $user -> address;
            $cart -> user_id = $user -> id;

            $cart -> product_title = $product -> title;

            if ($product -> discount_price!=Null)
            {
                $cart -> price = $product -> discount_price *  $request->quantity;
            }
            else
            {
                $cart -> price = $product -> price *  $request->quantity;
            }
            
            $cart -> image = $product -> image;
            $cart -> Product_id = $product -> id;
            $cart -> quantity = $request->quantity;
            

            $cart -> save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

        public function show_product_nav()
        {
            $categories = Category:: all();

            $product = Product::paginate(3);

            return view('home.product_nav',compact('categories','product'));
        }

        public function show_cart()
        {
            if(Auth::id())
            {
                $id=Auth::user()->id;
                $cart = cart::where('user_id','=',$id)->get();
                $categories = Category :: all();
    
                return view('home.showcart',compact('cart','categories'));
            }
            else
            {
                return redirect('login');
            }
           
        }
        public function remove_cart($id)
        {
            $cart=cart::find($id);

            $cart->delete();

            return redirect()->back();

        }

        public function cash_order()
        {
            $user=Auth::user();
            $userid=$user ->id;
        

            $data = cart:: where('user_id','=',$userid)->get();
            
            foreach($data as $data)
            {
                $order = new order;
                $order -> name = $data -> name;
                $order -> email = $data -> email;
                $order -> phone = $data -> phone;
                $order -> address = $data -> address;
                $order -> user_id = $data -> user_id;
                $order -> product_title = $data -> product_title;
                $order -> price = $data -> price;
                $order -> quantity = $data -> quantity;
                $order -> image = $data -> image;
                $order -> product_id = $data -> Product_id;

                $order -> payment_status = 'cash on delivery';
                $order -> delivery_status = 'processing';

                $order -> save();

                $cart_id = $data -> id;
                $cart = cart::find($cart_id);
                $cart -> delete();


            }

            return redirect()-> back()->with('message','Thanks You!!! We have Received your Order. We\'ll contact to you soon... ');
          

        }

        
    //     public function show_categories(Request $request)
    // {
    //     dd($request);
    //     // Retrieve products based on the category name
    //     $product = Product::where('category', $categoryName)->paginate(6);
    //     $categories = Category::all();
    //     // Pass the products and category name to the view
   
    //     return view('home.categories_product', compact('products', 'categoryName','categories'));
    // }
}
  


