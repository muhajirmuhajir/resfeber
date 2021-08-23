@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/xzoom.min.css')}}">
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">

<style>
    .videowrapper {
        float: none;
        clear: both;
        width: 100%;
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 25px;
        height: 0;
    }

    .videowrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
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

                <img id="main-image" class="img-fluid w-100" @if ($wisata->thumbnail)
                src="{{Storage::url($wisata->thumbnail->media_url)}}"
                xoriginal="{{Storage::url($wisata->thumbnail->media_url)}}"
                @endif
                alt="">
                <!-- Images -->
                <div class="row mt-4">
                    @foreach ($wisata->media as $item)
                    @if ($item->type == 'image')
                    <div class="col-3">
                        <a href="{{Storage::url($item->media_url)}}">
                            <img class="img-fluid xzoom-gallery" src="{{Storage::url($item->media_url)}}"
                                xpreview="{{Storage::url($item->media_url)}}" alt="">
                        </a>
                    </div>
                    @endif
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
                            src="https://www.google.com/maps/embed/v1/place?q={{$wisata->location->latitude ?? ""}},{{$wisata->location->longitude ?? ""}}&key={{config('maps.key')}}"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Ends-->

        <div class="row mt-4">
            <div id="accordion" class="col-md-8">
                <!-- Sejarah -->
                @if ($wisata->history)
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
                @endif
                @if ($wisata->facilities->isNotEmpty())
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
                @endif
                @if ($wisata->produks->isNotEmpty())
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
                                    <img class="img-fluid" @if ($item->image_url)
                                    src="{{Storage::url($item->image_url)}}"
                                    @else
                                    src="{{url('frontpage')}}/assets/images/blogpost-img1.jpg"
                                    @endif
                                    alt="">
                                    <div class="position-absolute produk-text">
                                        {{$item->name}}
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-3 mb-4">
                                <p class="text-center">Belum ada produk</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                @endif
                @if ($wisata->additionalNeeds->isNotEmpty())
                <div class="accordion-item">
                    <div class="pt-3 border-box" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link ml-0 p-0 accordion-title" data-toggle="collapse"
                                data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                Yang Perlu dipersiapkan
                            </button>
                        </h5>
                    </div>
                    <div id="collapse4" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <table class="table mt-2">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wisata->additionalNeeds as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif


            </div>
            <div class="col-md-4 mt-4 mt-md-0">
                @if ($wisata->video)
                <div class="videowrapper">
                    <iframe width="100%" height="100%"
                        src="https://www.youtube.com/embed/{{explode('/', $wisata->video->media_url)[3]}}"
                        title="YouTube video player" frameborder="0" autoplay
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                @endif
                <div class="card mb-4 mt-4 text-white" style="background: #28a745">
                    <div class="card-header">
                        Harga Tiket Masuk
                    </div>
                    <div class="card-body" style="background: #28a745">
                        <table class="table table-striped">
                            <tbody>
                                @forelse ($wisata->tickets as $ticket)
                                <tr class="text-white">
                                    <td><strong>{{$ticket->name}}</strong></td>
                                    <td>Rp.{{$ticket->price}}</td>
                                </tr>
                                @empty
                                <tr class="text-black" style="background: #DBFEE7">
                                    <td>Gratis</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card text-white bg-primary mb-4">
                    <div class="card-header">
                        Harga Parkir Kendaraan
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                @forelse ($wisata->parkingPrices as $parking)
                                <tr class=" text-white">
                                    <td><strong>{{$parking->jenis}}</strong></td>
                                    <td>Rp.{{$parking->price}}</td>
                                </tr>
                                @empty
                                <tr class="text-black" style="background: #dcedff">
                                    <td>Bebas Parkir</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @if ($wisata->pakets->isNotEmpty())
                <div class="mb-4">
                    <h2 class="h4">
                        Paket Wisata ({{$wisata->pakets->count()}})
                    </h2>
                    @foreach ($wisata->pakets as $paket)
                    <div class="mb-4 bg-white rounded">
                        <div class="d-flex p-4">
                            <img src="{{Storage::url($paket->thumbnail)}}" alt=""
                                style="width:150px; height:150px; object-fit: cover;" class="img-fluid">
                            <div class="ml-4 d-flex flex-column" style="flex-grow: 1;">
                                <div class="mb-auto">
                                    <h3 class="h3">{{$paket->name}}</h3>
                                    <p class="text-paket" style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2; /* number of lines to show */
                                    -webkit-box-orient: vertical;">{{$paket->description}}</p>
                                </div>
                                <div class="d-md-flex  justify-content-between align-items-end">
                                    <div>
                                        <p>Harga</p>
                                        <p class="h5 text-dark">Rp. {{$paket->price}}/orang</p>
                                    </div>
                                </div>
                                <form action="{{route('checkout_process', $paket->id)}}" method="post" class="mt-2">
                                    @csrf
                                    <button type="submit" class="btn btn-dark-blue btn-small w-100">Pesan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        {{-- Ulasan --}}
        <div class="accordion-item">
            <div class="pt-3 border-box" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link ml-0 p-0 accordion-title" data-toggle="collapse" data-target="#ulasan"
                        aria-expanded="true" aria-controls="ulasan">
                        Ulasan
                    </button>
                </h5>
            </div>
            <div id="ulasan" class="collapse show mt-4" aria-labelledby="headingOne" data-parent="#accordion">
                @auth
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                        @endforeach
                        @endif
                        <form action="{{route('detailwisata.postcomment', $wisata)}}" method="post">
                            @csrf
                            <div class="card mb-4">
                                <div class="card-header">
                                    <small>Komentar sebagai ({{Auth::user()->name }})</small>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea id="" rows="3" placeholder="Tulis komentar" name="comment"
                                            required></textarea>
                                    </div>
                                    <input type="hidden" name="star_count" value="10">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-small btn-dark-blue">Posting</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                @endauth
                <div class="row">
                    @forelse ($wisata->ulasan as $item)
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between">
                                <small>{{$item->user->name}}</small>
                                @auth
                                @if ($item->user_id == Auth::user()->id)
                                <form action="{{route('detailwisata.deletecomment', $item)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button onclick="confirm('Hapus Komentar?')"
                                        class="btn btn-small btn-danger">Hapus</button>
                                </form>
                                @endif
                                @endauth
                            </div>
                            <div class="card-body">
                                <p>{{$item->comment}}</p>
                            </div>
                        </div>

                    </div>
                    @empty
                    <div class="col-12">
                        <p class="text-center">Belum ada Ulasan</p>
                    </div>
                    @endforelse
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
