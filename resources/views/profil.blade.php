@extends('layouts.main')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <!-- Tambahkan subtitle dan tombol agar tidak terlalu simple -->
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Tentang Kami</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Profil Start-Up Sampah</h1>                    
                    <p class="text-white-50 mb-4 animated slideInRight">Solusi cerdas dan terpadu untuk pengelolaan limbah demi lingkungan yang lebih bersih, sehat, dan berkelanjutan.</p>
                    <a href="#layanan" class="btn btn-light rounded-pill px-4 py-2 animated slideInRight">Lihat Layanan</a>
                </div>
                <div class="col-lg-6 align-self-end text-center">
                    <img class="img-fluid" src="img/66.png" alt="Start-Up Sampah" style="max-height: 350px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.9);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3 text-white" placeholder="Ketik kata kunci pencarian...">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

   <!-- Services / About Start -->
   <div id="layanan" class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Layanan Kami</div>
                <h1 class="display-6 mb-3">Solusi Pengelolaan Sampah Terpadu</h1>
                <p class="mb-5">Kebersihan adalah kunci menuju lingkungan yang sehat. Kami siap membantu Anda mewujudkannya dengan layanan profesional kami.</p>
            </div>
            <div class="row g-4">
                <!-- Item 1 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mb-3">
                            <i class="fa fa-trash-alt fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Pengumpulan Sampah</h5>
                        <p class="mb-0">Pengumpulan sampah dari rumah atau kantor dengan jadwal fleksibel (harian, mingguan, atau on-demand).</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mb-3">
                            <i class="fa fa-clock fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Fleksibilitas Waktu</h5>
                        <p class="mb-0">Hubungi kami kapan saja. Siap melayani pengumpulan rutin maupun penanganan sampah mendesak.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mb-3">
                            <i class="fa fa-user-shield fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Penanganan Profesional</h5>
                        <p class="mb-0">Ditangani oleh tim terlatih yang memastikan sampah diproses secara aman dan sesuai regulasi lingkungan.</p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mb-3">
                            <i class="fa fa-recycle fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Pemilahan & Daur Ulang</h5>
                        <p class="mb-0">Membantu memilah sampah untuk daur ulang, meminimalkan dampak lingkungan dari limbah yang dihasilkan.</p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mb-3">
                            <i class="fa fa-headset fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Kemudahan Komunikasi</h5>
                        <p class="mb-0">Saluran komunikasi yang responsif via telepon, WhatsApp, atau platform online untuk jadwal dan pertanyaan.</p>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mb-3">
                            <i class="fa fa-leaf fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Ramah Lingkungan</h5>
                        <p class="mb-0">Berkomitmen menyediakan layanan yang berkelanjutan dan mendukung pelestarian lingkungan hidup.</p>
                    </div>
                </div>
                <!-- Item 7 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mb-3">
                            <i class="fa fa-tags fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Harga Kompetitif</h5>
                        <p class="mb-0">Menawarkan paket layanan yang dapat disesuaikan dengan kebutuhan dan anggaran Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Feature / Location Start -->
    <div class="container-fluid feature pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Lokasi Kami</div>
                    <h1 class="text-white mb-4">Bank Sampah Induk Sadar Mandiri</h1>
                    <p class="text-light mb-4"><i class="fa fa-map-marker-alt me-2"></i> Jl. Tengku Dikandang, Gampong Jawa, Banda Aceh.</p>
                    <p class="text-light mb-4">Kunjungi pusat pengelolaan sampah kami untuk melihat langsung bagaimana kami memilah dan mendaur ulang limbah menjadi barang bernilai ekonomis.</p>
                    
                    <!-- Tambahkan Stats agar tidak terlalu simple -->
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3 stats-card">
                                <div>
                                    <h2 class="text-white mb-0">500+</h2>
                                    <p class="text-white-50 mb-0">Nasabah Aktif</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3 stats-card">
                                <div>
                                    <h2 class="text-white mb-0">10 Ton</h2>
                                    <p class="text-white-50 mb-0">Sampah Terkelola / Bulan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/about1.png" alt="Lokasi Bank Sampah" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Tim Kami</div>
                    <h1 class="mb-4">Tim Profesional Pengelola Start-Up Sampah</h1>
                    <p class="mb-4">Didukung oleh tim yang berpengalaman di bidang logistik, manajemen lingkungan, dan distribusi untuk memberikan layanan terbaik bagi Anda.</p>
                    <a class="btn btn-primary rounded-pill px-4" href="#">Bergabung Bersama Kami</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/team-11.jpg" alt="">
                                        <h5 class="mb-1">Muhammad Nadir</h5>
                                        <small class="text-primary">Kepala Bank Sampah</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/1-22.jpg" alt="">
                                        <h5 class="mb-1">Hendra</h5>
                                        <small class="text-primary">Kepala Logistik</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-5">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/1-33.jpg" alt="">
                                        <h5 class="mb-1">Samsul Bahri</h5>
                                        <small class="text-primary">Distribusi Barang</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/1-44.jpg" alt="">
                                        <h5 class="mb-1">Hidayat</h5>
                                        <small class="text-primary">Pengepakan</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
@endsection
