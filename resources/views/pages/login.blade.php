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
                    <div class="position-relative sarangan">
                        <img src="{{url('frontpage/assets/images/image-login.png')}}" alt="" srcset=""
                            class="img-fluid">
                        <div class="h2 p-4 px-5 border-box login-text-position">
                            Telaga Sarangan
                        </div>
                    </div>
                </div>
            </div>

            <Script>
                gsap.from('.sarangan',{duration: 1, x: -100, opacity: 5} );
            </Script>

            <div class="col-md-6 masuk">
                <div class="card-container border-box px-4 pt-5">
                    <h1 class="h1">Masuk</h1>
                    @error('email')
                    {{$message}}
                    @enderror
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
                        <a href="{{route('register')}}">Daftar</a>
                        <br>
                        <a href="{{route('password.request')}}">Saya lupa password</a>
                    </p>
                </div>
            </div>

            <Script>
                gsap.from('.masuk',{duration: 1, x: 100, opacity: 5} );
            </Script>

        </div>
    </section>
    <!-- hero section ends -->

</div>
@endsection
