@extends('layouts.main')

@section('styles')
    <style>
        .card {
            width: 360px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .1);
            transition: .3s;
            font-family: 'Segoe UI', sans-serif;
            margin: 20px;
            overflow: hidden;
            position: relative;
            cursor: pointer
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, .15)
        }

        .tilt {
            overflow: hidden
        }

        .img {
            height: 200px;
            overflow: hidden
        }

        .img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s
        }

        .card:hover .img img {
            transform: scale(1.05)
        }

        .info {
            padding: 20px
        }

        .title {
            font-size: 18px;
            font-weight: 700;
            color: #18181B;
            margin: 0 0 10px;
            letter-spacing: -.5px
        }

        .desc {
            font-size: 13px;
            color: #52525B;
            line-height: 1.4;
            margin-bottom: 12px
        }

        .bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px
        }

        .price {
            display: flex;
            flex-direction: column
        }

        .new {
            font-size: 20px;
            font-weight: 700;
            color: #18181B
        }

        .btn-pesan {
            background: linear-gradient(45deg, #18181B, #27272A);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 8px 15px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: .3s;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .1);
            text-decoration: none;
        }

        .btn-pesan:hover {
            background: linear-gradient(45deg, #27272A, #3F3F46);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
            color: #fff;
        }

        .meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #F4F4F5;
            padding-top: 12px
        }

        .stock {
            font-size: 11px;
            font-weight: 600;
            color: #22C55E
        }

        @media (max-width:400px) {
            .card {
                width: 90%
            }

            .title {
                font-size: 16px
            }

            .img {
                height: 180px
            }

            .bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px
            }

            .price {
                margin-bottom: 5px
            }

            .btn-pesan {
                width: 100%;
                justify-content: center
            }
        }
    </style>
@endsection

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">PRODUCT</h1>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{ asset('img/66.png') }}" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Produk Produk Yang Kami Sediakan</h1>
            </div>
            <div class="d-flex flex-wrap justify-content-center">
                <!-- product 1 -->
                <div class="card">
                    <div class="tilt">
                        <div class="img"><img src="{{ asset('img/product/tegel.jpeg') }}" alt="Tegel"></div>
                    </div>
                    <div class="info">
                        <h2 class="title">Tegel</h2>
                        <p class="desc">Tegel dari limbah kaca sebagai pengganti pasir alam </p>
                        <div class="bottom">
                            <div class="price">
                                <span class="new">Rp 15.000.00</span>
                            </div>
                            <a href="https://wa.me/6281360024335?text=Halo,%20saya%20tertarik%20untuk%20memesan%20produk%20Tegel." target="_blank" class="btn-pesan">
                                <span>Pesan</span>
                            </a>
                        </div>
                        <div class="meta">
                            <div class="stock">Stock Tersedia</div>
                        </div>
                    </div>
                </div>
                <!-- product 2 -->
                <div class="card">
                    <div class="tilt">
                        <div class="img"><img src="{{ asset('img/product/roster.jpeg') }}" alt="Roster"></div>
                    </div>
                    <div class="info">
                        <h2 class="title">Roster</h2>
                        <p class="desc">Roster dari limbah kaca sebagai bahan bangunan ramah lingkungan</p>
                        <div class="bottom">
                            <div class="price">
                                <span class="new">Rp 12.500.00</span>
                            </div>
                            <a href="https://wa.me/6281360024335?text=Halo,%20saya%20tertarik%20untuk%20memesan%20produk%20Roster." target="_blank" class="btn-pesan">
                                <span>Pesan</span>
                            </a>
                        </div>
                        <div class="meta">
                            <div class="stock">Stock Tersedia</div>
                        </div>
                    </div>
                </div>
                <!-- product 3 -->
                <div class="card">
                    <div class="tilt">
                        <div class="img"><img src="{{ asset('img/product/paving.jpeg') }}" alt="Paving Block"></div>
                    </div>
                    <div class="info">
                        <h2 class="title">Paving Block</h2>
                        <p class="desc">Paving Block dari limbah Plastik</p>
                        <div class="bottom">
                            <div class="price">
                                <span class="new">Rp 2.000.00</span>
                            </div>
                            <a href="https://wa.me/6281360024335?text=Halo,%20saya%20tertarik%20untuk%20memesan%20produk%20Paving%20Block." target="_blank" class="btn-pesan">
                                <span>Pesan</span>
                            </a>
                        </div>
                        <div class="meta">
                            <div class="stock">Stock Tersedia</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
