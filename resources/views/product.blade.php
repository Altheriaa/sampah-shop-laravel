@extends('layouts.main')

@section('title', 'Produk Daur Ulang')
@section('keywords', 'produk daur ulang, paving block plastik, roster kaca, tegel kaca')
@section('description', 'Produk bahan bangunan hasil daur ulang sampah. Ramah lingkungan, tahan lama.')

@section('styles')
<style>
    /* ============ PRODUCT CARDS - ECO FRESH THEME ============ */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .product-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(12, 43, 34, 0.08);
        transition: all 0.4s ease;
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(14, 143, 111, 0.08);
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(14, 143, 111, 0.2);
        border-color: var(--primary);
    }

    /* Image Container */
    .product-img-wrap {
        position: relative;
        height: 240px;
        overflow: hidden;
        background: linear-gradient(135deg, #f0f9f6, #e6f7f2);
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
    }

    .product-badge.new {
        background: linear-gradient(135deg, var(--accent), #ffd95e);
        color: var(--dark);
    }

    .product-badge.bestseller {
        background: linear-gradient(135deg, #ef4444, #dc2626);
    }

    /* Wishlist Button */
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
        color: #ef4444;
    }

    .wishlist-btn i {
        font-size: 18px;
        color: #71717A;
        transition: color 0.3s ease;
    }

    .wishlist-btn:hover i {
        color: #ef4444;
    }

    /* Product Info */
    .product-info {
        padding: 25px;
    }

    .product-category {
        display: inline-block;
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

    /* Rating & Stock */
    .product-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
        margin-bottom: 15px;
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

    /* Price & Button */
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

    /* Category Filter */
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

    /* Value Card */
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

    /* Impact Section */
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
    }

    .impact-stat {
        text-align: center;
        padding: 20px;
        position: relative;
        z-index: 1;
    }

    .impact-number {
        font-size: 3rem;
        font-weight: 800;
        color: var(--accent);
        font-family: 'Ubuntu', sans-serif;
        margin-bottom: 8px;
        line-height: 1;
    }

    .impact-label {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.85);
        font-weight: 600;
    }

    .impact-icon {
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

    /* Process Step */
    .process-step {
        position: relative;
        padding: 25px;
        background: #fff;
        border-radius: 16px;
        border-left: 4px solid var(--primary);
        box-shadow: 0 6px 20px rgba(0,0,0,0.05);
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
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .impact-number {
            font-size: 2.2rem;
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

    <!-- Impact Counter Section -->
    <div class="container-fluid impact-section py-5">
        <div class="container py-4">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="text-white mb-3">Komitmen Kami untuk Lingkungan</h2>
                <p class="text-white-50">Setiap produk yang Anda beli adalah kontribusi nyata untuk bumi yang lebih baik</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="impact-card">
                        <div class="impact-card-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <h5 class="impact-card-title">Daur Ulang</h5>
                        <p class="impact-card-desc">Mengolah sampah menjadi produk bernilai tinggi</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="impact-card">
                        <div class="impact-card-icon">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <h5 class="impact-card-title">Kualitas Premium</h5>
                        <p class="impact-card-desc">Produk tahan lama dengan standar tinggi</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="impact-card">
                        <div class="impact-card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="impact-card-title">Memberdayakan</h5>
                        <p class="impact-card-desc">Mendukung ekonomi lokal dan komunitas</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="impact-card">
                        <div class="impact-card-icon">
                            <i class="fas fa-tree"></i>
                        </div>
                        <h5 class="impact-card-title">Go Green</h5>
                        <p class="impact-card-desc">Mengurangi jejak karbon untuk masa depan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Impact Counter End -->

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
                <button class="filter-btn active" data-category="all">
                    <i class="fas fa-th-large"></i>Semua Produk
                </button>
                <button class="filter-btn" data-category="kaca">
                    <i class="fas fa-wine-glass"></i>Bahan Kaca
                </button>
                <button class="filter-btn" data-category="plastik">
                    <i class="fas fa-wine-bottle"></i>Bahan Plastik
                </button>
                <button class="filter-btn" data-category="bangunan">
                    <i class="fas fa-home"></i>Bahan Bangunan
                </button>
            </div>

            <!-- Product Grid -->
            <div class="product-grid">
                <!-- Product 1 - Tegel -->
                <div class="product-card wow fadeInUp" data-wow-delay="0.1s" data-category="kaca bangunan">
                    <div class="product-img-wrap">
                        <img src="{{ asset('img/product/tegel.jpeg') }}" alt="Tegel dari Limbah Kaca">
                        <div class="product-badges">
                            <span class="product-badge"><i class="fas fa-leaf"></i>Eco-Friendly</span>
                            <span class="product-badge bestseller"><i class="fas fa-fire"></i>Terbaru</span>
                        </div>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Limbah Kaca</span>
                        <h3 class="product-title">Tegel Kaca Premium</h3>
                        <p class="product-desc">Tegel estetik dari limbah kaca daur ulang. Solusi cantik pengganti pasir alam.</p>
                        <div class="product-features">
                            <span class="product-feature"><i class="fas fa-check"></i>Tahan Air</span>
                            <span class="product-feature"><i class="fas fa-check"></i>Anti Retak</span>
                            <span class="product-feature"><i class="fas fa-check"></i>Estetik</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>5.0 (89)</span>
                            </div>
                            <div class="product-stock"><span class="dot"></span>Stok Tersedia</div>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="price-label">Harga</span>
                                <span class="price-new">Rp 15.000<span class="price-unit">/buah</span></span>
                            </div>
                            <a href="https://wa.me/6285215094145?text=Halo,%20saya%20tertarik%20memesan%20Tegel%20Kaca" target="_blank" class="btn-order">
                                <i class="fab fa-whatsapp"></i>Pesan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 - Roster -->
                <div class="product-card wow fadeInUp" data-wow-delay="0.3s" data-category="kaca bangunan">
                    <div class="product-img-wrap">
                        <img src="{{ asset('img/product/roster.jpeg') }}" alt="Roster dari Limbah Kaca">
                        <div class="product-badges">
                            <span class="product-badge"><i class="fas fa-leaf"></i>Eco-Friendly</span>
                            <span class="product-badge bestseller"><i class="fas fa-fire"></i>Best Seller</span>
                        </div>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Limbah Kaca</span>
                        <h3 class="product-title">Roster Kaca Arsitektur</h3>
                        <p class="product-desc">Roster ventilasi modern dari limbah kaca. Memberikan cahaya alami maksimal.</p>
                        <div class="product-features">
                            <span class="product-feature"><i class="fas fa-check"></i>Ventilasi Baik</span>
                            <span class="product-feature"><i class="fas fa-check"></i>Cahaya Alami</span>
                            <span class="product-feature"><i class="fas fa-check"></i>Modern</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.8 (65)</span>
                            </div>
                            <div class="product-stock"><span class="dot"></span>Stok Tersedia</div>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="price-label">Harga</span>
                                <span class="price-new">Rp 12.500<span class="price-unit">/buah</span></span>
                            </div>
                            <a href="https://wa.me/6285215094145?text=Halo,%20saya%20tertarik%20memesan%20Paving%20Block" target="_blank" class="btn-order">
                                <i class="fab fa-whatsapp"></i>Pesan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 - Paving Block -->
                <div class="product-card wow fadeInUp" data-wow-delay="0.5s" data-category="plastik bangunan">
                    <div class="product-img-wrap">
                        <img src="{{ asset('img/product/paving.jpeg') }}" alt="Paving Block dari Limbah Plastik">
                        <div class="product-badges">
                            <span class="product-badge"><i class="fas fa-leaf"></i>Eco-Friendly</span>
                            <span class="product-badge bestseller"><i class="fas fa-star"></i>Terbaru</span>
                        </div>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Limbah Plastik</span>
                        <h3 class="product-title">Paving Block Plastik</h3>
                        <p class="product-desc">Paving block berkualitas dari limbah plastik. Kuat, tahan lama untuk halaman.</p>
                        <div class="product-features">
                            <span class="product-feature"><i class="fas fa-check"></i>Kuat & Kokoh</span>
                            <span class="product-feature"><i class="fas fa-check"></i>Anti Slip</span>
                            <span class="product-feature"><i class="fas fa-check"></i>Tahan Cuaca</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>4.9 (127)</span>
                            </div>
                            <div class="product-stock"><span class="dot"></span>Stok Tersedia</div>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="price-label">Harga</span>
                                <span class="price-new">Rp 2.000<span class="price-unit">/buah</span></span>
                            </div>
                            <a href="https://wa.me/6285215094145?text=Halo,%20saya%20tertarik%20memesan%20Paving%20Block" target="_blank" class="btn-order">
                                <i class="fab fa-whatsapp"></i>Pesan
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Product 4 - GRC serat pisang abca -->
                <div class="product-card wow fadeInUp" data-wow-delay="0.3s" data-category="serat bangunan">
                    <div class="product-img-wrap">
                        <img src="{{ asset('img/product/grc.jpeg') }}" alt="GRC dari Serat Pisang ABCA">
                        <div class="product-badges">
                            <span class="product-badge"><i class="fas fa-leaf"></i>Eco-Friendly</span>
                            <span class="product-badge bestseller"><i class="fas fa-fire"></i>Best Seller</span>
                        </div>
                        <button class="wishlist-btn"><i class="far fa-heart"></i></button>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Serat Pisang ABCA</span>
                        <h3 class="product-title">GRC dari Serat Pisang ABCA</h3>
                        <p class="product-desc">GRC modern dari serat pisang ABCA. Memberikan kesan estetika dan pemasangan lebih praktis dan cepat.</p>
                        <div class="product-features">
                            <span class="product-feature"><i class="fas fa-check"></i>Ventilasi Baik</span>
                            <span class="product-feature"><i class="fas fa-check"></i>Tahan Cuaca</span>
                            <span class="product-feature"><i class="fas fa-check"></i>Cepat & Hemat Biaya</span>
                        </div>
                        <div class="product-meta">
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.8 (65)</span>
                            </div>
                            <div class="product-stock"><span class="dot"></span>Stok Tersedia</div>
                        </div>
                        <div class="product-bottom">
                            <div class="product-price">
                                <span class="price-label">Harga</span>
                                <span class="price-new">Rp 150.000<span class="price-unit">/buah</span></span>
                                <span class="size-0">Ukuran: 53x47cm</span>
                                <span class="thick-0">Ketebalan: 4cm</span>
                            </div>
                            <a href="https://wa.me/6285215094145?text=Halo,%20saya%20tertarik%20memesan%20GRC%20dari%20Serat%20Pisang%20ABCA" target="_blank" class="btn-order">
                                <i class="fab fa-whatsapp"></i>Pesan
                            </a>
                        </div>
                    </div>
                </div>
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
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
                <div class="position-relative" style="z-index: 1;">
                    <h1 class="display-5 text-white mb-3">Butuh Produk dengan Spesifikasi Khusus?</h1>
                    <p class="text-white-50 mb-4 mx-auto" style="max-width: 600px;">
                        Kami menerima pesanan khusus dengan ukuran, warna, dan desain sesuai kebutuhan proyek Anda.
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="https://wa.me/6281360024335?text=Halo,%20saya%20ingin%20konsultasi%20custom%20order" class="btn btn-light rounded-pill px-5 py-3">
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
    $(document).ready(function(){
        // Initialize WOW.js
        new WOW().init();

        // Category Filter
        $('.filter-btn').on('click', function(){
            const category = $(this).data('category');
            
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            
            if(category === 'all') {
                $('.product-card').fadeIn(400);
            } else {
                $('.product-card').fadeOut(200);
                setTimeout(() => {
                    $(`.product-card[data-category*="${category}"]`).fadeIn(400);
                }, 200);
            }
        });

        // Wishlist Toggle
        $('.wishlist-btn').on('click', function(e){
            e.preventDefault();
            const icon = $(this).find('i');
            icon.toggleClass('far fas').toggleClass('text-danger');
            
            if(icon.hasClass('fas')) {
                $(this).css('background', '#fff0f0');
            } else {
                $(this).css('background', 'rgba(255, 255, 255, 0.95)');
            }
        });

        // Counter Animation
        var counted = 0;
        $(window).on('scroll', function() {
            if (counted === 0 && $('.impact-section').length) {
                var oTop = $('.impact-section').offset().top - window.innerHeight;
                if ($(window).scrollTop() > oTop) {
                    $('.counter').each(function() {
                        var $this = $(this);
                        var countTo = $this.attr('data-target');
                        $({ countNum: $this.text() }).animate({
                            countNum: countTo
                        }, {
                            duration: 2000,
                            easing: 'linear',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                            }
                        });
                    });
                    counted = 1;
                }
            }
        });
    });
</script>
@endpush