<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Popular <span>listings</span>
               </h2>
            </div>
            <div class="row">
               @foreach($nest_popular as $nest_popular)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="https://play.google.com/store/apps/details?id=com.nest.keja&pli=1" target="_blank" class="option1">
                           {{$nest_popular->location}}
                           </a>
                           <a href="https://play.google.com/store/apps/details?id=com.nest.keja&pli=1" target="_blank" class="option2">
                           Ksh {{$nest_popular->price}}/=
                           </a>
                           <a href="https://play.google.com/store/apps/details?id=com.nest.keja&pli=1" target="_blank" class="option1">
                           {{$nest_popular->type}}
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{$nest_popular->image}}" alt="">
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            
         </div>
      </section>