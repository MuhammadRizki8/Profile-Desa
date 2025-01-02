<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Government Website</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
    <style>
      body {
        font-family: "Roboto", sans-serif;
      }
      .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
          url("https://storage.googleapis.com/a1aa/image/fQNZlmyZqrWOJyWOPeeydyZAMG7L6VtVZTQMSkTpBwbEafedC.jpg");
        background-size: cover;
        background-position: center;
        padding: 150px 0;
        color: white;
      }
      .section-padding {
        padding: 80px 0;
      }

      :root {
        --primary-color: #00bcd4;
        --primary-dark: #0097a7;
        --text-dark: #1a1a1a;
      }

      .navbar {
        padding: 15px 0;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
      }

      .navbar-brand {
        display: flex;
        align-items: center;
        gap: 15px;
      }

      .brand-text {
        line-height: 1.2;
      }

      .brand-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0;
        color: var(--text-dark);
      }
      .brand-subtitle {
        font-size: 0.875rem;
        margin: 0;
        color: #666;
      }

      .nav-link {
        font-weight: 600;
        color: var(--text-dark) !important;
        padding: 8px 16px !important;
        transition: all 0.3s ease;
      }

      .nav-link:hover {
        color: var(--primary-color) !important;
      }

      .dropdown-menu {
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      }

      .dropdown-item {
        padding: 8px 20px;
        font-weight: 500;
      }

      .dropdown-item:hover {
        background-color: var(--primary-color);
        color: white;
      }

      .navbar-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
      }

      .nav-item {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .navbar-collapse {
        justify-content: center;
      }

      .btn-masuk {
        background-color: var(--primary-color);
        color: white;
        font-weight: 600;
        padding: 8px 24px;
        border-radius: 5px;
        border: none;
        transition: all 0.3s ease;
        margin-left: auto;
      }

      .btn-masuk:hover {
        background-color: var(--primary-dark);
        color: white;
        transform: translateY(-2px);
      }
      .justify-text {
        text-align: justify;
      }
      @keyframes float {
        0% {
          transform: translateY(0px);
        }
        50% {
          transform: translateY(-20px);
        }
        100% {
          transform: translateY(0px);
        }
      }

      .logo-container {
        transition: all 0.3s ease;
      }

      .logo-container:hover {
        transform: scale(1.1);
      }

      .logo-img {
        animation: float 2s ease-in-out infinite;
        max-width: 150px;
        height: 125px;
      }
      .table th,
      .table td {
        vertical-align: middle;
      }
      .table th {
        font-weight: bold;
      }
      .table .highlight {
        background-color: #f8f9fa;
      }
      .link {
        color: #00bcd4;
        text-decoration: none;
      }
      .link:hover {
        text-decoration: underline;
      }
      .sidebar {
        background-color: #48cad6;
        padding: 10px;
        border-radius: 5px;
      }
      .sidebar a {
        display: block;
        padding: 5px 10px;
        color: #ffffff;
        text-decoration: none;
      }
      .sidebar a:hover {
        background-color: #7c7c7c;
        border-radius: 5px;
      }
      .section-title {
        border-bottom: 2px solid #e0e0e0;
        padding-bottom: 10px;
        margin-bottom: 20px;
      }
      .card {
        background-color: #f5f5ff;
        border: none;
        border-radius: 20px;
        text-align: center;
        padding: 20px;
        margin: 20px;
        position: relative;
      }
      .card img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin-top: -75px;
        background-color: #d3d3d3;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
      }
      .card-title {
        color: #8a2be2;
        font-size: 1.2em;
        margin-top: 90px;
      }
      .card-text {
        color: #000;
        font-size: 1em;
        font-weight: bold;
      }
      .social-icons a {
        color: #8a2be2;
        font-size: 1.5em;
        margin: 0 10px;
      }
      .background-pattern {
        margin-bottom: 0;
      }
    </style>
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="assets/images/logodesa.png"
            alt="Logo Desa"
            width="50"
            height="50"
            class="d-inline-block align-top"
          />
          <div class="brand-text">
            <div class="brand-title">TANGSIMEKAR</div>
            <div class="brand-subtitle">KABUPATEN BANDUNG</div>
          </div>
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarContent"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <a class="nav-link" href="/" id="home" role="button"> Home </a>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="profile"
                role="button"
                data-bs-toggle="dropdown"
              >
                Profile
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/profile">Profile Desa</a>
                </li>
                <li>
                  <a class="dropdown-item" href="/kades">Kepala Desa</a>
                </li>
                <li><a class="dropdown-item" href="#">Perangkat Desa</a></li>
                <li>
                  <a class="dropdown-item" href="/lembaga">Lembaga Desa</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="/pemerintahan"
                id="pemerintahan"
                role="button"
              >
                Pemerintahan
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="infopublik"
                role="button"
                data-bs-toggle="dropdown"
              >
                Informasi Publik
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/produkhukum"
                    >Produk Hukum</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/agenda"
                    >Agenda Kegiatan</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/transparansi"
                    >Transparansi Anggaran</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link" href="/monografi" id="MK" role="button">
                Monografi & <br />Kependudukan
              </a>
            </li>
            <li class="nav-item align-items-center">
              <a class="nav-link" href="/layanan" id="layanan" role="button">
                Layanan Masyarakat
              </a>
            </li>
          </ul>
          <button class="btn btn-masuk" onclick="location.href='/login';">Masuk</button>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section text-center">
      <div class="container">
        <h1 class="display-4 fw-bold mb-4">Welcome to Desa TANGSIMEKAR</h1>
        <h2 class="mb-4">Perangkat Desa</h2>
        <a href="#perangkat" class="btn btn-masuk btn-lg">Learn More</a>
      </div>
    </section>

    <!-- Lembaga Section -->
    <section class="meetings-page mb-5" id="perangkat">
      <div class="background-pattern">
        <div class="container">
          {{-- <div class="filters">
            <ul>
              <li data-filter="*" class="active">Semua Perangkat Desa</li>
              <li data-filter=".sek">Sekretaris</li>
              <li data-filter=".kaur">Kaur</li>
              <li data-filter=".kasie">Kasie</li>
              <li data-filter=".kadus">Kadus</li>
            </ul>
          </div> --}}

          <!-- Baris 1 -->
          <div class="row-filter justify-content-center mt-3 mb-5">
            @foreach ($perangkatDesa as $instrument)
                <div class="col-md-3 mb-5 templatemo-item-col all {{ strtolower(str_replace(' ', '-', $instrument->position)) }}">
                    <div class="card">
                        <img
                            alt="{{ $instrument->name }}"
                            height="150"
                            src="{{ asset('assets/images/VillageInstrument_images/' . $instrument->image) }}" <!-- Assuming you have an image_url attribute -->
                            width="150"
                        />
                        <h5 class="card-title">{{ $instrument->position }}</h5>
                        <p class="card-text">{{ $instrument->name }}</p>
                        <div class="social-icons">
                            @if ($instrument->facebook)
                                <a href="{{ $instrument->facebook }}">
                                    <i class="fab fa-facebook"> </i>
                                </a>
                            @endif
                            @if ($instrument->instagram)
                                <a href="{{ $instrument->instagram }}">
                                    <i class="fab fa-instagram"> </i>
                                </a>
                            @endif
                            @if ($instrument->email)
                                <a href="mailto:{{ $instrument->email }}">
                                    <i class="fas fa-envelope"> </i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
      </div>
    </section>

    <!-- Footer -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12 mb-5 mb-lg-0">
            <h6 class="site-footer-title fw-bold">Lokasi</h6>
            <p class="site-footer-link">
              Jl. Tangsimekar paseh<br />Kecamatan Paseh, Kabupaten Bandung,
              Provinsi Jawa Barat
            </p>

            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31678.825179902844!2d107.7649193561021!3d-7.026542050403784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c6c048db07bd%3A0x7f587fa9e90fa06e!2sTangsimekar%2C%20Kec.%20Paseh%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1731373003385!5m2!1sid!2sid"
              width="100%"
              height="300"
              style="border: 0; min-height: 300px; max-width: 100vw"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              class="img-fluid mt-3"
            ></iframe>
          </div>

          <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
            <h6 class="site-footer-title mb-3 fw-bold">Contact</h6>

            <p class="mb-2">
              <strong class="d-inline me-2 site-footer-link">Phone:</strong> +62
              81234567890
            </p>

            <p>
              <strong class="d-inline me-2">Email:</strong>
              <a
                class="site-footer-link"
                href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=dstangsimekar@gmail.com"
                >dstangsimekar@gmail.com</a
              >
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12">
            <h6 class="site-footer-title mb-3 fw-bold">Social</h6>

            <ul class="social-icon">
              <li class="social-icon-item">
                <a
                  href="https://www.instagram.com/dstangsimekar?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                  ><i class="social-icon-link fab fa-instagram"></i
                ></a>
              </li>

              <li class="social-icon-item">
                <a href="https://www.youtube.com/@desatangsimekar5699"
                  ><i class="social-icon-link fab fa-youtube"></i
                ></a>
              </li>

              <li class="social-icon-item">
                <a href="https://wa.me/+6281234567890"
                  ><i class="social-icon-link fab fa-whatsapp"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container pt-5">
        <div class="row align-items-center">
          <div class="col-lg-2 col-md-3 col-12">
            <!-- <a class="navbar-brand" href="index">
              <img
                src="images/logodesa.png"
                class="logo-image img-fluid"
                alt="templatemo pod talk"
              />
            </a> -->
          </div>

          <div class="col-lg-7 col-md-9 col-12">
            <ul class="site-footer-links">
              <li class="site-footer-link-item">
                <a href="#" class="site-footer-link">Privacy</a>
              </li>

              <li class="site-footer-link-item">
                <a href="#" class="site-footer-link">Terms</a>
              </li>

              <li class="site-footer-link-item">
                <a href="#" class="site-footer-link">FAQs</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-12">
            <p class="copyright-text mb-0">
              Copyright © 2024<br />
              Desa Tangsimekar
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css"
    />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
      $(document).ready(function () {
        $("#dataTable").DataTable();
      });
    </script>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- <script>
      //according to loftblog tut
      $(".nav li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos,
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function () {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu, .responsive-menu, .scroll-to-section").on(
        "click",
        "a",
        function (e) {
          e.preventDefault();
          showSection($(this).attr("href"), true);
        }
      );

      $(window).scroll(function () {
        checkSection();
      });
    </script> -->
  </body>
</html>
