<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Pertandingan</title>
</head>
<body>
    <h1>Data Pertandingan</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/tampildatapertandingan/{{ $pertandingan->id }}" method="post">
    @csrf
    @method('put')

    <label for="tgl_pertandingan">Tanggal Pertandingan</label>
    <input type="datetime" name="tgl_pertandingan" id="tgl_pertandingan" value="{{ $pertandingan->tgl_pertandingan }}" required>
    <br><br>

    <label for="nama_pertandingan">Versus</label>
    <input type="text" name="nama_pertandingan" id="nama_pertandingan" value="{{ $pertandingan->nama_pertandingan }}" required>
    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
