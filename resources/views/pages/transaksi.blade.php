@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">

@endsection

@section('content')
<div id="dtr-main-content">
    <!-- wisata section starts -->
    <section id="detail-wisata" class="dtr-section dtr-box-layout dtr-hero-section-top-padding ">

        <h1 class="h1">Riwayat Transaksi</h1>

        <div class="bg-white p-4 rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Transaksi</th>
                        <th>Tempat Wisata</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transaksi as $key => $item)
                    <tr>
                        <td><strong>{{$transaksi->firstItem()+ $key}}</strong></td>
                        <td>{{$item->booking_date}}</td>
                        <td>{{$item->tempatWisata->name}}</td>
                        <td>{{$item->transaction_status}}</td>
                        <td><a href="{{route('checkout', $item->id)}}" class="btn btn-info btn-small">Detail</a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">
                            <p class="text-center">Belum ada transaksi</p>
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
</div>
@endsection
