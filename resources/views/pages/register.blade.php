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
                    <div class="position-relative semarang">
                        <img src="{{url('frontpage/assets/images/image-register.png')}}" alt="" srcset=""
                            class="img-fluid">
                        <div class="h2 p-4 px-5 border-box register-text-position">
                            Semarang
                        </div>
                    </div>
                </div>
            </div>

            <Script>
                gsap.from('.semarang',{duration: 2, x: 100, opacity: 5} );
            </Script>

            <div class="col-md-6 daftar">
                <div class="card-container border-box px-4 pt-5">
                    <h1 class="h1">Daftar akun</h1>
                    @if ($errors->any())
                    <div class="alert alert-danger my-2 p-2">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    </div>
                    @endif
                    <form method="post" action="{{route('register')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                                placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password_confirmation"
                                id="password_confirmation" placeholder="Konfirmasi Password">
                        </div>
                        <button type="submit" class="dtr-btn btn-dark-blue d-block w-100 mt-5">Buat
                            Akun</button>
                    </form>
                </div>
            </div>

            <Script>
                gsap.from('.daftar',{delay: 0.5, duration: 1, x: -100, opacity: 5} );
            </Script>

        </div>
    </section>
    <!-- hero section ends -->

</div>
@endsection
