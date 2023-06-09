<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    @include('admin.css')
    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            padding-top: 20px;
            margin-bottom: 20px;
            color: rgb(177,128,19);
        }
        .text_color{
            color: black;
            padding-bottom: 20px;
        }
        label{
            display: inline-block;
            width:200px;

        }
        .div_design{
            padding-bottom: 15px;
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

                <form action="{{url('/add_new_product')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                <div class="div_center">
                    <h1 class="font_size">ADD NEW PRODUCTS</h1>

                    <div class="div_design">
                        <label>Product Title:</label>
                        <input class="text_color" type="text" name="title" placeholder="Write a title" required="" >
                    </div>

                    
                    <div class="div_design">
                        <label>Product description:</label>
                        <input class="text_color" type="text" name="description" placeholder="Write a description" required="">
                    </div>

                    
                    <div class="div_design">
                        <label>Product Price:</label>
                        <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
                    </div>

                      
                    <div class="div_design">
                        <label>Discount Price:</label>
                        <input class="text_color" type="number" name="dis_price" placeholder="Write a Discount" required="">
                    </div class="div_design">

                    
                    <div class="div_design">
                        <label>Product Quantity:</label>

                        <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a Quantity" required="">
                    </div>

                  
                    <div class="div_design">
                        <label>Product Category:</label>
                        <select class="text_color" name="category" required="">
                            <option  value="" selected ="" >Add a category here:</option>

                            @foreach($category as $category)

                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach
                        </select>
                    </div>

                    <div class="div_design">
                        <label>Product Image:</label>
                        <input type="file" name="image" required="">
                    </div>

                    <div class="div_design">
                        <input type="submit" value="Add New Product" class="btn btn-primary" >
                    </div>

                </form>

                </div>

            </div>
        </div> 
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>