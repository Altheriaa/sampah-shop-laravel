@extends('layouts.main')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Selamat Datang</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Start-Up Sampah </h1>
                    <p class="text-white mb-4 animated slideInRight">" Warisan paling Istimewa Untuk Genarasi Berikutnya Adalah Lingkungan yang lesteri dan Terjaga " & <br>
                    " SAVE OUR EARTH "</p>
                    <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight"> Pelajari </a>
                    <a href="https://wa.me/+6281360274339" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Kontak langsung</a>
                </div>
          
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{ asset('img/66.png') }}" alt=""> <br><br>
                    <img class="img-fluid" src="{{ asset('img/TES23-.png') }}" alt="">
                    <p class="text-white">Click
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Jemput
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Timbang 
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Harga 
                    &emsp;&emsp;&emsp;&emsp;&emsp;</p>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
 
    <!-- About Start -->
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img">
                    <img class="img-fluid" src="{{ asset('img/home_2-removebg-preview.png') }}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">Apa itu Kebersihan!! mengapa kebersihan itu penting  ?? </h1>
                <p class="mb-4">Kebersihan merupakan salah satu aspek penting dalam kehidupan sehari-hari. 
                Tanpa kebersihan, lingkungan sekitar kita akan menjadi kotor, berantakan, dan berpotensi menyebabkan berbagai masalah kesehatan. 
                Pengertian kebersihan sendiri merujuk pada upaya menjaga keadaan bersih, 
                baik itu dalam diri sendiri, lingkungan, maupun makanan yang dikonsumsi. 
                pentingnya menjaga kebersihan dalam kehidupan sehari-hari untuk menciptakan lingkungan yang bersih & higenis </p>
                <p class="mb-4">Kebersihan merupakan suatu kondisi yang bebas dari kotoran, bau tidak sedap, serta potensi penyakit. Kebersihan 
                bisa diterapkan pada berbagai aspek, mulai dari kebersihan diri sendiri, kebersihan lingkungan, 
                hingga kebersihan makanan yang dikonsumsi.</p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Clik</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Jemput </h6>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Timbang </h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Dapat uang</h6>
                    </div>
                </div>

                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href="https://www.instagram.com/ppkormawa_himatifutu21?utm_source=qr&igsh=emM0MWpmOWFicTB2"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
