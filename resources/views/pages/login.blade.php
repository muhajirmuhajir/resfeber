@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
@endsection

@section('content')
<div id="dtr-main-content">

    <!-- hero section starts -->
    <section id="home" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
        <div class="row ">
            <div class="col-md-6">
                <div class="img-container">
                    <div class="position-relative">
                        <img src="{{url('frontpage/assets/images/image-login.png')}}" alt="" srcset=""
                            class="img-fluid">
                        <div class="h2 p-4 px-5 border-box login-text-position">
                            Magetan
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-container border-box px-4 pt-5">
                    <h1 class="h1">Masuk</h1>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                        </div>
                        <button type="submit" class="dtr-btn btn-dark-blue d-block w-100">Masuk</button>
                    </form>
                    <p class="text-center mt-5">Tidak punya akun?
                        <a href="register.html">Daftar</a>
                        <br>
                        <a href="#">Saya lupa password</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section ends -->

</div>
@endsection
