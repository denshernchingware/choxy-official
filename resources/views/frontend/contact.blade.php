@extends('frontend.master')
@section('content')
    <!-- start page title -->
    <section class="ipad-top-space-margin bg-dark-gray cover-background page-title-big-typography"
        style="background-image: url(images/contacts-main.png)">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0"
            style="background-image: url('images/vertical-line-bg-small.svg')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 8,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b", "#d5d52b"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 1,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":1,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container">
            <div class="row align-items-center extra-small-screen">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9 position-relative page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px alt-font text-base-color">Contact us</h1>
                    <h2 class="fw-500 m-0 ls-minus-2px text-white alt-font">Get in Touch </h2>
                    <p class="text-white">We're here to answer your questions and help you with the admissions process.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row mb-5 align-items-center overflow-hidden">
                <div class="col-lg-6">
                    <h1 class="alt-font fw-700 text-dark-gray fancy-text-style-4 ls-minus-2px md-mb-20px">Say
                        <span
                            data-fancy-text='{ "effect": "rotate", "string": ["hello!", "makadii!", "kunjani!"] }'></span><i
                            class="bi bi-emoji-smile icon-extra-large ms-20px"></i>
                    </h1>
                </div>
                <div class="col-lg-6 last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-50, 0], "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <p>We're here to help and answer any question you might have. We look forward to hearing from you.
                    </p>
                </div>
            </div>
            <div class="row">

                <!-- MAP -->
                <div class="col-12 sm-mb-30px">
                    <div class="map h-650px md-h-550px sm-h-450px border-radius-6px overflow-hidden">
                        <iframe width="100%" height="100%" style="border:0; border-radius:6px;" loading="lazy"
                            allowfullscreen referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps?q=16.994725259902275,82.21024681509502&hl=en&z=16&output=embed">
                        </iframe>
                    </div>
                </div>

                <!-- FLOATING CONTACT BOX -->
                <div
                    class="col-lg-5 col-md-6 contact-form-style-03 position-absolute sm-position-relative right-0px bottom-0">
                    <div
                        class="bg-white p-13 md-p-10 position-relative overflow-hidden background-no-repeat background-position-right-bottom box-shadow-extra-large">

                        <h6 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-5px">choxy Dee Academy</h6>
                        <p class="w-100 mb-10px">
                            11331 Glen Norah C1<br>
                            Masimbi
                        </p>
                        <p class="w-100 mb-10px">
                            5223 Southly Park<br>
                            Magetsi
                        </p>

                        <div class="w-100 d-block">
                            <span class="d-block"><span class="text-dark-gray fw-600">T:</span> <a
                                    href="tel:+263778550367"> +263 778 550 367</a></span>
                            <span class="d-block"><span class="text-dark-gray fw-600">T:</span> <a
                                    href="tel:+263775746617"> +263 775 746 617</a></span>
                            <span class="d-block"><span class="text-dark-gray fw-600">T:</span> <a
                                    href="tel:+263719746617"> +263 719 746 617</a></span>

                            <span class="d-block"><span class="text-dark-gray fw-600">E:</span>
                                <a href="mailto:info@yourdomain.com"
                                    class="text-dark-gray text-decoration-line-bottom fw-600">
                                    info@choxydeeacademy.co.zw
                                </a>
                            </span>

                            <a href="https://maps.app.goo.gl/xd8w7VUmPUovnKUt7" target="_blank"
                                class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded btn-switch-text mt-35px">
                                <span>
                                    <span class="btn-double-text" data-text="View on Google Map">View on Google
                                        Map</span>
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="py-5 position-relative overflow-hidden">
        <div class="container">

            <!-- Heading -->
            <div class="row justify-content-center mb-4">
                <div class="col-12 text-center">
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px mx-auto">How we can help you?</h2>

                </div>
            </div>

            <!-- Form -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <form action="email-templates/contact-form.php" method="post">

                        <div class="row g-4">

                            <!-- Name -->
                            <div class="col-md-6">
                                <label class="form-label text-uppercase fw-semibold small">
                                    Your good name <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent border-end-0">
                                        <i class="bi bi-emoji-smile text-dark-gray"></i>
                                    </span>
                                    <input type="text" name="name" class="form-control border-start-0"
                                        placeholder="What's your good name?" required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label text-uppercase fw-semibold small">
                                    Your email address <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent border-end-0">
                                        <i class="bi bi-envelope text-dark-gray"></i>
                                    </span>
                                    <input type="email" name="email" class="form-control border-start-0"
                                        placeholder="Enter your email address" required>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label class="form-label text-uppercase fw-semibold small">
                                    Your phone number <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent border-end-0">
                                        <i class="bi bi-telephone text-dark-gray"></i>
                                    </span>
                                    <input type="tel" name="phone" class="form-control border-start-0"
                                        placeholder="Enter your phone number" required>
                                </div>
                            </div>

                            <!-- Subject -->
                            <div class="col-md-6">
                                <label class="form-label text-uppercase fw-semibold small">
                                    Your subject
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent border-end-0">
                                        <i class="bi bi-journal-text text-dark-gray"></i>
                                    </span>
                                    <input type="text" name="subject" class="form-control border-start-0"
                                        placeholder="How can we help you?">
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <label class="form-label text-uppercase fw-semibold small">
                                    Your message
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent border-end-0 align-items-start pt-2">
                                        <i class="bi bi-chat-dots text-dark-gray"></i>
                                    </span>
                                    <textarea name="comment" rows="4" class="form-control border-start-0" placeholder="Describe your message"></textarea>
                                </div>
                            </div>

                            <!-- Privacy Text -->
                            <div class="col-md-8">
                                <p class="small mb-0 text-muted">
                                    We are committed to protecting your privacy. We will never collect
                                    information about you without your explicit consent.
                                </p>
                            </div>

                            <!-- Button -->
                            <div class="col-md-4 text-md-end text-center">
                                <button type="submit" class="btn btn-dark-gray px-4 py-4 w-200px">
                                    <i class="bi bi-send me-2 "></i> Send message
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- end section -->
@endsection

