@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">

@endsection

@section('content')
<div id="dtr-main-content">

    <!-- hero section starts -->
    <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
        <div class="position-relative bg-white rounded px-4 pb-4 profile-section">
            <div class="profile-container text-center">
                <img class="img-fluid" src="{{url('frontpage/assets/images/user-1.jpg')}}" alt="">
                <p class="h5 mt-2">Qonita Nur Farhana</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pink-card rounded p-4">
                        <div class="d-flex mb-3 align-items-center">
                            <img class="img-fluid" src="{{url('frontpage/assets/images/ic-email.png')}}" alt="">
                            <p class="ml-4 text-blue">farhanakey@email.com</p>
                        </div>
                        <div class="d-flex mb-3 align-items-center">
                            <img class="img-fluid" src="{{url('frontpage/assets/images/ic-location.png')}}" alt="">
                            <p class="ml-4 text-blue">Jawa Tengah, Indonesia</p>
                        </div>
                        <div class="d-flex mb-3 align-items-center">
                            <img class="img-fluid" src="{{url('frontpage/assets/images/ic-telepon.png')}}" alt="">
                            <p class="ml-4 text-blue">+ 62 845 556 7889</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pink-card rounded overflow-hidden d-flex mb-3 align-items-center">
                        <div class="p-4 bg-dark text-white">
                            10
                        </div>
                        <p class="ml-4 h5">Transaksi Berhasil</p>
                    </div>
                    <div class="pink-card rounded overflow-hidden d-flex mb-3 align-items-center">
                        <div class="p-4 bg-dark text-white">
                            10
                        </div>
                        <p class="ml-4 h5">Transaksi Tertunda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section ends -->

</div>
@endsection
