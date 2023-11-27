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
<body>
    {{-- @foreach ($pertandingans as $pertandingan)
        <div>
            <h6 class="liga">{{ $pertandingan->liga }}</h3>
        </div>
    @endforeach --}}
    @foreach ($pertandingans as $pertandingan )
        @if ($pertandingan->liga == 'epl')
        <div>
            <h6 class="liga">{{ $pertandingan->liga }}</h6>
        </div>
            <div class="Bungkus">
                <div class="Pertama">
                    <p class="tgl_pertandingan">{{ $pertandingan->tgl_pertandingan }}</p>
                    <br>
                </div>
                <div class="P-Dua">
                    <span class="nama_pertandingan">{{ $pertandingan->nama_pertandingan }}</span>
                    <br>
                </div>
                <div>
                    <a href="#">
                        <i class="bi bi-tv-fill"></i>
                    </a>
                </div>
            </div>
        @elseif ($pertandingan->liga == 'CONCERT')
        <div>
            <h6 class="liga">{{ $pertandingan->liga }}</h6>
        </div>
            <div class="Bungkus">
                <div class="Pertama">
                    <p class="tgl_pertandingan">{{ $pertandingan->tgl_pertandingan }}</p>
                    <br>
                </div>
                <div class="P-Dua">
                    <span class="nama_pertandingan">{{ $pertandingan->nama_pertandingan }}</span>
                    <br>
                </div>
                <div>
                    <a href="#">
                        <i class="bi bi-tv-fill"></i>
                    </a>
                </div>
            </div>
        @elseif ($pertandingan->liga == 'bundesliga')
        <div>
            <h6 class="liga">{{ $pertandingan->liga }}</h6>
        </div>
            <div class="Bungkus">
                <div class="Pertama">
                    <p class="tgl_pertandingan">{{ $pertandingan->tgl_pertandingan }}</p>
                    <br>
                </div>
                <div class="P-Dua">
                    <span class="nama_pertandingan">{{ $pertandingan->nama_pertandingan }}</span>
                    <br>
                </div>
                <div>
                    <a href="#">
                        <i class="bi bi-tv-fill"></i>
                    </a>
                </div>
            </div>
        @endif
     @endforeach
</body>

@endsection


