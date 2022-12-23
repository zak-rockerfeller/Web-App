<section id="new-arrivals" class="new-arrivals">
                        <div class="container">
                                <div class="section-header">
                                        <h2>Art</h2>
                                </div><!--/.section-header-->
                                <div class="new-arrivals-content">
                                        <div class="row">
                                                @foreach($art_nest as $art_nest)
                                                <div class="col-md-3 col-sm-4">
                                                        <a href="https://play.google.com/store/apps/details?id=com.nest.keja&pli=1" target="_blank">
                                                                <div class="single-new-arrival">
                                                                <div class="single-new-arrival-bg">
                                                                        <img src="{{$art_nest->image}}" alt="new-arrivals images">
                                                                        <div class="single-new-arrival-bg-overlay"></div>
                                                                        <div class="sale bg-1">
                                                                                <p>sale</p>
                                                                        </div>
                                                                        <div class="new-arrival-cart">
                                                                                <p>
                                                                                        
                                                                                        <a href="#">  {{$art_nest->location}} </a>
                                                                                </p>
                                                                                <p class="arrival-review pull-right">
                                                                                        <p>
                                                                                
                                                                                        <p class="arrival-product-price">Ksh {{$art_nest->price}}/=</p>
                                                                                </p>
                                                                                </p>
                                                                        </div>
                                                                </div>
                                                               
                                                        </div>
                                                        </a>
                                                </div>
                                               @endforeach
                                        </div>
                                </div>
                        </div><!--/.container-->
                

                </section>