<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             New <span>products</span>
          </h2>
       </div>
       <div class="row">

         @foreach ($product1 as $new_product)

          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                     <a href="{{url('product_detials',$new_product->id)}}" class="option1">
                        Product Detials
                        </a>
                      <form action="{{url('add_cart',$new_product->id)}}" method="Post">
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
                   <img src="new_product/{{$new_product->image}}" alt="">
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

    </div>
 </section>