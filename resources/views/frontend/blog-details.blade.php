 
 
 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
@include('frontend.layout.header')
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="blog.html">Nature</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Envato officially goes carbon neutral ahead of Earth Day</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <section class="blog-details-area pt-80 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-1">
                        <div class="blog-details-social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fas fa-share"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details-wrap">
                            <ul class="tgbanner__content-meta list-wrap">
                                <li class="category"><a href="blog">technology</a></li>
                                <li><span class="by">By</span> <a href="blog">alonso d.</a></li>
                                <li>nov 22, 2022</li>
                                <li>23 comments</li>
                            </ul>
                            <h2 class="title">Envato officially goes carbon neutral ahead of Earth Day</h2>
                            <div class="blog-details-thumb">
                                <img src="img/lifestyle/life_style01.jpg" alt="">
                            </div>
                            <div class="blog-details-content">
                                <p>In partnership with Sydney startup Trace, Envato is delivering on its sustainability promise as a B-Corp and meeting part of its recent commitment to the To Whom It Should Concern campaign. Envato is now officially carbon neutral, as part of a comprehensive new sustainability.</p>
                                <p>When we signed on to the To Whom It May Concern campaign we made a pledge to be 100% renewable by 2030 and carbon zero by 2040,” said Envato CEO Hichame Assi. “It’s a commitment made on the back of our B Corp certification, and one we believe reflects not just our values but a broader sense of how businesses can contribute to fighting climate change.</p>
                                <p>We are proud that our people can make a positive impact on the world around us through their work at Envato. And while there is still lots of work to do to realise carbon, we’re nonetheless pleased we’ve reached this sustainability milestone and thrilled to partner with Trace to further track and refine the management of our carbon footprint. An through Trace, Envato is now able to more comprehensively measure the amount of carbon emissions the business generates. This includes not just its physical offices in Melbourne, Guadalajara and Los Angeles, but also includes an estimate of the footprint of its 600 plus staff who work flexibly around the world, as well as the usage tied to its tech infrastructure including our cloud computing services.</p>
                                <div class="blog-details-inner">
                                    <h3 class="inner-title">Building the Future of Artificial Intelligence</h3>
                                    <p>When we signed on to the To Whom It May Concern campaign we made a pledge to be 100% renewable by 2030 and carbon zero by 2040,” said Envato CEO Hichame Assi. “It’s a commitment made on the back of our B Corp certification, and one we believe reflects not just our values but a broader sense of how businesses can contribute to fighting climate change.</p>
                                    <div class="blog-details-images">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="details-inner-image">
                                                    <img src="img/lifestyle/life_style02.jpg" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="details-inner-image">
                                                    <img src="img/lifestyle/life_style03.jpg" alt="img">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="details-inner-image">
                                                    <img src="img/lifestyle/life_style04.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The Mount Sandy project in South Australia is one of those supported by Envato through Trace. Its permanent protection of the regionally and culturally important pocket. Trace CEO and Co-Founder Catherine Long said Envato was a perfect example of a fast-moving tech business that already has a demonstrable commitment to sustain.
                                    “But they needed a solution for measuring and managing their carbon footprint that matched the speed & efficiency of the way they work footprint that matched the speed.</p>
                                </div>
                                <blockquote>
                                    <p>“ 20 years ago today, Steve introduced the world to iMac. It set Apple on a new course and forever changed the way people look at computers. ”</p>
                                    <div class="blockquote-cite">
                                        <div class="image">
                                            <img src="img/others/about_me.png" alt="">
                                        </div>
                                        <div class="info">
                                            <h5>Miranda H. Halim</h5>
                                            <span>Head Of Idea</span>
                                        </div>
                                    </div>
                                </blockquote>
                                <p>We are proud that our people can make a positive impact on the world around us through their work at Envato. And while there is still lots of work to do to realise carbon, we’re nonetheless pleased we’ve reached this sustainability milestone and thrilled to partner with Trace to further track and refine the management of our carbon footprint. An
                                through Trace, Envato is now able to more comprehensively measure the amount of carbon emissions the business generates. This includes not just its physical offices in Melbourne, Guadalajara and Los Angeles, but also includes an estimate of the footprint of its 600 plus staff who work flexibly around the world, as well as the usage tied to its ech infrastructure including our cloud computing services.</p>
                                <div class="blog-details-inner">
                                    <h3 class="inner-title">The Creative Cloud</h3>
                                    <p>When we signed on to the To Whom It May Concern campaign we made a pledge to be 100% renewable by 2030 and carbon zero by 2040,” said Envato CEO Hichame Assi..</p>
                                    <ul class="list-wrap">
                                        <li><span>The games generate:</span>Revenue through sales of digital items, such as special costumes, which appear in a rotating storefront that is updated daily.</li>
                                        <li><span>Players use in-game:</span>Currency to customize their appearance, and the daily refresh of the store incentives players to buy fresh gear or risk missing out on it entirely.</li>
                                        <li><span>Players have:</span> Already spent more than $1 billion on Fortnite’s in-game purchases, according to IGN report.</li>
                                    </ul>
                                </div>
                                <div class="details-advertisement">
                                    <a href="#"><img src="img/others/advertisement02.png" alt="img"></a>
                                </div>
                                <p>Envato is now able to more comprehensively measure the amount of carbon emissions the business generates. includes not just its physical offices in Melbourne, Guadalajara and Los Angeles, but also includes an estimate of footprint of its 600 plus staff who work flexibly around the world, as well as the usage tied to its tech infrastructure including our cloud computing services lexibly around the world.</p>
                            </div>
                            <div class="blog-details-bottom">
                                <div class="row align-items-baseline">
                                    <div class="col-xl-6 col-md-7">
                                        <div class="blog-details-tags">
                                            <ul class="list-wrap mb-0">
                                                <li><a href="#">technology</a></li>
                                                <li><a href="#">finance</a></li>
                                                <li><a href="#">business</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-5">
                                        <div class="blog-details-share">
                                            <h6 class="share-title">Share Now:</h6>
                                            <ul class="list-wrap mb-0">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-avatar-wrap">
                                <div class="blog-avatar-img">
                                    <a href="#"><i class="far fa-check"></i><img src="img/others/avatar.png" alt="img"></a>
                                </div>
                                <div class="blog-avatar-content">
                                    <p>Monty Hython is a Writer at Sarsa and has been covering emerging technologies &
                                    venture capital there since 2013. He covers a wide variety of news from early and late stage startups to massive tech behemoths.</p>
                                    <h5 class="name">Alison Fiano</h5>
                                    <span class="designation">OG Author</span>
                                </div>
                            </div>
                            <div class="blog-prev-next-posts">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-8 col-md-6">
                                        <div class="pn-post-item">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="img/lifestyle/life_style06.jpg" alt="img"></a>
                                            </div>
                                            <div class="content">
                                                <span>Prev Post</span>
                                                <h5 class="title tgcommon__hover"><a href="blog-details.html">3 Stocks to Buy and Hold Through the Panic...</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-md-6">
                                        <div class="pn-post-item next-post">
                                            <div class="thumb">
                                                <a href="blog-details.html"><img src="img/lifestyle/life_style07.jpg" alt="img"></a>
                                            </div>
                                            <div class="content">
                                                <span>Next Post</span>
                                                <h5 class="title tgcommon__hover"><a href="blog-details.html">Mood Boards for Product Designers dome...</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <aside class="blog-sidebar">
                            <div class="widget sidebar-widget">
                                <div class="tgAbout-me">
                                    <div class="tgAbout-thumb">
                                        <img src="img/others/about_me.png" alt="me">
                                    </div>
                                    <div class="tgAbout-info">
                                        <p class="intro">Hi there, I’m <span>Rosalina D.</span></p>
                                        <span class="designation">Content Writer</span>
                                    </div>
                                    <div class="tgAbout-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget sidebar-widget widget_categories">
                                <h4 class="widget-title">Trending Category</h4>
                                <ul class="list-wrap">
                                    <li>
                                        <div class="thumb"><a href="blog.html"><img src="img/category/side_category01.jpg" alt="img"></a></div>
                                        <a href="blog.html">technology</a>
                                        <span class="float-right">12</span>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href="blog.html"><img src="img/category/side_category02.jpg" alt="img"></a></div>
                                        <a href="blog.html">business</a>
                                        <span class="float-right">08</span>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href="blog.html"><img src="img/category/side_category03.jpg" alt="img"></a></div>
                                        <a href="blog.html">fitness</a>
                                        <span class="float-right">13</span>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href="blog.html"><img src="img/category/side_category04.jpg" alt="img"></a></div>
                                        <a href="blog.html">Gadgets</a>
                                        <span class="float-right">09</span>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href="blog.html"><img src="img/category/side_category05.jpg" alt="img"></a></div>
                                        <a href="blog.html">politics</a>
                                        <span class="float-right">15</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget sidebar-widget">
                                <div class="sidePost-active">
                                    <div class="sidePost__item" data-background="img/category/side_post01.jpg">
                                        <div class="sidePost__content">
                                            <a href="blog.html" class="tag">Technology</a>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">Tips for helping to make an your startup a success</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidePost__item" data-background="img/category/side_post02.jpg">
                                        <div class="sidePost__content">
                                            <a href="blog.html" class="tag">Travel</a>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">Tips for helping to make an your startup a success</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidePost__item" data-background="img/category/side_post02.jpg">
                                        <div class="sidePost__content">
                                            <a href="blog.html" class="tag">Gaming</a>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">Tips for helping to make an your startup a success</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget sidebar-widget">
                                <h4 class="widget-title">Instagram Feeds</h4>
                                <div class="sidebarInsta__wrap">
                                    <div class="sidebarInsta__top">
                                        <div class="sidebarInsta__logo">
                                            <img src="img/instagram/insta_logo.png" alt="img">
                                        </div>
                                        <div class="sidebarInsta__info">
                                            <h6 class="name"><a href="#">ins.co/sarso.co</a></h6>
                                            <span class="designation">Code Supply Co.</span>
                                        </div>
                                    </div>
                                    <div class="sidebarInsta__slider-wrap">
                                        <div class="swiper-container sidebarInsta-active">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram/side_insta01.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram/side_insta02.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram/side_insta03.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram/side_insta04.jpg" alt="img"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-container sidebarInsta-active-2" dir="rtl">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram/side_insta05.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram/side_insta06.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram/side_insta07.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram/side_insta08.jpg" alt="img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarInsta__bottom">
                                        <a href="https://www.instagram.com/" target="_blank" class="btn"><i class="fab fa-instagram"></i><span class="text">Follow Me</span></a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

    </main>
    <!-- main-area-end -->

    @include('frontend.layout.footer')
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