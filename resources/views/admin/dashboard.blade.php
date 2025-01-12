<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Desa Tangsimekar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>

<body>
  <button class="toggle-btn" id="toggleSidebar">
    <i class="fas fa-bars"></i>
  </button>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-2 sidebar" id="sidebar">
        <div class="logo-section">
          <img src="{{ asset('assets/images/logodesa.png') }}" alt="Logo Desa">
          <h5>Dashboard Desa Tangsimekar</h5>
        </div>
        <hr>
        <nav class="nav flex-column">
          <a href="/admin/dashboard" class="nav-link active"><i class="fas fa-home"></i> Home</a>
          <!-- Billing Menu with Arrow Icon -->
          <div class="nav-item">
            <a href="#" class="nav-link" onclick="toggleSubMenu(event, 'profileSubMenu')">
              <i class="fas fa-user-circle"></i> Profile
              <span class="arrow"><i class="fas fa-chevron-down"></i></span>
            </a>
            <ul class="sub-menu" id="profileSubMenu">
              <li><a href="/admin/kades" class="nav-link"><i class="fa fa-user"></i>Kepala Desa</a></li>
              <li><a href="/admin/perangkat-desa" class="nav-link"> <i class="fa fa-users"></i>Perangkat Desa</a></li>
              <li><a href="/admin/struktur" class="nav-link"><i class="fas fa-sitemap"></i>Struktur Desa</a></li>
            </ul>
          </div>
          <a href="/admin/pemerintahan" class="nav-link"><i class="fas fa-building"></i> Dokumen</a>
          <div class="nav-item">
            <a href="#" class="nav-link" onclick="toggleSubMenu(event, 'informasiPublikSubMenu')">
              <i class="fas fa-info-circle"></i> Informasi Publik
              <span class="arrow"><i class="fas fa-chevron-down"></i></span>
            </a>
            <ul class="sub-menu" id="informasiPublikSubMenu">
              <li><a href="/admin/agenda" class="nav-link"><i class="fas fa-calendar"></i>Agenda</a></li>
              {{-- <li><a href="/admin/produk-hukum" class="nav-link"> <i class="fas fa-book"></i>Produk Hukum</a></li> --}}
              {{-- {{-- <li><a href="/admin/transparansi" class="nav-link"><i class="fas fa-file-invoice-dollar"></i>Transparansi Anggaran</a></li> --}}
            </ul>
          </div>
          <a href="/admin/monografi" class="nav-link"><i class="fa fa-line-chart"></i> Monografi</a>
          <a href="/admin/permohonan-persuratan" class="nav-link">
            <i class="fas fa-envelope"></i> Permohonan Persuratan
          </a>
          <hr>
          <h6>Account Pages</h6>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-in-alt"></i> Log Out
          </a>
        </nav>
      </div>


      <div class="col-md-9 col-lg-9 main-content">
        <div class="d-flex justify-content-between align-items-center">
          <div class="breadcrumb">Pages / Home</div>
          <input type="text" class="form-control w-25" placeholder="Search..." id="searchInput">
        </div>
        <h5 class="mb-4">Home</h5>
        {{-- Berita --}}
        <div class="card">
          <div class="table-header d-flex justify-content-between align-items-center">
            <span>Tabel Berita</span>
            <button class="btn btn-tambah" onclick="openAddModal()">
              <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
            </button>
          </div>
          <div class="table-responsive">
            <table id="table-berita" class="table align-middle">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="table-body">
                @foreach ($dataBerita as $berita)
                <tr>
                    <td>{{ $berita->id }}</td>
                    <td>
                      <img src="{{ asset('../assets/images/' . $berita->image) }}"  
                             class="card-img-top" 
                             alt="{{ $berita->title }}" 
                             width="100">
                             
                    </td>
                    <td><span class="judul">{{ $berita->title }}</span></td>
                    <td class="truncate">{{ Str::limit($berita->description, 50, '...') }}</td>
                    <td>{{ $berita->date }}</td>
                    <td>
                      <button 
                          class="btn btn-light" 
                          onclick="openEditModal(this)" 
                          data-id="{{ $berita->id }}" 
                          data-title="{{ $berita->title }}" 
                          data-description="{{ $berita->description }}" 
                          data-news="{{ $berita->news }}" 
                          data-date="{{ $berita->date }}" 
                          data-image="{{ $berita->image }}"
                      >
                          Edit
                      </button>

                        <button class="btn btn-danger" onclick="deleteNews({{ $berita->id }})">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
            </table>
          </div>
        </div>
        
      <div id="error-message" class="alert alert-danger d-none"></div>  
      {{-- Galeri --}}
      <div class="card">
        <div class="table-header d-flex justify-content-between align-items-center">
            <span>Tabel Galeri</span>
            <button class="btn btn-tambah" onclick="openAddModalGaleri()">
                <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
            </button>
        </div>
        <div class="table-responsive">
            <table id="table-galeri" class="table align-middle">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($dataGaleri as $galeri)
                    <tr>
                        <td>{{ $galeri->id }}</td>
                        <td>
                            <img src="{{ asset('assets/images/' . $galeri->image) }}" 
                                class="card-img-top" 
                                alt="Galeri {{ $galeri->id }}" 
                                style="max-height: 100px; max-width: 100px; object-fit: cover;">
                        </td>
                        <td>{{ $galeri->title }}
                        <td>{{ $galeri->created_at ? $galeri->created_at->format('Y-m-d') : '-' }}
                        </td>
                        <td>
                          <button 
                          class="btn btn-light" 
                          onclick="openEditModalGallery(this)" 
                          dataGalery-id="{{ $galeri->id }}" 
                          dataGalery-title="{{ $galeri->title }}" 
                          dataGalery-image="{{ $galeri->image }}"
                      >
                          Edit
                      </button>
                            <button class="btn btn-danger" onclick="deleteGallery({{ $galeri->id }})">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal Tambah Data -->
<div class="modal fade" id="addNewsModal" tabindex="-1" aria-labelledby="addNewsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewsModalLabel">Tambah Berita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addNewsForm">
        <div class="modal-body">
          <div class="mb-3">
            <label for="newsImage" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="newsImage" name="image" required>
          </div>
          <div class="mb-3">
            <label for="newsTitle" class="form-label">Judul</label>
            <input type="text" class="form-control" id="newsTitle" name="title" required>
          </div>
          <div class="mb-3">
            <label for="newsDescription" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="newsDescription" name="description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="newsContent" class="form-label">Berita</label>
            <textarea class="form-control" id="newsContent" name="news" rows="5" required></textarea>
          </div>
          <div class="mb-3">
            <label for="newsDate" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="newsDate" name="date" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Edit Data -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Berita</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editForm">
              <div class="modal-body">
                  <input type="hidden" id="newsId">
                  <div class="mb-3">
                      <label for="title" class="form-label">Judul</label>
                      <input type="text" class="form-control" id="title" name="title" required>
                  </div>
                  <div class="mb-3">
                      <label for="description" class="form-label">Deskripsi</label>
                      <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                  </div>
                  <div class="mb-3">
                      <label for="news" class="form-label">Isi Berita</label>
                      <textarea class="form-control" id="news" name="news" rows="5" required></textarea>
                  </div>
                  <div class="mb-3">
                      <label for="date" class="form-label">Tanggal</label>
                      <input type="date" class="form-control" id="date" name="date" required>
                  </div>
                  <div class="mb-3">
                      <label for="image" class="form-label">Gambar (Opsional)</label>
                      <input type="file" class="form-control" id="image" name="image" accept="image/*">
                      <div id="imagePreview" class="mb-3"></div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
              </div>
          </form>
      </div>
  </div>
</div>

<!-- Modal Tambah Data Galeri -->
<div class="modal fade" id="addGalleryModal" tabindex="-1" aria-labelledby="addGalleryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addGalleryModalLabel">Tambah Gambar Galeri</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addGalleriesForm" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="galleryTitle" class="form-label">Judul</label>
            <input type="text" class="form-control" id="galleryTitle" name="title" required>
        </div>        
          <div class="mb-3">
            <label for="galleryImage" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="galleryImage" name="image" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Edit Data Galeri -->
<div class="modal fade" id="editModalGalery" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Foto Galeri</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editFormGallery">
              <div class="modal-body">
                  <input type="hidden" id="galleriesId">
                  <div class="mb-3">
                    <label for="galleryTitle" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="galleryTitleEdit" name="title" required>
                </div>  
                  <div class="mb-3">
                      <label for="image" class="form-label">Gambar</label>
                      <input type="file" class="form-control" id="image" name="image" accept="image/*">
                      <div id="imagePreviewGallery" class="mb-3"></div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
              </div>
          </form>
      </div>
  </div>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/Admin/script.js"></script>
  <script src="../assets/js/Admin/berita.js"></script>
  <script src="../assets/js/Admin/galeri.js"></script>

</body>

</html>