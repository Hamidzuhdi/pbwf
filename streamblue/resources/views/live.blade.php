@extends('hubung.layout')

@section('css1')
     <!-- Bootstrap icons-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
     <!-- Google fonts-->
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="cantik/c-live.css">
@endsection
@section('sambung')
<div class="container">

    <div class="team-names">
        <span class="team">Chelsea</span>
        <div class="live-info">
            <i class="bi bi-tv"></i>
            <a href="http://">
            <span class="live-text">Live Now</span>
            </a>
        </div>
        <span class="team">Barcelonna</span>
    </div>
    <div class="team-names">
        <span class="team">Juventus</span>
        <div class="live-info">
            <i class="bi bi-tv"></i>
            <a href="http://">
            <span class="live-text">Live Now</span>
            </a>
        </div>
        <span class="team">Real Madrid</span>
    </div>
    <div class="team-names">
        <span class="team">Man Ciyy</span>
        <div class="live-info">
            <i class="bi bi-tv"></i>
            <a href="http://">
            <span class="live-text">Live Now</span>
            </a>
        </div>
        <span class="team">PSG</span>
    </div>
    <div class="team-names">
        <span class="team">Bayern</span>
        <div class="live-info">
            <i class="bi bi-tv"></i>
            <a href="http://">
            <span class="live-text">Live Now</span>
            </a>
        </div>
        <span class="team">Napoli</span>
    </div>
    <!-- Letakkan ini di dalam bagian konten halaman Anda -->
{{-- <div class="live-info">
    <i class="bi bi-tv"></i>
    <span class="live-text">Live Now</span>
</div> --}}
</div>
@endsection
