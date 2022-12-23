<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Top <span>listings</span>
               </h2>
            </div>
            <div class="row">
               @foreach($nest_top as $nest_top)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="https://play.google.com/store/apps/details?id=com.nest.keja&pli=1" target="_blank" class="option1">
                           {{$nest_top->location}}
                           </a>
                           <a href="https://play.google.com/store/apps/details?id=com.nest.keja&pli=1" target="_blank" class="option2">
                           Ksh {{$nest_top->price}}/=
                           </a>
                           <a href="https://play.google.com/store/apps/details?id=com.nest.keja&pli=1" target="_blank" class="option1">
                           {{$nest_top->type}}
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{$nest_top->image}}" alt="">
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            
         </div>
      </section>