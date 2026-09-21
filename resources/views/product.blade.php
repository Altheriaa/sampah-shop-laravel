@extends('layouts.main')

@section('title', 'Produk Daur Ulang')
@section('keywords', 'produk daur ulang, paving block plastik, roster kaca, tegel kaca, GRC serat pisang abaca')
@section('description', 'Produk bahan bangunan hasil daur ulang sampah. Ramah lingkungan, tahan lama.')

{{-- ================================================================
     DATA PRODUK
     Semua kartu dibuat dari array ini. Untuk menambah / mengubah
     produk cukup edit di sini, tidak perlu menyalin blok HTML lagi.
     ================================================================ --}}
@php
    $waProduk = '6285215094145'; // nomor WhatsApp untuk pemesanan produk
    $waCustom = '6281360024335'; // nomor WhatsApp untuk konsultasi custom order

    $products = [
        [
            'name'       => 'Tegel Kaca Premium',
            'image'      => 'img/product/tegel.jpeg',
            'alt'        => 'Tegel dari Limbah Kaca',
            'category'   => 'kaca bangunan',   // pisahkan dengan spasi
            'label'      => 'Limbah Kaca',
            'badge'      => ['text' => 'Terbaru', 'icon' => 'fa-star', 'type' => 'new'],
            'desc'       => 'Tegel estetik dari limbah kaca daur ulang. Solusi cantik untuk lantai dan dinding hunian.',
            'features'   => ['Tahan Air', 'Anti Retak', 'Estetik'],
            'rating'     => 5.0,
            'reviews'    => 89,
            'price'      => 15000,
            'unit'       => 'buah',
            'specs'      => [],
        ],
        [
            'name'       => 'Roster Kaca Arsitektur',
            'image'      => 'img/product/roster.jpeg',
            'alt'        => 'Roster dari Limbah Kaca',
            'category'   => 'kaca bangunan',
            'label'      => 'Limbah Kaca',
            'badge'      => ['text' => 'Best Seller', 'icon' => 'fa-fire', 'type' => 'bestseller'],
            'desc'       => 'Roster ventilasi modern dari limbah kaca. Memberikan cahaya alami maksimal.',
            'features'   => ['Ventilasi Baik', 'Cahaya Alami', 'Modern'],
            'rating'     => 4.8,
            'reviews'    => 65,
            'price'      => 12500,
            'unit'       => 'buah',
            'specs'      => [],
        ],
        [
            'name'       => 'Paving Block Plastik',
            'image'      => 'img/product/paving.jpeg',
            'alt'        => 'Paving Block dari Limbah Plastik',
            'category'   => 'plastik bangunan',
            'label'      => 'Limbah Plastik',
            'badge'      => ['text' => 'Terbaru', 'icon' => 'fa-star', 'type' => 'new'],
            'desc'       => 'Paving block berkualitas dari limbah plastik. Kuat dan tahan lama untuk halaman.',
            'features'   => ['Kuat & Kokoh', 'Anti Slip', 'Tahan Cuaca'],
            'rating'     => 4.9,
            'reviews'    => 127,
            'price'      => 2000,
            'unit'       => 'buah',
            'specs'      => [],
        ],
        [
            'name'       => 'GRC dari Serat Pisang ABACA',
            'image'      => 'img/product/grc.jpeg',
            'alt'        => 'GRC dari Serat Pisang ABACA',
            'category'   => 'serat bangunan',
            'label'      => 'Serat Pisang ABACA',
            'badge'      => ['text' => 'Best Seller', 'icon' => 'fa-fire', 'type' => 'bestseller'],
            'desc'       => 'GRC modern dari serat pisang ABACA. Tampilan estetik, pemasangan lebih praktis dan cepat.',
            'features'   => ['Ventilasi Baik', 'Tahan Cuaca', 'Cepat & Hemat Biaya'],
            'rating'     => 4.8,
            'reviews'    => 65,
            'price'      => 130000,
            'unit'       => 'buah',
            'specs'      => ['Ukuran: 53 x 47 cm', 'Tebal: 4 cm'],
        ],
    ];
@endphp

@section('styles')
<style>
    /* ============ PRODUCT CARDS - ECO FRESH THEME ============ */

    /* Flex + justify-content:center => kartu di baris terakhir
       (mis. GRC) otomatis berada di tengah, juga saat difilter. */
    .product-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin-top: 40px;
    }

    .product-card {
        flex: 0 1 calc((100% - 60px) / 3); /* 3 kartu per baris */
        min-width: 300px;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(12, 43, 34, 0.08);
        transition: transform 0.4s ease, box-shadow 0.4s ease, border-color 0.4s ease;
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(14, 143, 111, 0.08);
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(14, 143, 111, 0.2);
        border-color: var(--primary);
    }

    /* Image */
    .product-img-wrap {
        position: relative;
        height: 240px;
        overflow: hidden;
        background: linear-gradient(135deg, #f0f9f6, #e6f7f2);
        flex-shrink: 0;
    }

    .product-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .product-card:hover .product-img-wrap img {
        transform: scale(1.1);
    }

    /* Badges */
    .product-badges {
        position: absolute;
        top: 15px;
        left: 15px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        z-index: 2;
    }

    .product-badge {
        background: linear-gradient(135deg, var(--primary), var(--primary-2));
        color: #fff;
        padding: 6px 12px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.5px;
        border-radius: 20px;
        box-shadow: 0 4px 12px rgba(14, 143, 111, 0.3);
        display: flex;
        align-items: center;
        gap: 5px;
        width: fit-content;
    }

    .product-badge.new {
        background: linear-gradient(135deg, var(--accent), #ffd95e);
        color: var(--dark);
    }

    .product-badge.bestseller {
        background: linear-gradient(135deg, #ef4444, #dc2626);
    }

    /* Wishlist */
    .wishlist-btn {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        z-index: 2;
        backdrop-filter: blur(10px);
    }

    .wishlist-btn:hover {
        background: #fff;
        transform: scale(1.1);
    }

    .wishlist-btn i {
        font-size: 18px;
        color: #71717A;
        transition: color 0.3s ease;
    }

    .wishlist-btn:hover i {
        color: #ef4444;
    }

    /* Info */
    .product-info {
        padding: 25px;
        display: flex;
        flex-direction: column;
        flex: 1; /* isi kartu mengisi tinggi yang sama */
    }

    .product-category {
        display: inline-block;
        align-self: flex-start;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--primary);
        margin-bottom: 8px;
        padding: 4px 10px;
        background: rgba(14, 143, 111, 0.08);
        border-radius: 20px;
    }

    .product-title {
        font-size: 20px;
        font-weight: 700;
        color: var(--dark);
        margin: 0 0 10px;
        font-family: 'Ubuntu', sans-serif;
        line-height: 1.3;
    }

    .product-desc {
        font-size: 14px;
        color: #6B8079;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    /* Features */
    .product-features {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 18px;
    }

    .product-feature {
        font-size: 11px;
        background: #f8faf9;
        color: #52525B;
        padding: 5px 10px;
        border-radius: 8px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 5px;
        border: 1px solid #e6f7f2;
    }

    .product-feature i {
        color: var(--primary);
        font-size: 10px;
    }

    /* Rating & stock */
    .product-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
        padding-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
        margin-bottom: 15px;
        margin-top: auto; /* dorong bagian bawah kartu agar sejajar */
    }

    .product-rating {
        display: flex;
        align-items: center;
        gap: 3px;
    }

    .product-rating i {
        color: #fbbf24;
        font-size: 13px;
    }

    .product-rating span {
        margin-left: 6px;
        font-size: 12px;
        color: #6B8079;
        font-weight: 600;
    }

    .product-stock {
        font-size: 12px;
        font-weight: 600;
        color: var(--primary);
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .product-stock .dot {
        width: 8px;
        height: 8px;
        background: var(--primary);
        border-radius: 50%;
        animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

    /* Price & button */
    .product-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
    }

    .product-price {
        display: flex;
        flex-direction: column;
    }

    .price-label {
        font-size: 11px;
        color: #999;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 2px;
    }

    .price-new {
        font-size: 22px;
        font-weight: 800;
        color: var(--dark);
        font-family: 'Ubuntu', sans-serif;
    }

    .price-unit {
        font-size: 12px;
        color: #999;
        font-weight: 500;
    }

    .price-spec {
        font-size: 12px;
        color: #6B8079;
        font-weight: 500;
        margin-top: 2px;
    }

    .btn-order {
        background: linear-gradient(135deg, var(--primary), var(--primary-2));
        color: #fff;
        border: none;
        border-radius: 12px;
        padding: 12px 20px;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(14, 143, 111, 0.3);
        text-decoration: none;
        white-space: nowrap;
    }

    .btn-order:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(14, 143, 111, 0.4);
        color: #fff;
    }

    .btn-order i {
        transition: transform 0.3s ease;
    }

    .btn-order:hover i {
        transform: rotate(-10deg) scale(1.1);
    }

    /* Category filter */
    .category-filter {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 30px;
    }

    .filter-btn {
        background: #fff;
        border: 2px solid #e6f7f2;
        color: var(--dark);
        padding: 10px 24px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: linear-gradient(135deg, var(--primary), var(--primary-2));
        border-color: var(--primary);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(14, 143, 111, 0.3);
    }

    .filter-btn i {
        font-size: 14px;
    }

    /* Value card */
    .value-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px 25px;
        text-align: center;
        transition: all 0.4s ease;
        border: 1px solid #e6f7f2;
        height: 100%;
    }

    .value-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(14, 143, 111, 0.15);
        border-color: var(--primary);
    }

    .value-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--primary), var(--primary-2));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: #fff;
        font-size: 28px;
        transition: all 0.4s ease;
    }

    .value-card:hover .value-icon {
        transform: rotateY(360deg);
    }

    /* Impact section */
    .impact-section {
        background: linear-gradient(135deg, #0C2B22 0%, #0E8F6F 100%);
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    .impact-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(255,255,255,.10) 1.4px, transparent 1.4px);
        background-size: 22px 22px;
        opacity: .5;
        pointer-events: none;
    }

    .impact-section > .container {
        position: relative;
        z-index: 1;
    }

    .impact-card {
        height: 100%;
        text-align: center;
        padding: 28px 20px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 16px;
        backdrop-filter: blur(6px);
        transition: transform 0.3s ease, background 0.3s ease;
    }

    .impact-card:hover {
        transform: translateY(-6px);
        background: rgba(255, 255, 255, 0.14);
    }

    .impact-card-icon {
        width: 60px;
        height: 60px;
        background: rgba(242, 183, 5, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        color: var(--accent);
        font-size: 24px;
    }

    .impact-card-title {
        color: #fff;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .impact-card-desc {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        margin: 0;
    }

    /* Process step */
    .process-step {
        position: relative;
        padding: 25px;
        background: #fff;
        border-radius: 16px;
        border-left: 4px solid var(--primary);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        height: 100%;
    }

    .process-step:hover {
        transform: translateX(5px);
        box-shadow: 0 10px 30px rgba(14, 143, 111, 0.15);
    }

    .process-number {
        position: absolute;
        top: -15px;
        left: 20px;
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--primary), var(--primary-2));
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 18px;
        box-shadow: 0 4px 15px rgba(14, 143, 111, 0.3);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .product-grid {
            gap: 20px;
        }

        .product-card {
            flex: 1 1 100%;
            min-width: 0;
        }

        .product-bottom {
            flex-direction: column;
            align-items: stretch;
            gap: 15px;
        }

        .btn-order {
            justify-content: center;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .product-card,
        .product-img-wrap img,
        .value-icon,
        .impact-card,
        .product-stock .dot {
            transition: none;
            animation: none;
        }
    }
</style>
@endsection

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-4 py-2 mb-3 animated slideInRight hero-badge">
                        <i class="fas fa-leaf me-2"></i>PRODUK DAUR ULANG
                    </div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight hero-title" style="line-height: 1.2;">
                        Produk Berkualitas<br>
                        dari <span class="accent-word">Sampah Bernilai</span>
                    </h1>
                    <p class="text-white-50 mb-4 animated slideInRight lead-text">
                        Setiap produk kami adalah hasil daur ulang dari sampah yang telah dipilah dan diolah dengan teknologi terbaik.
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start animated slideInRight flex-wrap">
                        <a href="#produk-kami" class="btn btn-light py-3 px-4 rounded-pill">
                            <i class="fas fa-shopping-bag me-2"></i>Lihat Produk
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center hero-float">
                    <img class="img-fluid animated fadeInRight" src="{{ asset('img/66.png') }}" alt="Produk Daur Ulang" style="max-height: 350px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Impact Section -->
    <div class="container-fluid impact-section py-5">
        <div class="container py-4">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="text-white mb-3">Komitmen Kami untuk Lingkungan</h2>
                <p class="text-white-50">Setiap produk yang Anda beli adalah kontribusi nyata untuk bumi yang lebih baik</p>
            </div>

            <div class="row g-4">
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="impact-card">
                        <div class="impact-card-icon"><i class="fas fa-recycle"></i></div>
                        <h5 class="impact-card-title">Daur Ulang</h5>
                        <p class="impact-card-desc">Mengolah sampah menjadi produk bernilai tinggi</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="impact-card">
                        <div class="impact-card-icon"><i class="fas fa-box-open"></i></div>
                        <h5 class="impact-card-title">Kualitas Premium</h5>
                        <p class="impact-card-desc">Produk tahan lama dengan standar tinggi</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="impact-card">
                        <div class="impact-card-icon"><i class="fas fa-users"></i></div>
                        <h5 class="impact-card-title">Memberdayakan</h5>
                        <p class="impact-card-desc">Mendukung ekonomi lokal dan komunitas</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="impact-card">
                        <div class="impact-card-icon"><i class="fas fa-tree"></i></div>
                        <h5 class="impact-card-title">Go Green</h5>
                        <p class="impact-card-desc">Mengurangi jejak karbon untuk masa depan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Impact Section End -->

    <!-- Value Proposition -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="about-eyebrow">Mengapa Pilih Kami</div>
                <h1 class="display-6 mb-3">Keunggulan Produk Daur Ulang Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="value-card">
                        <div class="value-icon"><i class="fas fa-leaf"></i></div>
                        <h5 class="mb-3">100% Ramah Lingkungan</h5>
                        <p class="mb-0 small text-muted">Terbuat dari bahan daur ulang, mengurangi sampah ke TPA.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="value-card">
                        <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
                        <h5 class="mb-3">Kualitas Terjamin</h5>
                        <p class="mb-0 small text-muted">Diolah dengan standar tinggi dan sudah teruji kualitasnya.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="value-card">
                        <div class="value-icon"><i class="fas fa-tag"></i></div>
                        <h5 class="mb-3">Harga Kompetitif</h5>
                        <p class="mb-0 small text-muted">Harga terjangkau dengan kualitas setara produk konvensional.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="value-card">
                        <div class="value-icon"><i class="fas fa-truck"></i></div>
                        <h5 class="mb-3">Pengiriman Cepat</h5>
                        <p class="mb-0 small text-muted">Layanan pengiriman ke seluruh Banda Aceh dengan aman.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Value Proposition End -->

    <!-- Products Section -->
    <div id="produk-kami" class="container-fluid container-service py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <div class="about-eyebrow">Katalog Produk</div>
                <h1 class="display-6 mb-3">Produk Unggulan Hasil Daur Ulang</h1>
            </div>

            <!-- Category Filter -->
            <div class="category-filter wow fadeInUp" data-wow-delay="0.2s">
                <button type="button" class="filter-btn active" data-category="all">
                    <i class="fas fa-th-large"></i>Semua Produk
                </button>
                <button type="button" class="filter-btn" data-category="kaca">
                    <i class="fas fa-wine-glass"></i>Bahan Kaca
                </button>
                <button type="button" class="filter-btn" data-category="plastik">
                    <i class="fas fa-wine-bottle"></i>Bahan Plastik
                </button>
                <button type="button" class="filter-btn" data-category="serat">
                    <i class="fas fa-seedling"></i>Serat Alam
                </button>
                <button type="button" class="filter-btn" data-category="bangunan">
                    <i class="fas fa-home"></i>Bahan Bangunan
                </button>
            </div>

            <!-- Product Grid -->
            <div class="product-grid">
                @foreach ($products as $i => $p)
                    @php
                        $waText  = rawurlencode('Halo, saya tertarik memesan ' . $p['name']);
                        $rounded = round($p['rating'] * 2) / 2; // bulatkan ke 0.5 terdekat
                    @endphp

                    <div class="product-card wow fadeInUp" data-wow-delay="{{ number_format(0.1 + ($i % 3) * 0.2, 1) }}s" data-category="{{ $p['category'] }}">
                        <div class="product-img-wrap">
                            <img src="{{ asset($p['image']) }}" alt="{{ $p['alt'] }}" loading="lazy">
                            <div class="product-badges">
                                <span class="product-badge"><i class="fas fa-leaf"></i>Eco-Friendly</span>
                                <span class="product-badge {{ $p['badge']['type'] }}">
                                    <i class="fas {{ $p['badge']['icon'] }}"></i>{{ $p['badge']['text'] }}
                                </span>
                            </div>
                            <button type="button" class="wishlist-btn" aria-label="Simpan {{ $p['name'] }} ke favorit">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>

                        <div class="product-info">
                            <span class="product-category">{{ $p['label'] }}</span>
                            <h3 class="product-title">{{ $p['name'] }}</h3>
                            <p class="product-desc">{{ $p['desc'] }}</p>

                            <div class="product-features">
                                @foreach ($p['features'] as $feature)
                                    <span class="product-feature"><i class="fas fa-check"></i>{{ $feature }}</span>
                                @endforeach
                            </div>

                            <div class="product-meta">
                                <div class="product-rating" aria-label="Rating {{ number_format($p['rating'], 1) }} dari 5">
                                    @for ($s = 1; $s <= 5; $s++)
                                        @if ($rounded >= $s)
                                            <i class="fas fa-star"></i>
                                        @elseif ($rounded >= $s - 0.5)
                                            <i class="fas fa-star-half-alt"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                    <span>{{ number_format($p['rating'], 1) }} ({{ $p['reviews'] }})</span>
                                </div>
                                <div class="product-stock"><span class="dot"></span>Stok Tersedia</div>
                            </div>

                            <div class="product-bottom">
                                <div class="product-price">
                                    <span class="price-label">Harga</span>
                                    <span class="price-new">Rp {{ number_format($p['price'], 0, ',', '.') }}<span class="price-unit">/{{ $p['unit'] }}</span></span>
                                    @foreach ($p['specs'] as $spec)
                                        <span class="price-spec">{{ $spec }}</span>
                                    @endforeach
                                </div>
                                <a href="https://wa.me/{{ $waProduk }}?text={{ $waText }}" target="_blank" rel="noopener" class="btn-order">
                                    <i class="fab fa-whatsapp"></i>Pesan
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Products Section End -->

    <!-- Process Section -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <div class="about-eyebrow">Proses Produksi</div>
                <h1 class="display-6 mb-3">Perjalanan Sampah Menjadi Produk Bernilai</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="process-step">
                        <div class="process-number">1</div>
                        <h5 class="mt-3 mb-2">Pengumpulan</h5>
                        <p class="mb-0 small text-muted">Sampah dikumpulkan dari nasabah dan dipilah berdasarkan jenisnya.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="process-step">
                        <div class="process-number">2</div>
                        <h5 class="mt-3 mb-2">Pemilahan & Pembersihan</h5>
                        <p class="mb-0 small text-muted">Sampah dipilah ulang, dicuci bersih, dan disiapkan untuk daur ulang.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="process-step">
                        <div class="process-number">3</div>
                        <h5 class="mt-3 mb-2">Pengolahan</h5>
                        <p class="mb-0 small text-muted">Sampah diolah dengan teknologi modern menjadi bahan baku berkualitas.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="process-step">
                        <div class="process-number">4</div>
                        <h5 class="mt-3 mb-2">Produksi & QC</h5>
                        <p class="mb-0 small text-muted">Produk jadi melewati quality control ketat sebelum sampai ke Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Section End -->

    <!-- CTA Custom Order -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-primary rounded-4 p-5 text-center position-relative overflow-hidden wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-2) 100%) !important;">
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px; pointer-events: none;"></div>
                <div class="position-relative" style="z-index: 1;">
                    <h1 class="display-5 text-white mb-3">Butuh Produk dengan Spesifikasi Khusus?</h1>
                    <p class="text-white-50 mb-4 mx-auto" style="max-width: 600px;">
                        Kami menerima pesanan khusus dengan ukuran, warna, dan desain sesuai kebutuhan proyek Anda.
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="https://wa.me/{{ $waCustom }}?text={{ rawurlencode('Halo, saya ingin konsultasi custom order') }}" target="_blank" rel="noopener" class="btn btn-light rounded-pill px-5 py-3">
                            <i class="fab fa-whatsapp me-2"></i>Konsultasi Sekarang
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
    $(document).ready(function () {
        // WOW.js (hapus baris ini jika sudah diinisialisasi di layouts/main.blade.php)
        new WOW().init();

        // ---------- Filter kategori ----------
        // Mencocokkan kata utuh, jadi "kaca" tidak salah cocok dengan kategori lain.
        function hasCategory($card, category) {
            var cats = ' ' + ($card.attr('data-category') || '') + ' ';
            return cats.indexOf(' ' + category + ' ') !== -1;
        }

        $('.filter-btn').on('click', function () {
            var category = $(this).data('category');

            $('.filter-btn').removeClass('active');
            $(this).addClass('active');

            var $cards = $('.product-card');

            // stop(true, true) mencegah animasi menumpuk jika tombol diklik cepat
            $cards.stop(true, true).fadeOut(200).promise().done(function () {
                if (category === 'all') {
                    $cards.fadeIn(400);
                } else {
                    $cards.filter(function () {
                        return hasCategory($(this), category);
                    }).fadeIn(400);
                }
            });
        });

        // ---------- Wishlist ----------
        $('.wishlist-btn').on('click', function (e) {
            e.preventDefault();
            var $icon = $(this).find('i');
            $icon.toggleClass('far fas').toggleClass('text-danger');

            $(this).css('background', $icon.hasClass('fas') ? '#fff0f0' : 'rgba(255, 255, 255, 0.95)');
        });
    });
</script>
@endpush