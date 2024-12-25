<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Informasi Pelayanan Desa</title>
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
              <a class="nav-link" href="#" id="layanan" role="button">
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
        <h2 class="mb-4">Pemerintahan</h2>
        <a href="#vision" class="btn btn-masuk btn-lg">Learn More</a>
      </div>
    </section>

    <section class="lembaga">
      <div class="container">
        <h2 class="mb-4 text-center fw-bold">Layanan yang Tersedia</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100 border-primary service-item">
              <img
                src="https://img.freepik.com/free-vector/flat-male-team-illustration_52683-109479.jpg?t=st=1732679803~exp=1732683403~hmac=312c13996f795f78c53a598ab5f36f6d4af21d581cd01bbdf3bd6d1ad2d9fc5b&w=740"
                class="card-img-top"
                alt="Ilustrasi Administrasi Kependudukan"
              />
              <div class="card-body">
                <h3 class="card-title text-primary">
                  Administrasi Kependudukan
                </h3>
                <p class="card-text">
                  Informasi lengkap terkait layanan administrasi kependudukan
                  seperti pembuatan KTP, KK, dan akta kelahiran.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card h-100 border-success service-item">
              <img
                src="https://storage.googleapis.com/a1aa/image/Z3AUyskkDRK5BFmUUDf8Btf2ogF73MPnwmameerzNgf41joeE.jpg"
                class="card-img-top"
                alt="Ilustrasi Layanan Kesehatan dan Sosial"
              />
              <div class="card-body">
                <h3 class="card-title text-success">
                  Layanan Kesehatan dan Sosial
                </h3>
                <p class="card-text">
                  Layanan kesehatan dan sosial untuk mendukung kesejahteraan
                  masyarakat desa.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card h-100 border-info service-item">
              <img
                src="https://img.freepik.com/free-vector/protective-glass-counters_23-2148545343.jpg?t=st=1732679929~exp=1732683529~hmac=11dabbcc2d94852d5e95987cabd24ea122b4ab22173fdc691a65212ddf967a89&w=740"
                class="card-img-top"
                alt="Ilustrasi Pelayanan Perizinan"
              />
              <div class="card-body">
                <h3 class="card-title text-info">Pelayanan Perizinan</h3>
                <p class="card-text">
                  Informasi mengenai berbagai jenis perizinan yang dapat diurus
                  di kantor desa.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card h-100 border-warning service-item">
              <img
                src="https://img.freepik.com/free-vector/e-learning-icons-flat_1284-3950.jpg?t=st=1732679962~exp=1732683562~hmac=a59c1c424017828299f017179a35c1a1f11e453fb802764576c1521318caf96c&w=740"
                class="card-img-top"
                alt="Ilustrasi Informasi Pendidikan dan Pelatihan"
              />
              <div class="card-body">
                <h3 class="card-title text-warning">
                  Informasi Pendidikan dan Pelatihan
                </h3>
                <p class="card-text">
                  Informasi mengenai program pendidikan dan pelatihan yang
                  tersedia untuk masyarakat desa.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card h-100 border-danger service-item">
              <img
                src="https://storage.googleapis.com/a1aa/image/YJEQ4vC7mTJ1Llx23UGZyca7e6P1UCnEapa6Xe6XZacyeIqnA.jpg"
                class="card-img-top"
                alt="Ilustrasi Pengaduan dan Aspirasi Masyarakat"
              />
              <div class="card-body">
                <h3 class="card-title text-danger">
                  Pengaduan dan Aspirasi Masyarakat
                </h3>
                <p class="card-text">
                  Saluran untuk menyampaikan pengaduan dan aspirasi masyarakat
                  kepada pemerintah desa.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card h-100 border-secondary service-item">
              <img
                src="https://storage.googleapis.com/a1aa/image/ReoMKMpiwIxOI62DmNwitLWtMhBRawjOcNkv9L4A5BxVPi6JA.jpg"
                class="card-img-top"
                alt="Ilustrasi Layanan Lainnya"
              />
              <div class="card-body">
                <h3 class="card-title text-secondary">Layanan Lainnya</h3>
                <p class="card-text">
                  Berbagai layanan lainnya yang disediakan oleh pemerintah desa
                  untuk mendukung kebutuhan masyarakat.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Permohonan surat -->
    <section id="surat" class="tabel section-title bg-danger mb-5">
      <div class="container">
        <h2 class="text-center mb-5 fw-bold">Permohonan Persuratan</h2>
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
                      <th>#</th>
                      <th>Judul</th>
                      <th>Kode</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>FORMAT RPJM DESA SDGs-permendes21</td>
                      <td>
                        <button class="btn btn-warning" type="button">
                          Peraturan Kepala Desa
                        </button>
                      </td>
                      <td>
                        <button class="btn btn-warning" type="button">
                          Lihat
                        </button>
                        <button class="btn btn-success" type="button">
                          Download
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>
                        Daftar Usulan Masyarakat Berdasarkan Tujuan SDGS
                        Desa-permendes21
                      </td>
                      <td>
                        <button class="btn btn-warning" type="button">
                          Peraturan Kepala Desa
                        </button>
                      </td>
                      <td>
                        <button class="btn btn-warning" type="button">
                          Lihat
                        </button>
                        <button class="btn btn-success" type="button">
                          Download
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>SK PKTD</td>
                      <td>
                        <button class="btn btn-warning" type="button">
                          Peraturan Kepala Desa
                        </button>
                      </td>
                      <td>
                        <button class="btn btn-warning" type="button">
                          Lihat
                        </button>
                        <button class="btn btn-success" type="button">
                          Download
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

    <section class="lembaga mb-5">
      <div class="container">
        <h2 class="mb-4 text-center fw-bold">
          Permohonan Layanan Kependudukan
        </h2>

        <div class="row justify-content-center">
          <div class="col-md-4 mb-4">
            <div class="card h-100 border-info service-item">
              <img
                src="https://img.freepik.com/free-vector/technical-support-concept-idea-customer-service-consultant-support-clients-help-them-with-problems-providing-customer-with-valuable-information-vector-illustration-cartoon-style_613284-3335.jpg?uid=R163047156&ga=GA1.1.1423301508.1715850620&semt=ais_hybrid"
                class="card-img-top"
                alt="Layanan Kependudukan"
              />

              <div class="card-body">
                <h3 class="card-title text-info text-center">
                  Layanan Kependudukan
                </h3>
              </div>

              <div class="card-footer bg-transparent border-info text-center">
                <a
                  href="https://tangsimekar.desa.id/layanan-mandiri/masuk"
                  class="btn btn-outline-info"
                  >Selengkapnya</a
                >
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
        $("#persurat").DataTable();
      });
      $(document).ready(function () {
        $("#dataTableAPB").DataTable();
      });
    </script>
  </body>
</html>
