<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opedia Institute</title>
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontAwesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/default.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
</head>

<body>
    <!--=============== HEADER ===============-->
    <header>
        <div class="header" id="header" style="display:block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="nav">
                            <a href="#" class="nav__logo"><img src="{{ asset('frontend') }}/images/logo/logo.png" alt=""></a>

                            <div class="nav__menu" id="nav-menu">
                                <ul class="nav__list">
                                    <li class="nav__item">
                                        <a href="#home" class="nav__link active-link">
                                            <i class='bx bx-home-alt nav__icon'></i>
                                            <span class="nav__name">HOME</span>
                                        </a>
                                    </li>
                                    <li class="nav__item">
                                        <a href="#courses" class="nav__link">
                                            <i class='bx bx-book-alt nav__icon'></i>

                                            <span class="nav__name">COURSES</span>
                                        </a>
                                    </li>
                                    <li class="nav__item">
                                        <a href="#facilities" class="nav__link">
                                            <i class='bx bx-happy-alt nav__icon'></i>
                                            <span class="nav__name">FACILITIES</span>
                                        </a>
                                    </li>
                                    <li class="nav__item">
                                        <a href="#activities" class="nav__link">
                                            <i class='bx bx-layer-minus nav__icon'></i>
                                            <!-- <i class='bx bx-briefcase-alt nav__icon'></i> -->
                                            <span class="nav__name">ACTIVITIES</span>
                                        </a>
                                    </li>
                                    <li class="nav__item">
                                        <a href="#contactme" class="nav__link">
                                            <i class='bx bxs-contact nav__icon'></i>
                                            <span class="nav__name">CONTACTS</span>
                                        </a>
                                    </li>
                                    <li class="nav__item">
                                        <a class="btn" href="#">ENROLL NOW</a>
                                    </li>
                                </ul>
                            </div>

                            <a class="btn nav__img" href="#">ENROLL NOW</a>

                            <!-- <img src="assets/img/perfil.png" alt="" class="nav__img"> -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- HERO SECTION STARTS -->
        <div class="hero-section">
            <!-- <img src="./images/hero/utils.png" alt="hero utils" class="hero-utils"> -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-left-content">
                            <h1>
                                BEST OFFERS ON
                                <span class="hero-btm">EVERY TECH WEEK</span>
                                <img src="{{ asset('frontend') }}/images/hero/ornaments.png" alt="">
                            </h1>
                            <h2>SHAPING IT CAREER</h2>
                            <p>
                                We focus on the occupational skill-based learning program that ensures a secure career and a better future. We focus on the occupational skill-based learning program that ensures a secure career and a better futureWe focus on the occupational skill-based
                                learning program. We focus on the occupational skill-based learning program.
                            </p>
                            <div class="hero-action mt-85">
                                <a href="#" class="btn-second">LET US GUIDE YOU</a>
                                <a href="#" class="btn-main">BOOK SEAT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-img">
                            <img src="{{ asset('frontend') }}/images/hero/hero.gif" alt="hero" class="hero-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HERO SECTION ENDS -->




        <!-- COURSE SECTION STARTS -->
        <div class=" course-section pb-90" id="courses">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-50">
                        <div class="section-title ">
                            <h2>OUR COURSES</h2>
                        </div>
                    </div>
                </div>
                <!-- swiper practice  -->
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-xl-3">
                            <div class="course-tag-wrapper">
                                <ul class="course-sidebar">
                                    <li>
                                        <a class="list-group-item " data-bs-toggle="list" href="#motion" aria-controls="motion"> <img src="./images/course/list.png" alt=""> Motion graphic </a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" data-bs-toggle="list" href="#graphic" aria-controls="graphic"><img src="./images/course/list.png" alt=""> Graphic Design</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" data-bs-toggle="list" href="#digital-marketing" aria-controls="digital-marketing"> <img src="./images/course/list.png" alt="">Digital marketing</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" data-bs-toggle="list" href="#uiUx" aria-controls="digital-marketing"> <img src="./images/course/list.png" alt="">UI/UX Design</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item" data-bs-toggle="list" href="#webDesign" aria-controls="digital-marketing"> <img src="./images/course/list.png" alt="">Web Development</a>
                                    </li>
                                    <li>
                                        <a class="list-group-item active-link" data-bs-toggle="list" href="#networking" aria-controls="digital-marketing"> <img src="./images/course/list.png" alt="">Networking</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-xl-9">

                            <div class="course-content owl-carousel">
                                <section id="motion">
                                    <!-- content -->
                                    <div class="course-wrap ">
                                        <div class="card mb-5">
                                            <img src="{{ asset('frontend') }}/images/course/motion.gif" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Advance Motion Graphics
                                                </h5>
                                                <div class="course-dureation">
                                                    <span>CLASS : 40 CLASSES</span>
                                                    <span>120 MINUTES</span>
                                                </div>
                                                <div class="course-action">
                                                    <a href="#" class="btn-main">Explore</a>
                                                    <img src="./images/course/info-circle.png" alt="" data-bs-toggle="modal" data-bs-target="#motionModal">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- content -->
                                </section>

                                <!--=============== ABOUT ===============-->
                                <section id="graphic">
                                    <!-- content -->
                                    <div class="course-wrap ">
                                        <div class="card mb-5">
                                            <img src="{{ asset('frontend') }}/images/course/graphic.gif" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Professional Graphic Design
                                                </h5>
                                                <div class="course-dureation">
                                                    <span>CLASS : 40 CLASSES</span>
                                                    <span>120 MINUTES</span>
                                                </div>
                                                <div class="course-action">
                                                    <a href="#" class="btn-main">Explore</a>
                                                    <img src="{{ asset('frontend') }}/images/course/info-circle.png" alt="" data-bs-toggle="modal" data-bs-target="#graphicsModal">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- content -->
                                </section>

                                <!--=============== SKILLS ===============-->
                                <section id="digital-marketing">
                                    <!-- content -->
                                    <div class="course-wrap ">
                                        <div class="card mb-5">
                                            <img src="{{ asset('frontend') }}/images/course/digital.gif" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Scopes in Digital Marketing
                                                </h5>
                                                <div class="course-dureation">
                                                    <span>CLASS : 40 CLASSES</span>
                                                    <span>120 MINUTES</span>
                                                </div>
                                                <div class="course-action">
                                                    <a href="#" class="btn-main">Explore</a>
                                                    <img src="{{ asset('frontend') }}/images/course/info-circle.png" alt="" data-bs-toggle="modal" data-bs-target="#digitalMarketingModal">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- content -->
                                </section>

                                <!--=============== PORTFOLIO ===============-->
                                <section id="uiUx">
                                    <!-- content -->
                                    <div class="course-wrap ">
                                        <div class="card mb-5">
                                            <img src="{{ asset('frontend') }}/images/course/uiux.gif" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Interactive UI/UX Design
                                                </h5>
                                                <div class="course-dureation">
                                                    <span>CLASS : 40 CLASSES</span>
                                                    <span>120 MINUTES</span>
                                                </div>
                                                <div class="course-action">
                                                    <a href="#" class="btn-main">Explore</a>
                                                    <img src="{{ asset('frontend') }}/images/course/info-circle.png" alt="" data-bs-toggle="modal" data-bs-target="#UIGraphicModal">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- content -->
                                </section>

                                <!--=============== CONTACTME ===============-->
                                <section id="webDesign">
                                    <!-- content -->
                                    <div class="course-wrap ">
                                        <div class="card mb-5">
                                            <img src="./images/course/website.gif" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Web design & Development
                                                </h5>
                                                <div class="course-dureation">
                                                    <span>CLASS : 40 CLASSES</span>
                                                    <span>120 MINUTES</span>
                                                </div>
                                                <div class="course-action">
                                                    <a href="#" class="btn-main">Explore</a>
                                                    <img src="./images/course/info-circle.png" alt="" data-bs-toggle="modal" data-bs-target="#webDesignModal">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- content -->
                                </section>
                                <!--=============== CONTACTME ===============-->
                                <section id="networking">
                                    <!-- content -->
                                    <div class="course-wrap ">
                                        <div class="card mb-5">
                                            <img src="./images/course/networking.gif" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">MikroTik Routing All-in-1
                                                </h5>
                                                <div class="course-dureation">
                                                    <span>CLASS : 40 CLASSES</span>
                                                    <span>120 MINUTES</span>
                                                </div>
                                                <div class="course-action">
                                                    <a href="#" class="btn-main">Explore</a>
                                                    <img src="./images/course/info-circle.png" alt="" data-bs-toggle="modal" data-bs-target="#networkModal">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- content -->
                                </section>
                            </div>








                        </div>

                        <!-- All courses Modals here -->
                        <!-- Modal -->
                        <!-- items -->
                        <div class="modal fade" id="motionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <!-- Modal -->
                                        <div class="course-short-modals">
                                            <div class="course-details-wraps">
                                                <div class="details-img">
                                                    <img src="./images/course/motion.gif" alt="">

                                                </div>
                                                <div class="course-details-title-info">
                                                    <h5>Motion Graphic</h5>
                                                    <span>PRICE : 15,000 TK</span>
                                                </div>
                                                <p class="details-content">
                                                    Fiverr serves to allow listing and applying for small one-off jobs, or gigs, online. Jobs listed on the platform are diverse and range from "get a well-designed business card" to "help with HTML, JavaScript, CSS, and jQuery".
                                                </p>
                                                <ul class="course-details-list">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> 5+ Videos</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> 40 Hours</li>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> Project basis tuitorial</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> Freelencing guideline</li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- items -->
                        <!-- items -->
                        <div class="modal fade" id="graphicsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <!-- Modal -->
                                        <div class="course-short-modals">
                                            <div class="course-details-wraps">
                                                <div class="details-img">
                                                    <img src="./images/course/graphic.gif" alt="">

                                                </div>
                                                <div class="course-details-title-info">
                                                    <h5>Professional Graphic Design</h5>
                                                    <span>PRICE : 15,000 TK</span>
                                                </div>
                                                <p class="details-content">
                                                    Fiverr serves to allow listing and applying for small one-off jobs, or gigs, online. Jobs listed on the platform are diverse and range from "get a well-designed business card" to "help with HTML, JavaScript, CSS, and jQuery".
                                                </p>
                                                <ul class="course-details-list">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> 5+ Videos</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> 40 Hours</li>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> Project basis tuitorial</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> Freelencing guideline</li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- items -->
                        <!-- items -->
                        <div class="modal fade" id="digitalMarketingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <!-- Modal -->
                                        <div class="course-short-modals">
                                            <div class="course-details-wraps">
                                                <div class="details-img">
                                                    <img src="./images/course/digital.gif" alt="">

                                                </div>
                                                <div class="course-details-title-info">
                                                    <h5>Scopes in Digital Marketing</h5>
                                                    <span>PRICE : 15,000 TK</span>
                                                </div>
                                                <p class="details-content">
                                                    Fiverr serves to allow listing and applying for small one-off jobs, or gigs, online. Jobs listed on the platform are diverse and range from "get a well-designed business card" to "help with HTML, JavaScript, CSS, and jQuery".
                                                </p>
                                                <ul class="course-details-list">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> 5+ Videos</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> 40 Hours</li>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> Project basis tuitorial</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> Freelencing guideline</li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- items -->
                        <!-- items -->
                        <div class="modal fade" id="UIGraphicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <!-- Modal -->
                                        <div class="course-short-modals">
                                            <div class="course-details-wraps">
                                                <div class="details-img">
                                                    <img src="./images/course/uiux.gif" alt="">
                                                </div>
                                                <div class="course-details-title-info">
                                                    <h5>Interactive UI/UX Design</h5>
                                                    <span>PRICE : 15,000 TK</span>
                                                </div>
                                                <p class="details-content">
                                                    Fiverr serves to allow listing and applying for small one-off jobs, or gigs, online. Jobs listed on the platform are diverse and range from "get a well-designed business card" to "help with HTML, JavaScript, CSS, and jQuery".
                                                </p>
                                                <ul class="course-details-list">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> 5+ Videos</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> 40 Hours</li>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> Project basis tuitorial</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> Freelencing guideline</li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- items -->
                        <!-- items -->
                        <div class="modal fade" id="webDesignModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <!-- Modal -->
                                        <div class="course-short-modals">
                                            <div class="course-details-wraps">
                                                <div class="details-img">
                                                    <img src="./images/course/website.gif" alt="">

                                                </div>
                                                <div class="course-details-title-info">
                                                    <h5>Web design & Development</h5>
                                                    <span>PRICE : 15,000 TK</span>
                                                </div>
                                                <p class="details-content">
                                                    Fiverr serves to allow listing and applying for small one-off jobs, or gigs, online. Jobs listed on the platform are diverse and range from "get a well-designed business card" to "help with HTML, JavaScript, CSS, and jQuery".
                                                </p>
                                                <ul class="course-details-list">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> 5+ Videos</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> 40 Hours</li>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> Project basis tuitorial</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> Freelencing guideline</li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- items -->
                        <!-- items -->
                        <div class="modal fade" id="networkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <!-- Modal -->
                                        <div class="course-short-modals">
                                            <div class="course-details-wraps">
                                                <div class="details-img">
                                                    <img src="./images/course/networking.gif" alt="">

                                                </div>
                                                <div class="course-details-title-info">
                                                    <h5>MikroTik Routing All-in-1</h5>
                                                    <span>PRICE : 15,000 TK</span>
                                                </div>
                                                <p class="details-content">
                                                    Fiverr serves to allow listing and applying for small one-off jobs, or gigs, online. Jobs listed on the platform are diverse and range from "get a well-designed business card" to "help with HTML, JavaScript, CSS, and jQuery".
                                                </p>
                                                <ul class="course-details-list">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> 5+ Videos</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> 40 Hours</li>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <li> <img src="./images/course/polygon.png" alt=""> Project basis tuitorial</li>
                                                            <li> <img src="./images/course/polygon.png" alt=""> Freelencing guideline</li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- items -->
                        <!-- All courses Modals here -->
                    </div>

                    <!-- people taks about -->
                    <div class="row align-items-start pt-50">
                        <div class="col-md-3">
                            <div class="section-title2 about ">
                                <h2>BE A PART OF<span>OPEDIA </span></h2>
                            </div>

                        </div>
                        <div class="col-md-9">
                            <div class="course-footer-wrap ">
                                <div class="course-bottom-item">
                                    <img src="./images/course/time.png" alt="">
                                    <span>300+ hour</span>
                                </div>
                                <div class="course-bottom-item">
                                    <img src="./images/course/course.png" alt="">
                                    <span>60+ courses</span>
                                </div>
                                <div class="course-bottom-item">
                                    <img src="./images/course/target.png" alt="">
                                    <span>120+ success story</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- swiper practice  -->


            </div>
        </div>

        <!-- COURSE SECTION ENDS -->




        <!-- GOOGLE VR SECTION -->

        <div class="google-vr-section pt-120 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1654427376497!6m8!1m7!1sCAoSLEFGMVFpcFBEMTBLc1FDc05yRTJNWU5wUTVYN3RQUFBwQnZMSHVQR2hzWUNz!2m2!1d23.77452908724558!2d90.3658140823245!3f51.73235722943062!4f2.0083896608941814!5f0.7964742113281157" style="width:100%;border-radius: 10px;"
                            height="690" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-title2 virtual text-end">
                            <h2>TAKE A VIRTUAL TOUR OF<span>OPEDIA GALAXY </span></h2>
                            <p class="pt-50 pl-80">
                                We nourish our students in a very envionment that, they always feel themselves as assets for technological era.
                            </p>
                            <div class="section-btn-wrap pt-5">
                                <img src="./images/tour/tour.gif" alt="">
                                <a href="#" class="btn-main">Take A Quick Tour</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- GOOGLE VR SECTION -->

        <!-- FACILITIES SECTION STARTS -->
        <div class="  facilities-section mt-100 mb-150 gray-bg" id="facilities">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title2 provide">
                            <h2>PROFESSIONAL IT TRAINING<span>WE ARE PROVIDING </span></h2>
                        </div>
                        <div class="section-title">
                            <p class="mt-50">We offer advanced IT skill training programs equipped with modern training facilities, including an updated training program, supervision system, project-based module, and career advisor support. We aim to facilitate young
                                people by educating them with the proper skills. Such expertise can prepare a solid basis for a winning career plan. <br><br> However, demand for skilled manpower in the IT, technical and digital sectors is increasing every
                                year. The job market is no more limited to regional boundaries. Knowing the fact we focus on changing job sector approach while delivering our training lessons. <a href="#" class="more">...more</a>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="facilities-img f-black ">
                                    <img src="./images/facilities/pic-4.gif" alt="">
                                    <span class="f text-black">Lab Facility</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="f-right-wrap">
                                    <div class="facilities-img right  ">
                                        <img src="./images/facilities/pic-3.gif" alt="">
                                        <span class="f text-black">Lifetime Support</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-60">
                            <div class="col-md-6 ">
                                <div class="facilities-img f-black">
                                    <img src="./images/facilities/pic-2.gif" alt="">
                                    <span class="f text-black">Class Videos</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facilities-img right">
                                    <img src="./images/facilities/pic-1.gif" alt="">
                                    <span class="f text-white">24/7 Support</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- FACILITIES SECTION ENDS -->

        <!-- ACTIVITIES SECTION STARTS -->
        <div class="  activities-section" id="activities">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>OUR ACTIVITIES</h2>
                        </div>
                    </div>
                    <div class="col-12 mt-35">
                        <div class="activiteis-wrap">
                            <div class="row">
                                <div class="col-lg-4 mb-30">
                                    <!-- Item -->
                                    <div class="card  ">
                                        <img src="./images/activities/pic-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="activities-title-wrap">
                                                <h4>Motion graphics Live workshop, </h4>
                                            </div>

                                            <div class="activities-action-wrap">
                                                <div class="activities-schedule">
                                                    <ul class="date-activites">
                                                        <li>Date: <span>25 May, 2022</span></li>
                                                        <li>Time: <span>8:00 PM</span></li>
                                                    </ul>
                                                </div>
                                                <a href="https://www.facebook.com/opediaITinstitute/videos/%E0%A6%AE%E0%A7%8B%E0%A6%B6%E0%A6%A8-%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%AB%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B8-%E0%A6%8F%E0%A6%B0-%E0%A6%97%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%95%E0%A6%A5%E0%A6%BE-%E0%A6%B8%E0%A6%AC%E0%A6%87-%E0%A6%B9%E0%A6%AC%E0%A7%87-%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%AD%E0%A7%87/5422504864449450/"
                                                    class="btn-main">Watch video</a>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                </div>
                                <div class="col-lg-4 mb-30">
                                    <!-- Item -->
                                    <div class="card  ">
                                        <img src="./images/activities/pic-2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="activities-title-wrap">
                                                <h4>Motion graphics Live workshop, </h4>
                                            </div>
                                            <div class="live"><span>Live </span>
                                                <span class="Golla"></span>
                                            </div>
                                            <div class="activities-action-wrap">
                                                <div class="activities-schedule">
                                                    <ul class="date-activites">
                                                        <li>Date: <span>25 May, 2022</span></li>
                                                        <li>Time: <span>8:00 PM</span></li>
                                                    </ul>
                                                </div>
                                                <a href="https://www.facebook.com/opediaITinstitute/videos/%E0%A6%AE%E0%A7%8B%E0%A6%B6%E0%A6%A8-%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%AB%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B8-%E0%A6%8F%E0%A6%B0-%E0%A6%97%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%95%E0%A6%A5%E0%A6%BE-%E0%A6%B8%E0%A6%AC%E0%A6%87-%E0%A6%B9%E0%A6%AC%E0%A7%87-%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%AD%E0%A7%87/5422504864449450/"
                                                    class="btn-main">Join Now</a>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                </div>

                                <div class="col-lg-4 mb-30">
                                    <!-- Item -->
                                    <div class="card  ">
                                        <img src="./images/activities/pic-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <div class="activities-title-wrap">
                                                <h4>Graphic Design FB Live </h4>
                                            </div>

                                            <div class="activities-action-wrap">
                                                <div class="activities-schedule">
                                                    <ul class="date-activites">
                                                        <li>Date: <span>8 June, 2022 </span></li>
                                                        <li>Time: <span>8:00 PM</span></li>
                                                    </ul>
                                                </div>
                                                <div class="count-down" id="clockdiv">
                                                    <div>
                                                        <span class="days"></span>:
                                                    </div>
                                                    <div>
                                                        <span class="hours"></span>:
                                                    </div>
                                                    <div>
                                                        <span class="minutes"></span>:
                                                    </div>
                                                    <div>
                                                        <span class="seconds"></span>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                </div>
                            </div>
                        </div>

                        <div class="activities-bottom text-center mt-80">
                            <p>Get updated on the trends and scopes available for your skill and career development </p>
                            <a href="#" class="btn-main">ALL EVENTS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ACTIVITIES SECTION ENDS -->
        <!-- MARKETPLACE SECTION STARTS -->
        <div class="  marketplace-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="section-title text-center">
                            <h2>BE A NINJA IN MARKETPLACE</h2>
                            <p>The global marketplace is not a playground. It’s a warzone, where knowledge and expertise are the weapons. To face the challenging race of perfection with a competitive advantage in the global job marketplace, we offer a comprehensive
                                curriculum with applied technical practice. We educate trainees with the right applied approaches that enhance their competitive skills. Making our trainees self-sufficient and confident with technical expertise to thrive
                                in the marketplace, we walk together until they reach the goal. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="marketplace-item-wrap owl-carousel">
                            <!-- ITEM -->
                            <div class="marketplace-item">
                                <div class="card">
                                    <div data-overlay="5" class="market-pic">
                                        <a class="y-frame-market" href=" https://youtu.be/J-vcFFXM0F4"><img class="m-youtube" src="./images/marketplace/youtube.png" alt=""></a>
                                        <img class="marketplace_icon" src="./images/marketplace/fiverr.png" alt="">
                                        <img src="./images/marketplace/pic-1.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="marketplace-title">
                                            <h3>Microstocks Freelancing A-Z</h3>
                                            <img class="market-info-icon" src="./images/marketplace/info-circle.png" alt="">
                                            <!-- Modal -->
                                            <div class="course-short-modal market">
                                                <div class="course-details-wrap">
                                                    <div class="details-img">
                                                        <img src="./images/marketplace/reactangle.png" alt="">
                                                        <div class="market-modal-title">
                                                            Want to <br> make career on
                                                            <span>Fiverr</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-details-title-info marketplace">
                                                        <h5>Surgery of UI</h5>
                                                        <span>PRICE : 1999 TK</span>
                                                    </div>
                                                    <p class="details-content">
                                                        Fiverr serves to allow listing and applying for small one-off jobs, or gigs, online. Jobs listed on the platform are diverse and range from "get a well-designed business card" to "help with HTML, JavaScript, CSS, and jQuery".
                                                    </p>
                                                    <ul class="course-details-list">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <li> <img src="./images/course/polygon.png" alt=""> 5+ Videos</li>
                                                                <li> <img src="./images/course/polygon.png" alt=""> 40 Hours</li>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <li> <img src="./images/course/polygon.png" alt=""> Project basis tuitorial</li>
                                                                <li> <img src="./images/course/polygon.png" alt=""> Freelencing guideline</li>
                                                            </div>
                                                        </div>

                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                        </div>

                                        <div class="marketplace-action">
                                            <a href="#" class="btn-main">PURCHES COURSE</a>
                                            <span class="market-price">PRICE : 1999 TK</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- ITEM -->
                            <!-- ITEM -->
                            <div class="marketplace-item ">
                                <div class="card">
                                    <div data-overlay="5" class="market-pic">
                                        <a class="y-frame-market" href=" https://youtu.be/J-vcFFXM0F4"><img class="m-youtube" src="./images/marketplace/youtube.png" alt=""></a>
                                        <img class="marketplace_icon" src="./images/marketplace/fiverr.png" alt="">
                                        <img src="./images/marketplace/pic-2.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="marketplace-title">
                                            <h3>Guideline on Fiverr</h3>
                                            <img class="market-info-icon" src="./images/marketplace/info-circle.png" alt="">
                                            <!-- Modal -->
                                            <div class="course-short-modal market">
                                                <div class="course-details-wrap">
                                                    <div class="details-img">
                                                        <img src="./images/marketplace/reactangle.png" alt="">
                                                        <div class="market-modal-title">
                                                            Want to <br> make career on
                                                            <span>Fiverr</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-details-title-info marketplace">
                                                        <h5>Surgery of UI</h5>
                                                        <span>PRICE : 1999 TK</span>
                                                    </div>
                                                    <p class="details-content">
                                                        Fiverr serves to allow listing and applying for small one-off jobs, or gigs, online. Jobs listed on the platform are diverse and range from "get a well-designed business card" to "help with HTML, JavaScript, CSS, and jQuery".
                                                    </p>
                                                    <ul class="course-details-list">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <li> <img src="./images/course/polygon.png" alt=""> 5+ Videos</li>
                                                                <li> <img src="./images/course/polygon.png" alt=""> 40 Hours</li>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <li> <img src="./images/course/polygon.png" alt=""> Project basis tuitorial</li>
                                                                <li> <img src="./images/course/polygon.png" alt=""> Freelencing guideline</li>
                                                            </div>
                                                        </div>

                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                        </div>

                                        <div class="marketplace-action">
                                            <a href="#" class="btn-main">PURCHES COURSE</a>
                                            <span class="market-price">PRICE : 1999 TK</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- ITEM -->
                            <!-- ITEM -->
                            <div class="marketplace-item">
                                <div class="card">
                                    <div data-overlay="5" class="market-pic">
                                        <a class="y-frame-market" href=" https://youtu.be/J-vcFFXM0F4"><img class="m-youtube" src="./images/marketplace/youtube.png" alt=""></a>
                                        <img class="marketplace_icon" src="./images/marketplace/fiverr.png" alt="">
                                        <img src="./images/marketplace/pic-3.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="marketplace-title">
                                            <h3>Complete process on logo design</h3>
                                            <img class="market-info-icon" src="./images/marketplace/info-circle.png" alt="">
                                            <!-- Modal -->
                                            <div class="course-short-modal market">
                                                <div class="course-details-wrap">
                                                    <div class="details-img">
                                                        <img src="./images/marketplace/reactangle.png" alt="">
                                                        <div class="market-modal-title">
                                                            Want to <br> make career on
                                                            <span>Fiverr</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-details-title-info marketplace">
                                                        <h5>Surgery of UI</h5>
                                                        <span>PRICE : 1999 TK</span>
                                                    </div>
                                                    <p class="details-content">
                                                        Fiverr serves to allow listing and applying for small one-off jobs, or gigs, online. Jobs listed on the platform are diverse and range from "get a well-designed business card" to "help with HTML, JavaScript, CSS, and jQuery".
                                                    </p>
                                                    <ul class="course-details-list">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <li> <img src="./images/course/polygon.png" alt=""> 5+ Videos</li>
                                                                <li> <img src="./images/course/polygon.png" alt=""> 40 Hours</li>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <li> <img src="./images/course/polygon.png" alt=""> Project basis tuitorial</li>
                                                                <li> <img src="./images/course/polygon.png" alt=""> Freelencing guideline</li>
                                                            </div>
                                                        </div>

                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                        </div>

                                        <div class="marketplace-action">
                                            <a href="#" class="btn-main">PURCHES COURSE</a>
                                            <span class="market-price">PRICE : 1999 TK</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- ITEM -->
                            <!-- ITEM -->
                            <div class="marketplace-item">
                                <div class="card">
                                    <div data-overlay="5" class="market-pic">
                                        <a class="y-frame-market" href=" https://youtu.be/J-vcFFXM0F4"><img class="m-youtube" src="./images/marketplace/youtube.png" alt=""></a>
                                        <img class="marketplace_icon" src="./images/marketplace/fiverr.png" alt="">
                                        <img src="./images/marketplace/pic-1.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <div class="marketplace-title">
                                            <h3>How to make career on Fiverr?</h3>
                                            <img class="market-info-icon" src="./images/marketplace/info-circle.png" alt="">
                                            <!-- Modal -->
                                            <div class="course-short-modal market">
                                                <div class="course-details-wrap">
                                                    <div class="details-img">
                                                        <img src="./images/marketplace/reactangle.png" alt="">
                                                        <div class="market-modal-title">
                                                            Want to <br> make career on
                                                            <span>Fiverr</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-details-title-info marketplace">
                                                        <h5>Surgery of UI</h5>
                                                        <span>PRICE : 1999 TK</span>
                                                    </div>
                                                    <p class="details-content">
                                                        Fiverr serves to allow listing and applying for small one-off jobs, or gigs, online. Jobs listed on the platform are diverse and range from "get a well-designed business card" to "help with HTML, JavaScript, CSS, and jQuery".
                                                    </p>
                                                    <ul class="course-details-list">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <li> <img src="./images/course/polygon.png" alt=""> 5+ Videos</li>
                                                                <li> <img src="./images/course/polygon.png" alt=""> 40 Hours</li>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <li> <img src="./images/course/polygon.png" alt=""> Project basis tuitorial</li>
                                                                <li> <img src="./images/course/polygon.png" alt=""> Freelencing guideline</li>
                                                            </div>
                                                        </div>

                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                        </div>

                                        <div class="marketplace-action">
                                            <a href="#" class="btn-main">PURCHES COURSE</a>
                                            <span class="market-price">PRICE : 1999 TK</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- ITEM -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- MARKETPLACE SECTION ENDS -->

        <!-- STUDENT PROJECT SECTION STARTS -->
        <div class="  student-project-section">
            <div class="section-title text-center mb-90">
                <h2>STUDENT PROJECTS</h2>
            </div>
            <div class="project-items-wrap owl-carousel">
                <!-- ITEM -->
                <div class="projects-item">
                    <a href="#">
                        <div class="card">
                            <img src="./images/student-projects/01.jpg" class="card-img-top" alt="...">
                            <div class="p-student-avater">
                                <img src="./images/student-projects/experts-image/Frame-38824.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4>
                                    NEOTE
                                    <span>/ App Design</span>
                                </h4>
                                <span class="student-name">Red Jonathan John</span>


                            </div>
                        </div>
                    </a>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="projects-item">
                    <a href="#">
                        <div class="card">
                            <img src="./images/student-projects/02.jpg" class="card-img-top" alt="...">
                            <div class="p-student-avater">
                                <img src="./images/student-projects/experts-image/Frame 38837.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4>
                                    NEOTE
                                    <span>/ App Design</span>
                                </h4>
                                <span class="student-name">Red Jonathan John</span>


                            </div>
                        </div>
                    </a>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="projects-item">
                    <a href="#">
                        <div class="card">
                            <img src="./images/student-projects/03.jpg" class="card-img-top" alt="...">
                            <div class="p-student-avater">
                                <img src="./images/student-projects/avater.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4>
                                    NEOTE
                                    <span>/ App Design</span>
                                </h4>
                                <span class="student-name">Red Jonathan John</span>


                            </div>
                        </div>
                    </a>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="projects-item">
                    <a href="#">
                        <div class="card">
                            <img src="./images/student-projects/05.jpg" class="card-img-top" alt="...">
                            <div class="p-student-avater">
                                <img src="./images/student-projects/avater.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4>
                                    NEOTE
                                    <span>/ App Design</span>
                                </h4>
                                <span class="student-name">Red Jonathan John</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="projects-item">
                    <a href="#">
                        <div class="card">
                            <img src="./images/student-projects/06.jpg" class="card-img-top" alt="...">
                            <div class="p-student-avater">
                                <img src="./images/student-projects/avater.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4>
                                    NEOTE
                                    <span>/ App Design</span>
                                </h4>
                                <span class="student-name">Red Jonathan John</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="projects-item">
                    <a href="#">
                        <div class="card">
                            <img src="./images/student-projects/07.jpg" class="card-img-top" alt="...">
                            <div class="p-student-avater">
                                <img src="./images/student-projects/avater.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4>
                                    NEOTE
                                    <span>/ App Design</span>
                                </h4>
                                <span class="student-name">Red Jonathan John</span>


                            </div>
                        </div>
                    </a>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="projects-item">
                    <a href="#">
                        <div class="card">
                            <img src="./images/student-projects/08.jpg" class="card-img-top" alt="...">
                            <div class="p-student-avater">
                                <img src="./images/student-projects/avater.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4>
                                    NEOTE
                                    <span>/ App Design</span>
                                </h4>
                                <span class="student-name">Red Jonathan John</span>


                            </div>
                        </div>
                    </a>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="projects-item">
                    <a href="#">
                        <div class="card">
                            <img src="./images/student-projects/09.jpg" class="card-img-top" alt="...">
                            <div class="p-student-avater">
                                <img src="./images/student-projects/avater.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4>
                                    NEOTE
                                    <span>/ App Design</span>
                                </h4>
                                <span class="student-name">Red Jonathan John</span>


                            </div>
                        </div>
                    </a>
                </div>
                <!-- ITEM -->

            </div>
            <div class="activities-bottom text-center mt-80">
                <p>Want to learn how to create such awesome projects?</p>
                <a href="#" class="btn-main">ENROLL NOW</a>
            </div>
        </div>
        <!-- STUDENT PROJECT SECTION ENDS -->

        <!-- TEACHER SECTION STARTS -->
        <div class="  teacher-section pt-190">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <span>Inspiring Teachers Who</span>
                            <h2>MAKE EXECPTIONS</h2>
                            <p>Our industry expert mentors offer a complete package of hard skills, soft skills, and career guidance. </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-25">
                    <div class="col-12">
                        <div class="teacher-sec-wrap owl-carousel">
                            <!-- Item -->
                            <div class="card">
                                <img src="./images/teachers/Resize/Fiaz.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">FIAZ MIAZI </h5>
                                    <p class="card-text">Digital Marketing Faculty</p>
                                    <strong>4+ years of experience</strong>
                                </div>
                            </div>
                            <!-- Item -->
                            <!-- Item -->
                            <div class="card">
                                <img src="./images/teachers/Resize/Eamin.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">EAMIN HOSSAIN RAJ </h5>
                                    <p class="card-text">Self Publishig Faculty</p>
                                    <strong>5+ years of experience</strong>
                                </div>
                            </div>
                            <!-- Item -->
                            <!-- Item -->
                            <div class="card">
                                <img src="./images/teachers/Resize/Gaffar.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ABDUL GAFFAR</h5>
                                    <p class="card-text">Motion Graphics Faculty</p>
                                    <strong>3+ years of experience</strong>
                                </div>
                            </div>
                            <!-- Item -->
                            <!-- Item -->
                            <div class="card">
                                <img src="./images/teachers/Resize/Delowar.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">DALWAR HASAN</h5>
                                    <p class="card-text">Web Design Faculty</p>
                                    <strong>3+ years of experience</strong>
                                </div>
                            </div>
                            <!-- Item -->
                            <!-- Item -->
                            <div class="card">
                                <img src="./images/teachers/pic-1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">NAZMUL HASAN RIFAT</h5>
                                    <p class="card-text">Motion & Graphic Faculty</p>
                                    <strong>7+ years of experience</strong>
                                </div>
                            </div>
                            <!-- Item -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TEACHER SECTION ENDS -->

        <!-- seat__book__section start here -->
        <div class="seat__book__section gray-bg">
            <img class="bulb d-none d-lg-block" src="./images/bulb.gif" alt="">
            <div class="container">
                <div class="seat__book__inner">
                    <div class="seat__title">
                        <h4>Get Expert’s counseling For Your Future</h4>
                        <form class="align-items-center">
                            <input type="text" placeholder="Your Name">
                            <input type="text" name="number" id="number" placeholder="Phone Number">
                            <!-- <select name="subject" id="subject">
                        <option value="">Course</option>
                        <option value="graphic">Graphic</option>
                        <option value="motion">Motion</option>
                        <option value="DM">Digital Marketing</option>
                    </select> -->
                            <select class="form-select form-select-lg mb-3" id="subject" aria-label=".form-select-lg example">
                        <option selected>Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                            <button> Book Now</button>
                        </form>
                    </div>
                    <p class="seat-book-text">Our expert academic counsellors will be happy to patiently explain everything that you want to know.</p>
                </div>
            </div>
        </div>
        <!-- seat__book__section end here-->


        <!-- TESTIMONIAL SECTION STARTS -->
        <!-- testimonial  -->
        <div class=" testimonial-section pt-150 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <div class="section-title2 ">
                            <h2>PEOPLE TALK <span>ABOUT OPEDIA </span></h2>
                        </div>

                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="testimonial-left-wrap">

                                    <div class="testimonial-info-wrap mt-60">
                                        <div class="user-info-wrap ">
                                            <div class="test-img">
                                                <img id="test-img" src="./images/student-projects/experts-image/Frame 38825.png" alt="">
                                            </div>
                                            <div class="test-person-details">
                                                <h5>Joynal Mia</h5>
                                                <p>Bobby Duke Middle School, California</p>
                                            </div>
                                        </div>
                                        <p class="testimonial-para">“The trainers are so helpful, beyond my expectation. After completing the training program, I realized that I have learned the useful skills that I needed to learn long before. I have worked on live projects already
                                            under the supervision of my trainer. ”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="testimonial-left-wrap">

                                    <div class="testimonial-info-wrap mt-60">
                                        <div class="user-info-wrap ">
                                            <div class="test-img">
                                                <img id="test-img" src="./images/student-projects/experts-image/Frame 38831.png" alt="">
                                            </div>
                                            <div class="test-person-details">
                                                <h5>Ariful Islam</h5>
                                                <p>Bobby Duke Middle School, California</p>
                                            </div>
                                        </div>
                                        <p class="testimonial-para">“Very good introductory course. I have enjoyed the assignments given in the class and by no means they were overwhelming or difficult. The instructors are very helpful, industry updated and knowledgeable. ”</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="testimonial-left-wrap">

                                    <div class="testimonial-info-wrap mt-60">
                                        <div class="user-info-wrap ">
                                            <div class="test-img">
                                                <img id="test-img" src="./images/student-projects/experts-image/Frame-38824.png" alt="">
                                            </div>
                                            <div class="test-person-details">
                                                <h5>Joy Chaudhury</h5>
                                                <p>Bobby Duke Middle School, California</p>
                                            </div>
                                        </div>
                                        <p class="testimonial-para">“This course was suggested to me by a close friend of mine. Excellent course module. Highly recommended for anyone who wants to learn Motion Graphics as a beginner. Their in-house training facilities are awesome
                                            ”
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="testimonial-left-wrap">

                                    <div class="testimonial-info-wrap mt-60">
                                        <div class="user-info-wrap ">
                                            <div class="test-img">
                                                <img id="test-img" src="./images/student-projects/experts-image/Frame 38833.png" alt="">
                                            </div>
                                            <div class="test-person-details">
                                                <h5>Anupam Islam Abir</h5>
                                                <p>Bobby Duke Middle School, California</p>
                                            </div>
                                        </div>
                                        <p class="testimonial-para">“This course is very interesting and worth taking if you are really a beginner in Digital Marketing. Course modules are well updated for the Digital Marketing industry. I believe my hands-on experience from this
                                            course and certification will help me a lot to progress in my career.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-7 mt-5 mt-xl-0">
                        <div class="testimonial-circle-wrapper">
                            <div class="circle-one">
                                <svg id="circle-1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="760px" height="760px" viewBox="0 0 760 760" style="enable-background:new 0 0 760 760;" xml:space="preserve">
                            <style type="text/css">

                                    .st0{opacity:0.3;fill:none;stroke:url(#SVGID_1_);stroke-width:2;stroke-linejoin:round;stroke-dasharray:5,5;enable-background:new    ;}

                                    .st1{opacity:0.3;fill:none;stroke:url(#SVGID_2_);stroke-width:2;stroke-linejoin:round;stroke-dasharray:5,5;enable-background:new    ;}
                            </style>
                            <defs>
                            </defs>
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="380" y1="759" x2="380" y2="1">
                                <stop  offset="0" style="stop-color:#3EA3DC"/>
                                <stop  offset="1" style="stop-color:#27348B"/>
                            </linearGradient>
                            <path id="crcl-1" class="st0" d="M380,1c209.32,0,379,169.68,379,379S589.32,759,380,759S1,589.32,1,380S170.68,1,380,1z"/>
                            </svg>
                            </div>
                            <div class="circle-two">



                                <svg id="circle-2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="586.73px" height="586.73px" viewBox="0 0 586.73 586.73" style="enable-background:new 0 0 586.73 586.73;" xml:space="preserve">
                            <style type="text/css">
                                .st0{opacity:0.3;fill:none;stroke:url(#SVGID_1_);stroke-linejoin:round;enable-background:new    ;}
                                .st1{opacity:0.3;fill:none;stroke:url(#SVGID_2_);stroke-linejoin:round;enable-background:new    ;}
                            </style>
                            <defs>
                            </defs>
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="293.364" y1="586.728" x2="293.364" y2="1.0007">
                                <stop  offset="0" style="stop-color:#FFDA76 !important"/>
                                <stop  offset="1" style="stop-color:#FC9825 !important"/>
                            </linearGradient>
                            <path  id="crcl-2" class="st0" d="M293.36,0.5c161.74,0,292.86,131.12,292.86,292.86S455.11,586.23,293.36,586.23S0.5,455.11,0.5,293.36
                                S131.62,0.5,293.36,0.5z"/>
                            </svg>
                            </div>
                            <div class="circle-three">
                                <svg id="circle-3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="409.43px" height="409.43px" viewBox="0 0 409.43 409.43" style="enable-background:new 0 0 409.43 409.43;" xml:space="preserve">
                                <style type="text/css">

                                        .st0{opacity:0.3;fill:none;stroke:url(#SVGID_1_);stroke-width:2;stroke-linejoin:round;stroke-dasharray:5,5;enable-background:new    ;}

                                        .st1{opacity:0.3;fill:none;stroke:url(#SVGID_2_);stroke-width:2;stroke-linejoin:round;stroke-dasharray:5,5;enable-background:new    ;}
                                </style>
                                <defs>
                                </defs>
                                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="204.713" y1="408.425" x2="204.713" y2="1">
                                    <stop  offset="0" style="stop-color:#3EA3DC"/>
                                    <stop  offset="1" style="stop-color:#27348B"/>
                                </linearGradient>
                                <path id="crcl-3" class="st0" d="M204.71,1c112.51,0,203.71,91.21,203.71,203.71s-91.21,203.71-203.71,203.71S1,317.22,1,204.71
                                    S92.21,1,204.71,1z"/>
                                </svg>
                            </div>

                            <div class="nav nav-pills me-3 testimonial-userImage" id="v-pills-tab" role="tablist">
                                <img src="./images/student-projects/experts-image/Frame 38825.png" alt="" id="test-main" class="main">
                                <img src="./images/student-projects/experts-image/Frame 38825.png" alt="" class="nav-link active c-1 test-img-item" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">

                                <img src="./images/student-projects/experts-image/Frame 38831.png" alt="" class="nav-link c-2 test-img-item" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">

                                <img src="./images/student-projects/experts-image/Frame-38824.png" alt="" class="nav-link c-3  test-img-item" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <img src="./images/student-projects/experts-image/Frame 38833.png" alt="" class="nav-link C-4 test-img-item" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- testimonial  -->

        <!-- TESTIMONIAL SECTION ENDS -->



        <!-- partner section start here -->
        <div class="partner__section">
            <div class="container">

                <div class="partner__inner">
                    <div class="section-title text-center mb-100">
                        <h2 class="partnar-top"> PARTNERS </h2>
                        <h2> & CONCERNS</h2>
                    </div>
                    <div class="partners__logo align-items-center">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <img src="images/partners/image1.png" alt="">
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <img src="images/partners/image2.png" alt="">
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <img src="images/partners/image1.png" alt="">
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <img src="images/partners/image2.png" alt="">
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <img src="images/partners/image1.png" alt="">
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                                <img src="images/partners/image2.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- partner section end here -->

        <!-- ABOUT SECTION STARTS -->
        <div class="about-opedia-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>About OPEDIA</h2>
                            <p>“The SKILL that helps you prosper in career, to learn that SKILL is your responsibility” - Opedia IT Institute can guide you to set the milestones towards that goal of developing your career and building a better future. If
                                you want to pursue taking professional IT training, Opedia is the right place for you. <br><br> We have the best IT courses available for career growth with competitive modules compatible with professional skills and knowledge.
                                Our comprehensive curriculum offers applied technical practice and a project-oriented training program.
                            </p>
                            <ul class="section-list">
                                <li>
                                    <img src="./images/about/bulb.png" alt=""> Focus on the commitments we make to our people.
                                </li>
                                <li>
                                    <img src="./images/about/bulb.png" alt=""> Practice pain point-based problem solving and clarity in all actions we take.
                                </li>
                                <li>
                                    <img src="./images/about/bulb.png" alt=""> Bold to embrace innovation and social changes toward prosperity.
                                </li>


                                <li><a href="#">...more</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="about-sml">
                                        <img src="./images/about/pic-2.png" alt="">
                                    </div>
                                    <div class="about-sml-btm mb-5 mb-md-0">
                                        <a id="a-youtube" href="https://youtu.be/J-vcFFXM0F4"><img class="youtube" src="./images/about/youtube.png" alt=""></a>
                                        <img src="./images/about/pic-2.png" alt="">


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-big">
                                        <img src="./images/teachers/Resize/rif.png" alt="">
                                        <div class="content">
                                            <span>Welcome</span>
                                            <span>TO THE ERA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT SECTION ENDS -->

    </main>

    <footer>
        <!-- footer section start here -->
        <div class="footer__section">
            <div class="scroll-up">
                <a href="#" class="scrollTop"> <img src="./images/scroll-up.png" alt=""> </a>
            </div>
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__top">
                        <div class="row align-items-end">
                            <div class="col-md-5">
                                <div class="footer__dimen">
                                    <div class="Dimen__logo">
                                        <a href="#"><img src="images/logo/logo.png" alt=""></a>
                                    </div>
                                    <div class="dimen__title">
                                        <h2>MAKING ASSETS FOR</h2>
                                        <h1>SILICON VALLEY</h1>
                                    </div>
                                    <div class="triton__social">
                                        <a href="#"><img src="images/logo/Facebook.png" alt="facebook" class="img-social-icon">
                                            <img src="images/logo/fbshadow.png" alt="shadowfb" class="shadow-social-icon"></a>
                                        <a href="#"><img src="images/logo/Group 38739.png" alt="dribble" class="img-social-icon">
                                            <img src="images/logo/shadowgroup.png" alt="grpshadow" class="shadow-social-icon"></a>
                                        <a href="#"><img src="images/logo/Instagram.png" alt="Instagram" class="img-social-icon">
                                            <img src="images/logo/shadowinsta.png" alt="instashadow" class="shadow-social-icon"></a>
                                        <a href="#"><img src="images/logo/Dribbble.png" alt="dribble" class="img-social-icon">
                                            <img src="images/logo/dribbleshadow.png" alt="dribbleshadow" class="shadow-social-icon"></a>
                                        <a href="#"><img src="images/logo/WhatsApp.png" alt="what'sapp" class="img-social-icon">
                                            <img src="images/logo/shadowwhatsapp.png" alt="whatsappshadow" class="shadow-social-icon"> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="footer__triton">
                                    <div class="triton__title">
                                        <h4>EXPLORE</h4>
                                    </div>
                                    <div class="triton__menu">
                                        <ul>
                                            <li><a href="#">COURSES</a></li>
                                            <li><a href="#">FACILITIES</a></li>
                                            <li><a href="#">ACTIVITIES</a></li>
                                            <li><a href="#">ABOUT</a></li>
                                            <li><a href="#">POLICY</a></li>
                                        </ul>
                                    </div>
                                    <div class="triton__contact">
                                        <p>+8801978159172</p>
                                        <p>business@opediatech.com</p>
                                        <p>Shyamoli Square Complex Southern-Building, Level-4, Dhaka 1207</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__foot pb-5">
                        <p>© 2021 <span> OPEDIA INSTITUTE</span> Inc. All rights reserved. </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer section end here -->
    </footer>
    <!-- Button trigger modal -->






    <!-- Js heres -->

    <script src="{{ asset('frontend') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap5.min.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/MotionPathPlugin.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/swiper-bundle.min.js"></script>

    <script src="{{ asset('frontend') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('frontend') }}/js/swiper-bundle.min.js"></script>

    <script src="{{ asset('frontend') }}/js/script.js"></script>


</body>

</html>
