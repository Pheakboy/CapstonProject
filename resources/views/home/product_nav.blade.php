@include('home.head')
   <body class="sub_page">
      
         <!-- header section strats -->
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
                     <li class="nav-item active">
                        <a class="nav-link" id="product" href="{{url('show_product_nav')}}">Products</a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link" id="contact" href="{{url('show_contactForm')}}">Contact</a>
                     </li>
                     <li class="nav-item">
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
       <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">

       @foreach ($product as $products)

       <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="box">
             <div class="option_container">
                <div class="options">
                   <a href="{{url('product_detials',$products->id)}}" class="option1">
                   Product Detials
                   </a>
                   <form action="{{url('add_cart',$products->id)}}" method="Post">
                     @csrf
                     <div class = "row">
                        <div class = "col-md-4">
                           <input type = "number" name="quantity" value = "1" min="1" stype="width:50px">
                        </div>
                        <div class="col-md-4">    
                            <input type = "submit" value = "Add To Cart">
                        </div>
                     </div>
                 
                  </form>
                </div>
             </div>
             <div class="img-box">
                <img src="product/{{$products->image}}" alt="">
             </div>
             <div class="detail-box">
                <h5>
                   {{$products->title}}
                </h5>

                @if($products->discount_price!=null)
                <h6 style="color:red;">
                  Discount price
                  <br>
                  $ {{$products->discount_price}}
               </h6>

               
               <h6 style="text-decoration: line-through; color:blue;">
                  price
                  <br>
                  $ {{$products->price}}
               </h6>

               @else
               
               <h6 style="color:blue;">
                  $ {{$products->price}}
               </h6>
                   
               @endif


             </div>
          </div>
       </div>
       
       @endforeach

       <span style="padding-top: 20px;">
         {!!$product->withQueryString()->links('pagination::bootstrap-5') !!}
    </span>
      
      <!-- inner page section -->
   
      {{-- </footer>  --}}
      @include('home.footer')
      <!-- footer section -->
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>
