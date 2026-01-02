@extends('frontend.master')
@section('content')
    <!-- start page title -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography d-none d-md-block"
        style="background-image: url(images/school-life-des.png)">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0"
            style="background-image: url('images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-base-color">School Life</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">
                        Life at Choxy Dee.
                    </h2>
                    <p class="text-white">
                        Experience a vibrant school community with sports, clubs, and
                        activities that nurture well-rounded individuals.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- mobile -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography d-block d-md-none"
        style="background-image: url(images/school-life.png)">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0"
            style="background-image: url('images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-base-color">School Life</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">
                        Life at Choxy Dee.
                    </h2>
                    <p class="text-white">
                        Experience a vibrant school community with sports, clubs, and
                        activities that nurture well-rounded individuals.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Sports & Activities Section -->
    <section class="extracurricular-section sports-bg">
        <div class="container">
            <div class="section-header">
                <i class="bi bi-trophy-fill fs-1 text-base-color me-1"></i>
                <div>
                    <div class="text-base-color">Competitive and recreational sports for all students.</div>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">
                        Sports & Activities
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative pt-0 half-section overflow-hidden">
        <img src="images/demo-data-analysis-bg-06.png" class="position-absolute top-0px left-0px"
            data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)"
            alt="" />
        <img src="images/demo-data-analysis-bg-07.png" class="position-absolute top-10 right-0px"
            data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)"
            alt="" />
        <div class="container position-relative z-index-1">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center mb-3"
                data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                    <div
                        class="feature-box bg-ghost-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-10">
                        <div class="feature-box-icon mb-25px">
                            <img src="images/atheletics.jpeg" alt="" />
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-600 fs-20 alt-font mb-5px">Athletics</span>
                            <p>Track and field events for all students.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                    <div
                        class="feature-box bg-cosmic-latte-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-10">
                        <div class="feature-box-icon mb-25px">
                            <img src="images/volley-ball.jpeg" alt="" />
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-600 fs-20 alt-font mb-5px">Volleyball</span>
                            <p>Team sport promoting coordination and teamwork.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                    <div
                        class="feature-box bg-linen-white text-start justify-content-start h-100 border-radius-6px p-16 lg-p-10">
                        <div class="feature-box-icon mb-25px">
                            <img src="images/football.jpeg" alt="" />
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-600 fs-20 alt-font mb-5px">Soccer</span>
                            <p>Dedicated soccer teams at various levels.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                    <div
                        class="feature-box bg-lavender-violet text-start justify-content-start h-100 border-radius-6px p-16 lg-p-10">
                        <div class="feature-box-icon mb-25px">
                            <img src="images/handball.jpeg" alt="" />
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block text-dark-gray fw-600 fs-20 alt-font mb-5px">Handball</span>
                            <p>Fast-paced team sport for all.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
            </div>
        </div>
        <div class="container-fluid">
            <div class="row position-relative">
                <div class="col swiper text-cente"
                    data-slider-options='{ "slidesPerView": "auto", "spaceBetween":0, "centeredSlides": true, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":1, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper swiper-width-auto pb-15px marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700">
                                <span
                                    class="w-20px h-20px border border-radius-100 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>Choxy
                                Dee Academy
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700">
                                <span
                                    class="w-20px h-20px border border-radius-100 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>Choxy
                                Dee Academy
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700">
                                <span
                                    class="w-20px h-20px border border-radius-100 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>Choxy
                                Dee Academy
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700">
                                <span
                                    class="w-20px h-20px border border-radius-100 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>Choxy
                                Dee Academy
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700">
                                <span
                                    class="w-20px h-20px border border-radius-100 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>Choxy
                                Dee Academy
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700">
                                <span
                                    class="w-20px h-20px border border-radius-100 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>Choxy
                                Dee Academy
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div
                                class="fs-120 lh-120 alt-font text-outline text-outline-color-extra-medium-gray fw-700">
                                <span
                                    class="w-20px h-20px border border-radius-100 border-color-extra-medium-gray d-inline-block align-middle ms-50px me-50px sm-ms-30px sm-me-30px"></span>Choxy
                                Dee Academy
                            </div>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clubs & Organizations Section -->
    <!-- start section -->
    <section class="admissions-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">
                    Clubs & Organizations
                </h2>
                <p class="section-subtitle">Get Involved</p>
            </div>

            <div class="row g-4 justify-content-center">

                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi-music-note-beamed req-icon"></i>
                        </div>
                        <h4 class="req-title">Dance Club</h4>
                        <p class="req-desc">
                            Express yourself through movement and rhythm.
                        </p>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi-music-note req-icon"></i>
                        </div>
                        <h4 class="req-title">Music</h4>
                        <p class="req-desc">Develop your musical talents and perform.</p>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi-megaphone req-icon"></i>
                        </div>
                        <h4 class="req-title">Debate</h4>
                        <p class="req-desc">Sharpen your public speaking and thinking.</p>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi-mask req-icon"></i>
                        </div>
                        <h4 class="req-title">Drama</h4>
                        <p class="req-desc">Explore theater and performance arts.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi-grid-3x3 req-icon"></i>
                        </div>
                        <h4 class="req-title">Chess</h4>
                        <p class="req-desc">
                            Strategic thinking and friendly competition.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi-dice-5 req-icon"></i>
                        </div>
                        <h4 class="req-title">Draft</h4>
                        <p class="req-desc">
                            Traditional board games and mental exercises.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi-award req-icon"></i>
                        </div>
                        <h4 class="req-title">LEO Club</h4>
                        <p class="req-desc">Leadership, experience, and service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection






