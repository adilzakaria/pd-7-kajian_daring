<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Kajian Daring</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Flaticon Font -->
    <link href="assets/lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="asseets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/style.min.css" rel="stylesheet" />
  </head>

  <body>

<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
      <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
          <i class="flaticon-043-teddy-bear"></i>
          <span class="text-primary">Kajian Daring</span>
        </a>
        <button type="button" class="navbar-toggler"  data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav font-weight-bold ml-auto py-0">
            <a href="home" class="nav-item nav-link @yield ('home')">Beranda</a>
            <a href="study" class="nav-item nav-link @yield ('study')">Kajian</a>
            <a href="contact" class="nav-item nav-link @yield('contact') mr-4">Hubungi Kami</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle @yield('edit') mr-4" data-toggle="dropdown">
                Hai, {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu rounded-0 m-0">
                        <x-dropdown-link :href="route('profile.edit')" class="dropdown-item">
                            {{ __('Informasi Akun') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout') "
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="dropdown-item">
                                {{ __('Keluar') }}
                            </x-dropdown-link>
                        </form>
              </div>
            </div>
          </div>
          <!-- <a href="{{url('dashboard')}}" class="btn btn-primary px-4">Login</a> -->
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    @yield ('content')

    <!-- Footer Start -->
    <div
      class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5"
    >
      <div class="row pt-5">
        <div class="col-lg-4 col-md-6 mb-5">
          <a
            href=""
            class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
            style="font-size: 40px; line-height: 40px"
          >
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-white">Kajian Daring</span>
          </a>
          <p>
          "Kajian Daring", sebuah platform inovatif yang dirancang untuk memberikan pendidikan yang relevan dan menarik bagi anak muda. 
          Kami memahami bahwa pendidikan adalah kunci untuk masa depan yang lebih baik, dan oleh karena itu kami berkomitmen untuk menyediakan kajian yang tidak hanya informatif tetapi juga inspiratif.
          </p>
          
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Hubungi Kami</h3>
          <div class="d-flex">
            <h4 class="fa fa-map-marker-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Alamat</h5>
              <p>123 Street, New York, USA</p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-envelope text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Email</h5>
              <p>info@example.com</p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-phone-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Telepon</h5>
              <p>+012 345 67890</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Tautan Cepat</h3>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white mb-2" href="#"
              ><i class="fa fa-angle-right mr-2"></i>Beranda</a
            >
            <a class="text-white mb-2" href="blog"
              ><i class="fa fa-angle-right mr-2"></i>Kajian</a
            >
            <a class="text-white mb-2" href="profile"
              ><i class="fa fa-angle-right mr-2"></i>Informasi Akun</a
            >
          </div>
        </div>
        
      <div
        class="container-fluid pt-5"
        style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;"
      >
        <p class="m-0 text-center text-white">
          &copy;
          <a class="text-primary font-weight-bold" href="home">Kajian Daring</a>.
          All Rights Reserved.

          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
          Designed by
          <a class="text-primary font-weight-bold" href="https://htmlcodex.com"
            >HTML Codex</a
          >
          <br />Distributed By:
          <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    
    </body>
</html>