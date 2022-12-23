<section id="feature" class="new-arrivals">
                        <div class="container">
                                <div class="new-arrivals-content">
                                        <div class="row">
                                                @foreach($camping_nest as $camping_nest)
                                                <div class="col-md-3 col-sm-4">
                                                        <a href="https://play.google.com/store/apps/details?id=com.nest.keja&pli=1" target="_blank">
                                                                <div class="single-new-arrival">
                                                                <div class="single-new-arrival-bg">
                                                                        <img src="{{$camping_nest->image}}" alt="new-arrivals images">
                                                                        <div class="single-new-arrival-bg-overlay"></div>
                                                                        <div class="sale bg-1">
                                                                                <p>sale</p>
                                                                        </div>
                                                                        <div class="new-arrival-cart">
                                                                                <p>
                                                                                        
                                                                                        <a href="#"> Ksh<span> {{$camping_nest->price}}/=</span></a>
                                                                                </p>
                                                                                
                                                                        </div>
                                                                </div>
                                                                <h4><a href="#">{{$camping_nest->type}}</a></h4>
                                                        </div>
                                                        </a>
                                                </div>
                                               @endforeach
                                        </div>
                                </div>
                        </div><!--/.container-->
                

                </section>