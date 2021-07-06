@extends('layouts.admin')

@section('style')
<!-- Clockpicker -->
<link href="{{url('backpage/vendor/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
<link href="{{url('backpage/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">

@endsection

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <h2 class="h2">Edit Tempat Wisata</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Info Umum</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('admin.tempat-wisata.update', ['tempat_wisatum' => $wisata->id])}}"
                                method="post">
                                @csrf
                                @method('put')
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" value="{{$wisata->name}}"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-9">
                                        <textarea name="history" class="form-control" rows="4"
                                            id="comment">{{$wisata->history}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                        <label>Jam Buka</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                            data-autoclose="true">
                                            <input type="text" name="jam_buka" class="form-control"
                                                value="{{$wisata->jam_buka}}"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 col-xxl-6 mb-3">
                                        <label>Jam Tutup</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                            data-autoclose="true">
                                            <input type="text" name="jam_tutup" class="form-control"
                                                value="{{$wisata->jam_tutup}}"> <span class="input-group-append"><span
                                                    class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kontak pengelola</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="contact" class="form-control"
                                            value="{{$wisata->contact}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary ml-auto d-block">Simpan</button>
                                    </div>
                                </div>
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

@section('script')
<script src="{{url('backpage/vendor/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>

<script src="{{url('backpage/js/plugins-init/clock-picker-init.js')}}"></script>

@endsection
