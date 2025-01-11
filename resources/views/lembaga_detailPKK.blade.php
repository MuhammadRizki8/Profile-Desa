<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Desa Tangsimekar</title>
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
      
      .header {
        text-align: center;
        color: #00a9b7;
        font-size: 24px;
        font-weight: bold;
        margin-top: 20px;
      }
      .content {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
      }
      .content img {
        width: 150px;
        height: auto;
      }
      .content .details {
        margin-left: 20px;
      }
      .details table {
        width: 100%;
      }
      .details table td {
        padding: 5px;
      }
      .details table td:first-child {
        font-weight: bold;
      }
      .details table td:nth-child(2) {
        width: 10px;
      }
      .section {
        background-color: #00a9b7;
        color: white;
        padding: 10px;
        margin: 20px auto;
        width: 60%;
      }
      .section .content-box {
        background-color: white;
        color: black;
        padding: 10px;
        border: 1px solid #00a9b7;
        margin-top: 10px;
      }
      .scroll-up {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #00a9b7;
        color: white;
        padding: 10px;
        border-radius: 50%;
        text-align: center;
        cursor: pointer;
      }
      .scroll-up a {
        color: white;
        text-decoration: none;
        display: block;
        width: 100%;
        height: 100%;
      }

      .scroll-up:hover {
        background-color: #008999;
        transition: background-color 0.3s ease;
      }
      .table-section {
        background-color: #00a9b7;
        color: white;
        padding: 10px;
        margin: 20px auto;
        width: 60%;
      }
      .table-section table {
        width: 100%;
        background-color: white;
        color: black;
        border-collapse: collapse;
        margin-top: 10px;
      }
      .table-section table,
      .table-section th,
      .table-section td {
        border: 1px solid #00a9b7;
        padding: 10px;
      }
      .table-section th {
        background-color: #00a9b7;
        color: white;
      }
      li 
      {
        text-align: justify; /* Justifies the text */            
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
                <li>
                  <a class="dropdown-item" href="/kades">Kepala Desa</a>
                </li>
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
        <h2 class="mb-4">Detail Lembaga</h2>
        <a href="#lembagadetail" class="btn btn-masuk btn-lg">Learn More</a>
      </div>
    </section>

    <!-- Lembaga Section -->
    <section id="lembagadetail" class="section-padding bg-light">
      <div class="header section-title">Pembinaan Kesejahteraan Keluarga</div>
      <div class="content">
        <img
          alt="Logo of Badan Permusyawaratan Desa"
          height="150"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKlesl4E4xbUrBowQ1lC60rxQsBunswXHoDw&s"
          width="150"
        />
        <div class="details section-title">
          <table>
            <tr>
              <td>Nama Lembaga</td>
              <td>:</td>
              <td>Pembinaan Kesejahteraan Keluarga (PKK)</td>
            </tr>
            <tr>
              <td>Dasar Hukum / SK Pembentukan</td>
              <td>:</td>
              <td>
                <ol>
                  <li>Peraturan Presiden Nomor 99 Tahun 2017</li>
                  <li>Peraturan Menteri Dalam Negeri No. 36 Tahun 2020</li>
                </ol> 
              </td>
            </tr>
            <tr>
              <td>Alamat Kantor</td>
              <td>:</td>
              <td>Jl. Tangsimekar Paseh, Kec. Paseh, Kab. Bandung, Jawa Barat.</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="table-section">
        Kepengurusan PKK
        <table>
          <thead>
            <tr>
              <th>Jabatan</th>
              <th>Nama</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ketua</td>
              <td>Elis Sri Oktaviani
              </td>
            </tr>
            <tr>
              <td>Wakil Ketua</td>
              <td>Siti Patimah 
              </td>
            </tr>
            <tr>
              <td>Sekretaris</td>
              <td>Rizky Maulana Putra Perdana
              </td>
            </tr>
            <tr>
              <td>Bendahara</td>
              <td>Zabier Gunawan
              </td>
            </tr>
            <tr>
              <td>Ketua Pokja I</td>
              <td>Dikdik Darmawan
              </td>
            </tr>
            <tr>
              <td>Ketua Pokja II</td>
              <td>Agus Zaeni
              </td>
            </tr>
            <tr>
              <td>Ketua Pokja III</td>
              <td>Ahmad Samsudin
              </td>
            </tr>
            <tr>
              <td>Ketua Pokja IV</td>
              <td>Neneng Siti Aminah 
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="section">
          Visi &amp; Misi PKK
          <div class="content-box">
              Visi :<br> "Terwujudnya keluarga yang sejahtera, mandiri, dan berkualitas melalui pemberdayaan perempuan, peningkatan pendidikan, kesehatan, dan kesejahteraan sosial di desa."
              <br /><br />
              Misi :
              <ol>
                  <li>Melaksanakan program pemberdayaan ekonomi keluarga dengan memanfaatkan potensi lokal untuk meningkatkan pendapatan dan kesejahteraan masyarakat.</li>
                  <li>Menggalakkan perilaku hidup bersih dan sehat melalui penyuluhan, pelayanan kesehatan, serta pemberdayaan posyandu dan program gizi keluarga.</li>
                  <li>Memberikan pelatihan keterampilan bagi perempuan untuk mendukung kemandirian ekonomi dan kesejahteraan keluarga.</li>
                  <li>Meningkatkan kerja sama dan kepedulian antarwarga dalam membantu keluarga kurang mampu dan menghadapi permasalahan sosial.</li>
                  <li>Menginisiasi program yang memperkuat ketahanan keluarga melalui pengelolaan rumah tangga yang harmonis dan berbasis nilai-nilai budaya lokal.
                  </li>

              </ol> 
          </div>
      </div>
      <div class="section">
        Tugas Pokok &amp; Fungsi PKK
        <div class="content-box text-justify">
        Untuk memberdayakan keluarga melalui program-program pemberdayaan yang bertujuan meningkatkan kualitas hidup keluarga dan masyarakat desa. PKK bertugas merencanakan dan melaksanakan berbagai kegiatan pemberdayaan, seperti pelatihan keterampilan, peningkatan kesehatan, pengelolaan gizi keluarga, serta pendidikan keluarga untuk mewujudkan keluarga yang sejahtera, mandiri, dan berdaya. Fungsi utama PKK adalah menggerakkan partisipasi aktif masyarakat, khususnya perempuan, dalam kegiatan sosial, ekonomi, dan pembangunan desa. Selain itu, PKK juga berperan dalam mengedukasi masyarakat tentang pentingnya perilaku hidup bersih dan sehat, serta mendukung terciptanya ketahanan keluarga yang harmonis dan berbasis nilai-nilai budaya lokal.


        </div>
      </div>
      <div class="scroll-up">
        <a href="#lembagadetail">
          <i class="fas fa-chevron-up"></i>
        </a>
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
  </body>
</html>
