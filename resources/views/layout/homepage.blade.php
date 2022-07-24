<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Miftahul Falah</title>
    <meta
        content="Pondok pesantren Miftahul falah ini didirikan sudah sejak tahun 1930 7 hal ini didasarkan pada sebuah piagam berdirinya pondok pesantren ini yang didirikan oleh kyai haji Ahmad Syafii"
        name="description">
    <meta content="Pondok, Pesantren, Bandung, Pondok pesantren" name="keywords">
    <meta name="author" content="Lolipop Team">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-pondok.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo-pondok.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        .ajax-load {
            background: #e1e1e1;
            padding: 10px 0px;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/Logo.png') }}" alt=""
                        class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Pendidikan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('mi') }}">Madrasah Ibtidaiyah</a></li>
                            <li><a href="{{ route('mts') }}">Madrasah Tsanawiyah</a></li>
                            <li><a href="{{ route('ma') }}">Madrasah Aliyah</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Dokumentasi</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('foto') }}">Galeri Foto</a></li>
                            <li><a href="{{ route('video') }}">Galeri Video</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('blog') }}">Artikel</a></li>
                    <li><a href="{{ route('contact') }}">Kontak Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <div class="min-vh-100">
        @yield('data')
    </div>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>2022</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Made by 🍭🍭
                </div>
            </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
