<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan</title>
    <link rel="stylesheet" href="cantik/c-pemesanan.css">
    <link rel="stylesheet" href="{{ asset('js/custom.js') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <h1>Halaman Pemesanan</h1>
    <div class="card">
        <form action="/pemesanan" method="post">
            @csrf
        <div class="card-body d-flex">
            <p>Langganan ID: {{ $langgananId }}</p>
            <input type="hidden" name="langganan_id" id="langganan_id" value="{{ $langgananId }}">
            <label for="user_id">User Id</label>
            <input type="text" name="user_id" id="user_id" required>
            <img src="{{ asset('gambar/' . $langgananGambar) }}" alt="{{ $langgananGambar }}" class="gambar-langganan">
            <div class="desc w-100">
                <p style="margin-right: 20px"> Price / Duration :     </p>
                <input type="number" class="form-control border-0 fs-1" name="harga" id="harga" value="{{ $langgananharga }}" readonly>
                    <div class="col-sm-5 d-flex">
                        <button class="rounded-start bg-secondary p-2 border border-0 plus"
                            id="plus">+</button>
                        <input type="number" name="durasi" class="form-control w-25 text-center qty"
                            id="durasi" name="durasi" value="1">
                        <button class="rounded-end bg-secondary p-2 border border-0 minus" id="minus"
                            disabled>-</button>
                    </div>
                    <div class="rowa">
                        <label for="price" class="col-sm-2 col-form-label fs-5">Total Harga</label>
                        <input type="text" class="col-sm-2 form-control w-25 border-0 fs-4 total" name="total_harga" readonly
                            id="total_harga">
                    </div>
                <div class="btn btn-success">
                    <i class="fa fa-shopping-cart"></i>
                    <a id="tautanPembayaran" href="/pembayaran?total_harga={{ $langgananharga }}"><button type="submit">Pay</button></a>
                </div>
            </div>
        </div>
    </form>
    </div>

    <!-- Di halaman pemesanan -->
    <script>
        // Ambil nilai total_harga dari elemen di halaman ini
        const langgananharga = document.querySelector("#total_harga").textContent;

        // Ambil nilai dari elemen dengan class "rowa"
        const rowaValue = document.querySelector(".rowa").textContent;

        // Tambahkan nilai total_harga dan nilai "rowa" ke tautan pembayaran
        const tautanPembayaran = document.querySelector("#tautanPembayaran");
        tautanPembayaran.href = `/pembayaran?total_harga=${langgananharga}&rowa=${rowaValue}`;
    </script>


<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
