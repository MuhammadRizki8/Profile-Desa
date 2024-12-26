<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
          <a href="/admin/pemerintahan" class="nav-link"><i class="fas fa-building"></i> Pemerintahan</a>
          <div class="nav-item">
            <a href="#" class="nav-link" onclick="toggleSubMenu(event, 'informasiPublikSubMenu')">
              <i class="fas fa-info-circle"></i> Informasi Publik
              <span class="arrow"><i class="fas fa-chevron-down"></i></span>
            </a>
            <ul class="sub-menu" id="informasiPublikSubMenu">
              <li><a href="/admin/agenda" class="nav-link"><i class="fas fa-calendar"></i>Agenda</a></li>
              <li><a href="/admin/produk-hukum" class="nav-link"> <i class="fas fa-book"></i>Produk Hukum</a></li>
              <li><a href="/admin/transparansi" class="nav-link"><i class="fas fa-file-invoice-dollar"></i>Transparansi Anggaran</a></li>
            </ul>
          </div>
          <a href="/admin/monografi" class="nav-link active"><i class="fa fa-line-chart"></i> Monografi</a>
          <hr>
          <h6>Account Pages</h6>
          <a href="#" class="nav-link"><i class="fas fa-sign-in-alt"></i> Log Out</a>
        </nav>
      </div>


      <div class="col-md-9 col-lg-9 main-content">
        <div class="d-flex justify-content-between align-items-center">
          <div class="breadcrumb">Pages / Monografi</div>
        </div>
        <h5 class="mb-4">Monografi</h5>

        {{-- ==================== --}}
        <div class="card">
          <div class="table-header d-flex justify-content-between align-items-center">
              <span>Data Kependudukan Menurut Persebaran Penduduk</span>
              <button class="btn btn-tambah" onclick="openAddModal('persebaran')">
                  <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
              </button>
          </div>
          <div class="table-responsive">
              <table id="table-penduduk" class="table align-middle">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Rw</th>
                          <th>Laki-laki</th>
                          <th>Perempuan</th>
                          <th>Total</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody class="table-body">
                      @forelse ($dataPenduduk as $index => $data)
                      <tr>
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $data->group }}</td>
                          <td>{{ $data->male }}</td>
                          <td>{{ $data->female }}</td>
                          <td>{{ $data->total }}</td>
                          <td>
                              <button class="btn btn-light" onclick="openEditModal('persebaran', {{ $data }})">Edit</button>
                              <button 
                                  class="btn btn-danger" 
                                  data-id="{{ $data->id }}" 
                                  onclick="openDeleteModal('persebaran', {{ $data }})">Hapus</button>
                          </td>
                      </tr>
                      @empty
                      <tr>
                          <td colspan="6" class="text-center">Tidak ada data tersedia</td>
                      </tr>
                      @endforelse
                  </tbody>
              </table>
          </div>
        </div>
        {{-- ================= --}}
        <!-- Data Populasi Menurut Jenis Kelamin -->
        <div class="card">
          <div class="table-header d-flex justify-content-between align-items-center">
              <span>Data Kependudukan Menurut Jenis Kelamin</span>
              {{-- <button class="btn btn-tambah" onclick="openAddModal('populasi')">
                  <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
              </button> --}}
          </div>
          <div class="table-responsive">
              <table id="table-gender" class="table align-middle">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Jenis Kelamin</th>
                          <th>Jumlah</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody class="table-body">
                      @forelse ($datapopulasi as $index => $data)
                      <tr>
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $data->jenis_kelompok }}</td>
                          <td>{{ $data->jumlah }}</td>
                          <td>
                              <button class="btn btn-light" onclick="openEditModal('populasi', {{ $data }})">Edit</button>
                              <button class="btn btn-danger" data-id="{{ $data->id }}" data-group="{{ $data->jenis_kelompok }}" onclick="openDeleteModal('populasi', {{ $data }})">Hapus</button>
                          </td>
                      </tr>
                      @empty
                      <tr>
                          <td colspan="4" class="text-center">Tidak ada data tersedia</td>
                      </tr>
                      @endforelse
                  </tbody>
              </table>
          </div>
        </div>  

        {{-- ====================== --}}
        {{-- Data Kependudukan Menurut Agama --}}
        <div class="card">
          <div class="table-header d-flex justify-content-between align-items-center">
            <span>Data Kependudukan Menurut Agama</span>
            <button class="btn btn-tambah" onclick="openAddModal('agama')">
              <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
            </button>
          </div>
          <div class="table-responsive">
            <table id="table-agama" class="table align-middle">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Kelompok</th>
                  <th>Laki-laki</th>
                  <th>Perempuan</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="table-body">
                @forelse ($dataAgama as $index => $data)
                      <tr>
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $data->jenis_kelompok }}</td>
                          <td>{{ $data->laki_laki }}</td>
                          <td>{{ $data->perempuan }}</td>
                          <td>{{ $data->jumlah }}</td>
                          <td>
                              <button class="btn btn-light" onclick="openEditModal('agama', {{ $data }})">Edit</button>
                              <button class="btn btn-danger" data-id="{{ $data->id }}" data-group="{{ $data->jenis_kelompok }}" onclick="openDeleteModal('agama', {{ $data }})">Hapus</button>
                          </td>
                      </tr>
                      @empty
                      <tr>
                          <td colspan="4" class="text-center">Tidak ada data tersedia</td>
                      </tr>
                      @endforelse
              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <ul id="pagination-table-agama" class="pagination">
            <li><a href="#">&laquo; Previous</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next &raquo;</a></li>
          </ul>

        </div>
        {{-- ====================== --}}
        <div class="card">
          <div class="table-header d-flex justify-content-between align-items-center">
            <span>Data Kependudukan Menurut Pendidikan Terakhir</span>
            <button class="btn btn-tambah" onclick="openAddModal('pendidikan')">
              <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
            </button>
          </div>
          <div class="table-responsive">
            <table id="table-pendidikan" class="table align-middle">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Kelompok</th>
                  <th>Laki-laki</th>
                  <th>Perempuan</th>
                  <th>Total</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="table-body">
                @forelse ($dataPendidikan as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->jenis_kelompok }}</td>
                    <td>{{ $data->laki_laki }}</td>
                    <td>{{ $data->perempuan }}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>
                        <button class="btn btn-light" onclick="openEditModal('pendidikan', {{ $data }})">Edit</button>
                        <button class="btn btn-danger" data-id="{{ $data->id }}" data-group="{{ $data->jenis_kelompok }}" onclick="openDeleteModal('pendidikan', {{ $data }})">Hapus</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data tersedia</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <ul id="pagination-table-pendidikan" class="pagination">
            <li><a href="#">&laquo; Previous</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next &raquo;</a></li>
          </ul>

        </div>
        {{-- ===================== --}}
        <div class="card">
          <div class="table-header d-flex justify-content-between align-items-center">
            <span>Data Kependudukan Menurut Kelompok Umur</span>
            <button class="btn btn-tambah" onclick="openAddModal()">
              <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
            </button>
          </div>

          <div class="table-responsive">
            <table id="table-umur" class="table align-middle">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Kelompok</th>
                  <th>Laki-laki</th>
                  <th>Perempuan</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody class="table-body">
                <tr>
                  <td>1</td>
                  <td>Balita (0-5 tahun)</td>
                  <td>281</td>
                  <td>215</td>
                  <td>496</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Anak-Anak (6-17 tahun)</td>
                  <td>281</td>
                  <td>215</td>
                  <td>496</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Dewasa (18-50 tahun)</td>
                  <td>281</td>
                  <td>215</td>
                  <td>496</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Tua (50-120 tahun)</td>
                  <td>281</td>
                  <td>215</td>
                  <td>496</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <ul id="pagination-table-umur" class="pagination">
            <li><a href="#">&laquo; Previous</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next &raquo;</a></li>
          </ul>

        </div>
      </div>
    </div>
  </div>

  
  <!-- Modal Tambah/Edit -->
  <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="dataModalLabel">Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form id="dataForm">
                      <input type="hidden" id="dataId">
                      <div id="formPersebaran" class="form-type">
                          <div class="mb-3">
                              <label for="dataRw" class="form-label">Rw</label>
                              <input type="text" class="form-control" id="dataRw" required>
                          </div>
                          <div class="mb-3">
                              <label for="dataLaki" class="form-label">Laki-laki</label>
                              <input type="number" class="form-control" id="dataLaki" required>
                          </div>
                          <div class="mb-3">
                              <label for="dataPerempuan" class="form-label">Perempuan</label>
                              <input type="number" class="form-control" id="dataPerempuan" required>
                          </div>
                      </div>
                      <div id="formAgama" class="form-type d-none">
                        <div class="mb-3">
                            <label for="dataJenisKelompok" class="form-label">Jenis Kelompok</label>
                            <input type="text" class="form-control" id="dataJenisKelompok" required>
                        </div>
                        <div class="mb-3">
                            <label for="dataLakiAgama" class="form-label">Laki-laki</label>
                            <input type="number" class="form-control" id="dataLakiAgama" required>
                        </div>
                        <div class="mb-3">
                            <label for="dataPerempuanAgama" class="form-label">Perempuan</label>
                            <input type="number" class="form-control" id="dataPerempuanAgama" required>
                        </div>
                    </div>                                      
                      <div id="formPendidikan" class="form-type d-none">
                        <div class="mb-3">
                            <label for="dataJenisKelompok" class="form-label">Jenis Kelompok</label>
                            <input type="text" class="form-control" id="dataJenisKelompok" required>
                        </div>
                        <div class="mb-3">
                            <label for="dataLakiPendidikan" class="form-label">Laki-laki</label>
                            <input type="number" class="form-control" id="dataLakiPendidikan" required>
                        </div>
                        <div class="mb-3">
                            <label for="dataPerempuanPendidikan" class="form-label">Perempuan</label>
                            <input type="number" class="form-control" id="dataPerempuanPendidikan" required>
                        </div>
                    </div>                                      
                      <div id="formPopulasi" class="form-type d-none">
                          <div class="mb-3">
                              <label for="dataGender" class="form-label">Jenis Kelamin</label>
                              <input type="text" class="form-control" id="dataGender" readonly>
                          </div>
                          <div class="mb-3">
                              <label for="dataJumlah" class="form-label">Jumlah</label>
                              <input type="number" class="form-control" id="dataJumlah" required>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-primary" onclick="saveData()">Simpan</button>
              </div>
          </div>
      </div>
  </div>


  <!-- Modal Delete -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body confirmation">
                  <i class="fas fa-exclamation-triangle icon-warning"></i>
                  <p id="deleteMessage">Apakah Anda yakin ingin menghapus data ini?</p>
              </div>
              <div class="modal-footer">
                  <input type="hidden" id="deleteId"> <!-- Menyimpan ID data -->
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-danger" id="deleteButton" onclick="deleteData()">Hapus</button>
              </div>
          </div>
      </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/Admin/script.js"></script>
  <script src="../assets/js/Admin/monografi.js"></script>

</body>

</html>