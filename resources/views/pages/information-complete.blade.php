@extends('layouts.frontpage')


@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
@endsection


@section('content')
<div id="dtr-main-content">

    <!-- hero section starts -->
    <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
        <div class="row flex-row-reverse">
            <div class="col-md-6">
                <div class="img-container">
                    <div class="position-relative">
                        <img src="{{url('frontpage/assets/images/image-register.png')}}" alt="" srcset=""
                            class="img-fluid">
                        <div class="h2 p-4 px-5 border-box register-text-position">
                            Semarang
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-container border-box px-4 pt-5">
                    <h1 class="h1">Lengkapi Informasi</h1>
                    <p>Mendaftar ke situs web ini, Anda menerima
                        <a href="#" class="text-primary">Ketentuan Penggunaan</a> dan
                        <a href="#" class="text-primary">
                            Kebijakan Privasi kami
                        </a>
                    </p>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. HP</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="No. HP">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <textarea type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Alamat"> </textarea>
                        </div>

                        <button type="submit" class="dtr-btn btn-dark-blue d-block w-100 mt-5">Simpan dan
                            Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section ends -->

</div>
@endsection
