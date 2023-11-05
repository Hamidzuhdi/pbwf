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
                <input type="hidden" name="total" id="total" value="{{ $total }}" readonly>

        <label for="diterima">Jumlah Uang Dibayarkan:</label>
        <input type="number" name="diterima" id="diterima" required>

        <label for="dikembalikan">Uang Kembali:</label>
        <input type="text" name="dikembalikan" id="dikembalikan" readonly>

        <button type="submit">Bayar</button>
    </form>

    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
