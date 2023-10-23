<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap icons-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- Google fonts-->
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="cantik/c-layout.css"> <!-- Tautkan file CSS -->
    @yield('css1')
    @yield('css2')
    @yield('css3')
    @yield('css4')
</head>
<body>
    <header>
        <div class="logo">
            <h1>My Website</h1>
        </div>
        <nav>
            <ul>
                <li><a href="/live">watch live</a></li>
                <li><a href="/">home</a></li>
                <li><a href="/jadwal">Schedule</a></li>
                <li><a href="/regris">regris</a></li>
            </ul>
        </nav>
    </header>

    <div class="bismillah">
        @yield('sambung')
    </div>

    <footer>
        <div class="containeerr">
            <div class="footer-content">
                <div class="footer-logo">
                    <h2>My Website</h2>
                </div>
                <div class="footer-links">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="/langganan">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4 ml-10">
                            <a href="#!"><i class="bi-facebook fs-3" id="fb"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 My Website. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>
