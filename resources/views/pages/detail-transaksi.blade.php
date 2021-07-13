@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">

@endsection

@section('content')
<div id="dtr-main-content">
    <!-- wisata section starts -->
    <section id="detail-wisata" class="dtr-section dtr-box-layout dtr-hero-section-top-padding ">
        <h1 class="h1">Detail Transaksi</h1>
        <p class="text-muted">#NO {{$transaksi->id}}</p>


        <div class="row mb-4">
            <div class="col-md-6">
                <div class="bg-white p-4 rounded">
                    <h3 class="h3">Tempat Wisata</h3>

                    <div class="mb-2">
                        <small>
                            Tujuan
                        </small>
                        <p class="text-blue">{{$transaksi->tempatWisata->name}}</p>
                    </div>

                    <div class="mb-2">
                        <small>
                            Tanggal Berangkat
                        </small>
                        <p class="text-blue">{{$transaksi->booking_date}}</p>
                    </div>
                    <div class="mb-2">
                        <small>
                            Lokasi Penjemputan
                        </small>
                        <p class="text-blue">{{$transaksi->paket->description}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 rounded">
                    <h3 class="h3">Pembayaran</h3>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-blue">{{$transaksi->travelers->count()}} Tiket</p>
                        <p class="font-weight-bold text-blue">
                            Rp. {{$transaksi->paket->price * $transaksi->travelers->count()}},00</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-blue">Ppn 10%</>
                            <p class="font-weight-bold text-blue">Rp. 6.500,00</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-blue h5">Total</>
                            <p class="font-weight-bold text-blue h5">Rp.
                                {{$transaksi->paket->price * $transaksi->travelers->count() + 6500}},00</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-blue">Status Pembayaran</>
                            <p class="text-white {{$transaksi->transaction_status == 'SUCCESS' ? 'bg-success' : 'bg-warning'}}  px-4"
                                style="border-radius: 50px;">
                                {{$transaksi->transaction_status}}
                            </p>
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
                    @foreach ($transaksi->travelers as $key=> $travel)
                    <tr>
                        <td><strong>{{$key+1}}</strong></td>
                        <td>{{$travel->name}}</td>
                        <td>{{$travel->phone_number}}</td>
                        <td>{{$travel->age}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection
