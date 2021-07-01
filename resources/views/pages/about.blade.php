@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
<style>
    .bg-wrapper {
        background-image: url('{{url('frontpage/assets/images/bg-about.png')}}');
        width: 100%;
        height: auto;
        background-size: cover;
        min-height: 100vh;
    }
</style>
@endsection

@section('content')
<div id="dtr-main-content">

    <!-- hero section starts -->
    <section id="about" class="dtr-section dtr-box-layout dtr-hero-section-top-padding">
        <div class="d-flex flex-column justify-content-between" style="height: 80vh;">
            <div class="about-content">
                <h1 class="display-4 text-white" style="text-shadow: none;">Liburan Jadi Menyenangkan</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-white h4 text-height-2">
                            Kami akan membantumu menemukan pengalaman terbaik yang tidak akan pernah kamu lupakan.
                        </p>
                    </div>
                </div>
            </div>
            <footer class="d-flex justify-content-between mb-4">
                <div>
                    <p class="h4 text-white">Resfeber</p>
                    <p class="text-white">Dibuat oleh tim pkl TI 2018</p>
                </div>
                <div>
                    <p class="text-white">Social Media</p>
                </div>
            </footer>
        </div>
    </section>
    <!-- hero section ends -->

</div>
@endsection
