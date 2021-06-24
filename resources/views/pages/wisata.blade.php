@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('css/custom.css')}}">
@endsection


@section('content')
<div id="dtr-main-content">
    <section id="home" class="ctm-margin-x ctm-padding-top d-flex">
        <div class="box-filter">
            <h5>Filter</h5>
            <p>Saring berdasarkan</p>
            <form action="">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Default checkbox
                    </label>
                </div>
            </form>
        </div>
        <div class="konten-box">
            <h1>Jawa Timur</h1>
            <p>Daftar destinasi wisata sekitar Jawa Timur.</p>
            <div class="row">
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/images/ranu.png" class="card-img-top">
                        <div class="card-body">

                            <h5 class="card-title">Ranu Kumbolo</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/images/ranu.png" class="card-img-top ">
                        <div class="card-body">

                            <h5 class="card-title">Ranu Kumbolo</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/images/ranu.png" class="card-img-top">
                        <div class="card-body">

                            <h5 class="card-title">Ranu Kumbolo</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                </div>
            </div>


        </div>
    </section>
</div>
@endsection
