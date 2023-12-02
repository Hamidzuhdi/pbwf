<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h3>Nanti harus ada tagihan dan juga uang bayar dan otomatis menghasilkan kembalian</h3>

    <form action="/pembayaran" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Tambahkan input untuk total harga -->
        <input type="number" name="total_harga" id="total_harga" value="{{ $totalharga }}" readonly>
        <p>pemesanan id: {{ $pemesananId }}</p>
        <p>Total Tagihan: {{ $totalharga }}</p>

        <!-- Input untuk menyimpan nilai rowa -->
        <input type="hidden" name="rowa" id="rowa" readonly>

        <input type="hidden" name="pemesanan_id" id="pemesanan_id" value="{{ $pemesananId }}" readonly>

        <label for="total_bayar">Jumlah Uang Dibayarkan:</label>
        <input type="number" name="total_bayar" id="total_bayar" required>

        <label for="dikembalikan">Uang Kembali:</label>
        <input type="text" name="dikembalikan" id="dikembalikan" readonly>

        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" id="gambar">
        <br><br>

        <button type="submit">Bayar</button>
    </form>

    <!-- Di halaman pembayaran -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil nilai rowa dari parameter URL
            const urlParams = new URLSearchParams(window.location.search);
            const rowaValue = urlParams.get("rowa");

            // Setel nilai dari rowaValue ke elemen dengan id "rowa" di halaman ini
            document.querySelector("#rowa").value = rowaValue;
        });
    </script>

<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
