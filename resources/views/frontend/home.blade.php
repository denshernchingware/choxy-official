@extends('frontend.master')
@section('content')
  <!-- start section -->
    <section
        class="p-0 overflow-hidden bg-dark-gray  ipad-top-space-margin md-h-auto position-relative md-pb-0px sm-pb-40px cover-background"
        style="background-image: url('images/main.png'); height:100vh; ">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0"
            style="background-image: url('images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 6,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="position-absolute left-minus-80px top-25" data-bottom-top="transform: translateY(-80px)"
            data-top-bottom="transform: translateY(80px)">
            <img src="" alt="">
        </div>
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-xl-5 col-lg-6 col-md-12 text-white text-center text-lg-start position-relative z-index-1 d-flex flex-column justify-content-center h-100 md-mt-50px md-mb-20px xs-mb-10px"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                    <div
                        class="mb-30px w-80 md-w-60 sm-w-100 d-block mx-auto mx-lg-0 overflow-hidden sm-pb-0 sm-mb-1 sm-mt-20px">
                        <span class="fs-18 fw-300  d-inline-block pt-2 pb-2 pe-4 ps-4 wel-nt"
                            style="background:#ffb400; border-radius: 30px;color:black">
                            Welcome To Choxy Dee Academy</span>
                    </div>
                    <span class="alt-font fs-75 lh-65 sm-fs-60 fw-500 mb-25px ls-minus-2px">Striving for
                        Excellence.</span>
                    <div class="mb-30px w-80 md-w-60 sm-w-100 d-block mx-auto mx-lg-0 overflow-hidden">
                        <span class="fs-18 fw-300 opacity-8 d-inline-block text-white">A premier private secondary
                            school in Glen Norah C, Masimbi, dedicated to nurturing tomorrow's leaders through quality
                            education, discipline, and innovation.</span>
                    </div>
                    <div class="overflow-hidden">
                        <a href="{{ route('contact') }}"
                            class="btn btn-extra-large btn-base-color btn-rounded btn-switch-text fw-600 d-inline-block me-25px sm-me-10px align-middle left-icon">
                            <span>
                                <span><i class="bi bi-telephone-fill"></i></span>
                                <span class="btn-double-text ls-minus-05px" data-text="Contact Us">Contact Us</span>
                            </span>
                        </a>
                        <a href="{{ route('apply') }}#application"
                            class="btn btn-link btn-hover-animation-switch btn-extra-large text-white popup-youtube btn-icon-left">
                            <span>
                                <span class="btn-text">Apply Now</span>
                                <span class="btn-icon"><i class="bi bi-file-earmark-text-fill me-2"></i></span>
                                <span class="btn-icon"><i class="bi bi-file-earmark-text-fill me-2"></i></span>
                            </span>
                        </a>
                    </div>
                    <div
                        class="row row-cols-3 justify-content-center counter-style-04 w-100 md-w-auto position-absolute lg-position-relative bottom-80px lg-bottom-0px lg-mt-50px">
                        <!-- start counter item -->
                        <div class="col text-center text-lg-start">
                            <h5 class="vertical-counter d-inline-flex alt-font text-white fw-600 mb-10px"
                                data-text="+" data-to="30"></h5>
                            <div
                                class="divider-style-03 divider-style-03-01 border-2 border-color-base-color mb-5px w-80 xs-w-90 md-mx-auto">
                            </div>
                            <span class="fw-300 text-white opacity-5">Tutors</span>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="col text-center text-lg-start">
                            <h5 class="vertical-counter d-inline-flex alt-font text-white fw-600 mb-10px"
                                data-text="+" data-to="500"></h5>
                            <div
                                class="divider-style-03 divider-style-03-01 border-2 border-color-base-color mb-5px w-80 xs-w-90 md-mx-auto">
                            </div>
                            <span class="fw-300 text-white opacity-5">Students</span>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="col text-center text-lg-start">
                            <h5 class="vertical-counter d-inline-flex alt-font text-white fw-600 mb-10px"
                                data-text="+" data-to="10"></h5>
                            <div
                                class="divider-style-03 divider-style-03-01 border-2 border-color-base-color mb-5px w-80 xs-w-90 md-mx-auto">
                            </div>
                            <span class="fw-300 text-white opacity-5">Subjects</span>
                        </div>
                        <!-- end counter item -->
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 pt-30px lg-pt-0" style="margin-bottom: -120px;">
                    <div class="position-relative outside-box-right-10 md-outside-box-right-0 atropos" data-atropos>
                        <div class="atropos-scale">
                            <div class="atropos-rotate">
                                <div class="atropos-inner text-center w-100">
                                    <div data-atropos-offset="-1" class="position-absolute left-0px right-0px ">
                                        <img src="images/hero.png" alt="">
                                    </div>
                                    <img data-atropos-offset="1" class="position-relative z-index-9 animation-float"
                                        src="images/demo-elearning-hero-banner-02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section id="down-section" class="background-position-left-top background-no-repeat position-relative"
        style="background-image: url('images/demo-elearning-02.png')">
        <div class="position-absolute right-0px top-30px" data-bottom-top="transform: translateY(80px)"
            data-top-bottom="transform: translateY(-80px)">
            <img src="images/demo-elearning-04.png" alt="">
        </div>
        <div class="container">
            <div class="text-center position-absolute top-minus-40px left-0px right-0px z-index-1 d-none d-md-inline-block"
                data-anime='{ "opacity": [0, 1], "translate": [0, 0], "staggervalue": 100, "easing": "easeOutQuad" }'>
                <a href="#down-section" class="d-block section-link">
                    <div
                        class="d-flex justify-content-center align-items-center mx-auto box-shadow-medium-bottom rounded-circle h-70px w-70px text-dark-gray bg-white">
                        <i class="bi bi-mouse icon-very-medium lh-0px"></i>
                    </div>
                </a>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-10 position-relative md-mb-40px sm-mb-25px"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="icon-with-text-style-08 mb-20px">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-55px h-55px rounded-circle bg-base-color me-15px">
                                <i class="bi bi-award d-inline-block icon-extra-medium text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span
                                    class="d-inline-block alt-font fs-19 fw-500 ls-minus-05px text-dark-gray">Guaranteed
                                    and certified</span>
                            </div>
                        </div>
                    </div>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">Why Choose Choxy Dee Academy?</h2>
                    <a href="{{route('about')}}"
                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded btn-switch-text">
                        <span>
                            <span class="btn-double-text" data-text="Learn more">Learn more</span>
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a>
                    <div
                        class="d-flex align-items-center fw-500 text-dark-gray w-100 position-absolute md-position-relative bottom-0 left-minus-5px md-mt-15px">
                        <img src="images/why-us.png" alt=""><span
                            class="d-inline-block position-relative lh-24">Subjects taught by <span
                                class="fw-600  text-dark-gray ">experts.</span></span></div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-10 offset-xl-1 position-relative mt-minus-1">
                    <div class="row row-cols-auto row-cols-sm-2"
                        data-anime='{ "el": "childs", "translateX": [30, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start features box item -->
                        <div class="col align-self-start">
                            <div class="feature-box text-start ps-30px pe-30px xl-pe-5px sm-pe-0">
                                <div class="feature-box-icon position-absolute left-0px top-0px">
                                    <h2 class="alt-font fs-100 fw-700 ls-minus-1px opacity-1 mb-0">01</h2>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin pt-30 md-pt-21 sm-pt-40px">
                                    <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-5px">85% Pass
                                        Rate</span>
                                    <p>Consistently achieving excellent academic results year after year.</p>
                                    <span class="w-60px h-3px bg-base-color d-inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col align-self-end mt-25 xs-mt-30px">
                            <div class="feature-box text-start ps-30px pe-30px xl-pe-5px sm-pe-0">
                                <div class="feature-box-icon position-absolute left-0px top-0px">
                                    <h2 class="alt-font fs-100 fw-700 ls-minus-1px opacity-1 mb-0">02</h2>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin pt-30 md-pt-21 sm-pt-40px">
                                    <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-5px">Heritage Based
                                        Curriculum</span>
                                    <p>Modern HBC curriculum integrating cultural values with academic excellence.</p>
                                    <span class="w-60px h-3px bg-base-color d-inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col align-self-start mt-minus-12 xs-mt-30px">
                            <div class="feature-box text-start ps-30px pe-30px xl-pe-5px sm-pe-0">
                                <div class="feature-box-icon position-absolute left-0px top-0px">
                                    <h2 class="alt-font fs-100 fw-700 ls-minus-1px opacity-1 mb-0">03</h2>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin pt-30 md-pt-21 sm-pt-40px">
                                    <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-5px">Holistic
                                        Education</span>
                                    <p>Balanced focus on academics, sports, and extracurricular activities.</p>
                                    <span class="w-60px h-3px bg-base-color d-inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- Image Column -->
                  @foreach ($abouts as $about)
    <div class="col-lg-6 order-lg-1 order-1">
        <div class="img-container position-relative">
            <img
                src="{{ asset('uploads/' . $about->images) }}"
                alt="Happy students at Choxy Dee Academy"
                class="img-fluid w-100 rounded"
            >
        </div>
    </div>
@endforeach


                <!-- Text Column -->
                <div class="col-lg-6 order-lg-2 order-2 ">
                    <p class="text-uppercase fw-bold  small tracking-wider">
                        About Us
                    </p>

                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">
                        Building Strong Foundations Since 2022
                    </h2>

                  @include('partial.aboutUs')

                    <ul class="list-unstyled mb-5">
                        <li class="mb-3">
                            <span class="text-base-color fw-bold me-2 "><i class="bi bi-check-circle-fill"></i></span>
                            Forms 1 to 4 Education
                        </li>
                        <li class="mb-3">
                            <span class="text-base-color fw-bold me-2"><i class="bi bi-check-circle-fill"></i></span>
                            Heritage Based Curriculum
                        </li>
                        <li class="mb-3">
                            <span class="text-base-color fw-bold me-2"><i class="bi bi-check-circle-fill"></i></span>
                            Arts, Commercials &amp; Sciences
                        </li>
                        <li class="mb-3">
                            <span class="text-base-color fw-bold me-2"><i class="bi bi-check-circle-fill"></i></span>
                            Balanced Academic &amp; Social Development
                        </li>
                    </ul>

                    <a href="{{route('about')}}"
                        class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded btn-switch-text">
                        <span>
                            <span class="btn-double-text" data-text="About us">Find more about us</span>
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- start section -->
   @include('partial.subjectsOffered')
    <!-- end section -->
   <!-- =======================
     Latest News Section
======================= -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="alt-font text-dark-gray fw-600 ls-minus-3px">
                Latest News
            </h3>
            <a href="{{route('newsEvents')}}" class="text-base-color fw-bold text-decoration-none">
                View All →
            </a>
        </div>

        <div class="row g-4">
                  <!-- News Items -->
@forelse ($news as $new)
<div class="col-md-4">
    <div class="card border-0 shadow-sm h-100 news-card">
        <img src="{{ asset('uploads/' . $new->image) }}" class="card-img-top" alt="{{ $new->title }}">

        <div class="card-body d-flex flex-column">
            <p class="text-muted small mb-2">
                {{ \Carbon\Carbon::parse($new->date)->format('F d, Y') }}
            </p>

            <h5 class="fw-600 text-dark-gray mb-2">
                {{ $new->title }}
            </h5>

            <p class="text-muted small news-text">
                <span class="short-text">
                    {{ Str::limit($new->information, 120) }}
                </span>
                <span class="full-text d-none">
                    {{ $new->information }}
                </span>
            </p>

            @if (strlen($new->information) > 120)
                <button
                    type="button"
                    class="btn btn-link p-0 text-base-color fw-bold mt-auto"
                    onclick="toggleNews(this)">
                    View more
                </button>
            @endif
        </div>
    </div>
</div>

@empty
<div class="col-12 text-center py-5">
    <i class="bi bi-newspaper fs-1 text-muted d-block mb-2"></i>
    <h5>No News Yet</h5>
    <p class="text-muted small">Please check back later for updates.</p>
</div>
@endforelse
    </div>
</section>
<!-- =======================
     Upcoming Events Section
======================= -->
<section class="py-5 bg-white">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="alt-font text-dark-gray fw-600 ls-minus-3px">
                Latest Upcoming Events
            </h3>
            <a href="{{route('newsEvents')}}" class="btn btn-base-color rounded-pill px-4 fw-bold text-black">
                View All
            </a>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
              @forelse ($events as $item)
    <div class="event-item d-flex align-items-center mb-3 p-3 bg-white rounded shadow-sm">

        <i class="{{$item->icon}} fs-3 text-base-color me-3"></i>

        <div class="flex-grow-1">
            <p class="mb-1 fw-bold">{{ $item->title }}</p>
            <p class="text-muted mb-0">
                {{ \Carbon\Carbon::parse($item->event_date)->format('F d, Y') }}
            </p>
        </div>

        <span class="badge bg-base-color text-dark">
            {{ $item->category }}
        </span>

    </div>

@empty
    <!-- No Events Yet -->
    <div class="text-center py-4 bg-white rounded shadow-sm">
        <i class="bi bi-calendar-x fs-1 text-muted mb-3 d-block"></i>

        <h6 class="fw-bold text-dark-gray mb-1">
            No Upcoming Events
        </h6>

        <p class="text-muted mb-0 small">
            School events will be listed here once scheduled.
        </p>
    </div>
@endforelse





            </div>
        </div>

    </div>
</section>

    {{-- @include('partial.contactForm') --}}

@endsection





