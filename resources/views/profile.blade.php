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
      /* punya struktur */
      .container-structure {
        text-align: center;
        padding: 50px;
        position: relative;
      }
      .container-bg {
        background-color: #1292B6;
        color: white;
        font-family: Arial, sans-serif;
      }
      .profile {
        margin: 20px;
        position: relative;
      }
      .profile img {
        border-radius: 50%;
        border: 5px solid #fff;
      }
      .profile h5 {
        margin-top: 10px;
        font-size: 18px;
      }
      .profile p {
        font-size: 14px;
        color: #ccc;
      }
      .logo {
        text-align: left;
      }
      .logo img {
        width: 50px;
      }
      .logo h1 {
        font-size: 24px;
        margin: 0;
      }
      .logo p {
        font-size: 18px;
        margin: 0;
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
                  <li><a class="dropdown-item" href="#">Profile Desa</a></li>
                  <li><a class="dropdown-item" href="/kades">Kepala Desa</a></li>
                  <li><a class="dropdown-item" href="/perangkat_desa">Perangkat Desa</a></li>
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
                <li><a class="dropdown-item" href="/produkhukum">Produk Hukum</a></li>
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
                        Profile
                    </li>
                    <li aria-current="page" class="breadcrumb-item fw-bold">
                    Profile Desa
                    </li>
                </ol>
            </nav>
      </div>
    </section>

    <!-- Stuktur Section -->
    <section id="strukturdesa" class="meetings-page color">
        <div class="container-structure ">
            <div>
                <h1 class="text-light text-center">STRUKTUR PEMERINTAHAN</h1>
                <h2 class="text-light text-center">DESA TANGSIMEKAR</h2>
            </div>
            <div class="container">
                <?php if (!$strukturDesa->isEmpty()): ?>
                    <!-- Baris pertama: Kepala Desa dan Ketua BPD -->
                    <div class="row justify-content-center">
                        <?php 
                            // Ambil hanya data Kepala Desa dan Ketua BPD
                            $prioritized = $strukturDesa->filter(function ($item) {
                                return in_array($item['position'], ['Kepala Desa', 'Ketua BPD']);
                            });
                        ?>
                        <?php foreach ($prioritized as $person): ?>
                            <div class="col-md-3 profile text-center">
                                <img 
                                    alt="<?= htmlspecialchars($person['name'] ?? 'Profile Image', ENT_QUOTES) ?>" 
                                    height="125" 
                                    src="assets/images/VillageInstrument_images/<?= htmlspecialchars($person['image'] ?? 'default.jpg', ENT_QUOTES) ?>" 
                                    width="125"  
                                />
                                <p><?= htmlspecialchars($person['position'] ?? 'Unknown Position', ENT_QUOTES) ?></p>
                                <p><?= htmlspecialchars($person['name'] ?? 'Unknown Name', ENT_QUOTES) ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
    
                    <!-- Baris berikutnya: Data lainnya -->
                    <?php 
                        // Data lainnya, tanpa Kepala Desa dan Ketua BPD
                        $others = $strukturDesa->filter(function ($item) {
                            return !in_array($item['position'], ['Kepala Desa', 'Ketua BPD']);
                        });
                    ?>
                    <?php foreach (array_chunk($others->toArray(), 4) as $row): ?>
                        <div class="row justify-content-center">
                            <?php foreach ($row as $person): ?>
                                <div class="col-md-3 profile text-center">
                                    <img 
                                        alt="<?= htmlspecialchars($person['name'] ?? 'Profile Image', ENT_QUOTES) ?>" 
                                        height="125" 
                                        src="assets/images/VillageInstrument_images/<?= htmlspecialchars($person['image'] ?? 'default.jpg', ENT_QUOTES) ?>" 
                                        width="125"  
                                    />
                                    <p><?= htmlspecialchars($person['position'] ?? 'Unknown Position', ENT_QUOTES) ?></p>
                                    <p><?= htmlspecialchars($person['name'] ?? 'Unknown Name', ENT_QUOTES) ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center">Data struktur desa tidak tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
  
  

    <!-- demografi Section -->
    <section id="demografi" class="demo bg-secondary">
      <div class="container">
        <h2 class="text-center mb-5 text-light">Demografi Desa</h2>
        <div class="content-demo">
          <div class="row mt-3">
            <div class="col-md-4 image-container">
              <img
                alt="Image of a building in Desa Tangsimekar"
                height="200"
                src="../assets/images/images.jpg"
                width="300"
              />
            </div>
            <div class="col-md-8">
              <h2>Desa Tangsimekar</h2>
              <p>
                Desa sebagai sub sistem Kabupaten/Kota yang merupakan pelaksana
                pemerintahan, kemasyarakatan, serta pembangunan. Desa merupakan
                lapisan yang bersentuhan langsung dengan masyarakat. Desa
                Tangsimekar terletak 37 KM dari Soreang, ibu kota Kabupaten
                Bandung, atau sekitar 33 KM di sebelah Tenggara Kota Bandung.
                Secara topografis Desa Tangsimekar merupakan daerah yang relatif
                datar yang memiliki ketinggian 700 meter di atas permukaan laut,
                dengan curah hujan rata-rata 781 mm/tahun dengan suhu udara
                berkisar 20oC hingga 31oC. Desa Tangsimekar merupakan salah satu
                dari 12 (dua belas) desa yang berada di wilayah Kecamatan Paseh
                Kabupaten Bandung Jawa Barat.
              </p>
              <h3>Batas Wilayah</h3>
              <ul>
                <li>
                  <span> Sebelah Utara </span>
                  : berbatasan dengan Cikancung
                </li>
                <li>
                  <span> Sebelah Timur </span>
                  : berbatasan dengan Leles
                </li>
                <li>
                  <span> Sebelah Selatan </span>
                  : berbatasan dengan Ibun
                </li>
                <li>
                  <span> Sebelah Barat </span>
                  : berbatasan dengan Majalaya
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="masyarakatdesa" class="masyarakat mb-4">
      <div class="container">
        <h2 class="text-center mb-5 text-light">Masyarakat Desa</h2>
        <div class="content-masyarakat">
          <div class="text">
            <p>
              Desa Tangsimekar, salah satu dari 12 desa di Kecamatan Paseh,
              memiliki jumlah penduduk sebanyak 9.389 jiwa menurut data MobDuk
              Kabupaten Bandung pada September 2024, dengan komposisi 4.785
              laki-laki dan 4.604 perempuan. Data ini diperbarui secara berkala di
              kantor desa dan diunggah ke situs untuk memberikan gambaran terbaru
              tentang mobilitas penduduk.
            </p>
            <p>
              Masyarakat Desa Tangsimekar, yang mayoritas beragama Islam,
              menunjukkan toleransi tinggi dalam kehidupan sosial dan keagamaan.
              Nilai ini tercermin dalam praktik ibadah dan interaksi sosial
              sehari-hari, di mana toleransi dan keinginan untuk menghindari
              kesenjangan sosial menjadi prinsip utama.
            </p>
            <p>
              Mayoritas penduduk bekerja di sektor pertanian. Tantangan utama
              terkait mata pencaharian adalah terbatasnya lapangan pekerjaan,
              sehingga desa berupaya memperluas kesempatan kerja dan mendukung
              usaha kecil melalui kredit untuk pengembangan bisnis.
            </p>
            <p>
              Berbagai kegiatan masyarakat seperti Karang Taruna, PKK
              Dharmawanita, dan Posyandu berfungsi sebagai media informasi
              pembangunan desa. Dana bimbingan ekonomi, masih ada keluarga yang
              membutuhkan dukungan, baik moral maupun finansial. Bantuan ini
              menjadi prioritas desa untuk meningkatkan kesejahteraan masyarakat.
            </p>
            <p>
              Kebersamaan Desa Tangsimekar diwarnai semangat Bhinneka Tunggal Ika,
              nilai-nilai demokrasi, dan gotong royong. Perayaan hari besar
              nasional, seperti HUT RI, menjadi momen penting dalam memupuk rasa
              nasionalisme. Partisipasi politik baik dalam pemilihan kepala desa
              maupun pemilihan umum mencerminkan dukungan terhadap nilai-nilai
              demokrasi.
            </p>
          </div>
          <div class="image">
            <img
              alt="Desa Tangsimekar"
              height="300"
              src="../assets/images/masyarakat.jpg"
              width="300"
            />
            <div class="stats">
              <div class="stat">
                <h2>9.389</h2>
                <p>Jumlah <br> Penduduk</p>
              </div>
              <div class="stat">
                <h2>4.785</h2>
                <p>Laki-laki</p>
              </div>
              <div class="stat">
                <h2>4.604</h2>
                <p>Perempuan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="potensi">
      <div class="header text-center">
        <h1>Potensi Desa</h1>
        <p>
          Potensi desa dapat dikatakan sebagai berbagai sumber alam (fisik) dan
          sumber manusia (non fisik) yang tersimpan dan terdapat di suatu desa,
          dan diharapkan kemanfaatannya bagi kelangsungan dan perkembangan desa.
        </p>
      </div>
      <div class="section-title-2">Potensi Fisik</div>
      <div class="content-2">
        <div class="item">
          <img
            alt="Icon of soil with a plant sprouting"
            height="100"
            src="assets/images/tanah.png"
            width="100"
          />
          <h3>Tanah</h3>
          <p>
            Tanah sebagai sumber tambang dan mineral, sumber tanaman yang
            merupakan sumber mata pencaharian, bahan makanan dan tempat tinggal.
          </p>
        </div>
        <div class="item">
          <img
            alt="Icon of a water droplet"
            height="100"
            src="assets/images/air.png"
            width="100"
          />
          <h3>Air</h3>
          <p>
            Air merupakan sumber air, kondisi dan tata airnya untuk irigasi,
            persatuan dan kebutuhan hidup sehari-hari.
          </p>
        </div>
        <div class="item">
          <img
            alt="Icon of a sun and cloud representing climate"
            height="100"
            src="assets/images/iklim.png"
            width="100"
          />
          <h3>Iklim</h3>
          <p>Peranannya sangat penting bagi desa yang bersifat agraris.</p>
        </div>
      </div>
      <div class="content-2">
        <div class="item">
          <img
            alt="Icon of livestock, specifically a cow"
            height="100"
            src="assets/images/ternak.png"
            width="100"
          />
          <h3>Ternak</h3>
          <p>Sebagai sumber tenaga, bahan makanan dan pendapatan.</p>
        </div>
        <div class="item">
          <img
            alt="Icon of people representing human resources"
            height="100"
            src="assets/images/manusia.png"
            width="100"
          />
          <h3>Manusia</h3>
          <p>
            Sebagai sumber tenaga kerja potensial baik pengolah tanah dan produsen
            dalam bidang pertanian, maupun tenaga kerja industri di kota.
          </p>
        </div>
      </div>
    </section>

    <section class="masyarakat">
      <div class="container">
        <h1 class="text-center text-light mb-5">Potensi Non Fisik</h1>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card-potensi">
              <div class="card-body-potensi">
                <img
                  alt="A group of people standing together in a hall"
                  height="100"
                  src="../assets/images/gotong.jpg"
                  width="100"
                />
                <p class="card-text">
                  Masyarakat desa, yang hidup berdasarkan gotong royong dan suatu
                  kekuatan membangun atas dasar kerja sama dan saling pengertian.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-potensi">
              <div class="card-body-potensi">
                <img
                  alt="A group of people attending a social organization meeting"
                  height="100"
                  src="../assets/images/lembaga.jpg"
                  width="100"
                />
                <p class="card-text">
                  Lembaga-lembaga sosial, pendidikan, dan organisasi-organisasi
                  sosial yang dapat memberikan bantuan sosial dalam bimbingan
                  terhadap masyarakat
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-potensi">
              <div class="card-body-potensi">
                <img
                  alt="Village officials maintaining order and security"
                  height="100"
                  src="../assets/images/linmas.jpg"
                  width="100"
                />
                <p class="card-text">
                  Aparatur/pamong desa, untuk menjaga ketertiban dan keamanan demi
                  kelancaran jalannya pemerintahan desa.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="lembaga">
      <div class="container">
        <h2 class="text-center mb-5">
          Kaitan potensi desa dalam perkembangan desa dan kota
        </h2>
        <div class="card">
          <div class="card-body">
            <div class="card-title text-center fw-bold">
              Desa sebagai sumber bahan mentah maupun bahan pangan bagi kota
            </div>
            <div class="card-text"style="text-align: justify;">
              Dalam hubungan kota desa, desa adalah daerah belakang atau hinterland, yakni suatu daerah yang memiliki fungsi penghasil makanan pokok seperti padi, jagung, kacang, ketela, buah, sayuran dan lainnya. Secara ekonomis desa juga sebagai lumbung bahan mentah bagi industri yang ada di kota. Desa adalah tempat produksi bahan pangan, oleh karena itu, sangat penting masyarakat desa dalam pencapaian swasembada pangan. Desa juga memiliki peran dalam pembangunan yakni terletak pada ekonomi.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="card-title text-center fw-bold">
              Desa berfungsi sebagai sumber tenaga kerja bagi kota
            </div>
            <div class="card-text"style="text-align: justify;">
              Dalam pembangunan tentu saja tenaga kerja menjadi sesuatu yang
              penting, jika membicarakan tenaga kerja tentu tidak akan lepas dari
              usia produktif. Menurut beberapa ahli demografi dari Universitas
              Gadjah Mada, usia produktif digolongkan sebagai berikut:
              <ul>
                <li>Umur 0 – 9 tahun merupakan usia belum produktif</li>
                <li>Umur 10 – 64 tahun, merupakan usia produktif penuh</li>
                <li>Umur 65 tahun ke atas merupakan usia tidak produktif.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="card-title text-center fw-bold">
              Desa sebagai mitra pembangunan bagi kota
            </div>
            <div class="card-text"style="text-align: justify;">
              Jika ditinjau dari tingkat pendidikan serta teknologi warga desa tergolong belum berkembang. Namun, secara umum desa telah mendapat pengaruh dari kehidupan di perkotaan. Hal tersebut menyebabkan wujud desa mengalami banyak perubahan. Tidak hanya sebagai tempat tinggal, akan tetapi desa berhubungan dengan kondisi lingkungan serta mata pencaharian. Mayoritas penduduk Indonesia berada di pedesaan. Oleh karena itu, dalam upaya menumbuhkan partisipasi masyarakat dalam membangun sarana dan prasaran membutuhkan langkah-langkah yang tepat agar tidak membuat permasalahan di masyarakat. Oleh sebab itu fungsi juga peran desa menjadi sangat penting bagi kemajuan kota. Dan untuk Desa Tangsimekar, Kecamatan Paseh, Kabupaten Bandung memiliki banyak potensi berupa sumber data manusia (SDM) maupun sumber daya alam (SDA) yang tersebar secara beragam. 

Dimulai dari bidang usaha, profesi, pekerjaan maupun hobi. Untuk bidang usaha, keterwakilan SDM masyarakat desa diwujudkan dalam berbagai bidang baik dalam bentuk barang maupun jasa. Bidang tersebut meliputi pertanian, kuliner, niaga, pendidikan maupun dalam bentuk jasa  lainnya. Dalam bidang profesi maupun pekerjaan, masyarakat desa terdiri dari petani, buruh tani, wirausaha,  pedagang,  seniman hingga pegawai perkantoran, pegawai negeri sipil (PNS ) dan serta TNI, Polri. Mereka berdomisili dan tersebar secara merata di wilayah Dusun Desa Tangsimekar.

Sedangkan, potensi masyarakat desa dari segi hobi meliputi berbagai ragam. Hobi tersebut terdiri dua hal yaitu hobi  sebagai kesenangan maupun hobi yang berdampak pada pendapatan secara ekonomi. Hobi yang berdampak pada pendapatan ekonomi terdiri pengrajin, otomotif hingga mencari ikan di aliran sungai. Untuk ketersediaan SDA secara alamiah, lahan pertanian memberikan kontribusi besar pada kecukupan pangan. Selain itu, kondisi air yang melimpah dari waduk pondok memberikan kemudahan dalam pelaksanaan dunia pertanian. 
Selain padi, produk bidang pertanian lainnya meliputi sayur, buah, ubi-ubian, palawija maupun keperluan dapur seperti bawang merah. Semua tumbuh subur di wilayah areal pertanian Desa Tangsimekar yang rata-rata berkontur datar.

Secara garis besar, ketersediaan SDA dan SDM di Desa Tangsimekar berkontribusi besar membantu pertumbuhan ekonomi. Bila di kelola secara tepat, bukan tidak mungkin potensi dari SDM maupun SDA akan memberikan percepatan kemajuan Desa Tangsimekar.

             
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
    

    <script>
      function animateValue(element, start, end, duration) {
          const range = end - start;
          const increment = Math.ceil(range / 20);
          let current = start;
          
          const timer = setInterval(() => {
              current += increment;
              if (current >= end) {
                  current = end;
                  clearInterval(timer);
              }
              element.textContent = current.toLocaleString();
          }, 25);
      }

      const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  const stats = [
                      {element: document.querySelector('.stat:nth-child(1) h2'), end: 9389},
                      {element: document.querySelector('.stat:nth-child(2) h2'), end: 4785},
                      {element: document.querySelector('.stat:nth-child(3) h2'), end: 4604}
                  ];
                  
                  stats.forEach(stat => {
                      animateValue(stat.element, 0, stat.end, 200);
                  });
                  
                  observer.unobserve(entry.target); // Only animate once
              }
          });
      }, { threshold: 0.5 });

      document.addEventListener('DOMContentLoaded', () => {
          const statsSection = document.querySelector('.stats');
          observer.observe(statsSection);
      });
</script>




  </body>
</html>
