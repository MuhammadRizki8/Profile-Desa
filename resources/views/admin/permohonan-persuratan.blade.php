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
          <a href="/admin/monografi" class="nav-link "><i class="fa fa-line-chart"></i> Monografi</a>
          <a href="/admin/permohonan-persuratan" class="nav-link active">
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
            <div class="breadcrumb">Pages / Permohonan Persuratan</div>
            <input type="text" class="form-control w-25" placeholder="Search..." id="searchInput">
        </div>
        <h5 class="mb-4">Permohonan Persuratan</h5>
        <div class="card">
            <div class="table-header d-flex justify-content-between align-items-center">
                <span>Tabel Permohonan Persuratan</span>
                <button class="btn btn-tambah" onclick=" openAddLayananSuratModal()">
                    <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
                </button>
            </div>
            <div class="table-responsive">
                <table id="table-surat" class="table align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Layanan</th>
                            <th>Detail</th>
                            <th>Persyaratan</th>
                            <th>Jam Pelayanan</th>
                            <th>Hari Pelayanan</th>
                            <th>Tata Cara</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach ($layanan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->layanan }}</td>
                                <td>{{ $item->detail }}</td>
                                <td>
                                    @if ($item->persyaratan)
                                        <ul>
                                            @foreach (json_decode($item->persyaratan) as $syarat)
                                                <li>{{ $syarat }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <em>Tidak ada persyaratan.</em>
                                    @endif
                                </td>
                                <td>{{ $item->jam_pelayanan }}</td>
                                <td>{{ $item->hari_pelayanan }}</td>
                                <td>{{ $item->tata_cara }}</td>
                                <td>
                                    <button class="btn btn-light" 
                                            onclick="openEditSuratModal(this)" 
                                            data-id="{{ $item->id }}" 
                                            data-layanan="{{ $item->layanan }}" 
                                            data-detail="{{ $item->detail }}" 
                                            data-persyaratan="{{ $item->persyaratan }}" 
                                            data-jam_pelayanan="{{ $item->jam_pelayanan }}" 
                                            data-hari_pelayanan="{{ $item->hari_pelayanan }}" 
                                            data-tata_cara="{{ $item->tata_cara }}">
                                        Edit
                                    </button>
    
                                    <button class="btn btn-danger" onclick="deleteSurat({{ $item->id }})">Hapus</button>
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

<!-- Modal Tambah Layanan Persuratan -->
<div class="modal fade" id="addLayananModal" tabindex="-1" aria-labelledby="addLayananModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addLayananModalLabel">Tambah Layanan Persuratan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addLayananSuratForm">
        <div class="modal-body">
          <div class="mb-3">
            <label for="layananName" class="form-label">Nama Layanan</label>
            <input type="text" class="form-control" id="layananName" name="layanan" required>
          </div>
          <div class="mb-3">
            <label for="layananDetail" class="form-label">Detail Layanan</label>
            <textarea class="form-control" id="layananDetail" name="detail" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="layananPersyaratan" class="form-label">Persyaratan</label>
            <div id="persyaratanTags" class="form-control p-2" style="min-height: 50px; border: 1px solid #ced4da; border-radius: 0.375rem;">
              <input
                type="text"
                id="persyaratanInput"
                placeholder="Ketik persyaratan dan tekan Enter"
                class="border-0"
                style="outline: none; width: 100%;"
              />
            </div>
          </div>          
          <div class="mb-3">
            <label for="layananJamPelayanan" class="form-label">Jam Pelayanan</label>
            <input type="text" class="form-control" id="layananJamPelayanan" name="jam_pelayanan">
          </div>
          <div class="mb-3">
            <label for="layananHariPelayanan" class="form-label">Hari Pelayanan</label>
            <input type="text" class="form-control" id="layananHariPelayanan" name="hari_pelayanan">
          </div>
          <div class="mb-3">
            <label for="layananTataCara" class="form-label">Tata Cara</label>
            <textarea class="form-control" id="layananTataCara" name="tata_cara" rows="3"></textarea>
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


<!-- Modal Edit Layanan Persuratan -->
<div class="modal fade" id="editLayananModal" tabindex="-1" aria-labelledby="editLayananModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editLayananModalLabel">Edit Layanan Persuratan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="editLayananForm">
        <div class="modal-body">
          <input type="hidden" id="layananId" name="layanan_id">
          <div class="mb-3">
            <label for="editLayananName" class="form-label">Nama Layanan</label>
            <input type="text" class="form-control" id="editLayananName" name="layanan" required>
          </div>
          <div class="mb-3">
            <label for="editLayananDetail" class="form-label">Detail Layanan</label>
            <textarea class="form-control" id="editLayananDetail" name="detail" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="editLayananPersyaratan" class="form-label">Persyaratan</label>
            <textarea class="form-control" id="editLayananPersyaratan" name="persyaratan" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="editLayananJamPelayanan" class="form-label">Jam Pelayanan</label>
            <input type="text" class="form-control" id="editLayananJamPelayanan" name="jam_pelayanan">
          </div>
          <div class="mb-3">
            <label for="editLayananHariPelayanan" class="form-label">Hari Pelayanan</label>
            <input type="text" class="form-control" id="editLayananHariPelayanan" name="hari_pelayanan">
          </div>
          <div class="mb-3">
            <label for="editLayananTataCara" class="form-label">Tata Cara</label>
            <textarea class="form-control" id="editLayananTataCara" name="tata_cara" rows="3"></textarea>
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
  <script src="../assets/js/Admin/layananSurat.js"></script>



</body>

</html>