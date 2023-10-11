@extends('hubung.layout')

@section('css2')
    <link rel="stylesheet" href="cantik/c-regris.css">
@endsection

@section('sambung')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="cantik/c-regris.css">
    <title>Registrasi Pemain Sepak Bola</title>
</head>
<body>
    <div class="container">
        <h1>Registrasi Pemain Sepak Bola</h1>
         <form action="{{ route('regris') }}" method="post">
             @csrf
            <div class="mb-4">
                <label for="nama" class="form-label" style="background-color: whitesmoke">Username</label>
                <input type="text" name="nama" id="nama" class="form-control">
                @error("nama")
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="mail" class="form-label" style="background-color: whitesmoke">Email</label>
                <input type="text" name="mail" id="mail" class="form-control">
                @error("mail")
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="role" class="form-label" style="background-color: whitesmoke">Role</label>
                <select name="role" id="role" class="form-select">
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                </select>
                @error("role")
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="telp" class="form-label" style="background-color: whitesmoke">Telp</label>
                <input type="text" name="telp" id="telp" class="form-control">
                @error("telp")
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="form-label" style="background-color: whitesmoke">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                @error("password")
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</body>

@endsection
