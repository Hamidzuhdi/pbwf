@extends('hubung.layout')
@section('css5')
         <!-- Bootstrap icons-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
         <!-- Google fonts-->
         <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
         <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="cantik/c-rumah.css">
@endsection
@section('sambung')
    <h1>halo</h1>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Goal.com</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  {{-- <header>
    <a href="/"><img src="images/logo.png" alt="Logo Goal.com"></a>
    <nav>
      <ul>
        <li><a href="/">Beranda</a></li>
        <li><a href="/liga">Liga</a></li>
        <li><a href="/pemain">Pemain</a></li>
        <li><a href="/transfer">Transfer</a></li>
        <li><a href="/berita">Berita</a></li>
      </ul>
    </nav>
  </header> --}}
  <main>
    <section class="berita-terbaru">
      <h2>Berita Terbaru</h2>
      <ul>
        <li>
          <a href="#">Real Madrid Juara Liga Champions</a>
          <img src="{{ asset('gambar/madrid.jpeg') }}" alt="Real Madrid">
        </li>
        <li>
          <a href="#">Messi Kembali ke Barcelona</a>
          <img src="{{ asset('gambar/messi.jpeg') }}" alt="Lionel Messi">
        </li>
        <li>
          <a href="#">Ronaldo Gabung Juventus</a>
          <img src="{{ asset('gambar/cr7.jpeg') }}" alt="Cristiano Ronaldo">
        </li>
      </ul>
    </section>
    <section class="liga">
      <h2>Liga</h2>
      <ul>
        <li>
          <a href="#">Liga Inggris</a>
          <img src="{{ asset('gambar/epl.jpeg') }}" alt="Liga Inggris">
        </li>
        <li>
          <a href="#">La Liga</a>
          <img src="{{ asset('gambar/laliga.jpeg') }}" alt="La Liga">
        </li>
        <li>
          <a href="#">Bundesliga</a>
          <img src="{{ asset('gambar/bundes.jpeg') }}" alt="Bundesliga">
        </li>
        <li>
          <a href="#">Serie A</a>
          <img src="{{ asset('gambar/seria.jpeg') }}" alt="Serie A">
        </li>
      </ul>
    </section>
    <section class="pemain">
      <h2>Pemain</h2>
      <ul>
        <li>
          <a href="#">Lionel Messi</a>
          <img src="images/lionel-messi.jpg" alt="Lionel Messi">
        </li>
        <li>
          <a href="#">Cristiano Ronaldo</a>
          <img src="images/cristiano-ronaldo.jpg" alt="Cristiano Ronaldo">
        </li>
        <li>
          <a href="#">Neymar</a>
          <img src="images/neymar.jpg" alt="Neymar">
        </li>
        <li>
          <a href="#">Kylian Mbappe</a>
          <img src="images/kylian-mbappe.jpg" alt="Kylian Mbappe">
        </li>
      </ul>
    </section>
    <section class="transfer">
      <h2>Transfer</h2>
      <ul>
        <li>
          <a href="#">Real Madrid Dapatkan Kylian Mbappe</a>
          <img src="images/kylian-mbappe.jpg" alt="Kylian Mbappe">
        </li>
        <li>
          <a href="#">Barcelona Dapatkan Robert Lewandowski</a>
          <img src="images/robert-lewandowski.jpg" alt="Robert Lewandowski">
        </li>
        <li>
          <a href="#">Manchester City Dapatkan Erling Haaland</a>
          <img src="images/erling-haaland.jpg" alt="Erling Haaland">
        </li>
      </ul>
    </section>
  </main>

<script>
    const scrollToTop = () => {
    document.querySelector(".scroll-to-top").scrollIntoView({
        behavior: "smooth",
    });
    };

    // Add scroll event listener

    window.addEventListener("scroll", scrollToTop);
</script>

@endsection
