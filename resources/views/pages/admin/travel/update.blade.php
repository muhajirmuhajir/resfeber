@extends('layouts.admin')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Travel</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('admin.travel.update', $travel->id)}}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Travel</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" value="{{$travel->name}}" class="form-control"
                                        placeholder="Nama Travel" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <input type="text" name="description" value="{{$travel->description}}" class="form-control"
                                        placeholder="Deskripsi" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" value="{{$travel->email}}" class="form-control"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nomor HP</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone_number" value="{{$travel->phone_number}}"
                                        class="form-control" placeholder="Nomor HP" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" value="{{$travel->address}}" class="form-control"
                                        placeholder="Alamat" required>
                                </div>
                            </div>
                            <a href="{{route('admin.travel.index')}}" class="btn btn-outline-primary">Batal</a>
                            <button type="submit" class="btn btn-primary">Save changes</button>

                        </form>

                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
</div>
@endsection
