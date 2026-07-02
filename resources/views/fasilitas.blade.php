@extends('layouts.main')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">FASILITAS</h1>                    
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
                <h1 class="display-6 mb-3">Jenis Jenis Sampah Yang Kami Terima</h1>               
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">                        
                        <h5 class="mb-3">PLASTIK</h5>
                        <p class="mb-4">Botol plastic, Kantong plastic, Pipa plastic, Styrofoam</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">                        
                        <h5 class="mb-3">KACA</h5>
                        <p class="mb-4">Botol kaca, Cermin, Tabung lampu</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">                        
                        <h5 class="mb-3">LOGAM</h5>
                        <p class="mb-4">Kaleng minuman, Kaleng makanan, Peralatan dapur, kawat, Kaleng cat</p>                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">                        
                        <h5 class="mb-3">KERTAS</h5>
                        <p class="mb-4">Koran, Buku, Kardus, Karton kemasan, Kardus.</p>                        
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">SARAN </div>
                    <h1 class="mb-4">Ayo Daur Ulang Sampah!</h1>
                    <p class="mb-4">Melakukan pemisahan sampah menjadi organik dan non-organik untuk 
                        memudahkan proses daur ulang dan mengurangi polus</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Mendaur ulang sampah adalah tindakan kecil yang berdampak besar. Dengan menjual sampah, kita turut berpartisipasi dalam menjaga keberlanjutan lingkungan sekaligus menambah pemasukan keluarga.</p>
                            <div class="d-flex align-items-center">
                                <div class="ps-3">
                                    <h5 class="mb-1">R Agung Efriyo Hadi</h5>
                                    <span>Rektor Universitas Abulyatama</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Sampah bukan lagi barang tidak berguna. Botol plastik, kaleng, dan kertas bekas bisa didaur ulang dan dijual dengan harga yang menguntungkan. Ayo manfaatkan potensi dari sampah!</p>
                            <div class="d-flex align-items-center">
                                <div class="ps-3">
                                    <h5 class="mb-1">Muhtadin </h5>
                                    <span>Dekan Fakultas Teknik Universitas Abulyatama</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Sampah bukanlah akhir dari sebuah barang, melainkan awal dari karya baru yang bisa kita ciptakan</p>
                            <div class="d-flex align-items-center">
                                <div class="ps-3">
                                    <h5 class="mb-1">Ryan Setiawan</h5>
                                    <span>Kaprodi Sistem Informasi Universitas Abulyataam</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Mari kita mulai mengumpulkan dan menjual sampah untuk mendapatkan penghasilan tambahan! Tidak hanya baik untuk lingkungan, tapi juga untuk kantong kita.</p>
                            <div class="d-flex align-items-center">
                                <div class="ps-3">
                                    <h5 class="mb-1">Cut Rahmawati</h5>
                                    <span>Dosen Teknik Sipil Universitas Abulyatama</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Ayo kita semua berpartisipasi dalam daur ulang sampah agar dapat menciptakan lingkungan yang aman, tentram, dan lestari untuk generasi masa depan.</p>
                            <div class="d-flex align-items-center">
                                <div class="ps-3">
                                    <h5 class="mb-1">Sanusi</h5>
                                    <span>Dosen Teknologi Informasi Universitas Teuku Umar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
