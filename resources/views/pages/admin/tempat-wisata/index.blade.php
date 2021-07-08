@extends('layouts.admin')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Tempat Wisata</h4>
                        <x-modal-tempat-wisata />
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th class="width80">#</th>
                                    <th>NAMA</th>
                                    <th>URL</th>
                                    <th>LOKASI</th>
                                    <th>STATUS</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($wisata as $key => $item)
                                <tr>
                                    <td><strong>{{$wisata->firstItem()+ $key}}</strong></td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a href="{{route('detailwisata',['slug' => $item->slug])}}"
                                            target="_blank">{{$item->slug}}</a>
                                    </td>
                                    <td>Jl. Danau Sentani</td>
                                    <td><span
                                            class="badge light {{$item->status == 'DRAFT'? 'badge-warning': 'badge-success'}}">{{Str::of(Str::lower($item->status))->ucfirst()}}</span>
                                    </td>
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
                                                    href="{{route('admin.tempat-wisata.edit', ['tempat_wisatum' => $item->id])}}">Edit</a>
                                                <form
                                                    action="{{route('admin.tempat-wisata.destroy', ['tempat_wisatum' => $item->id])}}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>Data Masih Kosong</tr>
                                @endforelse


                            </tbody>
                        </table>
                        {{$wisata->links()}}
                    </div>

                </div>
            </div>

        </div>


    </div>
</div>
</div>
@endsection
