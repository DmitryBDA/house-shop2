<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="user/assets/img/favicon.ico">

    <!-- CSS
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="user/assets/css/vendor/bootstrap.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="user/assets/css/slick.css">
    <!--swiper bundle min css-->
    <link rel="stylesheet" href="user/assets/css/swiper-bundle.min.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="user/assets/css/font.awesome.css">
    <!--ionicons css here-->
    <link rel="stylesheet" href="user/assets/css/ionicons.min.css">
    <!--icofont min css here-->
    <link rel="stylesheet" href="user/assets/css/icofont.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="user/assets/css/animate.css">
    <!--nice select css-->
    <link rel="stylesheet" href="user/assets/css/nice-select.css">

    <link rel="stylesheet" href="user/assets/custom.css">


    @yield('custom_css')
    <!-- Minified CSS Plugins
        *************(Please remove the comment from below vendor.min.css and plugins.min.css  for better website load performance and remove all js plugin files from above)
    -->
    <!-- <link rel="stylesheet" href="user/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="user/assets/css/plugins.min.css"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="user/assets/css/style.css">



    <!--modernizr min js here-->
    <script src="user/assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>


<!--offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)">X</a>
                    </div>
                    <div id="menu" class="text-left ">
                        @include('layouts.user.partial.nav-mobile')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->

<!--header area start-->
<header class="header_area sticky-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header_container d-flex align-items-center">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="header_logo">
                        <a href="{{route('main')}}"><img src="user/assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <!--main menu start-->
                    <div class="main_menu">
                        <nav>
                            <!-- Left Side Of Navbar -->
                         @include('layouts.user.partial.nav')
                        </nav>
                    </div>
                    <!--main menu end-->
                    <div class="header_right_info">
                        <div class="login_register">
                            <ul>
                                @auth
                                    <div>{{Auth::user()->name}}</div>
                                    <li class="ion-log-out"><a class="" href="{{ route('logout') }}"
                                                          onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Выйти</a>
                                    </li>
                                    @if(Auth::user()->hasRole('admin'))
                                        <li class="register">
                                            <a href="{{route('admin-main')}}">Админка</a>
                                        </li>
                                    @endif



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endauth
                                @guest
                                    <li class="login"><a href="{{route('login')}}">Войти</a></li>
                                    <li class="register"><a href="{{route('register')}}">Регистрация</a></li>
                                @endguest


                            </ul>
                        </div>
                        <div class="add_property">
                            <a href="add-property.html">add property</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->

@yield('content')

<!--footer area start-->
<div class="footer_area">
    <div class="footer_bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_top">
                        <div class="footer_widget one">
                            <div class="footer_logo">
                                <a href="index.html"><img src="user/assets/img/logo/white-logo.png" alt=""></a>
                            </div>
                            <div class="footer_desc">
                                <p>pleasure rationally encounter are
                                    extremely painful. Nor again is there
                                    anyone who loves or pursues</p>
                            </div>
                            <div class="footer_social">
                                <h4>Follow us</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer_widget footer_menu">
                            <h3>Quick Link</h3>
                            <ul>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="login.html">Login/Register</a></li>
                                <li><a href="properties.html">Properties</a></li>
                                <li><a href="blog.html">Blog Post</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer_widget footer_menu ">
                            <h3>Information</h3>
                            <ul>
                                <li><a href="#">Become a Member</a></li>
                                <li><a href="agent.html">Our Agents</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="add-property.html">add property</a></li>
                                <li><a href="#">Payment System</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="footer_widget footer_contact">
                            <h3>Contact Info</h3>
                            <div class="footer_location">
                                <p>358 North Street, Central Town <br>
                                    Glepsy Tower, New York, USA</p>
                            </div>
                            <div class="footer_contact_number">
                                <a href="tel:+12547898888"> +12547 898 888</a>
                                <a href="tel:+14587888666"> +14587 888 666</a>
                            </div>
                            <div class="footer_contact_mail">
                                <a href="mailto:webmaster@example.com">info@example.com</a>
                                <a href="mailto:webmaster@example.com">www.example.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_middle">
                        <div class="newsletter_container">
                            <div class="newsletter_text">
                                <h3>Subscribe our Newsletter <br>
                                    get latest updates</h3>
                            </div>
                            <div class="newsletter_form">
                                <form action="#">
                                    <input placeholder="Enter your email here" type="text">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright_area">
                        <p> <img src="user/assets/img/others/copyright.png" alt=""> <a href="index.html">Reliant</a>, 2020, All Rights Reserved by Hasthems</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer area end-->


<!-- JS
============================================ -->

<!--jquery min js-->
<script src="user/assets/js/vendor/jquery-3.4.1.min.js"></script>
<!--popper min js-->
<script src="user/assets/js/vendor/popper.js"></script>
<!--bootstrap min js-->
<script src="user/assets/js/vendor/bootstrap.min.js"></script>
<!--slick min js-->
<script src="user/assets/js/slick.min.js"></script>
<!--swiper bundle min js-->
<script src="user/assets/js/swiper-bundle.min.js"></script>
<!--counterup min js-->
<script src="user/assets/js/jquery.counterup.min.js"></script>
<!--waypoints min js-->
<script src="user/assets/js/jquery-waypoints.js"></script>
<!--wow min js-->
<script src="user/assets/js/wow.min.js"></script>
<!--jquery nice select js-->
<script src="user/assets/js/jquery.nice-select.js"></script>
<!--jquery scrollup min js-->
<script src="user/assets/js/jquery.scrollup.min.js"></script>
<!--ajax mail js-->
<script src="user/assets/js/ajax-mail.js"></script>
<!--mailchimp ajax js-->
<script src="user/assets/js/mailchimp-ajax.js"></script>

@yield('custom_js')
<!-- Minified JS Plugins
    *************(Please remove the comment from below vendor.min.js and plugins.min.js  for better website load performance and remove all js plugin files from above)
-->
<!-- <script src="user/assets/js/vendor/vendor.min.js"></script>
<script src="user/assets/js/plugins.min.js"></script> -->

<!-- Main JS -->
<script src="user/assets/js/main.js"></script>





</body>

</html>
