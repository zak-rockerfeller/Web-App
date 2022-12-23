<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
                <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Studio Apartments</title>

        <!-- For favicon png -->
                <link rel="shortcut icon" type="image/icon" href="images/dark.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="aboutus/css/font-awesome.min.css">

        <!--linear icon css-->
                <link rel="stylesheet" href="aboutus/css/linearicons.css">

                <!--animate.css-->
        <link rel="stylesheet" href="aboutus/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="aboutus/css/owl.carousel.min.css">
                <link rel="stylesheet" href="aboutus/css/owl.theme.default.min.css">
                
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="aboutus/css/bootstrap.min.css">
                
                <!-- bootsnav -->
                <link rel="stylesheet" href="aboutus/css/bootsnav.css" > 
        
        <!--style.css-->
        <link rel="stylesheet" href="aboutus/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="aboutus/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                
        <!--[if lt IE 9]>
                        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
        
        <body>
                <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
               <!--welcome-hero start -->
                @include('layouts.studio.header')
                 <!--welcome-hero end -->

                <!--new-arrivals start -->
                @include('layouts.studio.featured')
                <!--new-arrivals end -->

                <!--blog start -->
                @include('layouts.studio.blog')
                <!--blog end -->

                <!--contact start -->
                @include('layouts.studio.contact')
                <!--contact end -->
               

                <!--footer start-->
                @include('layouts.studio.footer')
                <!--footer end-->
                
                <!-- Include all js compiled plugins (below), or include individual files as needed -->

                <script src="aboutus/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
                
                <!--bootstrap.min.js-->
        <script src="aboutus/js/bootstrap.min.js"></script>
                
                <!-- bootsnav js -->
                <script src="aboutus/js/bootsnav.js"></script>

                <!--owl.carousel.js-->
        <script src="aboutus/js/owl.carousel.min.js"></script>


                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
                
        
        <!--Custom JS-->
        <script src="aboutus/js/custom.js"></script>
        
    </body>
        
</html>