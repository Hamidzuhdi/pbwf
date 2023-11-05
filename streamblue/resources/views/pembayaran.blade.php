<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran</title>
</head>
<body>
    <h3>Nanti harus ada tagihan dan juga uang bayar dan otomatis menghasilkan kembalian</h3>

    <form action="/pembayaran" method="POST">
        @csrf
        <input type="hidden" name="pemesanan_id" id="pemesanan_id" value="{{ $total }}" readonly>

        <div class="rowa">
            <label for="price" class="col-sm-2 col-form-label fs-5">Total Harga</label>
            <input type="text" class="col-sm-2 form-control w-25 border-0 fs-4 total" name="total_harga" readonly id="total_harga" value="{{ $langgananharga }}">
        </div>
        <p>Rowa Value: <span id="rowa"></span></p>


        <label for="diterima">Jumlah Uang Dibayarkan:</label>
        <input type="number" name="diterima" id="diterima" required>

        <label for="dikembalikan">Uang Kembali:</label>
        <input type="text" name="dikembalikan" id="dikembalikan" readonly>

        <button type="submit">Bayar</button>
    </form>

    <!-- Di halaman pembayaran -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil nilai rowa dari parameter URL
            const urlParams = new URLSearchParams(window.location.search);
            const rowaValue = urlParams.get("rowa");

            // Setel nilai dari rowaValue ke elemen dengan id "rowa" di halaman ini
            document.querySelector("#rowa").textContent = rowaValue;
        });
    </script>



    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
