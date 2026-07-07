@extends('layouts.main')

@section('content')
        <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5 align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                    <!-- Badge dengan animasi pulse -->
                    <div class="btn btn-sm border rounded-pill text-white px-4 py-2 mb-4 animated slideInRight hero-badge position-relative">
                        <i class="fas fa-leaf me-2"></i>SELAMAT DATANG DI START-UP SAMPAH
                        <span class="position-absolute top-0 end-0">
                            <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-yellow-400 opacity-75"></span>
                        </span>
                    </div>
                    
                    <!-- Heading dengan highlight yang lebih compact -->
                    <h1 class="display-4 text-white mb-3 animated slideInRight hero-title" style="line-height: 1.1; font-size: 2.8rem;">
                        Ubah Sampah Jadi<br>
                        <span class="accent-word">Uang & Lingkungan</span><br>
                        Bersih
                    </h1>
                    
                    <!-- Quote yang lebih ringkas -->
                    <p class="text-white-50 mb-3 animated slideInRight lead-text fst-italic" style="font-size: 0.95rem;">
                        "Warisan Istimewa Untuk Generasi Berikutnya Adalah Lingkungan yang Lestari"
                    </p>
                    
                    <!-- Save Earth Tagline dengan badge -->
                    <div class="mb-4 animated slideInRight">
                        <span class="badge bg-white text-primary rounded-pill px-3 py-2">
                            <i class="fas fa-recycle me-2"></i>SAVE OUR EARTH
                        </span>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start mb-4 animated slideInRight flex-wrap">
                        <a href="#cara-kerja" class="btn btn-light py-3 px-5 rounded-pill shadow-lg">
                            <i class="fas fa-play-circle me-2"></i>Pelajari Cara Kerja
                        </a>
                        <a href="https://wa.me/+6281360274339" class="btn btn-outline-light py-3 px-5 rounded-pill">
                            <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                        </a>
                    </div>
                    
                    <!-- Statistics yang lebih compact -->
                    <div class="row g-3 animated slideInRight">
                        <div class="col-4">
                            <div class="text-center p-2">
                                <div class="h4 fw-bold text-white mb-0">
                                    <span class="counter" data-target="500">0</span>+
                                </div>
                                <small class="text-white-50 d-block" style="font-size: 0.75rem;">Nasabah Aktif</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center p-2 border-start border-white-50">
                                <div class="h4 fw-bold text-white mb-0">
                                    <span class="counter" data-target="10">0</span>
                                </div>
                                <small class="text-white-50 d-block" style="font-size: 0.75rem;">Ton/Bulan</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center p-2 border-start border-white-50">
                                <div class="h4 fw-bold text-white mb-0">
                                    Rp<span class="counter" data-target="50">0</span>Jt
                                </div>
                                <small class="text-white-50 d-block" style="font-size: 0.75rem;">Uang Beredar</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Images dengan positioning yang lebih baik -->
                <div class="col-lg-6">
                    <div class="hero-float position-relative animated fadeInRight" style="min-height: 400px;">
                        
                        <!-- Main Image - Positioned lebih tinggi -->
                        <div class="position-relative" style="z-index: 2;">
                            <img class="img-fluid rounded-4 shadow-lg" 
                                src="img/66.png" 
                                alt="Waste Management" 
                                style="max-height: 320px; filter: drop-shadow(0 20px 30px rgba(0,0,0,0.3)); animation: float 6s ease-in-out infinite;">
                        </div>
                        
                        <!-- Secondary Image - Overlap yang lebih baik -->
                        <div class="position-absolute" style="bottom: 20px; left: -20px; z-index: 3;">
                            <img class="img-fluid rounded-4 shadow" 
                                src="img/TES23-.png" 
                                alt="Recycling Process" 
                                style="max-height: 180px; filter: drop-shadow(0 15px 25px rgba(0,0,0,0.2)); animation: float 6s ease-in-out infinite; animation-delay: 1s;">
                        </div>

                        <!-- Floating Step Badges - Positioned lebih strategis -->
                        <div class="position-absolute" style="top: 10px; right: 10px; z-index: 4;">
                            <div class="hero-steps d-flex flex-column gap-2">
                                <span class="step-pill shadow-sm">
                                    <i class="fas fa-mouse-pointer"></i> 
                                    <span class="d-none d-md-inline">Click</span>
                                </span>
                                <span class="step-pill shadow-sm">
                                    <i class="fas fa-truck"></i> 
                                    <span class="d-none d-md-inline">Jemput</span>
                                </span>
                                <span class="step-pill shadow-sm">
                                    <i class="fas fa-balance-scale"></i> 
                                    <span class="d-none d-md-inline">Timbang</span>
                                </span>
                                <span class="step-pill shadow-sm">
                                    <i class="fas fa-coins"></i> 
                                    <span class="d-none d-md-inline">Dapat Uang</span>
                                </span>
                            </div>
                        </div>

                        <!-- Floating Elements - Icons yang bergerak -->
                        <div class="position-absolute" style="top: 50px; left: -30px; z-index: 1; animation: float 5s ease-in-out infinite; animation-delay: 0.5s;">
                            <div class="bg-white rounded-circle p-3 shadow-lg">
                                <i class="fas fa-recycle fa-2x text-primary"></i>
                            </div>
                        </div>

                        <div class="position-absolute" style="top: 150px; right: -20px; z-index: 1; animation: float 5s ease-in-out infinite; animation-delay: 1.5s;">
                            <div class="bg-warning rounded-circle p-3 shadow-lg">
                                <i class="fas fa-coins fa-2x text-white"></i>
                            </div>
                        </div>

                        <div class="position-absolute" style="bottom: 100px; left: 50px; z-index: 1; animation: float 5s ease-in-out infinite; animation-delay: 2s;">
                            <div class="bg-success rounded-circle p-3 shadow-lg">
                                <i class="fas fa-leaf fa-2x text-white"></i>
                            </div>
                        </div>

                        <!-- Price Tag Floating Card -->
                        <div class="position-absolute" style="bottom: 80px; right: -10px; z-index: 5; animation: float 4s ease-in-out infinite; animation-delay: 0.8s;">
                            <div class="bg-white rounded-3 p-3 shadow-lg" style="min-width: 150px;">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-primary rounded-circle p-2">
                                        <i class="fas fa-tag text-white"></i>
                                    </div>
                                    <div>
                                        <small class="d-block text-muted" style="font-size: 0.7rem;">Harga Plastik</small>
                                        <strong class="text-dark">Rp 2.500/kg</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative blur elements -->
                        <div class="position-absolute top-0 end-0 w-100 h-100" style="z-index: 0;">
                            <div class="position-absolute" style="top: 20%; right: 20%; width: 120px; height: 120px; background: rgba(242,183,5,0.3); border-radius: 50%; filter: blur(50px); animation: pulse 4s ease-in-out infinite;"></div>
                            <div class="position-absolute" style="bottom: 30%; right: 10%; width: 180px; height: 180px; background: rgba(20,184,166,0.25); border-radius: 50%; filter: blur(60px); animation: pulse 4s ease-in-out infinite; animation-delay: 1s;"></div>
                            <div class="position-absolute" style="top: 60%; left: 10%; width: 100px; height: 100px; background: rgba(14,143,111,0.2); border-radius: 50%; filter: blur(40px); animation: pulse 4s ease-in-out infinite; animation-delay: 2s;"></div>
                        </div>
                    </div>
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
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3 text-white"
                            placeholder="Ketik kata kunci pencarian...">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Cara Kerja Section Start -->
    <div id="cara-kerja" class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="about-eyebrow">Cara Kerja</div>
                <h1 class="display-6 mb-3">4 Langkah Mudah Ubah Sampah Jadi Uang</h1>
                <p class="mb-5">Proses yang sederhana dan cepat untuk membantu Anda mendapatkan nilai ekonomis dari sampah yang ada di rumah.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-mobile-alt fa-2x"></i>
                        </div>
                        <h5 class="mb-3">1. Pesan Via App</h5>
                        <p class="mb-0">Download aplikasi atau akses website, pilih jenis sampah yang ingin dijual, dan jadwalkan penjemputan.</p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-truck-loading fa-2x"></i>
                        </div>
                        <h5 class="mb-3">2. Jemput Gratis</h5>
                        <p class="mb-0">Tim kami akan datang ke lokasi Anda sesuai jadwal yang ditentukan untuk mengambil sampah.</p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-weight-hanging fa-2x"></i>
                        </div>
                        <h5 class="mb-3">3. Timbang & Sortir</h5>
                        <p class="mb-0">Sampah ditimbang dan dipilah di depan Anda dengan transparan. Harga sesuai berat dan jenis.</p>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center">
                        <div class="icon-box mx-auto mb-3">
                            <i class="fas fa-wallet fa-2x"></i>
                        </div>
                        <h5 class="mb-3">4. Dapat Uang</h5>
                        <p class="mb-0">Pembayaran langsung via transfer, e-wallet, atau tunai. Saldo bisa ditarik kapan saja.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cara Kerja Section End -->

    <!-- About Start -->
    <div class="container py-5" id="about-section">
        <div class="row g-5 align-items-center">
            <!-- Left: Visual dengan Enhanced Elements -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative" style="min-height: 450px;">
                    <!-- Main Image - Centered -->
                    <div class="position-relative h-100 d-flex align-items-center justify-content-center">
                        <img class="img-fluid rounded-4 shadow-lg" 
                            src="img/home_2-removebg-preview.png" 
                            alt="Tentang Bank Sampah"
                            style="max-height: 450px; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.15)); z-index: 1;">
                    </div>
                    
                    <!-- Decorative border - Lebih subtle -->
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded-4" 
                        style="border: 2px dashed var(--primary); transform: translate(-10px, -10px); z-index: 0; opacity: 0.5;">
                    </div>
                    
                    <!-- Floating Badge - Verified (Positioned lebih dalam) -->
                    <div class="position-absolute top-0 start-0 bg-white rounded-3 p-3 shadow-lg" 
                        style="transform: translate(10px, 10px); z-index: 3; max-width: 200px; animation: float 4s ease-in-out infinite;">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-success rounded-circle p-2 flex-shrink-0" style="width: 36px; height: 36px;">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div>
                                <small class="d-block text-muted" style="font-size: 0.65rem; line-height: 1.2;">Terverifikasi</small>
                                <strong class="text-dark" style="font-size: 0.8rem; line-height: 1.2;">Bank Sampah Resmi</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge - Impact Stats (Positioned lebih dalam) -->
                    <div class="position-absolute bottom-0 end-0 bg-white rounded-3 p-3 shadow-lg" 
                        style="transform: translate(-10px, -10px); z-index: 3; max-width: 220px; animation: float 4s ease-in-out infinite; animation-delay: 1s;">
                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-primary rounded-circle p-2 flex-shrink-0" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-award text-white" style="font-size: 1rem;"></i>
                            </div>
                            <div>
                                <small class="d-block text-muted" style="font-size: 0.65rem;">Dampak Positif</small>
                                <strong class="text-dark d-block" style="font-size: 0.85rem;">500+ Keluarga</strong>
                                <small class="text-success d-block" style="font-size: 0.75rem;">
                                    <i class="fas fa-arrow-up me-1"></i>Rp 50 Jt+ Beredar
                                </small>
                            </div>
                        </div>
                    </div>

                    <!-- Small Floating Elements (Lebih subtle) -->
                    <div class="position-absolute d-none d-lg-block" 
                        style="top: 20%; left: 0px; z-index: 2; animation: float 5s ease-in-out infinite; animation-delay: 0.5s;">
                        <div class="bg-white rounded-circle p-2 shadow" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-recycle text-primary"></i>
                        </div>
                    </div>

                    <div class="position-absolute d-none d-lg-block" 
                        style="bottom: 25%; right: 0px; z-index: 2; animation: float 5s ease-in-out infinite; animation-delay: 1.5s;">
                        <div class="bg-warning rounded-circle p-2 shadow" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-hand-holding-usd text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <!-- Eyebrow dengan icon -->
                <div class="about-eyebrow d-inline-flex align-items-center gap-2 mb-3">
                    <i class="fas fa-info-circle"></i>
                    <span>Mengapa Ini Penting</span>
                </div>

                <!-- Headline -->
                <h1 class="mb-4 display-6" style="line-height: 1.3;">
                    Dari Sampah Rumah Tangga,<br>
                    <span class="text-primary">Jadi Penghasilan Nyata</span>
                </h1>

                <!-- Problem Statement -->
                <div class="alert alert-light border-start border-4 border-warning mb-4" role="alert">
                    <div class="d-flex gap-3">
                        <i class="fas fa-exclamation-triangle text-warning mt-1"></i>
                        <div>
                            <strong class="d-block mb-1">Tahukah Anda?</strong>
                            <small class="text-muted">
                                Rata-rata keluarga menghasilkan <strong>2-3 kg sampah per hari</strong>. 
                                Daripada menumpuk, mari ubah jadi rupiah!
                            </small>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <p class="mb-4 text-muted">
                    <strong>Start-Up Sampah</strong> adalah partner Anda dalam menciptakan lingkungan bersih 
                    sambil menghasilkan pendapatan tambahan. Setiap kilogram sampah Anda bernilai.
                </p>

                <!-- Value Cards -->
                <div class="row g-3 mb-4">
                    <div class="col-6">
                        <div class="value-card p-3 rounded-3 bg-white shadow-sm h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="icon-box flex-shrink-0">
                                    <i class="fas fa-leaf text-success"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold" style="font-size: 0.9rem;">Lingkungan Bersih</h6>
                                    <small class="text-muted d-block" style="font-size: 0.75rem;">Rumah bebas bau & sampah</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="value-card p-3 rounded-3 bg-white shadow-sm h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="icon-box flex-shrink-0">
                                    <i class="fas fa-wallet text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold" style="font-size: 0.9rem;">Penghasilan Rutin</h6>
                                    <small class="text-muted d-block" style="font-size: 0.75rem;">Uang dari sampah bulanan</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="value-card p-3 rounded-3 bg-white shadow-sm h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="icon-box flex-shrink-0">
                                    <i class="fas fa-heartbeat text-danger"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold" style="font-size: 0.9rem;">Keluarga Sehat</h6>
                                    <small class="text-muted d-block" style="font-size: 0.75rem;">Hindari penyakit</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="value-card p-3 rounded-3 bg-white shadow-sm h-100">
                            <div class="d-flex align-items-start gap-3">
                                <div class="icon-box flex-shrink-0">
                                    <i class="fas fa-recycle text-info"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold" style="font-size: 0.9rem;">Daur Ulang</h6>
                                    <small class="text-muted d-block" style="font-size: 0.75rem;">Sampah bernilai</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <a class="btn btn-primary rounded-pill px-4 py-3" href="#cara-kerja">
                        <i class="fas fa-play-circle me-2"></i>Lihat Cara Kerja
                    </a>
                    <a class="btn btn-outline-primary rounded-pill px-4 py-3" href="https://wa.me/+6281360274339">
                        <i class="fab fa-whatsapp me-2"></i>Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features/Why Choose Us Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-eyebrow">Keunggulan Kami</div>
                    <h1 class="mb-4">Mengapa Memilih Start-Up Sampah?</h1>
                    <p class="mb-4">Kami tidak hanya mengumpulkan sampah, tapi memberikan nilai lebih untuk setiap kilogram sampah yang Anda setorkan.</p>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 btn-lg-square bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1">Harga Kompetitif & Transparan</h5>
                            <p class="mb-0 text-muted">Harga terupdate sesuai pasar, tanpa potongan tersembunyi.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 btn-lg-square bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1">Jadwal Fleksibel</h5>
                            <p class="mb-0 text-muted">Jemput sesuai waktu yang Anda tentukan, bahkan di akhir pekan.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0 btn-lg-square bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1">Ramah Lingkungan</h5>
                            <p class="mb-0 text-muted">100% sampah didaur ulang, tidak ada yang ke TPA.</p>
                        </div>
                    </div>

                    <a href="https://wa.me/+6281360274339" class="btn btn-primary rounded-pill px-4 mt-2">
                        <i class="fab fa-whatsapp me-2"></i>Mulai Sekarang
                    </a>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="service-item text-center p-4">
                                <div class="icon-box mx-auto mb-3">
                                    <i class="fas fa-bolt fa-2x"></i>
                                </div>
                                <h5 class="mb-2">Proses Cepat</h5>
                                <p class="mb-0 small text-muted">Penjemputan dalam 24 jam setelah pemesanan</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-item text-center p-4">
                                <div class="icon-box mx-auto mb-3">
                                    <i class="fas fa-shield-alt fa-2x"></i>
                                </div>
                                <h5 class="mb-2">Aman & Terpercaya</h5>
                                <p class="mb-0 small text-muted">Tim profesional dan terlatih</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-item text-center p-4">
                                <div class="icon-box mx-auto mb-3">
                                    <i class="fas fa-mobile-alt fa-2x"></i>
                                </div>
                                <h5 class="mb-2">Mudah Dipantau</h5>
                                <p class="mb-0 small text-muted">Tracking real-time via aplikasi</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-item text-center p-4">
                                <div class="icon-box mx-auto mb-3">
                                    <i class="fas fa-gift fa-2x"></i>
                                </div>
                                <h5 class="mb-2">Bonus & Reward</h5>
                                <p class="mb-0 small text-muted">Poin untuk setiap setoran sampah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features/Why Choose Us End -->

    <!-- CTA Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-primary rounded-4 p-5 text-center position-relative overflow-hidden wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-2) 100%) !important;">
                <!-- Background Pattern -->
                <div class="position-absolute top-0 start-0 w-100 h-100" 
                     style="background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;">
                </div>
                
                <div class="position-relative z-1">
                    <h1 class="display-5 text-white mb-3">Siap Ubah Sampah Jadi Uang?</h1>
                    <p class="text-white-50 mb-4 mx-auto" style="max-width: 600px;">
                        Bergabunglah dengan 500+ nasabah kami dan mulai dapatkan penghasilan tambahan 
                        dari sampah rumah tangga Anda. Gratis pendaftaran!
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="https://wa.me/+6281360274339" class="btn btn-light rounded-pill px-5 py-3">
                            <i class="fab fa-whatsapp me-2"></i>Chat WhatsApp
                        </a>
                        <a href="#cara-kerja" class="btn btn-outline-light rounded-pill px-5 py-3">
                            <i class="fas fa-info-circle me-2"></i>Lihat Cara Kerja
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

    <!-- Counter Animation Script -->
    <script>
        $(document).ready(function(){
            // Initialize WOW.js
            new WOW().init();
            
            // Counter Animation
            var counters = document.querySelectorAll('.counter');
            var speed = 200;
            
            var counterUp = function() {
                counters.forEach(counter => {
                    var target = +counter.getAttribute('data-target');
                    var count = +counter.innerText;
                    var inc = target / speed;
                    
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(counterUp, 20);
                    } else {
                        counter.innerText = target;
                    }
                });
            };
            
            // Trigger counter when in viewport
            var counted = 0;
            $(window).on('scroll', function() {
                var oTop = $('.counter').offset().top - window.innerHeight;
                if (counted == 0 && $(window).scrollTop() > oTop) {
                    counterUp();
                    counted = 1;
                }
            });
        });
    </script>

    <!-- Floating WhatsApp Button Start -->
    <div class="wa-float-container">
        <!-- Tooltip -->
        <div class="wa-tooltip">
            <span>Chat dengan kami via WhatsApp!</span>
            <div class="wa-tooltip-arrow"></div>
        </div>
        
        <!-- Main Button -->
        <a href="https://wa.me/6281360274339?text=Halo%20Start-Up%20Sampah,%20saya%20ingin%20bertanya%20tentang%20layanan%20pengelolaan%20sampah." 
        class="wa-float-btn" 
        target="_blank" 
        rel="noopener noreferrer"
        aria-label="Chat WhatsApp">
            
            <!-- Pulse Ring Animation -->
            <span class="wa-pulse-ring"></span>
            <span class="wa-pulse-ring wa-pulse-ring-2"></span>
            
            <!-- WhatsApp Icon -->
            <i class="fab fa-whatsapp"></i>
            
            <!-- Online Badge -->
            <span class="wa-online-badge">
                <span class="wa-online-dot"></span>
            </span>
        </a>
    </div>
    <!-- Floating WhatsApp Button End -->

    <script>
    // Floating WhatsApp - Show/Hide on Scroll
    (function() {
        const waBtn = document.querySelector('.wa-float-container');
        let lastScroll = 0;
        let scrollThreshold = 300;
        
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > scrollThreshold) {
                if (currentScroll > lastScroll) {
                    // Scrolling down - hide
                    waBtn.style.transform = 'translateY(150%)';
                    waBtn.style.transition = 'transform 0.3s ease';
                } else {
                    // Scrolling up - show
                    waBtn.style.transform = 'translateY(0)';
                }
            } else {
                // At top - always show
                waBtn.style.transform = 'translateY(0)';
            }
            
            lastScroll = currentScroll;
        });
    })();
    </script>
@endsection
