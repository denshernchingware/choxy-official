<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Crafto - The Multipurpose HTML5 Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 56+ ready demos.">

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">

    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('demos/elearning/elearning.css') }}" />

    <style>
        .news-text {
    transition: all 0.3s ease;
}
    </style>

</head>


<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#313e3b">
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand p-0" href="{{ route('home') }}">
                        <img src="images/logo.png" data-at2x="images/logo.png" alt="" class="default-logo ">
                        <img src="images/logo.png" data-at2x="images/logo.png" alt="" class="alt-logo w-70px">
                        <img src="images/logo.png" data-at2x="images/logo.png" alt="" class="mobile-logo ">
                    </a>
                </div>

                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link">About</a>
                            </li>



                            <li class="nav-item">
                                <a href="{{ route('apply') }}" class="nav-link">Admissions</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('schoolLife') }}" class="nav-link">School Life</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('newsEvents') }}" class="nav-link">News And Events</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('gallery') }}" class="nav-link">Gallery</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                    <div class="header-icon">
                        <div>
                            <div class="alt-font fw-500 lg-fs-15">
                                <a href="tel:+263719746617" class="widget-text text-white-hover">
                                    <i class="feather icon-feather-phone-call me-10px lg-me-5px"></i>
                                    +263 719 746 617
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
        <!-- end navigation -->
    </header>

    <!-- end header -->
    @yield('content')

    <!-- start footer -->
    <section class="cta-section text-center">
        <div class="container">
            <h2 class="display-5 fw-bold mb-3">Ready to Join Choxy Dee Academy?</h2>
            <p class="lead mb-5">Start your journey towards excellence. Applications for Form 1 are now open.</p>
            <div>
                <a href="{{route('apply')}}#application" class="btn btn-warning rounded-pill px-5 py-3 fw-bold me-3 popup-youtube">Apply Now</a>
                <a href="{{route('contact')}}#contactSection" class="btn btn-outline-light rounded-pill px-5 py-3 fw-bold popup-youtube">Schedule a Visit</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-5">
                <!-- Logo & Description -->
                <div class="col-lg-4">
                    <a href="#">
                        <div class="d-flex align-items-center mb-4">
                            <img src="images/logo.png" alt="Choxy Dee Academy Logo" class="logo-img me-3">
                        <div>
                            <h5 class="fw-bold text-white mb-0">Choxy Dee Academy</h5>
                            <small class="text-white">Striving for Excellence</small>
                        </div>
                    </div>
                    </a>

                    <p class="small">
                        A private secondary school dedicated to nurturing excellence through quality education,
                        discipline, and innovation.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="text-white fw-bold mb-4">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('about') }}">About Us</a></li>
                        <li class="mb-2"><a href="{{ route('apply') }}">Admissions</a></li>
                        <li class="mb-2"><a href="{{ route('schoolLife') }}">School Life</a></li>
                        <li class="mb-2"><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li class="mb-2"><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Us -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="text-white fw-bold mb-4">Contact Us</h6>
                    <p class="mb-2">
                        <i class="bi bi-telephone me-2 text-warning"></i><a href="tel:+263775746617">+263 775 746 617</a><br>
                        <i class="bi bi-telephone me-2 text-warning"></i><a href="tel:+263778550367">+263 778 550 367</a><br>
                        <i class="bi bi-telephone me-2 text-warning"></i><a href="tel:+263719746617">+263 719 746 617</a>
                    </p>
                    <p class="mb-2"><i class="bi bi-envelope me-2 text-warning"></i><a href="mailto:info@choxydeeacademy.co.zw">info@choxydeeacademy.co.zw</a></p>
                    <p class="mb-2"><i class="bi bi-geo-alt me-2 text-warning"></i> 11331 Glen Norah C, Masimbi</p>
                    <p class="mb-2"><i class="bi bi-geo-alt me-2 text-warning"></i> 5223 Southly Park, Magetsi</p>
                </div>

                <!-- Connect With Us -->
                <div class="col-lg-3">
                    <h6 class="text-white fw-bold mb-4">Connect With Us</h6>
                    <p class="small mb-3 text-white-50">
                        Follow us on social media for updates and news.
                    </p>

                    <div class="d-flex gap-3">
                        <p class="text-white fs-4" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </p>
                        <p  class="text-white fs-4" aria-label="X (Twitter)">
                            <i class="bi bi-twitter-x"></i>
                        </p>
                        <p class="text-white fs-4" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </p>
                        <p class="text-white fs-4" aria-label="YouTube">
                            <i class="bi bi-youtube"></i>
                        </p>
                    </div>
                </div>

            </div>

            <hr class="my-4 border-secondary">

            <div class="text-center small">
                &copy; 2026 Choxy Dee Academy. All rights reserved.
            </div>
            <div class="text-center small">
                Crafted by <a href="https://denshernchingware.github.io/dmtechnologies.co.zw/" class="text-white text-decoration-line-bottom"
                    target="_blank">DMTechnologies</a>
            </div>
        </div>
    </footer>

    <!-- end footer -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script>
function toggleNews(button) {
    const card = button.closest('.card');
    const shortText = card.querySelector('.short-text');
    const fullText = card.querySelector('.full-text');

    if (fullText.classList.contains('d-none')) {
        shortText.classList.add('d-none');
        fullText.classList.remove('d-none');
        button.textContent = 'View less';
    } else {
        shortText.classList.remove('d-none');
        fullText.classList.add('d-none');
        button.textContent = 'View more';
    }
}
</script>

</body>

</html>
