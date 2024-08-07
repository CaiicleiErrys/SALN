
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="shortcut icon" href="assets/images/bagong-pilipinas-logo.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo me-auto"><img src="assets/images/bagong-pilipinas-logo.png" alt="" class="img-fluid"></a>

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


  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Online Forms</h1>
          <h2>Form, Edit & Print</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            {{-- <a href="#about" class="btn-get-started scrollto">Get Started</a> --}}
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets_index/img/index.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>

  <footer id="footer">

    <div class="footer-newsletter" style="background-color: #37517e">
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>axi0MX</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Developed by <a href="https://google.com/">Bagong Pilipinas</a>
      </div>
    </div>
  </footer>

  <script src="assets_index/vendor/aos/aos.js"></script>
  <script src="assets_index/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_index/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets_index/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets_index/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets_index/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets_index/vendor/php-email-form/validate.js"></script>
  <script src="assets_index/js/main.js"></script>

</body>

</html>
