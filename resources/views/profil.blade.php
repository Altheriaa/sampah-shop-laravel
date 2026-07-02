@extends('layouts.main')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Profil</h1>                    
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{ asset('img/66.png') }}" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Layanan Start-Up Sampah</h1>
                <p class="mb-5">Kebersihan adalah kunci menuju lingkungan yang sehat. Kami siap membantu Anda mewujudkannya dengan layanan pengelolaan sampah terpadu kami.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <h5 class="mb-3">Layanan Pengumpulan Sampah</h5>
                        <p class="mb-4">Tim kami bertanggung jawab untuk mengumpulkan sampah dari lokasi yang Anda tentukan, baik itu rumah, kantor, atau tempat lainnya.
                            Kami dapat mengatur jadwal pengumpulan yang sesuai dengan kebutuhan Anda, baik itu harian, mingguan, atau sesuai permintaan.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <h5 class="mb-3">Fleksibilitas Waktu:</h5>
                        <p class="mb-4">Kami menyediakan layanan pengumpulan sampah yang fleksibel, yang berarti Anda dapat menghubungi kami kapan saja Anda membutuhkan layanan tersebut. 
                            Apakah itu untuk pengumpulan rutin atau penghapusan sampah mendesak, tim kami siap membantu.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <h5 class="mb-3">Penanganan Sampah yang Profesional</h5>
                        <p class="mb-4">Tim kami terdiri dari personel yang terlatih dan berpengalaman dalam menangani berbagai jenis sampah.
                            Kami memastikan bahwa sampah yang dikumpulkan akan ditangani secara aman dan sesuai dengan peraturan lingkungan yang berlaku.</p>                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <h5 class="mb-3">Pemilihan dan Pemilahan Sampah</h5>
                        <p class="mb-4">Kami juga dapat membantu dalam proses pemilahan sampah untuk daur ulang atau pengolahan yang lebih lanjut. 
                            Ini membantu meminimalkan dampak lingkungan dari sampah yang dihasilkan.</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <h5 class="mb-3">Kemudahan Komunikasi</h5>
                        <p class="mb-4">Kami menyediakan saluran komunikasi yang mudah diakses, baik melalui telepon, pesan teks, atau platform online lainnya.
                            Anda dapat dengan mudah menghubungi kami untuk membuat jadwal pengumpulan atau mengajukan pertanyaan terkait layanan kami.</p>                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <h5 class="mb-3">Penghargaan Lingkungan</h5>
                        <p class="mb-4">Kami memahami pentingnya menjaga lingkungan, oleh karena itu kami berkomitmen untuk menyediakan 
                            layanan pengumpulan sampah yang ramah lingkungan dan berkelanjutan.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <h5 class="mb-3">Harga yang Kompetitif</h5>
                        <p class="mb-4">Kami menawarkan harga yang kompetitif untuk layanan pengumpulan sampah kami. 
                            Kami juga menyediakan berbagai paket layanan yang dapat disesuaikan dengan kebutuhan dan anggaran Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Lokasi</div>
                    <h1 class="text-white mb-4">Bank Sampah Induk Sadar Mandiri, Jl. Tengku Dikandang, Gampong Jawa, Banda Aceh.</h1>
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <div class="ms-3"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <div class="ms-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{ asset('img/about1.png') }}" alt="">
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
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Tim Start-up</div>
                    <h1 class="mb-4">Tim Pengelola Start-up Sampah</h1>
                    <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="{{ asset('img/team-11.jpg') }}" alt="">
                                        <h5 class="mb-0">Muhammad Nadir</h5>
                                        <small>Kepala Bank Sampah</small>
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
                                        <img class="img-fluid rounded-circle p-4" src="{{ asset('img/1-22.jpg') }}" alt="">
                                        <h5 class="mb-0">Hendra</h5>
                                        <small>Kepala Logistik</small>
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
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="{{ asset('img/1-33.jpg') }}" alt="">
                                        <h5 class="mb-0">Samsul Bahri</h5>
                                        <small>Distribusi Barang</small>
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
                                        <img class="img-fluid rounded-circle p-4" src="{{ asset('img/1-44.jpg') }}" alt="">
                                        <h5 class="mb-0">Hidayat</h5>
                                        <small>Pengepakan</small>
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
@endsection
