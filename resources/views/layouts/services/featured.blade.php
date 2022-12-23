<section id="feature" class="new-arrivals">
                        <div class="container">
                                <div class="section-header">
                                        <h2>featured</h2>
                                </div><!--/.section-header-->
                                <div class="new-arrivals-content">
                                        <div class="row">
                                                @foreach($featured_housing_nest as $featured_housing_nest)
                                                <div class="col-md-3 col-sm-4">
                                                        <a href="https://play.google.com/store/apps/details?id=com.nest.keja&pli=1" target="_blank">
                                                                <div class="single-new-arrival">
                                                                <div class="single-new-arrival-bg">
                                                                        <img src="{{$featured_housing_nest->image}}" alt="new-arrivals images">
                                                                        <div class="single-new-arrival-bg-overlay"></div>
                                                                        <div class="sale bg-1">
                                                                                <p>sale</p>
                                                                        </div>
                                                                       <div class="new-arrival-cart">
                                                                                <p>
                                                                                        
                                                                                        <a href="#">  {{$featured_housing_nest->location}} </a>
                                                                                </p>
                                                                                <p class="arrival-review pull-right">
                                                                                        <p>
                                                                                
                                                                                        <p class="arrival-product-price">Ksh {{$featured_housing_nest->price}}/=</p>
                                                                                </p>
                                                                                </p>
                                                                        </div>
                                                                </div>
                                                                <h4><a href="#">{{$featured_housing_nest->type}}</a></h4>
                                                        </div>
                                                        </a>
                                                </div>
                                               @endforeach
                                        </div>
                                </div>
                        </div><!--/.container-->
                

                </section>