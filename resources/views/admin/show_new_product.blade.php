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
            text-decoration: underline;
        }
        .image_size{
            width: 100px;
            height: 100px;
        }
        .th_color{
            background-color: skyblue;
        }
        .th_space{
            padding: 20px;
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

                <h1 class="font_size">New All Product</h1>

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
                            <img class="image_size" src="/new_product/{{$product->image}}">
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this')" href="{{url('delete_new_product',$product->id)}}">Delete</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{url('update_new_product',$product->id)}}">Edit</a>
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