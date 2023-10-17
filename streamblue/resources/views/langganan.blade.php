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
    @foreach($langganans as $langganan)
        <div class="card">
            <div class="card-body">
                <p class="m-0">{{ $langganan->ket }} {{ $langganan->tipe ? '+ UCL' : '- UCL' }}</p>
            </div>
            <div class="card-header">
                <a href="/pemesanan">
                    <img src="{{ asset('gambar/'.$langganan->gambar) }}" alt="{{ $langganan->gambar }}" class="gambar-langganan">
                </a>
            </div>
            <div class="card-footer">
                <p class="m-0">{{ $langganan->harga }} / bulan</p>
            </div>
            <a href="/tampildatalangganan/{{ $langganan->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
        </div>
    @endforeach

    </div>
    <a href="/tambalangganan" class="btn btn-sm btn-success" style="margin-left: 200px">Tambah Langganan Baru</a>
</body>
</html>
