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
      <title>G-Sport</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
      <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
      <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />

   </head>
   <body class="sub_page">
      <div class="hero_area">

        <!-- header section strats -->
          <header class="header_section">
              <div class="container">
                  <nav class="navbar navbar-expand-lg custom_nav-container ">
                      <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="images/GSport.png" alt="#" /></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class=""> </span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav">
                              <li class="nav-item ">
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
                                  <a class="nav-link" href="{{url('show_product_nav')}}">Products</a>
                              </li>

                              <li class="nav-item active" style="margin-left: 15px;">
                                  <a class="nav-link" href="{{url('show_contactForm')}}">Contact</a>
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

                                  @auth

                                     

                                  @else

                                      <li class="nav-item" >
                                          <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                                      </li>

                                      <li class="nav-item" >
                                          <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                                      </li>
                                      <li class="nav-item">
                                      
                                   </li>

                                  @endauth
                              @endif
                              <form class="form-inline" action="{{url('product_search')}}" method="GET">
                                  <div class="input-group" style="margin-left: 15px; height:90%;">
                                      <input class="form-control" type="text" name="search"  placeholder="Search" style="height:100%; ">
                                      <div class="input-group-append" style="height: 100%;">
                                          <button  class="btn" type="submit" >Search</button>
                                      </div>
                                  </div>

                              </form>

                              <x-app-layout>

                              </x-app-layout>
                          </ul>
                      </div>
                  </nav>
              </div>
          </header>
          <!-- end header section -->

      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Contact us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
            @if (session('message'))
            <div class="alert alert-success">
              {{ session('message') }}
            </div>
          @endif

            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">

                     <form action="{{route('store-contact') }}" method="POST">
                        @csrf
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="email" placeholder="Enter your email address" name="email" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" name="message" required></textarea>
                           <input type="submit" value="Submit" />
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->
      <!-- arrival section -->

      <!-- end arrival section -->
      <!-- footer section -->
      @include('home.footer')
      <!-- <footer class="footer_section">
         <div class="container">
            <div class="row">
               <div class="col-md-4 footer-col">
                  <div class="footer_contact">
                     <h4>
                        Reach at..
                     </h4>
                     <div class="contact_link_box">
                        <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                        Location
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                        Call +01 1234567890
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                        demo@gmail.com
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="footer_detail">
                     <a href="index.html" class="footer-logo">
                     Famms
                     </a>
                     <p>
                        Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                     </p>
                     <div class="footer_social">
                        <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="map_container">
                     <div class="map">
                        <div id="googleMap"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-info">
               <div class="col-lg-7 mx-auto px-0">
                  <p>
                     &copy; <span id="displayYear"></span> All Rights Reserved By
                     <a href="https://html.design/">Free Html Templates</a><br>

                     Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                  </p>
               </div>
            </div>
         </div>
      </footer> -->
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
