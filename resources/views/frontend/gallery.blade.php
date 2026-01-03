@extends('frontend.master')
@section('content')
    <!-- start page title -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography"
        style="background-image: url('{{ asset('images/gallery.png') }}')">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0"
            style="background-image: url('images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-base-color">Gallery</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">Photo Gallery </h2>
                    <p class="text-white">Explore moments from our vibrant school community through pictures.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->


    <section class="ps-2 pe-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col sm-p-0">
                    <div class="row g-3 "
                        data-justified-options='{ "rowHeight": 500, "maxRowHeight": false, "captions": false, "margins": 15, "waitThumbnailsLoad": true }'
                        data-anime='{ "el": "childs", "translateY": [0, 0],"opacity": [0,1], "duration": 500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start gallery item -->
                        @forelse ($photos as $photo)
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="gallery-box transition-inner-all">

                                    <a href="{{ asset('uploads/' . $photo->image) }}" data-group="lightbox-group-gallery">

                                        <div class="position-relative bg-dark-gray">
                                            <img src="{{ asset('uploads/' . $photo->image) }}"
                                                alt="{{ $photo->title ?? 'Gallery image' }}" class="img-fluid" />

                                            <div class="d-flex align-items-center justify-content-center gallery-hover">
                                                <i
                                                    class="icon feather icon-feather-search icon-very-medium text-white absolute-middle-center"></i>

                                               
                                            </div>
                                        </div>

                                    </a>

                                </div>
                            </div>

                        @empty
                            <!-- No Photos Yet -->
                            <div class="col-12">
                                <div class="text-center py-5 bg-light rounded shadow-sm">

                                    <i class="bi bi-images fs-1 text-muted mb-3 d-block"></i>

                                    <h5 class="fw-bold text-dark-gray mb-2">
                                        No Photos Yet
                                    </h5>

                                    <p class="text-muted mb-0">
                                        School activities and memorable moments will appear here once uploaded.
                                    </p>

                                </div>
                            </div>
                        @endforelse




                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
