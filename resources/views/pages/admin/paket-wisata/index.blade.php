@extends('layouts.admin')

@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row ">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Paket Wisata</h4>
                        <x-modal-paket />
                    </div>
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
                                    <th>HARGA</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($paket as $key=> $item)
                                <tr>
                                    <td><strong>{{$paket->firstItem()+$key}}</strong></td>
                                    <td>{{$item->tempatWisata->name ?? "-"}}</td>
                                    <td>{{$item->tourTravel->name ?? "-"}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button"
                                                class="btn {{$item->status == 'DRAFT'? 'btn-warning': 'btn-success'}} light sharp"
                                                data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="5" cy="12" r="2" />
                                                        <circle fill="#000000" cx="12" cy="12" r="2" />
                                                        <circle fill="#000000" cx="19" cy="12" r="2" />
                                                    </g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{route('admin.paket-wisata.edit',  $item->id)}}">Edit</a>
                                                <button type="button" class="dropdown-item" data-toggle="modal"
                                                    data-target="#modalPaket{{$item->id}}">
                                                    Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </td>
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
                        {{$paket->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@foreach ($paket as $item)
<div class="modal fade" id="modalPaket{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Tempat Wisata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.paket-wisata.destroy', $item->id)}}" method="post">
                @csrf
                @method('delete')
                <div class="modal-body">
                    Hapus Paket Wisata {{$item->name}} ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
