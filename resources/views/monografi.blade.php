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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
      .section-title {
        border-bottom: 2px solid #e0e0e0;
        padding-bottom: 10px;
        margin-bottom: 20px;
      }

      /* Gunakan font Google Fonts */
      @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");

      #monografi {
        padding-bottom: 100px;
        padding-top: 50px;
        font-family: "Roboto", sans-serif; /* Menggunakan font yang lebih modern */
      }

      /* Judul */
      #monografi > h2 {
        text-align: center;
        color: #0097a7;
        font-size: 1.8rem;
        margin-bottom: 20px;
        letter-spacing: 1px;
      }

      /* Kontainer grafik */
      .chart-container {
        margin: 50px auto;
        padding: 30px;
        background: #f7f7f7; /* Background lebih lembut */
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        max-width: 850px; /* Memperlebar sedikit */
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efek animasi */
      }

      .chart-container:hover {
        transform: translateY(-10px); /* Efek hover sedikit terangkat */
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      }

      /* Styling canvas */
      .chart-container canvas {
        width: 100% !important;
        height: auto !important;
        border-radius: 8px;
        transition: transform 0.5s ease-in-out;
      }

      /* Menambahkan border dan warna pada chartGender */
      .chart-container > #chartGender {
        max-width: 400px;
        padding: 10px;
        border-radius: 8px;
      }

      /* Margin bawah untuk setiap grafik */
      .chart-container + .chart-container {
        margin-top: 40px;
      }

      /* h1 {
    text-align: center;
    color: #333;
    font-size: 2.5rem;
    font-weight: 500;
    margin-bottom: 30px;
} */
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
            <li class="nav-item">
              <a class="nav-link" href="/" id="home" role="button">
                Home
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="profile"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
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
                aria-expanded="false"
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
              <a class="nav-link" href="#" id="MK" role="button">
                Monografi & <br />Kependudukan
              </a>
            </li>
            <li class="nav-item align-items-center">
              <a
                class="nav-link"
                href="/layanan"
                id="layanan"
                role="button"
              >
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
        <h2 class="mb-4">Monografi & Kependudukan</h2>
        <a href="#vision" class="btn btn-masuk btn-lg">Learn More</a>
      </div>
    </section>

    <section id="monografi">
      <!-- <h1>Monografi</h1> -->

      <!-- Grafik 1: Persebaran Penduduk -->
      <h2>Data Kependudukan Menurut Persebaran Penduduk</h2>
      <div class="chart-container">
        <canvas id="chartRw"></canvas>
      </div>

      <!-- Grafik 2: Jenis Kelamin -->
      <h2>Data Kependudukan Menurut Jenis Kelamin</h2>
      <div class="chart-container">
        <canvas id="chartGender"></canvas>
      </div>

      <!-- Grafik 3: Data Kependudukan Menurut Agama -->
      <h2>Data Kependudukan Menurut Agama</h2>
      <div class="chart-container">
        <canvas id="chartReligion"></canvas>
      </div>

      <!-- Grafik 3: Data Kependudukan Menurut  Pendidikan Terakhir -->
      <h2>Data Kependudukan Menurut Pendidikan Terakhir</h2>
      <div class="chart-container">
        <canvas id="chartPendidikan"></canvas>
      </div>
      <!-- Grafik 3: Data Kependudukan Menurut  Pekerjaan -->
      <h2>Data Kependudukan Menurut Pekerjaan</h2>
      <div class="chart-container">
        <canvas id="chartPekerjaan"></canvas>
      </div>

      <!-- Grafik 3: Data Kependudukan Menurut  Kelompok Umur -->
      <h2>Data Kependudukan Menurut Kelompok Umur</h2>
      <div class="chart-container">
        <canvas id="chartUmur"></canvas>
      </div>
    </section>
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
    <script>
      // Data untuk Persebaran Penduduk (RW)
      const dataRw = @json($dataPenduduk);

      const labelsRw = dataRw.map((item) => item.rw);
      const lakiRw = dataRw.map((item) => item.laki);
      const perempuanRw = dataRw.map((item) => item.perempuan);
      const totalRw = dataRw.map((item) => item.total);

       // Grafik 1: Persebaran Penduduk (RW)
      new Chart(document.getElementById("chartRw"), {
        type: "bar",
        data: {
          labels: labelsRw,
          datasets: [
            { label: "Laki-Laki", data: lakiRw, backgroundColor: "#42a5f5" },
            {
              label: "Perempuan",
              data: perempuanRw,
              backgroundColor: "#ef5350",
            },
            { label: "Total", data: totalRw, backgroundColor: "#66bb6a" },
          ],
        },
        options: {
          responsive: true,
          plugins: {
            title: {
              display: true,
              text: "Persebaran Penduduk Berdasarkan RW",
            },
          },
          scales: {
            x: { title: { display: true, text: "RW" } },
            y: {
              title: { display: true, text: "Jumlah Penduduk" },
              beginAtZero: true,
            },
          },
        },
      });

      // Data untuk Jenis Kelamin
      const dataGender = @json($datapopulasi);
      const labelsGender = dataGender.map((item) => item.jenis);
      const jumlahGender = dataGender.map((item) => item.jumlah);

      // Data untuk Agama
      const dataReligion = @json($dataAgama);
      const labelsReligion = dataReligion.map((item) => item.agama);
      const lakiReligion = dataReligion.map((item) => item.laki);
      const perempuanReligion = dataReligion.map((item) => item.perempuan);
      const totalReligion = dataReligion.map((item) => item.total);

      const dataPendidikan =  @json($dataPendidikan);

      const labelsPendidikan = dataPendidikan.map((item) => item.pendidikan);
      const lakiPendidikan = dataPendidikan.map((item) => item.laki);
      const perempuanPendidikan = dataPendidikan.map((item) => item.perempuan);
      const totalPendidikan = dataPendidikan.map((item) => item.total);

      const dataUmur = @json($dataKelompokUmur);
      const labelsUmur = dataUmur.map((item) => item.umur);
      const lakiUmur = dataUmur.map((item) => item.laki);
      const perempuanUmur = dataUmur.map((item) => item.perempuan);
      const totalUmur = dataUmur.map((item) => item.total);


      // Grafik 2: Jenis Kelamin
      new Chart(document.getElementById("chartGender"), {
        type: "pie",
        data: {
          labels: labelsGender,
          datasets: [
            {
              label: "Jenis Kelamin",
              data: jumlahGender,
              backgroundColor: ["#42a5f5", "#ef5350"],
            },
          ],
        },
        options: {
          responsive: true,
          plugins: {
            title: {
              display: true,
              text: "Distribusi Penduduk Berdasarkan Jenis Kelamin",
            },
          },
        },
      });

      // Grafik 3: Data Kependudukan Menurut Agama
      new Chart(document.getElementById("chartReligion"), {
        type: "bar",
        data: {
          labels: labelsReligion,
          datasets: [
            {
              label: "Laki-Laki",
              data: lakiReligion,
              backgroundColor: "#42a5f5",
            },
            {
              label: "Perempuan",
              data: perempuanReligion,
              backgroundColor: "#ef5350",
            },
            { label: "Total", data: totalReligion, backgroundColor: "#66bb6a" },
          ],
        },
        options: {
          responsive: true,
          plugins: {
            title: {
              display: true,
              text: "Data Kependudukan Berdasarkan Agama",
            },
          },
          scales: {
            x: { title: { display: true, text: "Agama" } },
            y: {
              title: { display: true, text: "Jumlah Penduduk" },
              beginAtZero: true,
            },
          },
        },
      });
      
      // Data untuk Pekerjaan
      const dataPekerjaan = @json($dataPekerjaan);

      const labelsPekerjaan = dataPekerjaan.map((item) => item.pekerjaan);
      const lakiPekerjaan = dataPekerjaan.map((item) => item.laki);
      const perempuanPekerjaan = dataPekerjaan.map((item) => item.perempuan);
      const totalPekerjaan = dataPekerjaan.map((item) => item.total);

      // Grafik 4: Data Kependudukan Berdasarkan Pekerjaan
      new Chart(document.getElementById("chartPekerjaan"), {
        type: "bar",
        data: {
          labels: labelsPekerjaan,
          datasets: [
            {
              label: "Laki-Laki",
              data: lakiPekerjaan,
              backgroundColor: "#42a5f5",
            },
            {
              label: "Perempuan",
              data: perempuanPekerjaan,
              backgroundColor: "#ef5350",
            },
            {
              label: "Total",
              data: totalPekerjaan,
              backgroundColor: "#66bb6a",
            },
          ],
        },
        options: {
          responsive: true,
          plugins: {
            title: {
              display: true,
              text: "Data Kependudukan Berdasarkan Pekerjaan",
            },
          },
          scales: {
            x: { 
              title: { display: true, text: "Jenis Pekerjaan" },
              stacked: false, // Set to false to show grouped bars
            },
            y: {
              title: { display: true, text: "Jumlah Penduduk" },
              beginAtZero: true,
            },
          },
        },
      });


      new Chart(document.getElementById("chartPendidikan"), {
        type: "bar",
        data: {
          labels: labelsPendidikan,
          datasets: [
            {
              label: "Laki-Laki",
              data: lakiPendidikan,
              backgroundColor: "#42a5f5",
            },
            {
              label: "Perempuan",
              data: perempuanPendidikan,
              backgroundColor: "#ef5350",
            },
            {
              label: "Total",
              data: totalPendidikan,
              backgroundColor: "#66bb6a",
            },
          ],
        },
        options: {
          responsive: true,
          plugins: {
            title: {
              display: true,
              text: "Data Kependudukan Berdasarkan Pendidikan Terakhir",
            },
          },
          scales: {
            x: { title: { display: true, text: "Pendidikan Terakhir" } },
            y: {
              title: { display: true, text: "Jumlah Penduduk" },
              beginAtZero: true,
            },
          },
        },
      });

      new Chart(document.getElementById("chartUmur"), {
        type: "bar",
        data: {
          labels: labelsUmur,
          datasets: [
            { label: "Laki-Laki", data: lakiUmur, backgroundColor: "#42a5f5" },
            {
              label: "Perempuan",
              data: perempuanUmur,
              backgroundColor: "#ef5350",
            },
            { label: "Total", data: totalUmur, backgroundColor: "#66bb6a" },
          ],
        },
        options: {
          responsive: true,
          plugins: {
            title: {
              display: true,
              text: "Data Kependudukan Berdasarkan Kelompok Umur",
            },
          },
          scales: {
            x: { title: { display: true, text: "Kelompok Umur" } },
            y: {
              title: { display: true, text: "Jumlah Penduduk" },
              beginAtZero: true,
            },
          },
        },
      });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css"
    />

    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
      $(document).ready(function () {
        $("#dataTableProdukHukum").DataTable();
      });
    </script>
  </body>
</html>
