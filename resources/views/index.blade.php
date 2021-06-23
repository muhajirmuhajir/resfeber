@extends('home');

@section('content')
<div id="dtr-main-content">

    <!-- hero section starts
================================================== -->
    <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
        <!-- dtr-bg-shapes-type-1 : Class for shapes to background. Easy to change image color, refer local help doc -->
        <div class="dtr-box-wrapper-round dtr-bg-shapes-type-1 bg-white">

            <!--===== row 1 starts =====-->
            <div class="row">

                <!-- column 1 starts -->
                <div class="col-12 col-md-6 dtr-box-full-img"
                    style="background-image: url(assets/images/bromo.png);"> </div>
                <!-- column 1 ends -->

                <!-- column 2 starts -->
                <div class="col-12 col-md-6 dtr-py-100 dtr-sm-p-50 dtr-px-100">

                    <!-- intro text -->
                    <h2 >Taman Nasional
                        Bromo Tengger Semeru</h2>
                    <p class="text-justify">Taman Nasional Bromo Tengger Semeru adalah taman nasional di Jawa Timur, Indonesia, yang terletak di wilayah administratif Kabupaten Pasuruan, Kabupaten Malang, Kabupaten Lumajang dan Kabupaten Probolinggo. </p>
                    <!-- button 1 -->
                    <a href="#" class="dtr-btn dtr-btn-right-icon dtr-mt-30 dtr-mr-5 btn-blue">Kunjungi halaman<span class="btn-span bg-blue color-white"><i
                                class="icon-arrow-right"></i></span></a>
                    <!-- buttons end -->
{{--
                    <div class="spacer-100"></div>
                    <p class="tagline-style2 dtr-mb-0 color-dark">Price starts at</p>
                    <p class="text-size-xxl color-green text-shadow-green">$2,50,000</p> --}}
                </div>
                <!-- column 2 ends -->

            </div>
            <!--===== row 1 ends =====-->

        </div>
    </section>
    <!-- hero section ends
================================================== -->

<!-- blog section starts
================================================== -->
<section id="blog" class="dtr-section dtr-box-layout dtr-py-100">

    <!-- heading starts -->
    <div class="dtr-section-heading-wrapper">
        <h2>Terpopuler</h2>
        <p>Bingung mau liburan kemana? Berikut ini adalah 3 rekomendasi <br> destinasi wisata terpopuler yang paling sering dikunjungi! </p>
    </div>
    <!-- heading ends -->

    <!--== row starts ==-->
    <div class="row">

        <!-- blog item 1 starts -->
        <div class="col-12 col-md-4">
            <div class="dtr-blog-item">
                <!-- image -->
                <div class="dtr-post-img"> <img src="assets/images/ranu.png" alt="image"> </div>
                <!-- content -->
                <div class="dtr-post-content"> <span class="dtr-blog-cat">Jawa Timur</span>
                    <h5><a href="#">Ranu Kumbolo</a></h5>
                    <p class="text-justify">Ranu Kumbolo adalah sebuah danau yang terletak di dalam Taman Nasional Bromo Tengger Semeru, Jawa Timur, Indonesia.</p>
                    <!-- meta -->
                    <div class="dtr-blog-meta clearfix">
                        <div class="dtr-meta-author-img"><img src="assets/images/izza.png" alt="image">
                        </div>
                        <div class="dtr-meta-text">
                            <h6 class="dtr-meta-author">oleh Mohammad Izza</h6>
                            <span class="dtr-meta-date">25 January 2021</span>
                        </div>
                    </div>
                    <!-- meta ends -->
                </div>
                <!-- content ends -->
            </div>
        </div>
        <!-- blog item 1 ends -->

        <!-- blog item 2 starts -->
        <div class="col-12 col-md-4">
            <div class="dtr-blog-item">
                <!-- image -->
                <div class="dtr-post-img"> <img src="assets/images/ranu.png" alt="image"> </div>
                <!-- content -->
                <div class="dtr-post-content"> <span class="dtr-blog-cat">Jawa Timur</span>
                    <h5><a href="#">Ranu Kumbolo</a></h5>
                    <p class="text-justify">Ranu Kumbolo adalah sebuah danau yang terletak di dalam Taman Nasional Bromo Tengger Semeru, Jawa Timur, Indonesia.</p>
                    <!-- meta -->
                    <div class="dtr-blog-meta clearfix">
                        <div class="dtr-meta-author-img"><img src="assets/images/hana.png" alt="image">
                        </div>
                        <div class="dtr-meta-text">
                            <h6 class="dtr-meta-author">oleh Qonita Farhana</h6>
                            <span class="dtr-meta-date">12 February 2021</span>
                        </div>
                    </div>
                    <!-- meta ends -->
                </div>
                <!-- content ends -->
            </div>
        </div>
        <!-- blog item 2 ends -->

        <!-- blog item 3 starts -->
        <div class="col-12 col-md-4">
            <div class="dtr-blog-item">
                <!-- image -->
                <div class="dtr-post-img"> <img src="assets/images/ranu.png" alt="image"> </div>
                <!-- content -->
                <div class="dtr-post-content"> <span class="dtr-blog-cat">Jawa Timur</span>
                    <h5><a href="#">Ranu Kumbolo</a></h5>
                    <p class="text-justify">Ranu Kumbolo adalah sebuah danau yang terletak di dalam Taman Nasional Bromo Tengger Semeru, Jawa Timur, Indonesia.</p>
                    <!-- meta -->
                    <div class="dtr-blog-meta clearfix">
                        <div class="dtr-meta-author-img"><img src="assets/images/muhajir.png" alt="image">
                        </div>
                        <div class="dtr-meta-text">
                            <h6 class="dtr-meta-author">oleh Muhajir</h6>
                            <span class="dtr-meta-date">13 March 2021</span>
                        </div>
                    </div>
                    <!-- meta ends -->
                </div>
                <!-- content ends -->
            </div>
        </div>
        <!-- blog item 3 ends -->

    </div>
    <!--== row ends ==-->

</section>
<!-- blog section ends
================================================== -->

 <!-- services section starts
================================================== -->
<section id="services" class="dtr-section dtr-box-layout dtr-box-wrapper-round dtr-box-padding bg-white">

    <!--== row 1 starts ==-->
    <div class="row">

        <!-- column 1 starts -->
        <div class="col-12 col-md-6">

            <!-- heading starts -->
            <div class="dtr-section-heading-wrapper">
                <h2>Mengapa Harus Resfeber?</h2>
                <p>Resfeber merupakan platform yang berisi tentang informasi lengkap tempat wisata beserta paket wisata yang ada. </p>
            </div>
            <!-- heading ends -->

        </div>
        <!-- column 1 ends -->

        <!-- column 2 starts -->
        <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
            <div class="dtr-feature-img bg-medium-blue color-dark-blue"><i class="icon-city"></i></div>
            <h5>Terupdate</h5>
            <p>Seluruh informasi pada resfeber diperbarui dalam jangka waktu tertentu sehingga informasi yang disajikan up to date.</p>
        </div>
        <!-- column 2 ends -->

        <!-- column 3 starts -->
        <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
            <div class="dtr-feature-img bg-medium-red color-dark-brown"><i class="icon-user-tag"></i></div>
            <h5>Mitra</h5>
            <p>Resfeber bekerjasama dengan lebih dari 100 mitra agen tour travel yang menyediakan paket wisata.</p>
        </div>
        <!-- column 3 ends -->

    </div>
    <!--== row 1 ends ==-->

    <!--== row 2 starts ==-->
    <div class="row">

        <!-- column 1 starts -->
        <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
            <div class="dtr-feature-img bg-medium-green color-dark-green"><i class="icon-door-open"></i>
            </div>
            <h5>Kredibel</h5>
            <p>Seluruh informasi pada resfeber valid dan dapat dipercaya.</p>
        </div>
        <!-- column 1 ends -->

        <!-- column 2 starts -->
        <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
            <div class="dtr-feature-img bg-medium-purple color-dark-purple"><i class="icon-walking"></i>
            </div>
            <h5>Akurat</h5>
            <p>Seluruh informasi pada resfeber sudah dilakukan verifikasi dan validasi langsung ke lapangan.</p>
        </div>
        <!-- column 2 ends -->

        <!-- column 3 starts -->
        <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
            <div class="dtr-feature-img bg-light-red color-dark-brown"><i class="icon-wind"></i></div>
            <h5>Lengkap</h5>
            <p>Seluruh informasi pada resfeber mencakup banyak aspek secara detail, diataranya sejarah, jam operasional, fasilitas, biaya tiket dan lainnya.</p>
        </div>
        <!-- column 3 ends -->

    </div>
    <!--== row 2 ends ==-->

</section>
<!-- services section ends


================================================== -->

</div>
<!-- == main content ends == -->
@endsection
