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

    <style type = "text/css">
     
     .center
     {
        margin: auto;
        margin-top: 30px;
        width: 70%;
        padding: 30px;
        text-align: center;

     }

     table,th,td
     {
        border: 1px solid black;
     }
     .th_deg
     {
        padding: 10px;
        background-color: #02E7FF;
        font-size: 20px;
        font-weight: bold;
     }
        
        
    </style>



</head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->
       
         <div class="center">
            <table>
                <tr>
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">price</th>
                    <th class="th_deg">Payment Status</th>
                    <th class="th_deg">Delivery Status</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Cancel Order</th>

                </tr>

                @foreach($order as $order)
                <tr>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img height="100" width="180" src="product/{{$order -> image}}">
                    </td>
                    <td>
                        @if($order->delivery_status = 'processing')
                        <a onclick="return confirm('Are You Sure to Cancel this Order !!')" class="btn btn-danger" href="{{url('Cancel_order',$order->id)}}">Cancel Order</a>
                        @else
                        <p style = "color: skyblue;"> Not Allowed</p>
                        @endif
                    </td>
                </tr>
                @endforeach

            </table>
         </div>

    
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>