<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/titlelogo.png" type="">
      <title>G_Sport</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style type="text/css">

        .center
        {
            margin: auto;
            width: 70%;
            text-align: center;
            padding: 30px;
        }
        table,th,td
        {
            border: 1px solid grey;
        }
        .th_deg
        {
            font-size: 20px;
            padding: 5px;
            background: #02E7FF;

        }
        .img_deg
        {
            height: 200px;
            width: 200px;
        }
        .total_deg
        {
            font-size: 20px;
            padding: 40px;
        }
    
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        {{-- @include('home.header') --}}

        <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="images/GSport.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Sport<span class="caret"></span></a>
                           <ul class="dropdown-menu">
                             @foreach($categories as $category)
                             <li><a href="{{route('show_categories', ['categoryName' => $category->category_name])}}">{{$category->category_name}}</a></li>
                             @endforeach
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="product" href="{{url('show_product_nav')}}">Products</a>
                        </li>
                        
                        <li class="nav-item">
                           <a class="nav-link" id="contact" href="{{url('show_contactForm')}}">Contact</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="{{url('show_cart')}}">Cart[{{$count}}]</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="{{url('show_order')}}">Order</a>
                       </li>
        
                        <!-- <form class="form-inline">
                          <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                          <i class="fa fa-search" aria-hidden="true"></i>
                          </button>
                       </form> -->
                       
                       @if (Route::has('login'))
        
                        <form class="form-inline" action="{{url('product_search')}}" method="GET">
                          <div class="input-group">
                             <input class="form-control" type="text" name="search"  placeholder="Search">
                             <div class="input-group-append">
                                <button  class="btn" type="submit" >Search</button>
                             </div>
                          </div>
                          </form>
                        @endif
        
                        @auth
        
                        <li class="nav-item" id="user">
                           <x-app-layout>
            
                           </x-app-layout>
                        </li>
         
                        @else
         
                         <li class="nav-item" >
                           <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                        </li>
         
                        <li class="nav-item" >
                           <a class="btn btn-success"id="registercss" href="{{ route('register') }}">Register</a>
                        </li>
         
                        @endauth
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         <!-- Message -->
         @if(session()->has('message'))

         <div class="alert alert-success">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
             {{session()->get('message')}}
         </div>

         @endif

      <div class="center">
        <table>
            <tr>
                <th class="th_deg">Product title</th>
                <th class="th_deg">Product quantity</th>
                <th class="th_deg">price</th>
                <th class="th_deg">image</th>
                <th class="th_deg">Action</th>
            </tr>

            <?php $totalprice = 0; ?>

            @foreach($cart as $cart)
            <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>${{$cart->price}}</td>
                <td><img class= "img_deg" src="/product/{{$cart->image}}"> </td>
                <td><a class="btn btn-danger" onclick="return confirm('Do you want to remove this product ?')" href="{{url('remove_cart',$cart->id)}}">Remove Product</a></td>
            </tr>
            <?php $totalprice=$totalprice + $cart->price ?>
            @endforeach
        </table>
        <div>
            <h1 class="total_deg">Total Price : ${{$totalprice}}</h1>
        </div>
      
     
      <div>
        <h1 style="font-size: 25px; padding-bottom: ">Proceed to Order</h1>
        <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>

        <a href="{{route('stripe', $totalprice)}}" class="btn btn-danger">Pay Using Card</a>

      </div>
</div>
     
      
      
      @include('home.copyright')
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
