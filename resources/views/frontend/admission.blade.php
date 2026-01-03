@extends('frontend.master')
@section('content')
   <!-- start page title -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography"
        style="background-image: url(images/adm-main.png)">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0"
            style="background-image: url('images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-base-color">Admissions</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">Join Our Community</h2>
                    <p class="text-white">Begin your journey to excellence at Choxy Dee Academy. Applications for Form
                        1 are now open.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- Admission Requirements Section -->
    <section class="admissions-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">Admission Requirements</h2>
                <p class="section-subtitle text-base-color">Ensure you have the following documents and meet the
                    requirements before applying.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Grade 7 Result Slip -->
                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi bi-file-earmark-text req-icon"></i>
                        </div>
                        <h4 class="req-title">Grade 7 Result Slip</h4>
                        <p class="req-desc">Must have 6 to 20 units for consideration.</p>
                    </div>
                </div>

                <!-- Birth Certificate -->
                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi bi-card-heading req-icon"></i>
                        </div>
                        <h4 class="req-title">Birth Certificate</h4>
                        <p class="req-desc">A clear copy of the student's birth certificate.</p>
                    </div>
                </div>

                <!-- Registration Fee -->
                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi bi-currency-dollar req-icon"></i>
                        </div>
                        <h4 class="req-title">Registration Fee</h4>
                        <p class="req-desc">$20 non-refundable registration fee.</p>
                    </div>
                </div>

                <!-- Assessment Exam -->
                <div class="col-md-6 col-lg-3">
                    <div class="req-card">
                        <div class="req-icon-wrapper">
                            <i class="bi bi-check-circle req-icon"></i>
                        </div>
                        <h4 class="req-title">Assessment Exam</h4>
                        <p class="req-desc">All applicants must sit for an examination.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="text-center mb-5 ">
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">Application Process</h2>
                <p class="section-subtitle">Follow these simple steps to complete your application</p>
            </div>

            <div class="timeline">
                <!-- Step 1 -->
                <div class="timeline-item">
                    <div class="timeline-badge">1</div>
                    <div class="timeline-content">
                        <h4 class="timeline-title">Submit Application</h4>
                        <p class="timeline-desc">Fill out the online application form below.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="timeline-item">
                    <div class="timeline-badge">2</div>
                    <div class="timeline-content">
                        <h4 class="timeline-title">Submit Documents</h4>
                        <p class="timeline-desc">Provide required documents at the school.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="timeline-item">
                    <div class="timeline-badge">3</div>
                    <div class="timeline-content">
                        <h4 class="timeline-title">Pay Registration Fee</h4>
                        <p class="timeline-desc">Pay the $20 non-refundable fee.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="timeline-item">
                    <div class="timeline-badge">4</div>
                    <div class="timeline-content">
                        <h4 class="timeline-title">Assessment Exam</h4>
                        <p class="timeline-desc">Sit for the placement assessment.</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="timeline-item">
                    <div class="timeline-badge">5</div>
                    <div class="timeline-content">
                        <h4 class="timeline-title">Receive Results</h4>
                        <p class="timeline-desc">Get notified of admission decision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @include('partial.applicationForm')
@endsection
