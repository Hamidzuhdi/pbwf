<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data user</title>
</head>
<body>
    <h1>Data user</h1>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/admin/modal/edituser/{{ $user->id }}" method="post">
    @csrf
    @method('put')

    <label for="nama">nama:</label>
    <input type="text" name="nama" id="nama" value="{{ $user->nama }}" required>
    <br><br>

    <label for="mail">mail:</label>
    <input type="text" name="mail" id="mail" value="{{ $user->mail }}" required>
    <br><br>

    <label for="role">role:</label>
    <select name="role" id="role" required>
        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="customer" {{ $user->role === 'customer' ? 'selected' : '' }}>Customer</option>
    </select>
    <br><br>

    <label for="telp">telp:</label>
    <input type="text" name="telp" id="telp" value="{{ $user->telp }}" required>
    <br><br>
    <button type="submit">Update</button>
</form>

</body>
</html>
