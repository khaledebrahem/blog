<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Favicon  -->
    <!--   <link rel="icon" href="img/core-img/favicon.ico">-->
   {!! Html::style("web2/img/core-img/favicon.ico") !!}


   <!-- Core Style CSS -->
    <!--<link rel="stylesheet" href="css/core-style.css">-->
    {!! Html::style("web2/css/core-style.css") !!}

   <!-- <link rel="stylesheet" href="style.css"> -->
    {!! Html::style("web2/style.css") !!}


    @yield('head')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
<!-- Search Wrapper Area Start -->
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type your keyword...">
                        <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->

        <!-- Amado Nav -->
        <nav class="amado-nav">
            <ul>
                <li class="active"><a href="{{route('Web.index')}}">Home</a></li>

            </ul>
        </nav>
        <nav class="amado-nav">
            <ul>
                <li class="active"><a href="{{route('login')}}">login</a></li>

            </ul>
        </nav>
        <!-- Button Group -->

        <!-- Cart Menu -->

        <!-- Social Button -->
        <div class="social-info d-flex justify-content-between">

            <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Product Catagories Area Start -->


    @yield('content')


    <!-- Product Catagories Area End -->
</div>






<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>| This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by khaled ebrahem
                        </p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
<!--<script src="js/jquery/jquery-2.2.4.min.js"></script>-->
{!! Html::script("web2/js/jquery/jquery-2.2.4.min.js") !!}
<!-- Popper js -->
<!--<script src="js/popper.min.js"></script>-->
{!! Html::script("web2/js/popper.min.js") !!}

<!-- Bootstrap js -->
<!--<script src="js/bootstrap.min.js"></script>-->
{!! Html::script("web2/js/bootstrap.min.js") !!}


<!-- Plugins js -->
<!--<script src="js/plugins.js"></script>-->
{!! Html::script("web2/js/plugins.js") !!}

<!-- Active js -->
<!--<script src="js/active.js"></script> -->
{!! Html::script("web2/js/active.js") !!}


</body>

</html>



























