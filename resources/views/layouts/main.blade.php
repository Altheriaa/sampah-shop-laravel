<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Start-Up Sampah') - Ubah Sampah Jadi Uang</title>
    <link rel="website icon" type="image/png" href="{{ asset('img/home1.png') }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('keywords', 'bank sampah, daur ulang, sampah jadi uang')" name="keywords">
    <meta content="@yield('description', 'Platform pengelolaan sampah terpadu')" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.icon') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">

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

    <!-- Custom Theme Override -->
    <link href="{{ asset('css/costum.css') }}" rel="stylesheet">

    @yield('styles')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-glass fixed-top">
        <div class="container">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center gap-2">
                <span class="brand-icon">
                    <i class="fas fa-recycle"></i>
                </span>
                <h1 class="text-white m-0">
                    Bank Sampah <span class="text-accent">Sadar Mandiri</span>
                </h1>
            </a>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Menu -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="fas fa-home me-1"></i>Beranda
                    </a>
                    <a href="{{ url('/profil') }}" class="nav-item nav-link {{ Request::is('profil') ? 'active' : '' }}">
                        <i class="fas fa-info-circle me-1"></i>Profil
                    </a>
                    <a href="{{ url('/fasilitas') }}" class="nav-item nav-link {{ Request::is('fasilitas') ? 'active' : '' }}">
                        <i class="fas fa-building me-1"></i>Fasilitas
                    </a>
                    <a href="{{ url('/product') }}" class="nav-item nav-link {{ Request::is('product') ? 'active' : '' }}">
                        <i class="fas fa-box me-1"></i>Produk
                    </a>
                    <a href="{{ url('/anggota') }}" class="nav-item nav-link">
                        <i class="fas fa-user me-1"></i>Login
                    </a>
                </div>

                <!-- Search Button -->
                <button type="button" class="btn btn-search ms-lg-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Full Screen Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(12, 43, 34, 0.95);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3 text-white" placeholder="Cari produk atau informasi...">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- Footer Start -->
    <footer class="footer-section">
        <!-- Location Section -->
        <div class="location-section">
            <div class="container">
                <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-badge">
                        <i class="fas fa-map-marker-alt me-2"></i>LOKASI KAMI
                    </div>
                    <h2 class="text-white mb-3">Kunjungi Bank Sampah Kami</h2>
                    <p class="text-white-50">Lihat langsung proses daur ulang dan setor sampah Anda</p>
                </div>
                <div class="map-container wow fadeInUp" data-wow-delay="0.2s">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d585.8869846550324!2d95.3173085275675!3d5.577638957457943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1718288861432!5m2!1sid!2sid"
                        width="100%" height="400" style="border:0; border-radius: 16px;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <div class="footer-main">
            <div class="container">
                <div class="row g-5">
                    <!-- About Column -->
                    <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="footer-brand">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="footer-icon">
                                    <i class="fas fa-recycle"></i>
                                </span>
                                <h3 class="text-white mb-0">Bank Sampah</h3>
                            </div>
                            <p class="text-white-50 mb-4">
                                Warisan paling Istimewa Untuk Generasi Berikutnya Adalah Lingkungan yang Lestari dan Terjaga. 
                                <strong class="text-accent">SAVE OUR EARTH</strong>
                            </p>
                            <div class="footer-social">
                                <a href="https://www.instagram.com/ppkormawa_himatifutu21" target="_blank" class="social-link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://wa.me/+6281360274339" target="_blank" class="social-link">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-6 wow fadeIn" data-wow-delay="0.2s">
                        <h5 class="text-white mb-4">Menu Cepat</h5>
                        <ul class="footer-links">
                            <li><a href="{{ url('/') }}"><i class="fas fa-angle-right me-2"></i>Beranda</a></li>
                            <li><a href="{{ url('/profil') }}"><i class="fas fa-angle-right me-2"></i>Profil</a></li>
                            <li><a href="{{ url('/fasilitas') }}"><i class="fas fa-angle-right me-2"></i>Fasilitas</a></li>
                            <li><a href="{{ url('/product') }}"><i class="fas fa-angle-right me-2"></i>Produk</a></li>
                            <li><a href="{{ url('/anggota') }}"><i class="fas fa-angle-right me-2"></i>Login</a></li>
                        </ul>
                    </div>

                    <!-- Services -->
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <h5 class="text-white mb-4">Layanan Kami</h5>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fas fa-angle-right me-2"></i>Penjemputan Sampah</a></li>
                            <li><a href="#"><i class="fas fa-angle-right me-2"></i>Setor Sampah</a></li>
                            <li><a href="#"><i class="fas fa-angle-right me-2"></i>Beli Produk Eco</a></li>
                            <li><a href="#"><i class="fas fa-angle-right me-2"></i>Konsultasi Gratis</a></li>
                            <li><a href="#"><i class="fas fa-angle-right me-2"></i>Custom Order</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.4s">
                        <h5 class="text-white mb-4">Hubungi Kami</h5>
                        <ul class="footer-contact">
                            <li>
                                <i class="fa fa-map-marker-alt"></i>
                                <span>Bank Sampah Induk Sadar Mandiri, Jl. Tengku Dikandang, Gampong Jawa, Banda Aceh</span>
                            </li>
                            <li>
                                <i class="fa fa-phone-alt"></i>
                                <a href="https://wa.me/+6281360274339">+62 813-6027-4339</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:info@sampahshop.com">info@sampahshop.com</a>
                            </li>
                            <li>
                                <i class="fa fa-clock"></i>
                                <span>Senin - Sabtu: 08.00 - 17.00 WIB</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-0">
                            &copy; {{ date('Y') }} <strong class="text-white">Bank Sampah Induk Sadar Mandiri</strong>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <p class="mb-0">
                            Designed with <i class="fas fa-heart text-danger"></i> for a Greener Future
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2">
        <i class="bi bi-arrow-up"></i>
    </a>

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

    @stack('scripts')
</body>

</html>