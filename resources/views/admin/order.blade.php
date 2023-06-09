<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    @include('admin.css')
    <style>
        .title_order{
            font-weight: bold; 
            padding-bottom: 40px;
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            padding-top: 20px;
            margin-bottom: 20px;
            color: rgb(177,128,19);
        }
        .table_order{
            border: 2px solid white;
            width: 100%;
            margin: auto;
            text-align: center;
        }
        .th_deg{
           
            background-color: red;
        }
        .img_size{
            size: 200px;
            height: 100px;
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

                <h1 class="title_order">ALL ORDERS</h1>


                <div style="padding-left: 400px; padding-bottom: 30px;">
                    <form action="{{url('search')}}" method="get">
                        @csrf
                        <input type="text" style="color:black;" name="search" placeholder="Search for products">

                        <input type="submit" value="search" class="btn btn-outline-primary">
                    </form>
                </div>


                <table class="table_order">
                    <tr class="th_deg">
                        <th style="padding: 10px;">Name</th>
                        <th style="padding: 10px;">Email</th>
                        <th style="padding: 10px;">Address</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Product_title</th>
                        <th style="padding: 10px;">Quantity</th>
                        <th style="padding: 10px;">price</th>
                        <th style="padding: 10px;">Payment status</th>
                        <th style="padding: 10px;">Delivery</th>
                        <th style="padding: 10px;">Image</th>
                        <th style="padding: 10px;">Delivered</th>
                    </tr>

                    @foreach($order as $order)

                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>

                            <img class="img_size" src="/product/{{$order->image}}" alt="">

                        </td>

                        <td>
                            @if($order->delivery_status=='processing')

                            <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure to deliver thsi!!!')" class="btn btn-primary">Delevered</a>
                            
                        @else

                        <p style="color: green;">Delivered</p>
                            
                        @endif
                        
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