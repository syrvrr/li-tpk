<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LI-TPK</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="LI-TPK website" name="keywords">
    <meta content="LI-TPK website" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('') }}lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('') }}lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('') }}css/style.css" rel="stylesheet">
    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body>

        <!-- Header Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 bg-secondary d-none d-lg-block">
                    <a href="{{ route('welcome', []) }}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 display-4 text-primary text-uppercase">LI-TPK </h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row bg-white border-bottom d-none d-lg-flex">
                        <div class="col-lg-7 text-left">
                            <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                                <i class="fa fa-envelope text-primary mr-2"></i>
                                <small>info@example.com</small>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                                <i class="fa fa-phone-alt text-primary mr-2"></i>
                                <small>+6212 3456 7890</small>
                            </div>
                        </div>
                        <div class="col-lg-5 text-right">
                            <div class="d-inline-flex align-items-center p-2">
                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                        <a href="{{ route('welcome', []) }}" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 display-4 text-primary text-uppercase">LI-TPK</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{ route('welcome', []) }}" class="nav-item nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">Home</a>
                                <a href="{{ route('about', []) }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                                <a href="{{ route('service', []) }}" class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Service</a>
                                <a href="{{ route('anggota', []) }}" class="nav-item nav-link {{ request()->routeIs('anggota') ? 'active' : '' }}">Anggota</a>
                                {{-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="#" class="dropdown-item">Menu Item 1</a>
                                        <a href="#" class="dropdown-item">Menu Item 2</a>
                                        <a href="#" class="dropdown-item">Menu Item 3</a>
                                    </div>
                                </div> --}}
                                <a href="{{ route('kontak', []) }}" class="nav-item nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a>
                                <a href="{{ route('cari', []) }}" class="nav-item nav-link {{ request()->routeIs('cari') ? 'active' : '' }}">Cari Aduan</a>
                            </div>
                            <a href="{{ route('login') }}" class="btn btn-primary mr-3 d-none d-lg-block">Daftar atau Masuk</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

        @yield('content')



<!-- Appointment Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-5">
                    <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Buat akun untuk pengaduan</h1>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 1</option>
                                    <option value="3">Service 1</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Get An Appointment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->

    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        <h6 class="text-uppercase">Fitur Kami</h6>
                        <h1 class="mb-4">Mengapa Memilih Kami</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Partner Hukum Terbaik</h5>
                                <p class="m-0">LI-TPK membuka sarana pengaduan masyarakat yang memiliki tugas dan fungsi menerima dan menangani laporan/pengaduan dugaan tindak pidana korupsi</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Efisiensi dan Terpercaya</h5>
                                <p class="m-0">LI-TPK sebagai trigger mechanism, yang berarti mendorong atau sebagai stimulus agar upaya pemberantasan korupsi oleh lembaga-lembaga yang telah ada sebelumnya menjadi lebih efektif dan efisien</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Hasil yang layak didapatkan</h5>
                                <p class="m-0">Pengaduan/laporan yang dapat ditindaklanjuti oleh LI-TPK adalah pengaduan/laporan yang sesuai dengan kewenangan yang diatur dalam Undang-Undang Nomor 30 Tahun 2002 tentang Komisi Pemberantasan Tindak Pidana Korupsi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Kantor Kami</h5>
                        <p class="m-0">Palembang, Sumatera Selatan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Email Kami</h5>
                        <p class="m-0">hubungi@li-tpk.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Hubungi Kami</h5>
                        <p class="m-0">+62812 3456 7890</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 display-4 text-primary text-uppercase">LI-TPK</h1>
                </a>
                <p>Terkadang lebih mudah mencari siapa yang akan dipersalahkan daripada mengakui kesalahan.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Attorney</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>FAQs</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Site Map</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">Lembaga Tindak Pindana Korupsi (LI-TPK)</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p class="m-0 text-white"> Made with ❤️ </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}lib/easing/easing.min.js"></script>
    <script src="{{ asset('') }}lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('') }}lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ asset('') }}lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('') }}lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('') }}mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ asset('') }}mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('') }}js/main.js"></script>
</body>

</html>
