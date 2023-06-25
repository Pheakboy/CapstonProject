<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .center{
            margin: auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;

        }
        .font_size{
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            padding-top: 20px;
            margin-bottom: 20px;
            color: rgb(177,128,19);
        }
        .image_size{
            width: 100px;
            height: 100px;
        }
        .th_color{
            background-color: red;
        }
        .th_space{
            padding: 20px;
        }

        /* .button {
      display: inline-block;
      padding: 10px 20px;
      margin-right: 10px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      background-color: red;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: red;
    }

    .button-secondary {
      background-color: #4CAF50;

    }

    .button-secondary:hover {
      background-color: #4CAF50;
    }
    .button_view{
      float: right;
      margin-right: 98px;
      margin-bottom: 10px;
      margin-top: 
    } */
    .div_btn{
      float: right;
      margin-right: 98px;
      margin-bottom: 20px;

    }
    .dropdown {
  position: relative;
  display: inline-block;
}
.dropdown  .dropdown-content .box{
  width: 100%;
  height: 70%;
  background-color: #4CAF50;
  text-align: center;
  border-radius: 10px;
  margin-top: 10px
  

}

.dropdown  .dropdown-content .box1{
  width: 100%;
  height: 70%;
  background-color: red;
  text-align: center;
  border-radius: 10px;
  margin-top: 10px
  

}

    .dropdown-content {
  display: none;
  margin-bottom: 10px;    
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  }

    .dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  /* background-color: #4CAF50; */
  }
    .dropdown:hover .dropdown-content {
  display: block;
  }
  

  .button{
    display: inline-block;
      padding: 10px 20px;
      margin-right: 10px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      background-color: red;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
  }
  .button-secondary{
    display: inline-block;
      padding: 10px 20px;
      margin-right: 10px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      background-color:#4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
  }

    
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))

                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>

                @endif

                <h1 class="font_size">ALL PRODUCTS</h1>

                {{-- <div class="button_view">
                    <button class="button">View Products
                    </button>
                    <button class="button button-secondary">Add Products</button>
                </div> --}}

              <div class="div_btn">
                <div class="dropdown">
                  <button class="button">View Products </button>
                  <div class="dropdown-content">
                   <div class="box1"><a href="{{url('/show_new_product')}}">New Products</a></div>
                   <div class="box1"> <a href="{{url('/show_top_product')}}">Top Products</a></div>
                   <div class="box1"> <a href="{{url('/show_product')}}">Our Products</a></div>
                  </div>
                </div>
                <div class="dropdown">
                  <button class=" button-secondary">Add Products</button>
                  <div class="dropdown-content">
                    <div class="box"><a href="{{url('/view_new_product')}}">New Products</a></div>
                    <div class="box"><a href="{{url('/view_top_product')}}">Top Products</a></div>
                    <div class="box"><a href="{{url('/view_product')}}">Our Porducts</a></div>
                  </div>
                </div>
                
              </div>
            

                <table class="center">
                    <tr class="th_color">
                        <th class="th_space">Product title</th>
                        <th class="th_space">Description</th>
                        <th class="th_space">Quantity</th>
                        <th class="th_space">Category</th>
                        <th class="th_space">Price</th>
                        <th class="th_space">Discount Price</th>
                        <th class="th_space">Product Image</th>
                        <th class="th_space">Delete</th>
                        <th class="th_space">Edit</th>
                    </tr>

                    @foreach($product as $product)

                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                            <img class="image_size" src="/product/{{$product->image}}">
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this')" href="{{url('delete_product',$product->id)}}">Delete</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                            </td>
                        </td>
                    </tr>

                    @endforeach
                </table>

            </div>
        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>