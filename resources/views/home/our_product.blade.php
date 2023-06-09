
 <!-- Our product -->
 <section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       @if(session()->has('message'))

                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
  
                @endif
       <div class="row">

         @foreach ($product as $products)

          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="{{url('product_detials',$products->id)}}" class="option1">
                      Product Detials
                      </a>
                      <form action="{{url('add_cart',$products->id)}}" method="Post">
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
                   <img src="product/{{$products->image}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                      {{$products->title}}
                   </h5>

                   @if($products->discount_price!=null)
                   <h6 style="color:blue;">
                     Discount price
                     <br>
                     $ {{$products->discount_price}}
                  </h6>

                  
                  <h6 style="text-decoration: line-through; color:red;">
                     price
                     <br>
                     $ {{$products->price}}
                  </h6>

                  @else
                  
                  <h6 style="color:blue;">
                     $ {{$products->price}}
                  </h6>
                      
                  @endif


                </div>
             </div>
          </div>
          
          @endforeach

          {{-- {{!!$product->appends(Request::all())->links()!!}} --}}

        <span style="padding-top: 20px;">
             {!!$product->withQueryString()->links('pagination::bootstrap-5') !!}
        </span>

      
    </div>
 </section>
 <!-- Special product -->
 
   