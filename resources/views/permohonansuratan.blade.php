<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Desa Tangsimekar</title>
    <link
      crossorigin="anonymous"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css" />
    <style>
      body {
        font-family: "Roboto", sans-serif;
      }
      .hero-section {
      background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
        url("assets/images/hero.jpg");
      background-size: cover;
      background-position: center;
      padding: 200px 0;
      color: white;
    }
      .section-padding {
        padding: 80px 0;
      }
      .card {
        transition: transform 0.3s;
        margin-bottom: 30px;
      }
      .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      }

      .service-item .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .service-item .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
      .service-item {
        margin-bottom: 30px;
      }
      .service-item img {
        max-width: 100%;
        height: auto;
      }
      .text-justify {
        text-align: justify !important;
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
            <a class="nav-link" href="/" id="home" role="button">
              Home
            </a>

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
                <li><a class="dropdown-item" href="/kades">Kepala Desa</a></li>
                <li>
                  <a class="dropdown-item" href="/perangkat_desa"
                    >Perangkat Desa</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/lembaga">Lembaga Desa</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="pemerintahank"
                role="button"
                data-bs-toggle="dropdown"
              >
                Pemerintahan
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/visi_misi"
                    >Visi & Misi</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/rpjm"
                    >RPJM Desa</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/apb"
                    >APB Desa</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/rka"
                    >Rencana Kerja & Anggaran</a
                  >
                </li>
              </ul>
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
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="infopublik"
                role="button"
                data-bs-toggle="dropdown"
              >
                Layanan Masyarakat
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/informasipelayanan"
                    >Informasi Pelayanan
                    </a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/permohonansuratan"
                    >Permohonan Persuratan</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="https://tangsimekar.desa.id/layanan-mandiri/masuk"
                    >Permohonan Layanan Kependudukan</a
                  >
                </li>
              </ul>
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
        <nav aria-label="breadcrumb mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-bold">
                        Layanan Masyarakat
                    </li>
                    <li aria-current="page" class="breadcrumb-item fw-bold">
                    Permohonan Persuratan
                    </li>
                </ol>
            </nav>
      </div>
    </section>

    

    <!-- Permohonan surat -->
    <section id="surat" class="lembaga section-title mb-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Permohonan Persuratan</h2>
            <p class="text-justify">
                Layanan ini merupakan sebuah inovasi pelayanan publik yang
                mempermudah warga dalam mengakses berbagai kebutuhan administrasi,
                seperti pembuatan surat keterangan dan pelaporan masalah, secara
                cepat dan transparan. Dengan memanfaatkan teknologi informasi,
                layanan ini dapat diakses melalui perangkat di kantor desa atau
                melalui online, sehingga memberikan kemudahan bagi masyarakat tanpa
                harus antre lama. Website ini tidak hanya meningkatkan efisiensi
                pelayanan, tetapi juga memberdayakan warga dan mendukung tata kelola
                pemerintahan desa yang modern dan inklusif.
            </p>

            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4 table-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">
                            Permohonan Persuratan
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="table table-bordered"
                                id="persurat"
                                width="100%"
                                cellspacing="0"
                            >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Layanan</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Surat Biodata Penduduk</td>
                                        <td>
                                            <button
                                                class="btn btn-warning"
                                                type="button"
                                                onclick="location.href='/detail_suratan';"
                                            >
                                                Lihat
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                        Surat Keterangan Pindah Penduduk
                                        </td>

                                        <td>
                                            <button
                                                class="btn btn-warning"
                                                type="button"
                                                onclick="location.href='/detail_suratan';"
                                            >
                                                Lihat
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Surat Keterangan Jual Beli</td>

                                        <td>
                                            <button
                                                class="btn btn-warning"
                                                type="button"
                                                onclick="location.href='/detail_suratan';"
                                            >
                                                Lihat
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
    <script
      crossorigin="anonymous"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0L4p4YL4pH+8abtTE1Pi6jizo"
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    ></script>
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
        $("#persurat").DataTable(
          {
            pageLength: 5,
            lengthMenu: [[5, 10, 25, 50], [5, 10, 25, 50]]
          }
        );
      });
      
    </script>
  </body>
</html>
