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
            <div class="card-container">
                <div class="card">
                    halo ini card!
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
