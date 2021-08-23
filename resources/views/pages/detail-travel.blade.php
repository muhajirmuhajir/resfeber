@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
@endsection

@section('content')
<div id="dtr-main-content">
    <!-- wisata section starts -->
    <section id="detail-wisata" class="dtr-section dtr-box-layout dtr-hero-section-top-padding ">
        {{-- <h1 class="h1">Nahwa Tour and Travel </h1> --}}
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4">{{$travel->name}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <img src="{{Storage::url($travel->thumbnail)}}" alt="" style="max-height: 600px" class="img-fluid">
            </div>
            <div class="col-md-5">
                <div class="information-container bg-white p-4 rounded">
                    <h4 class="h4">Informasi Travel</h4>
                    <hr>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{url('frontpage/assets/icons/ic-address.png')}}" alt=""
                            class="ic-img">
                        <div class="ml-2">
                            <h5 class="h5">Alamat</h5>
                            <p>{{$travel->address}}</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{url('frontpage/assets/icons/ic-phone.png')}}" alt=""
                            class="ic-img">
                        <div class="ml-2">
                            <h5 class="h5">No. Handphone</h5>
                            <p>{{$travel->phone_number}}</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{url('frontpage/assets/icons/ic-email.png')}}" alt=""
                            class="ic-img">
                        <div class="ml-2">
                            <h5 class="h5">Email</h5>
                            <p>{{$travel->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-justify mt-4">{{$travel->description}}</p>

        <h2 class="h2 my-4">Paket yang tersedia</h2>
        @forelse ($travel->pakets as $paket)
        <div class="mb-4 bg-white rounded">
            <div class="d-flex p-4">
                <img src="{{Storage::url($paket->thumbnail)}}" alt=""
                    style="width:200px; height:200px; object-fit: cover;" class="img-fluid">
                <div class="ml-4 d-flex flex-column" style="flex-grow: 1;">
                    <div class="mb-auto">
                        <h3 class="h3">{{$paket->name}}</h3>
                        <p class="text-paket">{{$paket->description}}</p>
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
