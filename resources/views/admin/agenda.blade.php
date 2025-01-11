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
            <a href="#" class="nav-link active" onclick="toggleSubMenu(event, 'informasiPublikSubMenu')">
              <i class="fas fa-info-circle"></i> Informasi Publik
              <span class="arrow"><i class="fas fa-chevron-down"></i></span>
            </a>
            <ul class="sub-menu" id="informasiPublikSubMenu">
              <li><a href="/admin/agenda" class="nav-link active"><i class="fas fa-calendar"></i>Agenda</a></li>
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
          <div class="breadcrumb">Pages / Agenda Kegiatan</div>
          <input type="text" class="form-control w-25" placeholder="Search..." id="searchInput">
        </div>
        <h5 class="mb-4">Agenda Kegiatan</h5>
        <div class="card">
          <div class="table-header d-flex justify-content-between align-items-center">
            <span>Tabel Agenda Kegiatan</span>
            <button class="btn btn-tambah" onclick="openAddAgendaModal()">
              <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
            </button>
          </div>
          <div class="table-responsive">
            <table id="table-agenda" class="table align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($agendas as $index => $agenda)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <img src="{{ asset('assets/images/' . $agenda->image) }}" class="card-img-top" alt="Agenda Image">
                            </td>
                            <td><span class="judul">{{ $agenda->title }}</span></td>
                            <td class="truncate">
                                {{ Str::limit($agenda->description, 50, '...') }}
                            </td>
                            <td>{{ \Carbon\Carbon::parse($agenda->date)->format('d/m/Y') }}</td>
                            <td>
                              <button class="btn btn-light" 
                                      onclick="openEditAgendaModal(this)" 
                                      data-id="{{ $agenda->id }}" 
                                      data-title="{{ $agenda->title }}" 
                                      data-description="{{ $agenda->description }}" 
                                      data-date="{{ $agenda->agenda_date }}" 
                                      data-image="{{ $agenda->image }}">
                                  Edit Agenda
                              </button>

                              <button class="btn btn-danger" onclick="deleteAgenda({{ $agenda->id }})">Hapus</button>
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

<!-- Modal Tambah Agenda -->
<div class="modal fade" id="addAgendaModal" tabindex="-1" aria-labelledby="addAgendaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addAgendaModalLabel">Tambah Agenda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addAgendaForm">
        <div class="modal-body">
          <div class="mb-3">
            <label for="agendaImage" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="agendaImage" name="image" required>
          </div>
          <div class="mb-3">
            <label for="agendaTitle" class="form-label">Judul</label>
            <input type="text" class="form-control" id="agendaTitle" name="title" required>
          </div>
          <div class="mb-3">
            <label for="agendaDescription" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="agendaDescription" name="description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="agendaDate" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="agendaDate" name="agenda_date" required>
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

<!-- Modal Edit Agenda -->
<div class="modal fade" id="editAgendaModal" tabindex="-1" aria-labelledby="editAgendaModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editAgendaModalLabel">Edit Agenda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editAgendaForm" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" id="agendaId" name="agenda_id">
          <div class="mb-3">
            <label for="editAgendaImage" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="editAgendaImage" name="image">
            <img id="editAgendaImagePreview" src="#" alt="Pratinjau Gambar" style="display:none; margin-top:10px; max-height:150px;">
          </div>          
          <div class="mb-3">
            <label for="editAgendaTitle" class="form-label">Judul</label>
            <input type="text" class="form-control" id="editAgendaTitle" name="title" required>
          </div>
          <div class="mb-3">
            <label for="editAgendaDescription" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="editAgendaDescription" name="description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="editAgendaDate" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="editAgendaDate" name="agenda_date" required>
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



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/Admin/script.js"></script>
  <script src="../assets/js/Admin/agenda.js"></script>



</body>

</html>