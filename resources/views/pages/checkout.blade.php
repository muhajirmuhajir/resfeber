@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
@endsection

@section('content')
<div id="dtr-main-content">

    <!-- hero section starts -->
    <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
        <div class="d-flex align-items-center bg-white rounded p-3">
            <img src="{{url('frontpage/assets/images/ic-profile.png')}}" alt="" class="ml-3 img-fluid">
            <p class="ml-3 mb-0">Anda login sebagai</p>
            <p class="ml-3 h3">MOH. IZZA AULADINA L.</p>
        </div>
        <!-- trip information -->
        <div class="mt-3 row">
            <div class="col-3">
                <p class="py-2">Tempat Wisata
                </p>
                <p class="py-2">Lokasi Penjemputan
                </p>
                <p class="py-2">Tanggal Berangkat
                </p>
            </div>
            <div class="col-9">
                <p class="px-3 py-2 bg-white rounded ml-2">Taman Nasional Bromo Tengger
                    Semeru
                </p>
                <p class="px-3 py-2 bg-white rounded ml-2">Wonokitiri
                </p>
                <div class="form-group ml-2">
                    <input type="datetime" class="form-control" />
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-md-8 ">
                <div class="wisatawan-container position-relative">
                    <div class="d-flex p-3 bg-white card-title-header">
                        <i class="icon-profile"></i>
                        <p class="h3">DAFTAR WISATAWAN</p>
                    </div>
                    <div class="bg-white card-title-content">
                        <div class="p-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Moh. Izza Auladina L.
                                        </td>
                                        <td>
                                            23 Tahun
                                        </td>
                                        <td>
                                            082333118866
                                        </td>
                                        <td>
                                            Hapus
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="p-4 border rounded">
                            <p class="h3">Tambah Wisatawan</p>
                            <form>
                                <div class="form-row align-items-end">
                                    <div class="col-5">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" class="form-control-sm" placeholder="Nama">
                                    </div>
                                    <div class="col">
                                        <label for="telepon">Telepon</label>
                                        <input type="text" id="telepon" class="form-control-sm" placeholder="Telepon">
                                    </div>
                                    <div class="col">
                                        <label for="umur">Umur</label>
                                        <input type="number" id="umur" class="form-control-sm" placeholder="Umur">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn  btn-dark-blue w-100 mb-1">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pesanan-container position-relative">
                    <div class="d-flex p-3 bg-white card-title-header">
                        <i class="icon-profile"></i>
                        <p class="h3">INFO PESANANAN</p>
                    </div>
                    <div class="bg-white px-3 pb-4 card-title-content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pesanan</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1x orang <br>
                                        PPn 10%
                                    </td>
                                    <td>
                                        Rp. 650.000 <br>
                                        Rp. 6.500
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <th>Rp. 656.500</th>
                                </tr>
                            </tbody>
                        </table>

                        <button class="btn btn-dark-blue d-block w-100">Bayar Sekarang</button>

                        <a href="#" class="btn btn-outline-primary w-100 mt-2">Batalkan Pesanan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section ends -->

</div>
@endsection
