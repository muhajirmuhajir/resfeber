@extends('layouts.frontpage')

@section('style')
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
            <a href="#">NO 2021 0102 0624</a>
        </div>
        <!-- Breadcrumbs ends -->
        <h1 class="h1">Detail Transaksi</h1>
        <p class="text-muted">#NO 2021 0102 0624</p>


        <div class="row mb-4">
            <div class="col-md-6">
                <div class="bg-white p-4 rounded">
                    <h3 class="h3">Tempat Wisata</h3>

                    <div class="mb-2">
                        <small>
                            Tujuan
                        </small>
                        <p class="text-blue">Taman Nasional Bromo Tengger Semeru</p>
                    </div>

                    <div class="mb-2">
                        <small>
                            Tanggal Berangkat
                        </small>
                        <p class="text-blue">Kamis, 01 Juli 2021 04:00 AM</p>
                    </div>
                    <div class="mb-2">
                        <small>
                            Lokasi Penjemputan
                        </small>
                        <p class="text-blue">Wonokitri</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 rounded">
                    <h3 class="h3">Pembayaran</h3>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-blue">2 Tiket</>
                            <p class="font-weight-bold text-blue">Rp. 650.000,00</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-blue">Ppn 10%</>
                            <p class="font-weight-bold text-blue">Rp. 6.000,00</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-blue h5">Total</>
                            <p class="font-weight-bold text-blue h5">Rp. 656.000,00</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-blue">Status Pembayaran</>
                            <p class="text-white bg-success px-4" style="border-radius: 50px;">Lunas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white p-4 rounded">
            <h3 class="h3">Daftar Wisatawan</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Umur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Muhajir</td>
                        <td>+6281234690</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Qounita Nur Farhana</td>
                        <td>+6281234690</td>
                        <td>21</td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection
