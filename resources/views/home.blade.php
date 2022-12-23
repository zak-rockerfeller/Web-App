<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/dark.png" type="">
      <title>Nest Keja</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="homie/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="homie/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="homie/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="homie/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('layouts.home.header')
         <!-- end header section -->


         <!-- slider section -->
         @include('layouts.home.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('layouts.home.why')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('layouts.home.arrival')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('layouts.home.listings')
      <!-- end product section -->

      <!-- product section -->
      @include('layouts.home.popular')
      <!-- end product section -->

            <!-- product section -->
      @include('layouts.home.affordable')
      <!-- end product section -->

      <!-- subscribe section -->
      @include('layouts.home.subscribe')
      <!-- end subscribe section -->

      <!-- client section -->
      @include('layouts.home.client')
      <!-- end client section -->

      <!-- footer start -->
      @include('layouts.home.footer')
      <!-- footer end -->
      
      <div class="cpy_">
         <p>&copy;Copyright<a href="https://zak-rockerfeller.github.io/#/"> Nested Developers</a></p>
                <a href="https://www.nest-keja.com/nest/v1/alpha.html" >Terms & Conditions</a>
      </div>
      <!-- jQery -->
      <script src="homie/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="homie/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="homie/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="homie/js/custom.js"></script>
   </body>
</html>