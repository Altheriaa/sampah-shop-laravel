<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Start-Up Sampah</title>
    <link rel="website icon" type="jpg" href="{{ asset('img/home1.png') }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.icon') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('styles')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h1 class="text-white">Bank Sampah Induk Sadar Mandiri</h1>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ url('/') }}"
                            class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">BERANDA</a>
                        <a href="{{ url('/profil') }}"
                            class="nav-item nav-link {{ Request::is('profil') ? 'active' : '' }}">PROFIL</a>
                        <a href="{{ url('/fasilitas') }}"
                            class="nav-item nav-link {{ Request::is('fasilitas') ? 'active' : '' }}">FASILITAS</a>
                        <a href="{{ url('/product') }}"
                            class="nav-item nav-link {{ Request::is('product') ? 'active' : '' }}">PRODUCT</a>
                        <a href="{{ url('/anggota') }}" class="nav-item nav-link">LOGIN</a>
                    </div>
                    <button type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid py-5">
        <div id="bar">
            <div class="row mgt50px">
                <br><br>
                <h1 align="center">Lokasi Bank Sampah</h1>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d585.8869846550324!2d95.3173085275675!3d5.577638957457943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1718288861432!5m2!1sid!2sid"
                    width="1362" height="470" frameborder="0" style="margin-bottom: 0; left: 10px;"
                    allowfullscreen></iframe>
            </div>
        </div>

        <div class="container-fluid bg-dark text-white-50 footer pt-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                        <a href="" class="d-inline-block mb-3">
                            <h1 class="text-white">Start<span class="text-primary">-</span>Up</h1>
                        </a>
                        <p class="mb-0">Warisan paling Istimewa Untuk Genarasi Berikutnya Adalah Lingkungan yang lesteri
                            dan Terjaga & SAVE OUR EARTH "</p>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                        <h5 class="text-white mb-4">Alamat Kami</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Bank Sampah Induk Sadar Mandiri, Jl. Tengku
                            Dikandang, Gampong Jawa, Banda Aceh.</p>
                        <p><i class="fa fa-phone-alt me-3"></i><a href="https://wa.me/+6281360274339"
                                class="text-white">+6281360274339</a></p>
                        <p><i class="fa fa-envelope me-3"></i>Startup@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container wow fadeIn" data-wow-delay="0.1s">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Start-Up Sampah</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>