@extends('layouts.admin')

@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row ">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Paket Wisata</h4>
                        <a class="btn btn-primary">Tambah Paket Wisata</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width80">#</th>
                                        <th>NAMA TEMPAT WISATA</th>
                                        <th>TOUR TRAVEL</th>
                                        <th>NAMA PAKET</th>
                                        <th>DESKRIPSI</th>
                                        <th>HARGA</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($paket as $item)
                                    <tr>
                                        <td><strong>{{$paket->firstItem(+ $key)}}</strong></td>
                                        <td>{{$item->tempatWisata->name}}</td>
                                        <td>{{$item->tourTravel->name}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->price}}</td>

                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7">
                                            <p class="text-center">Masih Kosong</p>
                                        </td>
                                    </tr>
                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
