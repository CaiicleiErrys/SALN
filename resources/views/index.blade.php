<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="shortcut icon" href="assets/images/bagong-pilipinas-logo.png">

  <link href="assets_index/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets_index/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets_index/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets_index/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets_index/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets_index/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets_index/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets_index/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets_index/css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        {{-- <h1><a href="index.html"><span>Bootslander</span></a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo me-auto"><img src="assets/images/bagong-pilipinas-logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="/">Home</a></li>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('home') }}" class="nav-link scrollto">Dashboard</a></li>
                    <li><a href="{{ route('logout') }}" class="nav-link scrollto"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                @else
                    <li><a href="{{ route('login') }}" class="nav-link scrollto">Log in</a></li>

                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="nav-link scrollto">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Online <span>Forms</span></h1>
            <h2>Efficient digital interfaces for citizens to submit information, enhancing government services and accountability.</h2>
            <div class="text-center text-lg-start">
              <a href="{{ route('login') }}" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets_index/index.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .3)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="rgba(255,255,255, .1)">
      </g>
    </svg>

  </section>

  <main id="main">

  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="footer-newsletter">
            <h4 class="text-center">Bagong Pilipinas - Online Forms</h4>
            {{-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> --}}
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Bagong Pilipinas</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Developed by <a href="https://google.com/">OwO</a>
      </div>
    </div>
  </footer>

  <script src="assets_index/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets_index/vendor/aos/aos.js"></script>
  <script src="assets_index/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_index/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets_index/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets_index/vendor/php-email-form/validate.js"></script>
  <script src="assets_index/js/main.js"></script>

</body>

</html>
