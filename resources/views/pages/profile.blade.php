@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">

@endsection

@section('content')
<div id="dtr-main-content">

    <!-- hero section starts -->
    <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
        <div class="position-relative bg-white rounded px-4 pb-4 profile-section">
            <div class="profile-container text-center">
                @if (Auth::user()->image_url)
                <img class="img-fluid" src="{{Storage::url(Auth::user()->image_url)}}" alt="">
                @else
                <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" alt="" srcset="">
                @endif
                <p class="h5 mt-2">{{auth()->user()->name}}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pink-card rounded p-4">
                        <div class="d-flex mb-3 align-items-center">
                            <img class="img-fluid" src="{{url('frontpage/assets/images/ic-email.png')}}" alt="">
                            <p class="ml-4 text-blue">{{auth()->user()->email}}</p>
                        </div>
                        <div class="d-flex mb-3 align-items-center">
                            <img class="img-fluid" src="{{url('frontpage/assets/images/ic-location.png')}}" alt="">
                            <p class="ml-4 text-blue">{{auth()->user()->address ?? "Tambah Alamat"}}</p>
                        </div>
                        <div class="d-flex mb-3 align-items-center">
                            <img class="img-fluid" src="{{url('frontpage/assets/images/ic-telepon.png')}}" alt="">
                            <p class="ml-4 text-blue">{{auth()->user()->phone_number ?? "Tambah Nomor Handphone"}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pink-card rounded overflow-hidden d-flex mb-3 align-items-center">
                        <div class="p-4 bg-dark text-white">
                            {{$success_count}}
                        </div>
                        <p class="ml-4 h5">Transaksi Berhasil</p>
                    </div>
                    <div class="pink-card rounded overflow-hidden d-flex mb-3 align-items-center">
                        <div class="p-4 bg-dark text-white">
                            {{$pending_count}}
                        </div>
                        <p class="ml-4 h5">Transaksi Tertunda</p>
                    </div>
                </div>
            </div>
            @if (session('status'))
            <div class="alert alert-success mt-2">
                {{ session('status') }}
            </div>
            @endif
            @if (session('password'))
            <div class="alert alert-danger mt-2">
                {{ session('password') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger mt-2">
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </div>
            @endif
            <div class="row mt-2">
                <div class="col-md-6 mb-2">

                    <button type="button" class="btn btn-primary w-100" data-toggle="modal"
                        data-target=".bd-modal-edit-profile">Edit Profile</button></div>
                <div class="col-md-6 mb-2">
                    <button type="button" class="btn btn-info w-100" data-toggle="modal"
                        data-target=".bd-modal-update-password">Ubah Password</button></div>
            </div>
        </div>
    </section>
    <!-- hero section ends -->

</div>


<div>
    <div class="modal fade bd-modal-edit-profile" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{Auth::user()->name }}" class="form-control"
                                    placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="address" value="{{Auth::user()->address }}"
                                    class="form-control" placeholder="Nama Travel" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No. Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" name="phone_number" value="{{Auth::user()->phone_number }}"
                                    class="form-control" placeholder="Nama Travel" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-3 col-form-label">Foto Profile</label>
                            <div class="col-sm-9">
                                <input type="file" name="image_url" id="file" class="form-control"
                                    placeholder="Foto Profile">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<div>
    <div class="modal fade bd-modal-update-password" tabindex="-2" role="dialog" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{route('profile.password')}}" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password Sekarang</label>
                            <div class="col-sm-9">
                                <input type="password" name="current_password" class="form-control"
                                    placeholder="Password Sekarang" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password Baru</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" placeholder="Password Baru"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
                            <div class="col-sm-9">
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Konfirmasi Password Baru" required>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </form>
        </div>
    </div>

</div>

@endsection
