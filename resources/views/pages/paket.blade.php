@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
@endsection

@section('content')
<div id="dtr-main-content">

    <!-- hero section starts -->
    <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
        <h1 class="h1">Paket Wisata</h1>
        <div class="paket-container mb-4"
            style="background-image: url('{{url('frontpage/assets/images/paket1.png')}}');">
            <div class="paket-content">
                <div class="row flex-row-reverse">
                    <div class="col-md-5">
                        <div class="card-paket p-4">
                            <h2 class="h2">Open Trip Bromo via Malang</h2>
                            <p>Nahwa Tour and Travel</p>
                            <p class="text-justify text-dark">Nahwa Tour menyediakan jasa sewa / rental jeep hardtop
                                bromo
                                dengan harga yang
                                lebih murah. Dapat dijemput di Tumpang / Poncokusumo / Gubugklakah – Malang,
                                Tosari / Wonokitri – Pasuruan, Sukapura / Cemorolawang / Ngadisari –
                                Probolinggo. Dengan jalur yang aman berkapasitas max 6 penumpang.</p>
                            <p class="text-dark">Harga mulai</p>
                            <h3 class="h3 text-danger">Rp. 650.000 - Rp 1.250.000</h3>
                            <a href="{{route('detailpaket',['slug'=> 'nahwa-tour-and-travel'])}}"
                                class="dtr-btn btn-dark-blue d-block mt-4">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="paket-container mb-4"
            style="background-image: url('{{url('frontpage/assets/images/paket2.png')}}');">
            <div class="paket-content">
                <div class="row flex-row-reverse">
                    <div class="col-md-5">
                        <div class="card-paket p-4">
                            <h2 class="h2">Harga Sewa Jeep Bromo 2021</h2>
                            <p>Fantastrip</p>
                            <p class="text-justify text-dark">Sewa Jeep Gunung Bromo, adalah solusi hemat dan praktis
                                bagi Anda yang berencana berwisata ke seluruh spot Gunung Bromo tanpa ribet dan murah
                                tanpa paket wisata dan agen wisata, Anda bisa kelola sendiri dengan jadwal lebih
                                leluasa.
                            </p>
                            <p class="text-dark">Harga mulai</p>
                            <h3 class="h3 text-danger">Rp. 600.000 - Rp 1.350.000</h3>
                            <a href="{{route('detailpaket',['slug'=> 'nahwa-tour-and-travel'])}}"
                                class="dtr-btn btn-dark-blue d-block mt-4">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- hero section ends -->

</div>

@endsection