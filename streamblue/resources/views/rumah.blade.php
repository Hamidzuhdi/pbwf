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
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Goal.com</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero-section">
        <h1>Welcome to Our Football Club</h1>
        <p>Experience the thrill of the game with us</p>
        @guest
            <a href="/login" class="cta-button">Login</a>
        @endguest
    </div>
  <main>
    <section class="berita-terbaru">
      <h2>Berita Terbaru</h2>
      <ul>
        <li>
          <a href="https://www.goal.com/en-us">Real Madrid Juara Liga Champions</a>
          <img src="{{ asset('gambar/madrid.jpeg') }}" alt="Real Madrid">
        </li>
        <li>
          <a href="https://www.goal.com/en-us">Messi Kembali ke Barcelona</a>
          <img src="{{ asset('gambar/messi.jpeg') }}" alt="Lionel Messi">
        </li>
        <li>
          <a href="https://www.goal.com/en-us">Ronaldo Gabung Juventus</a>
          <img src="{{ asset('gambar/cr7.jpeg') }}" alt="Cristiano Ronaldo">
        </li>
      </ul>
    </section>
    <section class="liga">
      <h2>Liga</h2>
      <ul>
        <li>
          <a href="https://www.goal.com/en-us">Liga Inggris</a>
          <img src="{{ asset('gambar/epl.jpeg') }}" alt="Liga Inggris">
        </li>
        <li>
          <a href="https://www.goal.com/en-us">La Liga</a>
          <img src="{{ asset('gambar/laliga.jpeg') }}" alt="La Liga">
        </li>
        <li>
          <a href="https://www.goal.com/en-us">Bundesliga</a>
          <img src="{{ asset('gambar/bundes.jpeg') }}" alt="Bundesliga">
        </li>
        <li>
          <a href="https://www.goal.com/en-us">Serie A</a>
          <img src="{{ asset('gambar/seria.jpeg') }}" alt="Serie A">
        </li>
      </ul>
    </section>
    <section class="pemain">
      <h2>Pemain</h2>
      <ul>
        <li>
          <a href="https://www.goal.com/en-us">Lionel Messi</a>
          <img src="{{ asset('gambar/messiI.jpg') }}" alt="Lionel Messi">
        </li>
        <li>
          <a href="https://www.goal.com/en-us">Cristiano Ronaldo</a>
          <img src="{{ asset('gambar/cr7A.jpg') }}" alt="Cristiano Ronaldo">
        </li>
        <li>
          <a href="https://www.goal.com/en-us">Neymar</a>
          <img src="{{ asset('gambar/neymarA.jpg') }}" alt="Neymar">
        </li>
        <li>
          <a href="https://www.goal.com/en-us">Kylian Mbappe</a>
          <img src="{{ asset('gambar/ambape.jpg') }}" alt="Kylian Mbappe">
        </li>
      </ul>
    </section>
    <section class="transfer">
      <h2>Transfer</h2>
      <ul>
        <li>
          <a href="https://www.goal.com/en-us">Real Madrid Dapatkan Kylian Mbappe</a>
          <img src="{{ asset('gambar/MadridM.jpg') }}" alt="Kylian Mbappe">
        </li>
        <li>
          <a href="https://www.goal.com/en-us">Barcelona Dapatkan Robert Lewandowski</a>
          <img src="{{ asset('gambar/barcaR.jpg') }}" alt="Robert Lewandowski">
        </li>
        <li>
          <a href="https://www.goal.com/en-us">Manchester City Dapatkan Erling Haaland</a>
          <img src="{{ asset('gambar/cityH.jpg') }}" alt="Erling Haaland">
        </li>
      </ul>
    </section>
  </main>


  <script>
    var images = ['gambar/epl.jpg', 'gambar/neymarA.jpg','gambar/madrid.jpeg']; // Ganti dengan nama file gambar yang ingin digunakan

    var currentIndex = 0;
    var heroSection = document.querySelector('.hero-section');

    function changeBackgroundImage() {
      heroSection.style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3)), url('" + images[currentIndex] + "')";
      currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(changeBackgroundImage, 5000); // Ganti dengan durasi perubahan slide yang diinginkan (dalam milidetik)
  </script>
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
