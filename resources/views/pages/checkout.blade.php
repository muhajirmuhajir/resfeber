@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
<link rel="stylesheet" href="{{url('frontpage/gjigo/css/gijgo.min.css')}}">
@endsection

@section('script')
<script src="{{url('frontpage/gjigo/js/gijgo.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        })
    })
</script>
@endsection

@section('content')
<div id="dtr-main-content">

    <!-- hero section starts -->
    <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
        <div class="d-flex align-items-center bg-white rounded p-3">
            <img src="{{url('frontpage/assets/images/ic-profile.png')}}" alt="" class="ml-3 img-fluid">
            <p class="ml-3 mb-0">Anda login sebagai</p>
            <p class="ml-3 h3">{{auth()->user()->name}}</p>
        </div>
        <!-- trip information -->
        <div class="mt-3 row">
            <div class="col-3">
                <p class="py-2">Tempat Wisata
                </p>
                <p class="py-2">Deskripsi
                </p>
                <p class="py-2">Tanggal Berangkat
                </p>
            </div>
            <div class="col-9">
                <p class="px-3 py-2 bg-white rounded ml-2">{{$transaction->tempatWisata->name}}</p>
                <p class="px-3 py-2 bg-white rounded ml-2">{{$transaction->paket->description}}</p>
                <div class="form-group ml-2">
                    <input type="datetime" id="datepicker" class="form-control datepicker"
                        value="{{$transaction->booking_date}}" />
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
                                    @forelse ($transaction->travelers as $key =>$traveler)
                                    <tr>
                                        <td>
                                            {{$traveler->name}}
                                        </td>
                                        <td>
                                            {{$traveler->age}} Tahun
                                        </td>
                                        <td>
                                            {{$traveler->phone_number}}
                                        </td>
                                        <td>
                                            @if ($key != 0)
                                            <form action="{{route('checkout_remove', $traveler->id)}}" method="post">
                                                @csrf
                                                <button class="btn btn-small btn-danger" type="submit">Hapus</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse

                                </tbody>
                            </table>
                        </div>

                        <div class="p-4 border rounded">
                            <p class="h3">Tambah Wisatawan</p>
                            <form action="{{route('checkout_create', $transaction->id)}}" method="post">
                                @csrf
                                <div class="form-row align-items-end">
                                    <div class="col-5">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" name="name" class="form-control-sm"
                                            placeholder="Nama">
                                    </div>
                                    <div class="col">
                                        <label for="telepon">Telepon</label>
                                        <input type="text" id="telepon" name="phone_number" class="form-control-sm"
                                            placeholder="Telepon">
                                    </div>
                                    <div class="col">
                                        <label for="umur">Umur</label>
                                        <input type="number" id="umur" name="age" class="form-control-sm"
                                            placeholder="Umur">
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
                                        {{$transaction->travelers->count()}}x orang <br>
                                        PPn 10%
                                    </td>
                                    <td>
                                        Rp. {{$transaction->price_total}} <br>
                                        Rp. 6.500
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <th>Rp. {{$transaction->price_total + 6500}}</th>
                                </tr>
                            </tbody>
                        </table>

                        <form action="{{route('checkout_pay', $transaction)}}" method="post">
                            @csrf
                            <button class="btn btn-dark-blue d-block w-100">Bayar Sekarang</button>
                        </form>

                        <form action="{{route('checkout_cancel', $transaction->id)}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-outline-primary w-100 mt-2">Batalkan Pesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section ends -->

</div>
@endsection
