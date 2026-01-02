@extends('frontend.master')
@section('content')
    <!-- start page title -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography"
      style="background-image: url('{{ asset('images/about-main.png') }}');">

        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0"
            style="background-image: url('images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-base-color">About Us</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">Our Story of Excellence.</h2>
                    <p class="text-white">Discover our story, mission, and commitment to nurturing tomorrow's leaders.
                    </p>
                </div>


            </div>
        </div>

    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="position-relative overlap-height background-position-left-top background-no-repeat "
        style="background-image: url('images/demo-elearning-02.png')">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center align-items-center">

                <div class="col-xl-5 col-md-6 offset-xl-1 position-relative"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                    <div class="icon-with-text-style-08 mb-20px">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-55px h-55px rounded-circle bg-base-color me-15px">
                                <i class="bi-clock-history d-inline-block icon-extra-medium text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block alt-font fs-19 fw-500 ls-minus-05px text-dark-gray">School
                                    History</span>
                            </div>
                        </div>
                    </div>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px">A Growing Legacy</h2>
                    <div class="mb-26px xs-mb-20px">
                        @include('partial.aboutUs')
                    </div>
                    <div class="d-flex align-items-center">
                        <div
                            class="col-auto text-center border-end border-color-extra-medium-gray border-1 me-25px pe-25px">
                            <h2 class="alt-font lh-44 fw-600 text-dark-gray mb-0">85%</h2>
                        </div>
                        <div class="col">
                            <span class="d-block w-60 lh-26 text-dark-gray fw-600 lg-w-100">Pass Rate</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-center text-lg-start sm-mb-30px sm-mt-20px "
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <figure class="position-relative m-0">
                        <img class="border-radius-6px" src="images/marufu.jpg" alt="">
                        <figcaption
                            class="position-absolute bg-white border-radius-100px p-10px box-shadow-double-large bottom-100px md-bottom-70px xs-bottom-40px left-minus-30px sm-left-0px w-350px md-w-300px text-start last-paragraph-no-margin animation-float">
                            <div class="row align-items-center">
                                <div class="col-auto pe-0">
                                    <img class="rounded-circle w-80px me-20px md-w-50px xs-w-50px"
                                        src="images/avtar-24.jpg" alt="" />
                                </div>
                                <div class="col ps-0">
                                    <span
                                        class="fs-18 text-dark-gray fw-500 ls-minus-05px d-block lh-26 md-fs-17"><span
                                            class="fw-800">Mr Marufu</span> :Principal</span>
                                </div>
                                <div class="col-auto">
                                    <img class="me-20px mt-minus-4 md-w-30px" src="" alt="" />
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- Mission & Vision Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <!-- Mission -->
                <div class="col-lg-5">
                    <div class="mission-box shadow">
                        <i class="bi bi-bullseye fs-1 mb-3"></i>
                        <h3 class="h4 fw-bold">Our Mission</h3>
                        <p>
                            To provide education that nurtures excellence, integrity, innovation, and leadership. We are
                            committed to developing students who are prepared to make contributions to society.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-lg-5">
                    <div class="vision-box shadow bg-base-color">
                        <i class="bi bi-eye fs-1 mb-3"></i>
                        <h3 class="h4 fw-bold">Our Vision</h3>
                        <p>
                            To develop well-rounded learners who excel academically and socially in an ever-changing
                            world. We envision graduates who are confident, capable, and committed to lifelong learning.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <section class="position-relative z-index-1 background-position-left-top background-no-repeat overflow-hidden"
        style="background-image: url('images/demo-elearning-02.png')">
        <div class="position-absolute right-0px bottom-minus-90px z-index-minus-1 d-none d-md-inline-block"
            data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
            <img src="images/demo-elearning-04.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-end justify-content-center mb-8 xs-mb-12">
                <div class="col-xl-5 col-lg-6 col-md-10 position-relative md-mb-20px text-center text-lg-start"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="icon-with-text-style-08 mb-20px d-inline-block">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-55px h-55px rounded-circle bg-base-color me-15px">
                                <i class="bi-award d-inline-block icon-extra-medium text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin ">
                                <span class="d-inline-block alt-font fs-19 fw-500 ls-minus-05px text-dark-gray"> WHAT
                                    WE STAND FOR</span>
                            </div>
                        </div>
                    </div>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mb-0">Our Core Values</h2>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-10 offset-xl-1 text-center text-lg-start last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fw-600 mb-5px text-dark-gray d-block fs-18">Quality education guided by experienced
                        educators.</span>
                    <p class="w-85 xl-w-95 lg-w-100">We provide high-quality learning experiences designed to equip
                        students with practical skills and relevant knowledge.</p>
                </div>
            </div>
            <div class="row g-0 row-cols-1 row-cols-lg-4 row-cols-sm-2 g-0 align-items-center mb-3"
                data-anime='{ "el": "childs", "translateX": [-15, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div
                    class="col services-box-style-07 text-center last-paragraph-no-margin border-end border-color-transparent-dark-very-light md-mb-50px xs-border-end-0">
                    <div class="pe-50px ps-50px pb-40px xl-ps-30px xl-pe-30px">
                        <div class="position-relative ms-auto me-auto mb-25px">

                            <i class="bi bi-shield-check fs-1 text-base-color"></i>
                        </div>
                        <span class="fs-18 fw-600 text-dark-gray d-block mb-5px">Integrity</span>
                        <p class="lh-30">Upholding honesty and strong moral principles.</p>
                    </div>

                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div
                    class="col services-box-style-07 text-center last-paragraph-no-margin border-end border-color-transparent-dark-very-light md-mb-50px md-border-end-0">
                    <div class="pe-50px ps-50px pb-40px xl-ps-30px xl-pe-30px">
                        <div class="position-relative ms-auto me-auto mb-25px">

                            <i class="bi bi-trophy fs-1 text-base-color"></i>
                        </div>
                        <span class="fs-18 fw-600 text-dark-gray d-block mb-5px">Excellence</span>
                        <p class="lh-30">Excellence driven in all endeavors.</p>
                    </div>

                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div
                    class="col services-box-style-07 text-center last-paragraph-no-margin border-end border-color-transparent-dark-very-light xs-mb-50px xs-border-end-0">
                    <div class="pe-50px ps-50px pb-40px xl-ps-30px xl-pe-30px">
                        <div class="position-relative ms-auto me-auto mb-25px">

                            <i class="bi bi-hand-thumbs-up fs-1 text-base-color"></i>

                        </div>
                        <span class="fs-18 fw-600 text-dark-gray d-block mb-5px">Respect</span>
                        <p class="lh-30">Valuing every individual and their contributions.</p>
                    </div>

                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col services-box-style-07 text-center last-paragraph-no-margin">
                    <div class="pe-50px ps-50px pb-40px xl-ps-30px xl-pe-30px">
                        <div class="position-relative ms-auto me-auto mb-25px">

                            <i class="bi bi-people fs-1 text-base-color"></i>

                        </div>
                        <span class="fs-18 fw-600 text-dark-gray d-block mb-5px">Collaboration</span>
                        <p class="lh-30">Working together to achieve common goals</p>
                    </div>

                </div>
                <!-- end features box item -->

            </div>
        </div>
        <div class="container-fluid">
            <div class="row position-relative mt-40px xs-mt-20px">
                <div class="col swiper swiper-width-auto feather-shadow text-center"
                    data-slider-options='{ "slidesPerView": "auto", "spaceBetween":80, "centeredSlides": true, "speed": 30000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-190 ls-minus-10px pt-10px pb-10px alt-font fw-600 opacity-1">Choxy Dee
                                Academy</div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-190 ls-minus-10px pt-10px pb-10px alt-font fw-600 opacity-1">Choxy Dee
                                Academy</div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-190 ls-minus-10px pt-10px pb-10px alt-font fw-600 opacity-1">Choxy Dee
                                Academy</div>
                        </div>
                        <!-- end slider item -->
                    </div>
                </div>
                <div
                    class="col-12 position-absolute top-0 h-100 d-flex justify-content-center align-items-center left-0px z-index-1 text-center">
                    <h4
                        class="alt-font text-dark-gray fs-45 fw-600 ls-minus-2px xs-ls-minus-1px mb-0 mt-40px xs-mt-15px">
                        Education that extends beyond school hours.</h4>
                </div>
            </div>
        </div>
    </section>

     @include('partial.subjectsOffered')
     @include('partial.contactForm')

@endsection





