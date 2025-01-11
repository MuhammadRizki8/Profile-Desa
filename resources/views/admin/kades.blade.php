<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
          <a href="/admin/dashboard" class="nav-link"><i class="fas fa-home"></i> Home</a>
          <!-- Billing Menu with Arrow Icon -->
          <div class="nav-item">
            <a href="#" class="nav-link active" onclick="toggleSubMenu(event, 'profileSubMenu')">
              <i class="fas fa-user-circle"></i> Profile
              <span class="arrow"><i class="fas fa-chevron-down"></i></span>
            </a>
            <ul class="sub-menu" id="profileSubMenu">
              <li><a href="/admin/kades" class="nav-link active"><i class="fa fa-user"></i>Kepala Desa</a></li>
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
              {{-- <li><a href="/admin/transparansi" class="nav-link"><i class="fas fa-file-invoice-dollar"></i>Transparansi Anggaran</a></li> --}}

            </ul>
          </div>
          <a href="/admin/monografi" class="nav-link"><i class="fa fa-line-chart"></i> Monografi</a>
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
        <div class="breadcrumb">Pages / Kepala Desa</div>
    </div>
    <h5 class="mb-4">Kepala Desa</h5>
    <div class="card">
      <div class="table-header d-flex justify-content-between align-items-center">
          <span>Tabel Perangkat Desa</span>
          <button class="btn btn-tambah" onclick="openAddVillageInstrumentModal()">
              <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
          </button>
      </div>
      <div class="table-responsive">
          <table id="table-perangkat-desa" class="table align-middle">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Foto</th>
                      <th>Kategori</th>
                      <th>Nama</th>
                      <th>Jabatan</th>
                      <th>Deskripsi</th>
                      <th>Facebook</th>
                      <th>Instagram</th>
                      <th>Email</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody class="table-body">
                  @foreach ($kades as $index => $instrument)
                      <tr>
                          <td>{{ $index + 1 }}</td>
                          <td>
                              @if ($instrument->image)
                                  <img src="{{ asset('assets/images/VillageInstrument_images/' . $instrument->image) }}" class="card-img-top" alt="{{ $instrument->name }}" width="100">
                              @else
                                  <span>Tidak ada gambar</span>
                              @endif
                          </td>
                          <td>{{ $instrument->category }}</td>
                          <td>{{ $instrument->name }}</td>
                          <td>{{ $instrument->position }}</td>
                          <td>{{ $instrument->description }}</td>
                          <td>
                              @if ($instrument->facebook)
                                  <a href="{{ $instrument->facebook }}" target="_blank">Facebook</a>
                              @else
                                  <span>-</span>
                              @endif
                          </td>
                          <td>
                              @if ($instrument->instagram)
                                  <a href="{{ $instrument->instagram }}" target="_blank">Instagram</a>
                              @else
                                  <span>-</span>
                              @endif
                          </td>
                          <td>{{ $instrument->email }}</td>
                          <td>
                            <button 
                                class="btn btn-light" 
                                onclick="openEditModal(this)" 
                                data-id="{{ $instrument->id }}" 
                                data-category="{{ $instrument->category }}" 
                                data-name="{{ $instrument->name }}" 
                                data-position="{{ $instrument->position }}" 
                                data-description="{{ $instrument->description }}" 
                                data-facebook="{{ $instrument->facebook }}" 
                                data-instagram="{{ $instrument->instagram }}" 
                                data-email="{{ $instrument->email }}"
                                data-image="{{ $instrument->image }}"
                            >
                                Edit
                            </button>
                            <button class="btn btn-danger" onclick="deleteInstrument({{ $instrument->id }})">Hapus</button>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

     
  </div>
  


</div>

      
    </div>
  </div>
<!-- Modal Edit Data -->
<div class="modal fade" id="editInstrumentModal" tabindex="-1" aria-labelledby="editInstrumentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editInstrumentModalLabel">Edit Perangkat Desa</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editInstrumentForm">
              <div class="modal-body">
                  <input type="hidden" id="editInstrumentId" name="id">
                  <div class="mb-3">
                      <label for="editInstrumentCategory" class="form-label">Kategori</label>
                      <input type="text" class="form-control" id="editInstrumentCategory" name="category" required>
                  </div>
                  <div class="mb-3">
                      <label for="editInstrumentName" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="editInstrumentName" name="name" required>
                  </div>
                  <div class="mb-3">
                      <label for="editInstrumentPosition" class="form-label">Jabatan</label>
                      <input type="text" class="form-control" id="editInstrumentPosition" name="position" required>
                  </div>
                  <div class="mb-3">
                      <label for="editInstrumentDescription" class="form-label">Deskripsi</label>
                      <textarea class="form-control" id="editInstrumentDescription" name="description"></textarea>
                  </div>
                  <div class="mb-3">
                      <label for="editInstrumentFacebook" class="form-label">Facebook</label>
                      <input type="text" class="form-control" id="editInstrumentFacebook" name="facebook">
                  </div>
                  <div class="mb-3">
                      <label for="editInstrumentInstagram" class="form-label">Instagram</label>
                      <input type="text" class="form-control" id="editInstrumentInstagram" name="instagram">
                  </div>
                  <div class="mb-3">
                      <label for="editInstrumentEmail" class="form-label">Email</label>
                      <input type="email" class="form-control" id="editInstrumentEmail" name="email">
                  </div>
                  <div class="mb-3">
                      <label for="editInstrumentImage" class="form-label">Gambar</label>
                      <input type="file" class="form-control" id="editInstrumentImage" name="image">
                      <img id="editImagePreview" src="" alt="" style="max-width: 100px; margin-top: 10px;">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/js/Admin/script.js"></script>
  <script src="../assets/js/Admin/perangkat-desa.js"></script>
</body>

</html>