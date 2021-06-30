@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/xzoom.min.css')}}">
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
@endsection

@section('content')
<div id="dtr-main-content">
    <!-- wisata section starts -->
    <section id="detail-wisata" class="dtr-section dtr-box-layout dtr-hero-section-top-padding ">
        <!-- Breadcrumbs start -->
        <div class="">
            <a href="wisata.html">Tempat</a>
            &gt;
            <a href="#">Taman Nasional Bromo Tengger Semeru</a>
        </div>
        <!-- Breadcrumbs ends -->
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4">Taman Nasional Bromo Tengger Semeru</h1>
            </div>
        </div>
        <!-- Content Start-->
        <div class="row">
            <div class="col-md-8">

                <img id="main-image" class="img-fluid" src="{{url('frontpage')}}/assets/images/img-1.jpg"
                    xoriginal="{{url('frontpage')}}/assets/images/img-1.jpg" alt="">
                <!-- Images -->
                <div class="row mt-4">
                    <div class="col-3">
                        <a href="{{url('frontpage')}}/assets/images/blogpost-img1.jpg">
                            <img class="img-fluid xzoom-gallery"
                                src="{{url('frontpage')}}/assets/images/blogpost-img1.jpg"
                                xpreview="{{url('frontpage')}}/assets/images/blogpost-img1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="{{url('frontpage')}}/assets/images/blogpost-img1.jpg">
                            <img class="img-fluid xzoom-gallery"
                                src="{{url('frontpage')}}/assets/images/blogpost-img1.jpg"
                                xpreview="{{url('frontpage')}}/assets/images/blogpost-img1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="{{url('frontpage')}}/assets/images/blogpost-img1.jpg">
                            <img class="img-fluid xzoom-gallery"
                                src="{{url('frontpage')}}/assets/images/blogpost-img1.jpg"
                                xpreview="{{url('frontpage')}}/assets/images/blogpost-img1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="{{url('frontpage')}}/assets/images/blogpost-img1.jpg">
                            <img class="img-fluid xzoom-gallery"
                                src="{{url('frontpage')}}/assets/images/blogpost-img1.jpg"
                                xpreview="{{url('frontpage')}}/assets/images/blogpost-img1.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box p-3 border-box">
                    <h5 class="h5">Jam Operasonal</h5>
                    <p>00.00 - 00.00 (24 Jam)</p>
                    <h5 class="h5">Lokasi</h5>
                    <p>Wilayah Administrasi Kabupaten Pasuruan, Kabupaten Malang, Kabupaten Lumajang dan
                        Kabupaten Probolinggo</p>
                    <div class="maps mt-3" style="height:300px">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31612.360111840386!2d112.9355026!3d-7.9424931!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd637aaab794a41%3A0xada40d36ecd2a5dd!2sGn.%20Bromo!5e0!3m2!1sid!2sid!4v1624936350673!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Ends-->

        <!-- Sejarah -->
        <div id="accordion" class="mt-4">
            <div class="accordion-item">
                <div class="pt-3 border-box" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link ml-0 p-0 accordion-title" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Sejarah
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-bodys text-justify">
                        Taman Nasional Bromo Tengger Semeru adalah taman nasional di Jawa Timur, Indonesia, yang
                        terletak di wilayah administratif Kabupaten Pasuruan, Kabupaten Malang, Kabupaten
                        Lumajang dan Kabupaten Probolinggo. Taman yang bentangan barat-timurnya sekitar 20-30
                        kilometer dan utara-selatannya sekitar 40 km ini ditetapkan sejak tahun 1982 dengan luas
                        wilayahnya sekitar 50.276,3 ha. Di kawasan ini terdapat kaldera lautan pasir yang
                        luasnya ±6290 ha. Batas kaldera lautan pasir itu berupa dinding terjal, yang
                        ketinggiannya antara 200-700 meter.
                        <br>
                        Sebelum ditetapkan sebagai taman nasional, daerah Tengger merupakan kawasan hutan yang
                        berfungsi sebagai cagar alam dan hutan wisata. Kawasan hutan ini berfungsi sebagai hutan
                        lindung dan hutan produksi. Melihat berbagai fungsi tersebut, Kongres Taman Nasional
                        Sedunia mengukuhkan kawasan Bromo Tengger Semeru sebagai taman nasional dalam pertemuan
                        yang diselenggarakan di Denpasar, Bali, pada tanggal 14 Oktober 1982 atas pertimbangan
                        alam dan lingkungannya yang perlu dilindungi serta bermacam-macam potensi tradisional
                        kuno yang perlu terus dikembangkan. Pada tanggal 12 November 1992, pemerintah Indonesia
                        meresmikan kawasan Bromo Tengger Semeru menjadi taman nasional.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="pt-3 border-box" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link ml-0 p-0 accordion-title" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Fasilitas
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-bodys text-justify">
                        <span class="badge badge-pink mt-2 py-2">
                            Mushola
                        </span>
                        <span class="badge badge-pink mt-2 py-2">
                            Area Parkir
                        </span>
                        <span class="badge badge-pink mt-2 py-2">
                            Penyewaan Kuda
                        </span>
                        <span class="badge badge-pink mt-2 py-2">
                            Kios Oleh-Oleh
                        </span>
                        <span class="badge badge-pink mt-2 py-2">
                            Penyewaan Jeep
                        </span>
                    </div>
                </div>

            </div>

            <div class="accordion-item">
                <div class="pt-3 border-box" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link ml-0 p-0 accordion-title" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Produk
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="row">
                        <div class="col-3 ">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{url('frontpage')}}/assets/images/blogpost-img1.jpg"
                                    alt="">
                                <div class="position-absolute produk-text">
                                    Bunga Edelweiss
                                </div>
                            </div>
                        </div>
                        <div class="col-3 ">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{url('frontpage')}}/assets/images/blogpost-img1.jpg"
                                    alt="">
                                <div class="position-absolute produk-text">
                                    Bunga Edelweiss
                                </div>
                            </div>
                        </div>
                        <div class="col-3 ">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{url('frontpage')}}/assets/images/blogpost-img1.jpg"
                                    alt="">
                                <div class="position-absolute produk-text">
                                    Bunga Edelweiss
                                </div>
                            </div>
                        </div>
                        <div class="col-3 ">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{url('frontpage')}}/assets/images/blogpost-img1.jpg"
                                    alt="">
                                <div class="position-absolute produk-text">
                                    Bunga Edelweiss
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
</div>

@endsection

@section('script')
<script src="{{url('frontpage/assets/js/xzoom.min.js')}}"></script>

<script>
    $("#main-image, .xzoom-gallery").xzoom();
</script>
@endsection
