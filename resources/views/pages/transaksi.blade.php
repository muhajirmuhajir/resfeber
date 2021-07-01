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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>01 / 02 / 2021</td>
                        <td>Bromo</td>
                        <td>Berhasil</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>01 / 02 / 2021</td>
                        <td>Bromo</td>
                        <td>Berhasil</td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection
