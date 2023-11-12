<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Pertandingan</title>
</head>
<body>

<h1>tambah Data Pertandingan</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/tambapertandingan" method="post">
    @csrf
    <label for="tgl_pertandingan">Tanggal Pertandingan</label>
    <input type="datetime-local" name="tgl_pertandingan" id="tgl_pertandingan" required>
    <br><br>

    <label for="nama_pertandingan">Versus</label>
    <input type="text" name="nama_pertandingan" id="nama_pertandingan" required>
    <br><br>

    <label for="liga">Liga</label>
    <input type="text" name="liga" id="liga" required>
    <br><br>

    <label for="langganan_id">Langganan Id:</label>
    <input type="number" name="langganan_id" id="langganan_id" required>
    <br><br>

    <button type="submit">Add</button>
</form>
</body>
</html>
