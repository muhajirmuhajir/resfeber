@extends('layouts.admin')

@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row ">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Paket Wisata</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin.paket-wisata.update', $paket->id)}}" method="post"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Tempat Wisata</label>
                                <div class="col-sm-9">
                                    <select name="tempat_wisata_id" id="" class="form-control" required>
                                        <option value="" selected>Nama Tempat Wisata</option>
                                        @foreach (\App\Models\TempatWisata::all() as $item)
                                        <option value="{{$item->id}}" @if ($paket->tempat_wisata_id ==
                                            $item->id){{"selected"}}@endif >{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tour Travel</label>
                                <div class="col-sm-9">
                                    <select name="tour_travel_id" id="" class="form-control" required>
                                        <option value="" selected>Nama Travel</option>
                                        @foreach (\App\Models\TourTravel::all() as $item)
                                        <option value="{{$item->id}}" @if ($paket->tour_travel_id ==
                                            $item->id){{"selected"}}@endif>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Paket</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Paket"
                                        value="{{$paket->name}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control" rows="5"
                                        required>{{$paket->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-9">
                                    <input type="number" name="price" class="form-control" placeholder="Harga"
                                        value="{{$paket->price}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file" class="col-sm-3 col-form-label">Thumbnail</label>
                                <div class="col-sm-9">
                                    <input type="file" name="thumbnail" id="file" class="form-control"
                                        placeholder="Thumbnail" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <img src="{{Storage::url($paket->thumbnail)}}" class="w-50 img-thumbnail" alt=""
                                    srcset="">
                            </div>
                            <a href="{{route('admin.paket-wisata.index')}}" class="btn btn-outline-primary">Batal</a>
                            <button type="submit" class="btn btn-primary">Save changes</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
