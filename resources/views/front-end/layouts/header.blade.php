<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'YogKaushlam')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('front-end/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('front-end/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="far fa-clock"></i>
                            <h2>8:00 - 9:00</h2>
                            <p>Mon - Sat</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <h2>+91-7819891130</h2>
                            <h2>+91-7830834026</h2>
                            <p>For Appointment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href="https://www.facebook.com/Yogkoshlm/"><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/yogkaushalam_dehradun_official/"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="{{ route('home') }}" class="navbar-brand">Y<span>og</span>K<span>aushalam</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ route('price') }}" class="nav-item nav-link">Price</a>
                    <a href="{{ route('class') }}" class="nav-item nav-link">Class</a>
                    {{-- <a href="{{ route('team') }}" class="nav-item nav-link">Trainer</a> --}}
                    <a href="{{ route('pose') }}" class="nav-item nav-link">Pose</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('blog') }}" class="dropdown-item">Blog Grid</a>
                            <a href="{{ route('single') }}" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div> --}}
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <a href="index.html" class="footer-logo">Y<span>og</span>K<span>aushalam</span></a>
                    <h3>73G5, Badripur Rd, near post office, Badripur, Dehradun,
                        Uttarakhand 248012</h3>
                    <div class="footer-menu">
                        <p>+91-7819891130</p>
                        <p>yogkaushalam2022@gmail.com</p>
                    </div>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/Yogkoshlm/"><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/yogkaushalam_dehradun_official/"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Anss Tech</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front-end/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('front-end/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('front-end/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-end/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-end/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('front-end/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('front-end/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('front-end/js/main.js') }}"></script>
</body>

</html>
