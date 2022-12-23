<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Affordable <span>housing</span>
               </h2>
            </div>
            <div class="row">
               @foreach($nest_cheap as $nest_cheap)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           {{$nest_cheap->location}}
                           </a>
                           <a href="" class="option2">
                           Ksh {{$nest_cheap->price}}/=
                           </a>
                           <a href="" class="option1">
                           {{$nest_cheap->type}}
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{$nest_cheap->image}}" alt="">
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            
         </div>
      </section>