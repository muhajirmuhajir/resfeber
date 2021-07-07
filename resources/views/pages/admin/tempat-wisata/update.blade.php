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
        @livewire('form-tempat-wisata', ['wisata' => $wisata])
    </div>
</div>
</div>
@endsection

@section('script')
<script src="{{url('backpage/vendor/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>

<script src="{{url('backpage/js/plugins-init/clock-picker-init.js')}}"></script>

@endsection
