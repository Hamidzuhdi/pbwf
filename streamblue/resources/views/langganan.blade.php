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
            <div class="card-body" data-langganan-id={{ $langganan->id }}>
                <p class="m-0">{{ $langganan->ket }} {{ $langganan->tipe ? '+ UCL' : '- UCL' }}</p>
            </div>
            <div class="card-header">
                <a href="/pemesanan?langgananId={{ $langganan->id }}&langgananGambar={{ $langganan->gambar }}&langgananharga={{ $langganan->harga }}">
                    <!-- Tambahkan atribut data dengan nilai gambar langganan -->
                    <img src="{{ asset('gambar/' . $langganan->gambar) }}" data-langganan-gambar="{{ $langganan->gambar }}" alt="{{ $langganan->gambar }}" class="gambar-langganan">
                </a>
            </div>
            <div class="card-footer" data-langganan-harga="{{ $langganan->harga }}">
                <p class="m-0">{{ $langganan->harga }} / bulan</p>
            </div>
        </div>
    @endforeach

    </div>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Temukan semua elemen card
        const pilihs = document.querySelectorAll(".pilih");

        // Tambahkan event click ke setiap pilih
        pilihs.forEach(pilih => {
            pilih.addEventListener("click", function() {
                // Dapatkan data langganan dan gambar dari pilih yang dipilih
                const langgananId = pilih.querySelector(".pilih-body").getAttribute("data-langganan-id");
                const langgananGambar = pilih.querySelector(".gambar-langganan").getAttribute("data-langganan-gambar");
                const langgananharga = pilih.querySelector(".card .card-footer").getAttribute("data-langganan-harga");

                // Arahkan pengguna ke halaman pemesanan dengan data yang dipilih
                window.location.href = `/pemesanan?langgananId=${langgananId}&langgananGambar=${langgananGambar}&langgananharga=${langgananharga}`;
            });
        });
    });
    </script>
    </html>


</html>
