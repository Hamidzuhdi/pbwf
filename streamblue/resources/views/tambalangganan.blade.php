<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Langganan</title>
</head>
<body>

<h1>tambah Data Langganan</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/tambalangganan" method="post">
    @csrf
    <label for="tipe">Tipe</label>
    <input type="hidden" name="tipe" value="0"> <!-- Ini akan menjadi false secara default -->
    <input type="checkbox" name="tipe" id="tipe" value="1"> <!-- Ini akan menjadi true jika dicentang -->
    <br><br>

    <label for="harga">Harga:</label>
    <input type="number" name="harga" id="harga" required>
    <br><br>

    <label for="durasi">Durasi (bulan):</label>
    <input type="number" name="durasi" id="durasi" required>
    <br><br>

    <label for="extends">Diperpanjang?</label>
    <input type="checkbox" name="extends" id="extends">
    <br><br>

    <button type="submit">Add</button>
</form>
</body>
</html>
