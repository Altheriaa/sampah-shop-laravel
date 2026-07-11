@extends('layouts.main')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-4 py-2 mb-3 animated slideInRight hero-badge">
                        <i class="fas fa-info-circle me-2"></i>Tentang Kami
                    </div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight hero-title" style="line-height: 1.2;">
                        Profil <span class="accent-word">Start-Up Sampah</span>
                    </h1>
                    <p class="text-white-50 mb-4 animated slideInRight lead-text">
                        Solusi cerdas dan terpadu untuk pengelolaan limbah demi lingkungan yang lebih bersih, sehat, dan berkelanjutan. Bersama kami, ubah sampah menjadi berkah!
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start animated slideInRight flex-wrap mb-4">
                        <a href="#layanan" class="btn btn-light py-3 px-4 rounded-pill">
                            <i class="fas fa-concierge-bell me-2"></i>Lihat Layanan
                        </a>
                        <a href="#tim" class="btn btn-outline-light py-3 px-4 rounded-pill">
                            <i class="fas fa-users me-2"></i>Tim Kami
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center hero-float">
                    <img class="img-fluid animated fadeInRight" src="{{ asset('img/66.png') }}" alt="Start-Up Sampah" style="max-height: 380px; filter: drop-shadow(0 20px 30px rgba(0,0,0,0.2));">
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

    <!-- Vision & Mission Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <!-- Section Header -->
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="about-eyebrow">Visi & Misi</div>
                <h1 class="display-6 mb-3">Arah & Tujuan Kami</h1>
                <p class="mb-5">Komitmen kami untuk menciptakan lingkungan yang lebih bersih dan berkelanjutan melalui pengelolaan sampah yang inovatif.</p>
            </div>

            <div class="row g-5 align-items-stretch">
                <!-- VISI - Dominan dengan Gradient -->
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="vm-card-visi h-100">
                        <div class="vm-visi-content">
                            <div class="vm-visi-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="vm-visi-label">VISI KAMI</div>
                            <h2 class="vm-visi-title">Menjadi Pelopor Pengelolaan Sampah Terdepan di Aceh</h2>
                            <p class="vm-visi-desc">
                                Mewujudkan lingkungan yang bersih dan berkelanjutan melalui inovasi pengelolaan sampah yang terintegrasi, edukatif, dan bernilai ekonomis bagi masyarakat.
                            </p>
                            <div class="vm-visi-decoration">
                                <i class="fas fa-leaf"></i>
                                <i class="fas fa-recycle"></i>
                                <i class="fas fa-seedling"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MISI - Numbered List -->
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="vm-card-misi h-100">
                        <div class="vm-misi-header">
                            <div class="vm-misi-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <div>
                                <div class="vm-misi-label">MISI KAMI</div>
                                <h3 class="vm-misi-title">Langkah Nyata untuk Meraih Visi</h3>
                            </div>
                        </div>

                        <div class="vm-misi-list">
                            <!-- Misi 1 -->
                            <div class="vm-misi-item">
                                <div class="vm-misi-number">01</div>
                                <div class="vm-misi-content">
                                    <h5>Profesional & Ramah Lingkungan</h5>
                                    <p>Menyediakan layanan pengumpulan dan pengelolaan sampah yang profesional dan ramah lingkungan.</p>
                                </div>
                            </div>

                            <!-- Misi 2 -->
                            <div class="vm-misi-item">
                                <div class="vm-misi-number">02</div>
                                <div class="vm-misi-content">
                                    <h5>Edukasi Masyarakat</h5>
                                    <p>Mengedukasi masyarakat tentang pentingnya daur ulang dan pemilahan sampah dari rumah.</p>
                                </div>
                            </div>

                            <!-- Misi 3 -->
                            <div class="vm-misi-item">
                                <div class="vm-misi-number">03</div>
                                <div class="vm-misi-content">
                                    <h5>Inovasi Daur Ulang</h5>
                                    <p>Mengubah sampah menjadi produk bernilai ekonomis melalui inovasi daur ulang yang kreatif.</p>
                                </div>
                            </div>

                            <!-- Misi 4 -->
                            <div class="vm-misi-item">
                                <div class="vm-misi-number">04</div>
                                <div class="vm-misi-content">
                                    <h5>Pemberdayaan Masyarakat</h5>
                                    <p>Membangun ekosistem bank sampah yang berkelanjutan dan memberdayakan masyarakat lokal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision & Mission End -->

    <!-- Services / About Start -->
    <div id="layanan" class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="about-eyebrow">Layanan Kami</div>
                <h1 class="display-6 mb-3">Solusi Pengelolaan Sampah Terpadu</h1>
                <p class="mb-5">Kebersihan adalah kunci menuju lingkungan yang sehat. Kami siap membantu Anda mewujudkannya dengan layanan profesional kami.</p>
            </div>
            <div class="row g-4">
                <!-- Item 1 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-trash-alt fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Pengumpulan Sampah</h5>
                        <p class="mb-0 small text-muted">Pengumpulan sampah dari rumah atau kantor dengan jadwal fleksibel (harian, mingguan, atau on-demand).</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Fleksibilitas Waktu</h5>
                        <p class="mb-0 small text-muted">Hubungi kami kapan saja. Siap melayani pengumpulan rutin maupun penanganan sampah mendesak.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-user-shield fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Penanganan Profesional</h5>
                        <p class="mb-0 small text-muted">Ditangani oleh tim terlatih yang memastikan sampah diproses secara aman dan sesuai regulasi.</p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-recycle fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Pemilahan & Daur Ulang</h5>
                        <p class="mb-0 small text-muted">Membantu memilah sampah untuk daur ulang, meminimalkan dampak lingkungan dari limbah.</p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-headset fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Kemudahan Komunikasi</h5>
                        <p class="mb-0 small text-muted">Saluran komunikasi responsif via telepon, WhatsApp, atau platform online untuk jadwal dan pertanyaan.</p>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-leaf fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Ramah Lingkungan</h5>
                        <p class="mb-0 small text-muted">Berkomitmen menyediakan layanan yang berkelanjutan dan mendukung pelestarian lingkungan hidup.</p>
                    </div>
                </div>
                <!-- Item 7 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-tags fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Harga Kompetitif</h5>
                        <p class="mb-0 small text-muted">Menawarkan paket layanan yang dapat disesuaikan dengan kebutuhan dan anggaran Anda.</p>
                    </div>
                </div>
                <!-- Item 8 (BARU) -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item text-center p-4">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-graduation-cap fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Edukasi Masyarakat</h5>
                        <p class="mb-0 small text-muted">Program pelatihan dan sosialisasi tentang pengelolaan sampah yang baik untuk komunitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Feature / Location Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-eyebrow">Kunjungi Kami</div>
                    <h1 class="mb-4" style="color: var(--dark);">Bank Sampah Induk Sadar Mandiri</h1>
                    <p class="text-muted mb-4">
                        Kunjungi pusat pengelolaan sampah kami untuk melihat langsung bagaimana kami memilah dan mendaur ulang limbah menjadi barang bernilai ekonomis.
                    </p>
                    
                    <!-- Info Cards -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3 p-3 bg-light rounded-3">
                                <div class="icon-box flex-shrink-0" style="width: 45px; height: 45px; font-size: 1rem;">
                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1" style="color: var(--dark);">Alamat</h6>
                                    <small class="text-muted">Jl. Tengku Dikandang, Gampong Jawa, Banda Aceh</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3 p-3 bg-light rounded-3">
                                <div class="icon-box flex-shrink-0" style="width: 45px; height: 45px; font-size: 1rem;">
                                    <i class="fas fa-clock text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1" style="color: var(--dark);">Jam Operasional</h6>
                                    <small class="text-muted">Senin - Sabtu: 08.00 - 17.00 WIB</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3 p-3 bg-light rounded-3">
                                <div class="icon-box flex-shrink-0" style="width: 45px; height: 45px; font-size: 1rem;">
                                    <i class="fas fa-phone text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1" style="color: var(--dark);">Telepon</h6>
                                    <small class="text-muted">+62 813-6027-4339</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start gap-3 p-3 bg-light rounded-3">
                                <div class="icon-box flex-shrink-0" style="width: 45px; height: 45px; font-size: 1rem;">
                                    <i class="fas fa-envelope text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1" style="color: var(--dark);">Email</h6>
                                    <small class="text-muted">info@sampahshop.com</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/6285215094145" class="btn btn-primary rounded-pill px-4 py-2">
                        <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                    </a>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="about-img">
                        <img class="img-fluid w-100 rounded-4" src="{{ asset('img/about1.png') }}" alt="Lokasi Bank Sampah" style="max-height: 500px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature / Location End -->

    <!-- Team Start -->
    <div id="tim" class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <!-- Kiri: Judul & Deskripsi -->
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-eyebrow">Tim Kami</div>
                    <h1 class="mb-4" style="color: var(--dark);">Tim Profesional di Balik Start-Up Sampah</h1>
                    <p class="text-muted mb-4">
                        Didukung oleh tim yang berpengalaman di bidang logistik, manajemen lingkungan, dan distribusi untuk memberikan layanan terbaik bagi Anda.
                    </p>
                    <p class="text-muted mb-4">
                        Kami percaya bahwa pengelolaan sampah yang baik dimulai dari orang-orang yang peduli dan profesional.
                    </p>
                    <a class="btn btn-primary rounded-pill px-4 py-2" href="https://wa.me/6281360274339">
                        <i class="fas fa-user-plus me-2"></i>Bergabung Bersama Kami
                    </a>
                </div>

                <!-- Kanan: Grid Tim Zigzag -->
                <div class="col-lg-7">
                    <div class="row g-4">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.2s">
                                    <div class="team-item bg-white text-center rounded-4 p-4">
                                        <h5 class="mb-1">Muhammad Nadir</h5>
                                        <small class="text-primary fw-bold">Kepala Bank Sampah</small>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.4s">
                                    <div class="team-item bg-white text-center rounded-4 p-4">
                                        <h5 class="mb-1">Hendra</h5>
                                        <small class="text-primary fw-bold">Kepala Logistik</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kolom Kanan (Offset ke bawah) -->
                        <div class="col-md-6 pt-md-5">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded-4 p-4">
                                        <h5 class="mb-1">Samsul Bahri</h5>
                                        <small class="text-primary fw-bold">Distribusi Barang</small>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item bg-white text-center rounded-4 p-4">
                                        <h5 class="mb-1">Hidayat</h5>
                                        <small class="text-primary fw-bold">Pengepakan</small>
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

    <!-- CTA Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-primary rounded-4 p-5 text-center position-relative overflow-hidden wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-2) 100%) !important;">
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
                <div class="position-relative z-1">
                    <h1 class="display-5 text-white mb-3">Siap Bergabung dengan Kami?</h1>
                    <p class="text-white-50 mb-4 mx-auto" style="max-width: 600px;">
                        Jadilah bagian dari gerakan peduli lingkungan. Setor sampah Anda dan dapatkan manfaat ekonomisnya!
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="https://wa.me/6285215094145" class="btn btn-light rounded-pill px-5 py-3">
                            <i class="fab fa-whatsapp me-2"></i>Chat WhatsApp
                        </a>
                        <a href="{{ url('/fasilitas') }}" class="btn btn-outline-light rounded-pill px-5 py-3">
                            <i class="fas fa-building me-2"></i>Lihat Fasilitas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA End -->
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        // Counter Up Animation
        if ($('.counter').length) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        }
    });
</script>
@endpush