<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->

      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/shortcut.png" type="">
      <title>G_Sport</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')

        <div class="col-sm-6 col-md-4 col-lg-4" style=" margin: auto;
                  width:50%; padding:30px">
              
               <div class="img-box" style="padding:20px">
                  <img src="product/{{$product->image}}" alt="">
               </div>
               <div class="detail-box">
                  <h5>
                     {{$product->title}}
                  </h5>

                  @if($product->discount_price!=null)
                  <h6 style="color:red;">
                    Discount price
                    <br>
                    $ {{$product->discount_price}}
                 </h6>

                 
                 <h6 style="text-decoration: line-through; color:blue;">
                    price
                    <br>
                    $ {{$product->price}}
                 </h6>

                 @else
                 
                 <h6 style="color:blue;">
                    $ {{$product->price}}
                 </h6>
                     
                 @endif

                 <h6>Product category:{{$product->category}}</h6>

                 <h6>Product detiial:{{$product->description}}</h6>

                 <h6>Product quantity:{{$product->quantity }}</h6>

                 <form action="{{url('add_cart_topp',$product->id)}}" method="Post">
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
        </div>
       
         <!-- end header section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
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
