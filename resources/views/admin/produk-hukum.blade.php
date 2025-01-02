<!DOCTYPE html>
<html lang="en">

<head>
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
              <li><a href="/admin/agenda" class="nav-link"><i class="fas fa-calendar"></i>Agenda</a></li>
              {{-- <li><a href="/admin/produk-hukum" class="nav-link active"> <i class="fas fa-book"></i>Produk Hukum</a></li> --}}
              {{-- <li><a href="/admin/transparansi" class="nav-link"><i class="fas fa-file-invoice-dollar"></i>Transparansi Anggaran</a></li> --}}

            </ul>
          </div>
          <a href="/admin/monografi" class="nav-link"><i class="fa fa-line-chart"></i> Monografi</a>
          <hr>
          <h6>Account Pages</h6>
          <a href="#" class="nav-link"><i class="fas fa-sign-in-alt"></i> Log Out</a>
        </nav>
      </div>


      <div class="col-md-9 col-lg-9 main-content">
        <div class="d-flex justify-content-between align-items-center">
          <div class="breadcrumb">Pages / Produk Hukum</div>
          <input type="text" class="form-control w-25" placeholder="Search..." id="searchInput">
        </div>
        <h5 class="mb-4">Produk Hukum</h5>
        <!-- Tabel untuk APB -->
      <div class="card">
        <div class="table-header d-flex justify-content-between align-items-center">
            <span>Produk Hukum</span>
            <button class="btn btn-tambah" onclick="openAddModalDocument()">
                <i class="fas fa-plus" style="margin-right: 5px;"></i> Tambah Data
            </button>
        </div>
        <div class="table-responsive">
            <table id="table-APB" class="table align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tipe</th>
                        <th>Kategori</th>
                        <th>Dokumen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($produkHukumDocuments as $index => $document)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $document->title }}</td>
                            <td>{{ $document->type }}</td>
                            <td>{{ $document->category }}</td>
                            <td>
                                <a href="{{ asset('assets/documents/' . $document->document) }}" target="_blank" 
                                   class="btn btn-danger d-inline-flex align-items-center justify-content-center" 
                                   style="padding: 5px 15px; white-space: nowrap; font-size: 14px;">
                                    <i class="fas fa-file-alt" style="font-size: 24px; margin-right: 8px;"></i>
                                    {{ $document->document }}
                                </a>
                            </td>
                            <td>
                                <button 
                                    class="btn btn-light" 
                                    onclick="openEditDocumentModal(this)" 
                                    data-id="{{ $document->id }}" 
                                    data-title="{{ $document->title }}" 
                                    data-category="{{ $document->category }}" 
                                    data-type="{{ $document->type }}" 
                                    data-document="{{ $document->document }}"
                                >
                                    Edit
                                </button>
                                <button class="btn btn-danger" onclick="deleteDocument({{ $document->id }})">Hapus</button>
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

<!-- Modal Tambah Dokumen -->
<div class="modal fade" id="addDocumentModal" tabindex="-1" aria-labelledby="addDocumentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addDocumentModalLabel">Tambah Dokumen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addDocumentForm">
        <div class="modal-body">
          <div class="mb-3">
            <label for="documentTitle" class="form-label">Judul Dokumen</label>
            <input type="text" class="form-control" id="documentTitle" name="title" required>
          </div>
          <div class="mb-3">
            <label for="documentCategory" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="documentCategory" name="category" required>
          </div>
          <div class="mb-3">
            <label for="documentType" class="form-label">Tipe Dokumen</label>
            <select class="form-control" id="documentType" name="type" required>
              <option value="RPJM">RPJM</option>
              <option value="APB">APB</option>
              <option value="Rencana Kerja & Anggaran">Rencana Kerja & Anggaran</option>
              <option value="Produk Hukum">Produk Hukum</option>
              <option value="Transparansi Anggaran">Transparansi Anggaran</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="documentFile" class="form-label">Unggah Dokumen</label>
            <input type="file" class="form-control" id="documentFile" name="document" accept=".pdf,.doc,.docx" required>
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

<!-- Modal Edit Dokumen -->
<div class="modal fade" id="editDocumentModal" tabindex="-1" aria-labelledby="editDocumentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editDocumentModalLabel">Edit Dokumen</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editDocumentForm">
              <div class="modal-body">
                  <input type="hidden" id="documentId">
                  <div class="mb-3">
                      <label for="documentEditTitle" class="form-label">Judul Dokumen</label>
                      <input type="text" class="form-control" id="documentEditTitle" name="title" required>
                  </div>
                  <div class="mb-3">
                      <label for="documentEditCategory" class="form-label">Kategori</label>
                      <input type="text" class="form-control" id="documentEditCategory" name="category" required>
                  </div>
                  <div class="mb-3">
                      <label for="documentType" class="form-label">Tipe Dokumen</label>
                      <select class="form-control" id="documentType" name="type" required>
                          <option value="RPJM">RPJM</option>
                          <option value="APB">APB</option>
                          <option value="Rencana Kerja & Anggaran">Rencana Kerja & Anggaran</option>
                          <option value="Produk Hukum">Produk Hukum</option>
                          <option value="Transparansi Anggaran">Transparansi Anggaran</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="documentFile" class="form-label">Unggah Dokumen Baru (Opsional)</label>
                      <input type="file" class="form-control" id="documentFile" name="document" accept=".pdf,.doc,.docx">
                      <div id="currentDocument" class="mt-2"></div>
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
  <script src="../assets/js/Admin/pemerintahan.js"></script>

</body>

</html>