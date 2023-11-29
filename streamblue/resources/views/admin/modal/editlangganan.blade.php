<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Langganan</title>
</head>
<body>
    <h1>Data Langganan</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/admin/modal/editlangganan/{{ $langganan->id }}" method="post">
    @csrf
    @method('put')

    <label for="ket">Keterangan:</label>
    <input type="text" name="ket" id="ket" value="{{ $langganan->ket }}" required>
    <br><br>

    <label for="gambar">gambar:</label>
    <input type="file" name="gambar" id="gambar" value="{{ $langganan->gambar }}" required>
    <br><br>

    <label for="harga">Harga:</label>
    <input type="number" name="harga" id="harga" value="{{ $langganan->harga }}" required>
    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
