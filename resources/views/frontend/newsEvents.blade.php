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
 <section class="py-5 bg-light">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="alt-font text-dark-gray fw-600 ls-minus-3px">
                News
            </h3>

        </div>

        <div class="row g-4">
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

<section class="py-5 bg-white">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="alt-font text-dark-gray fw-600 ls-minus-3px">
                Upcoming Events
            </h3>

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
            {{ $item->category}}
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





@endsection


