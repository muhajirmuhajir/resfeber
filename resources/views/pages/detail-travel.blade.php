@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
@endsection

@section('content')
<div id="dtr-main-content">
    <!-- wisata section starts -->
    <section id="detail-wisata" class="dtr-section dtr-box-layout dtr-hero-section-top-padding ">
        <h1 class="h1">Nahwa Tour and Travel </h1>
            <div class="row">
                <div class="col-md-7">
                    <img src="{{url('frontpage/assets/images/blogpost-img1.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-5">
                    <div class="information-container bg-white p-4 rounded">
                        <h4 class="h4">Informasi Travel</h4>
                        <hr>
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="{{url('frontpage/assets/images/ic-information.png')}}" alt=""
                                class="ic-img">
                            <div class="ml-2">
                                <h5 class="h5">Alamat</h5>
                                <p>Jl. Bunga Bangkai, No. 86</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="{{url('frontpage/assets/images/ic-information.png')}}" alt=""
                                class="ic-img">
                            <div class="ml-2">
                                <h5 class="h5">No. Handphone</h5>
                                <p>+628123456789</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="{{url('frontpage/assets/images/ic-information.png')}}" alt=""
                                class="ic-img">
                            <div class="ml-2">
                                <h5 class="h5">Email</h5>
                                <p>jane.doe@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-justify mt-4">
                Nahwa tour tidak hanya menyediakan layanan umum sewa mobil. Tapi juga jeep untuk mencapai
                tempat-tempat wisata di bromo. Tentu saja, dengan harga yang terjangkau dan layanan yang lebih baik.
                Anda bahkan dapat menggunakan open trip bromo atau paket wisata bromo yang ditawarkan oleh nahwa
                tour.
                Tentu saja, perjalanan akan lebih menarik dan menyenangkan. Jika Anda satu orang, kita akan tetap
                layani dan bergabung dengan kelompok lain dengan ikut open trip Bromo. Mungkin Anda mendapat teman
                atau sesama traveler untuk ke bromo. Berkunjung ke daerah Bromo cukup sulit. Ada banyak jalan yang
                curam. Bahkan ada medan berlumpur, berkelok-kelok, jurang, jalan menanjak, dan lautan pasir. Untuk
                mengeksplorasi kendaraan harus membawa four wheel drive atau 4 × 4 jenis mobilnya.
                Bagaimana jika Anda ingin menggunakan kendaraan sendiri untuk Bromo? Apa boleh ke bromo naik motor
                atau naik mobil? Hal ini tidak diizinkan oleh pengelola Taman Nasional Bromo Tengger Semeru. Karena,
                peraturan yang mengharuskan pengunjung untuk jeep lokal untuk mengelilingi daerah Bromo. Dan, jangan
                khawatir karena pengemudi jeep Bromo memiliki banyak pengalaman dalam melintasi daerah bromo yang
                sulit.


            </p>

            <h2 class="h2 my-4">Paket yang tersedia</h2>
            @forelse ($travel->pakets as $paket)
            <div class="mb-4 bg-white rounded">
                <div class="d-flex p-4">
                    <img src="{{url('frontpage/assets/images/img-paket.png')}}" alt="" class="img-fluid">
                    <div class="ml-4 d-flex flex-column" style="flex-grow: 1;">
                        <div class="mb-auto">
                            <h3 class="h3">{{$paket->name}}</h3>
                            <p>{{$paket->description}}</p>
                        </div>
                        <div class="d-md-flex  justify-content-between align-items-end">
                            <div>
                                <p>Harga</p>
                                <p class="h4 text-dark">Rp. {{$paket->price}}/orang</p>
                            </div>
                            <form action="{{route('checkout_process', $paket->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-dark-blue btn-small">PESAN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse


    </section>

</div>
@endsection
