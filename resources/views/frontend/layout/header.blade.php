<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sarsa - News & Magazine HTML Template</title>
    <meta name="description" content="Sarsa - News & Magazine HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/imageRevealHover.css">
    <link rel="stylesheet" href="css/swiper-bundle.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div class="header__top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 order-2 order-lg-0">
                        <div class="header__top-search">
                            <form action="#">
                                <input type="text" placeholder="Search here...">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 order-0 order-lg-2 d-none d-md-block">
                        <div class="header__top-logo logo text-lg-center">
                            <a href="index.html" class="logo-dark"><img src="img/logo/logo.png" alt="Logo"></a>
                            <a href="index.html" class="logo-light"><img src="img/logo/w_logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-6 order-3 d-none d-sm-block">
                        <div class="header__top-right">
                            <ul class="list-wrap">
                                <li class="news-btn"><a href="#newsletter" class="btn"><span class="btn-text">subscribe</span></a></li>
                                <li class="lang">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            ENG
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">SPA</a></li>
                                            <li><a class="dropdown-item" href="#">GRE</a></li>
                                            <li><a class="dropdown-item" href="#">CIN</a></li>
                                            <li><a class="dropdown-item" href="#">CIN</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-fixed-height"></div>
        <div id="sticky-header" class="tg-header__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo d-block d-md-none">
                                    <a href="index.html" class="logo-dark"><img src="img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="logo-light"><img src="img/logo/w_logo.png" alt="Logo"></a>
                                </div>
                                <div class="offcanvas-toggle">
                                    <a href="#"><i class="flaticon-menu-bar"></i></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li class="active"><a href="{{route('user.home')}}">Home Default</a></li>
                                                <li><a href="index-2.html">Home Interior</a></li>
                                                <li><a href="index-3.html">Home Travel</a></li>
                                                <li><a href="index-4.html">Home Technology</a></li>
                                                <li><a href="index-5.html">Home NFT</a></li>
                                                <li><a href="index-6.html">Home Fashion</a></li>
                                                <li><a href="index-7.html">Home Adventure</a></li>
                                                <li><a href="index-8.html">Home Minimal</a></li>
                                            </ul>
                                        </li>

                                        @can('create post')
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('user.create_post')}}">Create Post</a>
                                        </li>
                                        @endcan
                                        <li><a href="lifestyle">Lifestyle</a></li>
                                        <li><a href="travel">Travel</a></li>
                                        <li class="menu-item-has-children"><a href="#">Post Type</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog">Our Blog</a></li>
                                                <li><a href="blog-details">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="ntf">NFT</a></li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="mode-switcher">
                                            <nav class="switcher__tab">
                                                <span class="switcher__btn light-mode"><i class="flaticon-sun"></i></span>
                                                <span class="switcher__mode"></span>
                                                <span class="switcher__btn dark-mode"><i class="flaticon-moon"></i></span>
                                            </nav>
                                        </li>
                                        <li class="user"></i></a>
                                            @guest
                                            @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @endif

                                        @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                        @endif
                                        @else

                                        <li class="nav-item">
                                            <a class="nav-link">{{ Auth::user()->name }}</a>
                                        </li>


                                        <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();

                                                document.getElementById('logout-form').submit();">
                                            <strong> {{ __('Sign Out') }}</strong>
                                            <i class="dropdown-item-icon ti-power-off"></i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        @endguest
                                        </li>
                                        <li class="header-cart"><a href="#"><i class="far fa-shopping-basket"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="index.html" class="logo-dark"><img src="img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="logo-light"><img src="img/logo/w_logo.png" alt="Logo"></a>
                                </div>
                                <div class="tgmobile__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="tgmobile__menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>

        <!-- offCanvas-area -->
        <div class="offCanvas__wrap">
            <div class="offCanvas__body">
                <div class="offCanvas__toggle"><i class="flaticon-addition"></i></div>
                <div class="offCanvas__content">
                    <div class="offCanvas__logo logo">
                        <a href="index.html" class="logo-dark"><img src="img/logo/logo.png" alt="Logo"></a>
                        <a href="index.html" class="logo-light"><img src="img/logo/w_logo.png" alt="Logo"></a>
                    </div>
                    <p>Change how the world works with Biotellus, made for ecology.</p>
                    <ul class="offCanvas__instagram list-wrap">
                        <li><a href="img/blog/blog01.jpg" class="popup-image"><img src="img/blog/blog01.jpg" alt="img"></a></li>
                        <li><a href="img/blog/blog02.jpg" class="popup-image"><img src="img/blog/blog02.jpg" alt="img"></a></li>
                        <li><a href="img/blog/blog03.jpg" class="popup-image"><img src="img/blog/blog03.jpg" alt="img"></a></li>
                        <li><a href="img/blog/blog04.jpg" class="popup-image"><img src="img/blog/blog04.jpg" alt="img"></a></li>
                        <li><a href="img/blog/blog05.jpg" class="popup-image"><img src="img/blog/blog05.jpg" alt="img"></a></li>
                        <li><a href="img/blog/blog06.jpg" class="popup-image"><img src="img/blog/blog06.jpg" alt="img"></a></li>
                    </ul>
                </div>
                <div class="offCanvas__contact">
                    <h4 class="title">Get In Touch</h4>
                    <ul class="offCanvas__contact-list list-wrap">
                        <li><i class="fas fa-envelope-open"></i><a href="mailto:info@webmail.com">info@webmail.com</a></li>
                        <li><i class="fas fa-phone"></i><a href="tel:88899988877">888 999 888 77</a></li>
                        <li><i class="fas fa-map-marker-alt"></i> 12/A, New Booston, NYC</li>
                    </ul>
                    <ul class="offCanvas__social list-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offCanvas__overlay"></div>
        <!-- offCanvas-area-end -->

    </header>
    <main class="py-lg-4">
        @yield('content')
    </main>
    <!-- header-area-end -->
</body>

<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.marquee.min.js"></script>
<script src="js/imageRevealHover.js"></script>
<script src="js/swiper-bundle.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>