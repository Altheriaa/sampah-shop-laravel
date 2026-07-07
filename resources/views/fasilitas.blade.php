@extends('layouts.main')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-4 py-2 mb-3 animated slideInRight hero-badge">
                        <i class="fas fa-recycle me-2"></i>FASILITAS KAMI
                    </div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight hero-title" style="line-height: 1.2;">
                        Jenis Sampah yang<br>
                        <span class="accent-word">Kami Terima</span>
                    </h1>
                    <p class="text-white-50 mb-4 animated slideInRight lead-text">
                        Kenali berbagai jenis sampah yang dapat kami kelola. Setiap sampah memiliki nilai ekonomis dan potensi daur ulang yang berbeda.
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start animated slideInRight flex-wrap">
                        <a href="#jenis-sampah" class="btn btn-light py-3 px-4 rounded-pill">
                            <i class="fas fa-list me-2"></i>Lihat Kategori
                        </a>
                        <a href="#panduan" class="btn btn-outline-light py-3 px-4 rounded-pill">
                            <i class="fas fa-book-open me-2"></i>Panduan Memilah
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center hero-float">
                    <img class="img-fluid animated fadeInRight" src="img/66.png" alt="Fasilitas Bank Sampah" style="max-height: 350px; filter: drop-shadow(0 20px 30px rgba(0,0,0,0.2));">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(12, 43, 34, 0.95);">
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

    <!-- Jenis Sampah Start -->
    <div id="jenis-sampah" class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="about-eyebrow">Kategori Sampah</div>
                <h1 class="display-6 mb-3">4 Jenis Sampah yang Kami Kelola</h1>
                <p class="mb-5">Setiap jenis sampah memiliki nilai dan cara pengolahan yang berbeda. Pilah sampah Anda dari rumah untuk hasil yang lebih maksimal.</p>
            </div>
            <div class="row g-4">
                <!-- PLASTIK -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-wine-bottle fa-2x"></i>
                        </div>
                        <h5 class="mb-3">PLASTIK</h5>
                        <p class="mb-3 small text-muted">Sampah plastik yang dapat didaur ulang menjadi produk bernilai.</p>
                        <ul class="list-unstyled text-start small mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Botol plastik (PET/HDPE)</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Kantong plastik bersih</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Wadah plastik makanan</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Styrofoam bersih</li>
                        </ul>
                        <div class="mt-3 pt-3 border-top">
                            <small class="text-primary fw-bold">
                                <i class="fas fa-tag me-1"></i>Mulai Rp 2.000/kg
                            </small>
                        </div>
                    </div>
                </div>

                <!-- KACA -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-wine-glass fa-2x"></i>
                        </div>
                        <h5 class="mb-3">KACA</h5>
                        <p class="mb-3 small text-muted">Kaca dapat didaur ulang tanpa batas tanpa kehilangan kualitas.</p>
                        <ul class="list-unstyled text-start small mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Botol kaca (bening/warna)</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Toples kaca</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Pecahan kaca bersih</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Wadah kaca makanan</li>
                        </ul>
                        <div class="mt-3 pt-3 border-top">
                            <small class="text-primary fw-bold">
                                <i class="fas fa-tag me-1"></i>Mulai Rp 1.500/kg
                            </small>
                        </div>
                    </div>
                </div>

                <!-- LOGAM -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-cogs fa-2x"></i>
                        </div>
                        <h5 class="mb-3">LOGAM</h5>
                        <p class="mb-3 small text-muted">Logam memiliki nilai ekonomis tinggi dan mudah didaur ulang.</p>
                        <ul class="list-unstyled text-start small mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Kaleng aluminium</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Kaleng besi/baja</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Kawat & kabel</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Peralatan dapur logam</li>
                        </ul>
                        <div class="mt-3 pt-3 border-top">
                            <small class="text-primary fw-bold">
                                <i class="fas fa-tag me-1"></i>Mulai Rp 5.000/kg
                            </small>
                        </div>
                    </div>
                </div>

                <!-- KERTAS -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-newspaper fa-2x"></i>
                        </div>
                        <h5 class="mb-3">KERTAS</h5>
                        <p class="mb-3 small text-muted">Kertas bekas dapat diolah kembali menjadi produk kertas baru.</p>
                        <ul class="list-unstyled text-start small mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Koran & majalah</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Buku bekas</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Kardus & karton</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Kertas HVS bersih</li>
                        </ul>
                        <div class="mt-3 pt-3 border-top">
                            <small class="text-primary fw-bold">
                                <i class="fas fa-tag me-1"></i>Mulai Rp 2.500/kg
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Catatan Penting -->
            <div class="row mt-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="alert alert-light border-start border-4 border-warning mb-0" role="alert">
                        <div class="d-flex gap-3">
                            <i class="fas fa-info-circle text-warning fa-2x mt-1"></i>
                            <div>
                                <strong class="d-block mb-2">Catatan Penting:</strong>
                                <ul class="mb-0 small">
                                    <li>Pastikan sampah dalam keadaan <strong>bersih dan kering</strong> sebelum disetor</li>
                                    <li>Pilah sampah berdasarkan <strong>jenisnya</strong> untuk harga yang lebih baik</li>
                                    <li>Harga dapat berubah mengikuti <strong>pasar</strong>, hubungi kami untuk info terbaru</li>
                                    <li>Kami <strong>TIDAK menerima</strong> sampah medis, B3, dan sampah berbahaya lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jenis Sampah End -->

    <!-- Panduan Memilah Sampah Start -->
    <div id="panduan" class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="about-eyebrow">Panduan Edukasi</div>
                <h1 class="display-6 mb-3">Cara Memilah Sampah di Rumah</h1>
                <p class="mb-5">Memilah sampah dari rumah adalah langkah pertama yang penting. Ikuti panduan sederhana berikut ini.</p>
            </div>

            <div class="row g-4">
                <!-- Langkah 1 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="step-card h-100">
                        <span class="step-icon">1</span>
                        <div>
                            <h6 class="mb-2">Siapkan Wadah Terpisah</h6>
                            <small class="text-muted">Sediakan minimal 3 wadah: organik, anorganik, dan residu</small>
                        </div>
                    </div>
                </div>

                <!-- Langkah 2 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="step-card h-100">
                        <span class="step-icon">2</span>
                        <div>
                            <h6 class="mb-2">Bersihkan Sampah</h6>
                            <small class="text-muted">Bilas botol/kaleng bekas agar tidak berbau dan menarik hama</small>
                        </div>
                    </div>
                </div>

                <!-- Langkah 3 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="step-card h-100">
                        <span class="step-icon">3</span>
                        <div>
                            <h6 class="mb-2">Pilah Berdasarkan Jenis</h6>
                            <small class="text-muted">Pisahkan plastik, kaca, logam, dan kertas ke wadah berbeda</small>
                        </div>
                    </div>
                </div>

                <!-- Langkah 4 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="step-card h-100">
                        <span class="step-icon">4</span>
                        <div>
                            <h6 class="mb-2">Setor ke Bank Sampah</h6>
                            <small class="text-muted">Hubungi kami untuk jadwal penjemputan atau antar langsung</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tips Tambahan -->
            <div class="row g-4 mt-4">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-tint fa-2x"></i>
                        </div>
                        <h5 class="mb-2">Sampah Harus Kering</h5>
                        <p class="mb-0 small text-muted">Sampah basah menurunkan kualitas dan harga jual</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-compress-alt fa-2x"></i>
                        </div>
                        <h5 class="mb-2">Padatkan Sampah</h5>
                        <p class="mb-0 small text-muted">Tekan botol/kardus untuk menghemat ruang penyimpanan</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-calendar-check fa-2x"></i>
                        </div>
                        <h5 class="mb-2">Jadwal Rutin</h5>
                        <p class="mb-0 small text-muted">Setor sampah secara rutin untuk hasil maksimal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Panduan Memilah Sampah End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-eyebrow">Testimoni</div>
                    <h1 class="mb-4">Kata Mereka Tentang Kami</h1>
                    <p class="mb-4">
                        Mendaur ulang sampah adalah tindakan kecil yang berdampak besar. Dengan menjual sampah, kita turut berpartisipasi dalam menjaga keberlanjutan lingkungan sekaligus menambah pemasukan keluarga.
                    </p>
                    <p class="mb-4">
                        Ayo bergabung dengan ratusan nasabah kami yang sudah merasakan manfaatnya. Sampah bukan lagi barang tidak berguna, tapi sumber penghasilan tambahan!
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a class="btn btn-primary rounded-pill px-4" href="https://wa.me/6281360274339">
                            <i class="fab fa-whatsapp me-2"></i>Gabung Sekarang
                        </a>
                        <a class="btn btn-outline-primary rounded-pill px-4" href="#jenis-sampah">
                            <i class="fas fa-info-circle me-2"></i>Pelajari Lebih
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-item bg-white rounded-4 p-4 shadow-sm">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Baria Munandar</h5>
                                    <small class="text-muted">Ketua PPK ORMAWA</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="mb-0 text-muted fst-italic">
                                "Mendaur ulang sampah adalah tindakan kecil yang berdampak besar. Dengan menjual sampah, kita turut berpartisipasi dalam menjaga keberlanjutan lingkungan sekaligus menambah pemasukan keluarga."
                            </p>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-item bg-white rounded-4 p-4 shadow-sm">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Sanusi</h5>
                                    <small class="text-muted">Pembimbing PPK Ormawa</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="mb-0 text-muted fst-italic">
                                "Sampah bukan lagi barang tidak berguna. Botol plastik, kaleng, dan kertas bekas bisa didaur ulang dan dijual dengan harga yang menguntungkan. Ayo manfaatkan potensi dari sampah!"
                            </p>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-item bg-white rounded-4 p-4 shadow-sm">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; flex-shrink: 0;">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Ridwan</h5>
                                    <small class="text-muted">Ketua Himpunan</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="mb-0 text-muted fst-italic">
                                "Mari kita mulai mengumpulkan dan menjual sampah untuk mendapatkan penghasilan tambahan! Tidak hanya baik untuk lingkungan, tapi juga untuk kantong kita."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- CTA Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-primary rounded-4 p-5 text-center position-relative overflow-hidden wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-2) 100%) !important;">
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
                <div class="position-relative z-1">
                    <h1 class="display-5 text-white mb-3">Siap Menyetor Sampah?</h1>
                    <p class="text-white-50 mb-4 mx-auto" style="max-width: 600px;">
                        Hubungi kami sekarang untuk jadwal penjemputan atau kunjungi langsung lokasi kami. Tim kami siap membantu Anda!
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="https://wa.me/6281360274339" class="btn btn-light rounded-pill px-5 py-3">
                            <i class="fab fa-whatsapp me-2"></i>Chat WhatsApp
                        </a>
                        <a href="profil.php" class="btn btn-outline-light rounded-pill px-5 py-3">
                            <i class="fas fa-map-marker-alt me-2"></i>Lihat Lokasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Testimonial Carousel Init -->
    <script>
        $(document).ready(function(){
            $('.testimonial-carousel').owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                items: 1,
                loop: true,
                dots: true,
                nav: false
            });
        });
    </script>
@endsection
