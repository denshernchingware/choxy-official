@extends('frontend.master')
@section('content')
  <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography "
        style="background-image:url('images/news-evnts.png');
            background-size:cover;
            background-position:top;
            background-repeat:no-repeat;
            width:100%;
            ">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0"
            style="background-image: url('images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-base-color">Stay Updated</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">News & Events</h2>
                    <p class="text-white">Stay informed about the latest happenings, announcements, and upcoming events
                        at Choxy Dee Academy.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <!-- Latest News -->
                <div class="col-lg-8">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">Latest News</h3>

                    </div>

                    <div class="row g-4">
                        <!-- News Item 1 -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm news-card">
                                <img src="images/registration.png" class="card-img-top"
                                    alt="Students learning in classroom">
                                <div class="card-body">
                                    <p class="text-muted small mb-2">January 15, 2025</p>
                                    <h5 class="alt-font-one text-dark-gray fw-600  mx-auto mb-0">Term 1 Registration
                                        Now Open</h5>
                                    <p class="card-text text-muted small ">
                                        Applications for Form 1 are now being accepted for the upcoming academic...
                                    </p>
                                </div>
                            </div>
                        </div>


                        <!-- News Item 2 -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm news-card">
                                <img src="images/sports.jpg" class="card-img-top" alt="Inter-School Sports Day">
                                <div class="card-body">
                                    <p class="text-muted small mb-2">December 10, 2024</p>
                                    <h5 class="alt-font-one text-dark-gray fw-600  mx-auto mb-0">Inter-School Sports
                                        Day Success</h5>
                                    <p class="card-text text-muted small">
                                        Our students excelled at the district sports competition, winning multiple...
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- News Item 3 -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm news-card">
                                <img src="images/education.png" class="card-img-top"
                                    alt="Academic Excellence Awards">
                                <div class="card-body">
                                    <p class="text-muted small mb-2">November 28, 2024</p>
                                    <h5 class="alt-font-one text-dark-gray fw-600  mx-auto mb-0">Academic Excellence
                                        Awards</h5>
                                    <p class="card-text text-muted small">
                                        Celebrating our top performers from the 2024 examination results.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="col-lg-4 sm-mt-4">
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">Upcoming Events</h3>

                    <div class="event-item d-flex align-items-center">
                        <i class="bi bi-calendar-event fs-3 text-base-color me-3"></i>
                        <div class="flex-grow-1">
                            <p class="mb-1"><strong>Open Day</strong></p>
                            <p class="text-dark-gray mb-1">Jan 25, 2025</p>
                        </div>
                        <span class="badge bg-base-color text-dark event-badge">Admissions</span>
                    </div>

                    <div class="event-item d-flex align-items-center">
                        <i class="bi bi-calendar-event fs-3 text-base-color me-3"></i>
                        <div class="flex-grow-1">
                            <p class="mb-1"><strong>Term 1 Begins</strong></p>
                            <p class="text-dark-gray mb-1">Feb 3, 2025</p>
                        </div>
                        <span class="badge bg-light text-dark event-badge border">Academic</span>
                    </div>

                    <div class="event-item d-flex align-items-center">
                        <i class="bi bi-calendar-event fs-3 text-base-color me-3"></i>
                        <div class="flex-grow-1">
                            <p class="mb-1"><strong>Parents Meeting</strong></p>
                            <p class="text-dark-gray mb-1">Feb 15, 2025</p>
                        </div>
                        <span class="badge bg-light text-dark event-badge border">Community</span>
                    </div>

                    <div class="event-item d-flex align-items-center">
                        <i class="bi bi-calendar-event fs-3 text-base-color me-3"></i>
                        <div class="flex-grow-1">
                            <p class="mb-1"><strong>Sports Day</strong></p>
                            <p class="text-dark-gray mb-1">Mar 8, 2025</p>
                        </div>
                        <span class="badge bg-light text-dark event-badge border">Sports</span>
                    </div>

                    <div>


                    </div>
                </div>
            </div>
    </section>
    <!-- end section -->
@endsection


