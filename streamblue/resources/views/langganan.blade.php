<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Langganan</title>
    <link rel="stylesheet" href="cantik/c-langganan.css">
</head>
<body>
    <div class="pilih">
        @foreach($langganans as $index => $langganan)
            <div class="card">
                <div class="card-header">
                    <a href="/langganan">
                        <img src="{{ $index % 2 == 0 ? 'gambar/ucl.jpeg' : 'gambar/noucl.jpeg' }}" alt="satu_{{ $index }}" class="gambar-langganan">
                    </a>
                </div>
                <div class="card-body">
                    <p class="m-0">EPL, LALIGA, SERI A, LIGUE 1, BUNDESLIGA {{ $index % 2 == 0 ? '+ UCL' : '- UCL' }}</p>
                </div>
                <div class="card-footer">
                    <p class="m-0">{{ $langganan->harga }} / bulan</p>
                </div>
            </div>
        @endforeach
    </div>
    <a href="/tambalangganan" class="btn btn-sm btn-success" style="margin-left: 200px">Tambah Langganan Baru</a>
</body>
</html>
