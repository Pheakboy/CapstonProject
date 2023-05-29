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
         <!-- end header section -->
       
 <!-- Our product -->
 <section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
           <span>products</span>
          </h2>
       </div>
       @if(session()->has('message'))

                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
  
                @endif
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
        
                 @foreach ($product1 as $new_product)
        
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                             <a href="{{url('new_product_detials',$new_product->id)}}" class="option1">
                                Product Detials
                                </a>
                              <form action="{{url('add_cart_newp',$new_product->id)}}" method="Post">
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
                           <img src="product/{{$new_product->image}}" alt="">
                        </div>
                        <div class="detail-box">
                           <h5>
                              {{$new_product->title}}
                           </h5>
                           @if($new_product->discount_price!=null)
                           <h6 style="color:red;">
                             Discount price
                             <br>
                             $ {{$new_product->discount_price}}
                          </h6>
        
                          
                          <h6 style="text-decoration: line-through; color:blue;">
                             price
                             <br>
                             $ {{$new_product->price}}
                          </h6>
        
                          @else
                          
                          <h6 style="color:blue;">
                             $ {{$new_product->price}}
                          </h6>
                              
                          @endif
        
                        </div>
                     </div>
                  </div>
                  
                  @endforeach
        
          
         
                 @foreach ($product2 as $top_product)
         
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="{{url('top_product_detials',$top_product->id)}}" class="option1">
                                 Product Detials
                                 </a>
                             
                                 <form action="{{url('add_cart_topp',$top_product->id)}}" method="Post">
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
                           <img src="product/{{$top_product->image}}" alt="">
                        </div>
                        <div class="detail-box">
                           <h5>
                              {{$top_product->title}}
                           </h5>
                           @if($top_product->discount_price!=null)
                           <h6 style="color:red;">
                             Discount price
                             <br>
                             $ {{$top_product->discount_price}}
                          </h6>
         
                          
                          <h6 style="text-decoration: line-through; color:blue;">
                             price
                             <br>
                             $ {{$top_product->price}}
                          </h6>
         
                          @else
                          
                          <h6 style="color:blue;">
                             $ {{$top_product->price}}
                          </h6>
                              
                          @endif
         
                        </div>
                     </div>
                  </div>
                  
                  @endforeach
         
            </div>
         </section>
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
