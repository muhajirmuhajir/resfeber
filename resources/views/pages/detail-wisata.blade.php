@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/xzoom.min.css')}}">
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
@endsection

@section('content')
<div id="dtr-main-content">
    <!-- wisata section starts -->
    <section id="detail-wisata" class="dtr-section dtr-box-layout dtr-hero-section-top-padding ">
        <!-- Breadcrumbs start -->
        <div class="">
            <a href="{{route('wisata')}}">Tempat</a>
            &gt;
            <a href="#">{{$wisata->name}}</a>
        </div>
        <!-- Breadcrumbs ends -->
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4">{{$wisata->name}}</h1>
            </div>
        </div>
        <!-- Content Start-->
        <div class="row">
            <div class="col-md-8">

                <img id="main-image" class="img-fluid" src="{{Storage::url($wisata->thumbnail->media_url)}}"
                    xoriginal="{{Storage::url($wisata->thumbnail->media_url)}}" alt="">
                <!-- Images -->
                <div class="row mt-4">
                    @foreach ($wisata->media as $item)
                    <div class="col-3">
                        <a href="{{Storage::url($item->media_url)}}">
                            <img class="img-fluid xzoom-gallery" src="{{Storage::url($item->media_url)}}"
                                xpreview="{{Storage::url($item->media_url)}}" alt="">
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box p-3 border-box">
                    <h5 class="h5">Jam Operasonal</h5>
                    <p>{{$wisata->jam_buka}} - {{$wisata->jam_tutup}}</p>
                    <h5 class="h5">Lokasi</h5>
                    <p>{{$wisata->location->address ?? ""}}</p>
                    <div class="maps mt-3" style="height:300px">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31612.360111840386!2d112.9355026!3d-7.9424931!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd637aaab794a41%3A0xada40d36ecd2a5dd!2sGn.%20Bromo!5e0!3m2!1sid!2sid!4v1624936350673!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Ends-->

        <!-- Sejarah -->
        <div id="accordion" class="mt-4">
            <div class="accordion-item">
                <div class="pt-3 border-box" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link ml-0 p-0 accordion-title" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Sejarah
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-bodys text-justify">
                        {{$wisata->history}}
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="pt-3 border-box" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link ml-0 p-0 accordion-title" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Fasilitas
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-bodys text-justify">
                        @foreach ($wisata->facilities as $item)
                        <span class="badge badge-pink mt-2 py-2">
                            {{$item->name}}
                        </span>
                        @endforeach
                    </div>
                </div>

            </div>

            <div class="accordion-item">
                <div class="pt-3 border-box" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link ml-0 p-0 accordion-title" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Produk
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="row">
                        @forelse ($wisata->produks as $item)
                        <div class="col-3 mb-4">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{url('frontpage')}}/assets/images/blogpost-img1.jpg"
                                    alt="">
                                <div class="position-absolute produk-text">
                                    {{$item->name}}
                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="text-center">Belum ada produk</p>
                        @endforelse
                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <div class="pt-3 border-box" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link ml-0 p-0 accordion-title" data-toggle="collapse"
                            data-target="#ulasan" aria-expanded="true" aria-controls="ulasan">
                            Ulasan
                        </button>
                    </h5>
                </div>
                <div id="ulasan" class="collapse show mt-4" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="row">
                        @forelse ($wisata->ulasan as $item)
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <small>{{$item->user->name}}</small>
                                </div>
                                <div class="card-body">
                                    <p>{{$item->comment}}</p>
                                </div>
                            </div>

                        </div>
                        @empty
                        <p class="text-center">Belum ada Ulasan</p>
                        @endforelse
                    </div>
                </div>

            </div>

        </div>
</div>

@endsection

@section('script')
<script src="{{url('frontpage/assets/js/xzoom.min.js')}}"></script>

<script>
    $("#main-image, .xzoom-gallery").xzoom();
</script>
@endsection
