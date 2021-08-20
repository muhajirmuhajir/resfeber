@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
@endsection

@section('content')
<div id="dtr-main-content">

    <!-- hero section starts -->
    <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
        <h1 class="h1">Paket Wisata</h1>
        @forelse ($travels as $travel)
        <div class="paket-container mb-4"
            style="background-image: url('{{Storage::url($travel->thumbnail)}}'); height: 600px;">
            <div class="paket-content">
                <div class="row flex-row-reverse">
                    <div class="col-md-5">
                        <div class="card-paket p-4">
                            <h2 class="h2">{{$travel->name}}</h2>
                            <p class="text-justify text-dark">{{$travel->description}}</p>
                            <p class="text-dark">Harga mulai</p>
                            @foreach ($travel->pakets as $paket)
                            <h3 class="h3 text-danger">Rp. {{$paket->price}}</h3>
                            @break;
                            @endforeach
                            <a href="{{route('detailTravel',['id'=> $travel->id])}}"
                                class="dtr-btn btn-dark-blue d-block mt-4">Lihat
                                Paket</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @empty

        @endforelse

    </section>
    <!-- hero section ends -->

</div>

@endsection
