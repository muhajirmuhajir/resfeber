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
                    @if ($errors->any())
                    {{$errors}}
                    @endif
                    <form method="post" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember" name="remember">Ingat saya</label>
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
