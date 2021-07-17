@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">
@livewireStyles
@endsection


@section('content')
<div id="dtr-main-content">
    <!-- wisata section starts -->
    @livewire('wisata-filter')
    <!-- wisata section ends -->
</div>
@endsection

@section('script')
@livewireScripts
@endsection
