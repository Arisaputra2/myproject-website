<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/page-minuman.css">
    <link rel="stylesheet" href="style/page-makanan.css">
    <title>Scooter Coffee</title>
</head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container" id="up">
        <a class="navbar-brand" href="/"><img src="images/foto/background.png" style="width: 50px; padding: 5px; margin-right: 3px" class="rounded-circle" />Scooter Coffee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto m">
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#home" data-bs-toggle="dropdown">Contact</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a href="https://www.instagram.com/scootercoffe/?hl=id" class="dropdown-item">Instagram</a></li>
                <li><a href="/" class="dropdown-item">Email</a></li>
              </ul>
            </li>
            <li class="nav-item nav-focus">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item nav-focus">
              <a class="nav-link" href="/makanan">Makanan</a>
            </li>
            <li class="nav-item nav-focus">
              <a class="nav-link" href="/minuman">Minuman</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar Akhir -->
    @yield('section')

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    {{-- Bootstrap --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      {{-- Left-bottom --}}
      <a href="#up">
          <div class="logo">
              <img src="/images/foto/up-arrow.png" alt=up" class="side-bottom">
          </div>
      </a>
      {{-- footer --}}
      <div class="container mt-5 mb-5 footer-card">
        <h6 class="bw-bold text-center p-3">By Scooter Coffee.</h6>
    </div>
    {{-- Akhir footer --}}
    </body>
  </html>
  