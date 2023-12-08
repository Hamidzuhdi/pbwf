

    <link rel="stylesheet" href="cantik/c-login.css">

<body>
    <main>
        <header>
            <div class="logo">
                <img src="{{ asset('gambar/logo.jpeg') }}">
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-header">Login Your Account</div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="mail" class="form-label">Email</label>
                                <input type="text" name="mail" id="mail" value="{{ old('mail') }}" class="form-control">
                                @error("mail")
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error("password")
                                <div class="text-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="create">
                                <button type="submit" class="btn btn-primary">Login</button>
                                    <div class="account">
                                        <a href="/regris" style="margin-left: 500px"><br>Create Account</a>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    </body>

