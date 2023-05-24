<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Top <span>products</span>
         </h2>
      </div>
      <div class="row">

        @foreach ($product2 as $top_product)

         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="{{url('product_detials',$top_product->id)}}" class="option1">
                        Product Detials
                        </a>
                     <a href="" class="option2">
                     Buy Now
                     </a>
                  </div>
               </div>
               <div class="img-box">
                  <img src="top_product/{{$top_product->image}}" alt="">
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