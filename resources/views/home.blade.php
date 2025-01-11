<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Desa Tangsimekar</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    rel="stylesheet" />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
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

    :root {
      --primary-color: #00bcd4;
      --primary-dark: #0097a7;
      --text-dark: #1a1a1a;
    }

    .navbar {
      padding: 15px 0;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
    #beritaCarousel .card-img-top {
      width: 100%;
      height: 200px; /* Sesuaikan tinggi gambar */
      object-fit: cover; /* Mengatur agar gambar tetap proporsional */
  }

    .navbar-brand {
      display: flex;
      align-items: center;
      gap: 15px;
    }
    .gallery-image {
    width: 100%;
    height: 200px; /* Atur tinggi gambar sesuai kebutuhan */
    object-fit: cover; /* Agar gambar tetap terpotong dengan baik */
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

    /* Berita */
    #berita .card {
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s;
    }

    #berita .card:hover {
      transform: translateY(-5px);
    }

    #berita .carousel-indicators button {
      background-color: #0097a7;
      width: 10px;
      height: 10px;
      border-radius: 50%;
    }

    #berita .carousel-indicators .active {
      background-color: #004d40;
    }



    #berita .carousel-control-prev-icon,
    #berita .carousel-control-next-icon {
      border-radius: 50%;
      /* Membuat tombol berbentuk lingkaran */
    }

    #berita .carousel-control-prev {
      left: -50px;
      top: 250px;
      /* Menggeser tombol prev lebih ke kiri */
    }

    #berita .carousel-control-next {
      right: -50px;
      top: 250px;
      /* Menggeser tombol next lebih ke kanan */
    }


    .card {
      border: 1px solid #ddd;
      /* Bingkai tipis */
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card img {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .card-title {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-text {
      font-size: 0.9rem;
      color: #666;
      overflow: hidden;
      /* Menghilangkan teks yang melampaui batas */
      text-overflow: ellipsis;
      /* Menambahkan "..." jika teks terpotong */
      display: -webkit-box;
      /* Gunakan box model khusus */
      -webkit-line-clamp: 3;
      /* Membatasi hanya 2 baris */
      line-clamp: 2;
      /* Standard property for compatibility */
      -webkit-box-orient: vertical;
      /* Mengatur orientasi teks ke vertikal */
    }


    /* Informasi tambahan (admin dan tanggal) */
    .card .meta-info {
      font-size: 0.85rem;
      color: #888;
      margin-bottom: 10px;
    }

    #galeri {
      background: linear-gradient(to bottom, #0097a7, #ffffff);
      padding: 50px 0;
      padding-bottom: 150px;
      text-align: center;
      overflow: hidden;
      /* Mencegah elemen keluar layar */
    }

    .swiper {
      width: 100%;
      height: 100%;
      overflow: visible;
      padding-bottom: 50px;
      /* Memastikan elemen di dalam tidak terpotong */
    }

    .swiper-wrapper {
      display: flex;
    }

    .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: visible;
      /* Memastikan elemen hover terlihat */
      border-radius: 10px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: auto;
      z-index: 1;
      /* Menjadikan slide lebih tinggi */
    }

    .swiper-slide img {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s ease, z-index 0.3s;
    }

    .swiper-slide-active {
      transform: scale(1.2);
      /* Memperbesar slide aktif */
      z-index: 2;
      /* Memastikan slide aktif berada di depan */
    }



    .swiper-pagination-bullet {
      width: 40px;
      height: 6px;
      border-radius: 3px;
      background: #0097a7;
      transition: background-color 0.3s;
    }

    .swiper-pagination-bullet-active {
      background: #006064;
    }

    .card {
      background: white;
      border: 10px solid #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      /* Efek hover sedikit naik */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-bottom: 1px solid #ddd;
    }

    .card-body {
      padding: 20px;
    }

    #galeri .card-body p {
      margin: 0;
      font-size: 1.2rem;
      font-weight: bold;
      color: #0097a7;
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
          class="d-inline-block align-top" />
        <div class="brand-text">
          <div class="brand-title">TANGSIMEKAR</div>
          <div class="brand-subtitle">KABUPATEN BANDUNG</div>
        </div>
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#" id="home" role="button"> Home </a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="profile"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
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
                <a class="dropdown-item" href="/perangkat_desa">Perangkat Desa</a>
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
              aria-expanded="false">
              Informasi Publik
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="/produkhukum">Produk Hukum</a>
              </li>
              <li><a class="dropdown-item" href="/agenda">Agenda Kegiatan</a></li>
              <li>
                <a class="dropdown-item" href="/transparansi">Transparansi Anggaran</a>
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
                        Home
                    </li>
                </ol>
            </nav>
      
    </div>
  </section>

  <!-- News Section -->
<section id="berita" class="produk-hukum section-padding text-left">
  <div class="container">
      <h2 class="fw-bold mb-4 text-center">Berita</h2>
      <div id="beritaCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              @foreach ($news->chunk(3) as $index => $chunk)
                  <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                      <div class="row">
                          @foreach ($chunk as $item)
                              <div class="col-md-4">
                                  <div class="card">
                                      <img src="{{ asset('assets/images/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                                      <div class="card-body">
                                          <div class="meta-info">👤 Admin | 📅 {{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</div>
                                          <h5 class="card-title">{{ $item->title }}</h5>
                                          <p class="card-text">{{ Str::limit($item->description, 100) }}</p>
                                          <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary">Selengkapnya</a>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
              @endforeach
          </div>
          <div class="carousel-indicators">
              @foreach ($news->chunk(3) as $index => $chunk)
                  <button type="button" data-bs-target="#beritaCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="true"></button>
              @endforeach
          </div>
          <!-- Navigation Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#beritaCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#beritaCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
  </div>
</section>

  <!-- Gallery Section -->
<section id="galeri" class="text-center">
  <div class="container">
    <h2 class="fw-bold mb-4 text-white">Galeri</h2>
    <!-- Swiper Container -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @foreach ($gallery as $item)
          <div class="swiper-slide">
            <div class="card">
              <img src="{{ asset('assets/images/' . $item->image) }}" class="card-img-top gallery-image" alt="Gambar Galeri">
              <div class="card-body">
                <p>{{ $item->title }}</p> <!-- Menampilkan title galeri -->
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

  <section id="faq" class="lembaga mb-3">
    <div class="container mb-5">
      <h1 class="text-center mb-4">Frequently Asked Questions</h1>

      <div class="accordion" id="faqAccordion">
        <!-- Pertanyaan 1 -->
        <div class="accordion-item fw-bold text-dark bg-light">
          <h2 class="accordion-header" id="headingOne">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="false"
              aria-controls="collapseOne">
              Apa saja layanan yang disediakan oleh pemerintah desa?
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse"
            aria-labelledby="headingOne"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Pemerintah Desa Tangsimekar menyediakan berbagai layanan yang
              berkaitan dengan urusan kependudukan seperti pembuatan surat
              keterangan domisili, izin usaha, sertifikat tanah, akta
              kelahiran, akta kematian, dan layanan kependudukan lainnya.
            </div>
          </div>
        </div>

        <!-- Pertanyaan 2 -->
        <div class="accordion-item fw-bold text-dark bg-light" >
          <h2 class="accordion-header" id="headingTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo">
              Kapan jadwal pelayanan kantor desa?
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="headingTwo"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <ol>
                <li>
                  Senin – Kamis 08.00 – 15.30 dengan waktu istirahat pukul
                  12.00-13.00
                </li>
                <li>
                  Jumat 08.00 – 16.00 dengan waktu istirahat pukul 11.30-13.00
                </li>
              </ol>
            </div>
          </div>
        </div>

        <!-- Pertanyaan 3 -->
        <div class="accordion-item fw-bold y text-dark bg-light">
          <h2 class="accordion-header" id="headingThree">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThree"
              aria-expanded="false"
              aria-controls="collapseThree">
              Apakah pemerintah desa menyediakan layanan online?
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="headingThree"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Ya, Pemerintah Desa Tangsimekar menyediakan layanan online yang dapat diakses oleh semua pihak yang memerlukan dengan melihat informasi/tata cara melalui website resmi desa.
            </div>
          </div>
        </div>

        <!-- Pertanyaan 4 -->
        <div class="accordion-item fw-bold text-dark bg-light">
          <h2 class="accordion-header" id="headingFour">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFour"
              aria-expanded="false"
              aria-controls="collapseFour">
              Bagaimana cara melaporkan keluhan atau masalah di desa?

            </button>
          </h2>
          <div
            id="collapseFour"
            class="accordion-collapse collapse"
            aria-labelledby="headingFour"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Masyarakat dapat melaporkan keluhan atau masalah melalui layanan pengaduan/kontak kami yang tertera di website desa atau langsung ke kantor desa melalui kotak pengaduan.

            </div>
          </div>
        </div>
        <!-- Pertanyaan 5 -->
        <div class="accordion-item fw-bold text-dark bg-light">
          <h2 class="accordion-header" id="headingFive">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFive"
              aria-expanded="false"
              aria-controls="collapseFive">
              Bagaimana cara mendapatkan informasi terbaru dari pemerintah desa?

            </button>
          </h2>
          <div
            id="collapseFive"
            class="accordion-collapse collapse"
            aria-labelledby="headingFive"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Masyarakat bisa mendapatkan informasi terbaru melalui website resmi desa, papan pengumuman di kantor desa serta media sosial resmi desa.


            </div>
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
            class="img-fluid mt-3"></iframe>
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
              href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=dstangsimekar@gmail.com">dstangsimekar@gmail.com</a>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <h6 class="site-footer-title mb-3 fw-bold">Social</h6>

          <ul class="social-icon">
            <li class="social-icon-item">
              <a
                href="https://www.instagram.com/dstangsimekar?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="social-icon-link fab fa-instagram"></i></a>
            </li>

            <li class="social-icon-item">
              <a href="https://www.youtube.com/@desatangsimekar5699"><i class="social-icon-link fab fa-youtube"></i></a>
            </li>

            <li class="social-icon-item">
              <a href="https://wa.me/+6281234567890"><i class="social-icon-link fab fa-whatsapp"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container pt-5">
      <div class="row align-items-center">
        <div class="col-lg-2 col-md-3 col-12">
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
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 3,
      initialSlide: 2, // Mulai dari slide ke-4 (indeks ke-3)
      coverflowEffect: {
        rotate: 0,
        stretch: 70,
        depth: 150,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  <!-- DataTables CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

  <!-- jQuery and DataTables JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
  <script>
    $(document).ready(function() {
      $("#dataTableProdukHukum").DataTable();
    });
  </script>
</body>

</html>