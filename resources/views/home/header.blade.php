<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="userpage"><img width="250" src="images/GSport.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="userpage">Home <span class="sr-only">(current)</span></a>
                </li>
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Sport<span class="caret"></span></a>
                   <ul class="dropdown-menu">
                      <li><a href="about.html">Football</a></li>
                      <li><a href="testimonial.html">Volleyball</a></li>
                      <li><a href="about.html">Tennis</a></li>
                      <li><a href="about.html">Basketball</a></li>
                      <li><a href="about.html">Cycling</a></li>
                   </ul>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="product_nav">Products</a>
                </li>
                
                <li class="nav-item">
                   <a class="nav-link" href="contact">Contact</a>
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

                <li class="nav-item">
                  <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
               </li>

               <li class="nav-item">
                  <a class="btn btn-success" href="{{ route('register') }}">Register</a>
               </li>

               @endauth
                @endif
                <form class="form-inline">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-append">
      <button  class="btn btn-danger" type="submit">Search</button>
    </div>
  </div>
      
</form>
         
             </ul>
          </div>
       </nav>
    </div>
 </header>