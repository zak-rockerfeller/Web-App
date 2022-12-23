                <section id="new-arrivals" class="new-arrivals">
                        <div class="container">
                                <div class="section-header">
                                        <h2>newly built property</h2>
                                </div><!--/.section-header-->
                                <div class="new-arrivals-content">
                                        <div class="row">
                                               @foreach($new_nest as $new_nest)
                                                <div class="col-md-3 col-sm-4">
                                                        <a href="https://play.google.com/store/apps/details?id=com.nest.keja&pli=1" target="_blank">
                                                                <div class="single-new-arrival">
                                                                <div class="single-new-arrival-bg">
                                                                        <img src="{{$new_nest->image}}" alt="new-arrivals images">
                                                                        <div class="single-new-arrival-bg-overlay"></div>
                                                                        <div class="sale bg-2">
                                                                                <p>let</p>
                                                                        </div>
                                                                        <div class="new-arrival-cart">
                                                                                <p>
                                                                                        
                                                                                        <a href="#">  {{$new_nest->location}} </a>
                                                                                </p>
                                                                                <p class="arrival-review pull-right">
                                                                                        <p>
                                                                                
                                                                                        <p class="arrival-product-price">Ksh {{$new_nest->price}}/=</p>
                                                                                </p>
                                                                                </p>
                                                                        </div>
                                                                </div>
                                                                <h4><a href="#">{{$new_nest->type}}</a></h4>
                                                        </div>
                                                        </a>
                                                </div>
                                               @endforeach
                                                
                                                
                                                
                                        </div>
                                </div>
                        </div><!--/.container-->
                </section>