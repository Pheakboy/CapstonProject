@include('home.head')
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
                            <a class="nav-link" href="{{url('show_product_nav')}}">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('show_contactForm')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
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

                                <li class="nav-item">
                                    <x-app-layout>

                                    </x-app-layout>
                                </li>

                            @else

                                <li class="nav-item" >
                                    <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                                </li>

                                <li class="nav-item" >
                                    <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                                </li>

                            @endauth
                        @endif
                        <form class="form-inline" action="{{url('product_search')}}" method="GET">
                            <div class="input-group">
                                <input class="form-control" type="text" name="search"  placeholder="Search">
                                <div class="input-group-append">
                                    <button  class="btn" type="submit" >Search</button>
                                </div>
                            </div>

                        </form>

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
                    <h3>About us</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end inner page section -->
<!-- members section -->
<section class="why_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our Management Team
            </h2>
        </div>
    </div>
</section>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-2">
            <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="images/Kunvath.jpg" width="90">
                <h5 class="mt-3 name">Rim<br>Kunvath</h5><span class="work d-block"><br>G-Sports Owner</span>{{--<span class="work d-block">real estate</span>--}}
                {{--<div class="mt-4 about"><span>is a long established fact that eader&nbsp; will be distracted by the readable content.</span></div>--}}
                <div class="social">
                    <a href="https://www.facebook.com/CADT.Academy?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
                    <a href="https://t.me/cadt_official"><i class="fa fa-telegram"></i></a>
                    <a href="mailto: kunvath.rim@student.cadt.edu.kh"><i class="fa fa-google"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="images/Sopheaktra.jpg" width="90">
                <h5 class="mt-3 name">Sot<br>Sopheaktra</h5><span class="work d-block"><br>G-Sports Owner</span>{{--<span class="work d-block">real estate</span>--}}
                {{--<div class="mt-4 about"><span>is a long established fact that eader&nbsp; will be distracted by the readable content.</span></div>--}}
                <div class="social">
                    <a href="https://www.facebook.com/CADT.Academy?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
                    <a href="https://t.me/cadt_official"><i class="fa fa-telegram"></i></a>
                    <a href="https://www.cadt.edu.kh/"><i class="fa fa-google"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="images/Menghang.png" width="90">
                <h5 class="mt-3 name">Leang<br>Menghang</h5><span class="work d-block"><br>G-Sports Owner</span>{{--<span class="work d-block">real estate</span>--}}
                {{--<div class="mt-4 about"><span>is a long established fact that eader&nbsp; will be distracted by the readable content.</span></div>--}}
                <div class="social">
                    <a href="https://www.facebook.com/CADT.Academy?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
                    <a href="https://t.me/cadt_official"><i class="fa fa-telegram"></i></a>
                    <a href="https://www.cadt.edu.kh/"><i class="fa fa-google"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="images/Chhenglun.png" width="90">
                <h5 class="mt-3 name">Choub<br>Chhenglun</h5><span class="work d-block"><br>G-Sports Owner</span>{{--<span class="work d-block">real estate</span>--}}
                {{--<div class="mt-4 about"><span>is a long established fact that eader&nbsp; will be distracted by the readable content.</span></div>--}}
                <div class="social">
                    <a href="https://www.facebook.com/CADT.Academy?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
                    <a href="https://t.me/cadt_official"><i class="fa fa-telegram"></i></a>
                    <a href="https://www.cadt.edu.kh/"><i class="fa fa-google"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="images/Taihor.jpg" width="90">
                <h5 class="mt-3 name">Bou<br>Taihor</h5><span class="work d-block"><br>G-Sports Owner</span>{{--<span class="work d-block">real estate</span>--}}
                {{--<div class="mt-4 about"><span>is a long established fact that eader&nbsp; will be distracted by the readable content.</span></div>--}}
                <div class="social">
                    <a href="https://www.facebook.com/CADT.Academy?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
                    <a href="https://t.me/cadt_official"><i class="fa fa-telegram"></i></a>
                    <a href="https://www.cadt.edu.kh/"><i class="fa fa-google"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!-- end members section -->
<!-- arrival section -->
<section class="arrival_section">
    <div class="container">
        <div class="box">
            <div class="arrival_bg_box">
                <img src="images/sponsor.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="heading_container remove_line_bt">
                        <h2>
                            #Partner
                        </h2>
                    </div>
                    <p style="margin-top: 20px;margin-bottom: 30px;">
                        Be our partner for promote your products from your factory or anything by sponsor and collaborate with us. Please Contact us for information!
                    </p>
                    <a href="contact">
                        Welcome!
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end arrival section -->
<!-- footer section -->
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
