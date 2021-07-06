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
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg">Tambah Tempat Wisata</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" style="display: none;"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <form action="{{route('admin.tempat-wisata.store')}}" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Tempat Wisata</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Tempat Wisata</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Nama Tempat Wisata" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                </form>
                            </div>
                        </div>
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
                                    <td>{{$item->slug}}</td>
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
