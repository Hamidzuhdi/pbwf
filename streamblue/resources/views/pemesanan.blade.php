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
        <div class="card-body d-flex">
            <p>Langganan ID: {{ $langgananId }}</p>
            <img src="{{ asset('gambar/' . $langgananGambar) }}" alt="{{ $langgananGambar }}" class="gambar-langganan">
            <div class="desc w-100">
                <p style="margin-right: 20px"> Price / Duration :
                <input type="number" class="form-control border-0 fs-1" id="harga" value="200000">
                    <div class="col-sm-5 d-flex">
                        <button class="rounded-start bg-secondary p-2 border border-0 plus"
                            id="plus">+</button>
                        <input type="number" name="qty" class="form-control w-25 text-center qty"
                            id="qty" name="qty" value="1">
                        <button class="rounded-end bg-secondary p-2 border border-0 minus" id="minus"
                            disabled>-</button>
                    </div>
                    <div class="row">
                        <label for="price" class="col-sm-2 col-form-label fs-5">TotalHarga</label>
                        <input type="text" class="col-sm-2 form-control w-25 border-0 fs-4 total" name="total" readonly
                            id="total">
                    </div>
                </p>
                <br> <br>
                <a href="/pembayaran" class="btn btn-sm btn-success" style="margin-left: 200px">Pay</a>
            </div>
        </div>
    </div>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
