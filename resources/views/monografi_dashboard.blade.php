<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Desa Tangsimekar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fc;
      margin: 0;
    }

  /* Sidebar Styling */
  .sidebar {
      min-height: 100vh;
      background-color: #ffffff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      padding: 20px;
      transition: all 0.3s ease;
      overflow-y: auto; /* Menambahkan scrollbar jika konten lebih panjang dari layar */

    }

    .sidebar.hidden {
      transform: translateX(-100%);
    }

    .sidebar .logo-section {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .sidebar .logo-section img {
      width: 50px;
      height: 50px;
      margin-right: 10px;
    }

    .sidebar h5 {
      font-size: 18px;
      font-weight: 600;
      margin: 0;
    }

    .sidebar hr {
      border-top: 1px solid #e9ecef;
      margin: 15px 0;
    }

    .sidebar .nav-link {
      color: #6c757d;
      font-size: 14px;
      margin-bottom: 12px;
      display: flex;
      align-items: center;
      font-weight: 500;
      padding: 8px 12px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .sidebar .nav-link.active {
      color: #ffffff;
      background-color: #4FD1C5;
      font-weight: 600;
    }

    .sidebar .nav-link:hover {
      background-color: rgba(0, 123, 255, 0.1);
    }

    .sidebar .nav-link i {
      margin-right: 10px;
      font-size: 16px;
    }

    .sidebar .documentation {
      margin-top: auto;
      padding: 10px 15px;
      background-color: #eaf7ff;
      border-radius: 8px;
      text-align: center;
      font-weight: 500;
      color: #4FD1C5;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .nav hr {
      border-top: 1px solid #6c757d;
      margin: 15px 0;
    }

    /* Sidebar Toggle Button */
    .toggle-btn {
      display: none;
      position: fixed;
      top: 15px;
      left: 15px;
      background-color: #4FD1C5;
      color: white;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      z-index: 1050;
    }

    .toggle-btn i {
      font-size: 18px;
    }

    .main-content {
      padding: 25px;
    }

    .card {
      background-color: #ffffff;
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 25px;
      margin-bottom: 20px;
    }
    .breadcrumb {
      font-size: 14px;
      font-weight: 500;
      color: #6c757d;
    }
    @media (max-width: 991px) {
      .sidebar {
        position: fixed;
        z-index: 1049;
        top: 0;
        left: 0;
        width: 250px;
        height: 100%;
        transform: translateX(-100%);
      }

      .toggle-btn {
        display: flex;
      }

      .sidebar.show {
        transform: translateX(0);
      }

      .main-content {
        padding: 10px;
      }
    }

    .table th {
      font-size: 14px;
      color: #6c757d;
      font-weight: 500;
        text-align: center;
    }

    table td {
      font-size: 14px;
      color: #495057;
      vertical-align: middle;
      text-align: center;
    }

    .judul {
      font-weight: 600;
    }
    .truncate {
      max-width: 280px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    
    .table img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 8px;
      margin: 10px 0;
    }
    .status-offline {
      color: #6c757d;
      font-weight: 600;
    }

    .btn-light {
      font-size: 12px;
      color: #4FD1C5;
      border: 1px solid #4FD1C5;
      padding: 5px 10px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-light:hover {
      background-color: #4FD1C5;
      color: #fff;
    }

    .btn-danger {
      background-color: #ffff;
      font-size: 12px;
      color: #d14f4f;
      border: 1px solid #d14f4f;
      padding: 5px 10px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-danger:hover {
      background-color: #d14f4f;
      color: #fff;
    }

    .btn-secondary {
      background-color: #ffff;
      font-size: 12px;
      color: #8b8b8b;
      border: 1px solid #8b8b8b;
      padding: 5px 10px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      background-color: #8b8b8b;
      color: #fff;
    }

    .modal-content {
      border-radius: 12px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }

    #editModal .modal-header {
      background-color: #4FD1C5;
      color: white;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
    }

    #deleteModal .modal-header {
      background-color: #d14f4f;
      color: white;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
    }

    .modal-footer {
      background-color: #f1f3f5;
      border-bottom-left-radius: 12px;
      border-bottom-right-radius: 12px;
    }

    .modal-body {
      padding: 20px;
    }

    .form-label {
      font-weight: 600;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .icon-warning {
      color: #dc3545;
      font-size: 3rem;
      margin-bottom: 10px;
    }

    .modal-body.confirmation {
      text-align: center;
    }

    .modal-body.confirmation p {
      font-size: 1rem;
      margin-top: 10px;
      font-weight: 500;
    }
    .table-header {
  background-color: #4FD1C5; /* Gradasi warna gelap */
  color: #fff; /* Warna teks putih */
  font-size: 18px; /* Ukuran font */
  font-weight: bold; /* Teks tebal */
  padding: 15px; /* Jarak dalam */
  border-radius: 12px 12px 0 0; /* Membulatkan hanya sisi atas */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Shadow untuk efek elegan */
}
.pagination {
  display: flex;
  justify-content: center;
  padding: 10px;
  margin-top: 10px;
  list-style: none;
}

.pagination li {
  margin: 0 5px;
}

.pagination li a {
  display: inline-block;
  padding: 8px 12px;
  background-color: #ffffff;
  border: 1px solid #dee2e6;
  border-radius: 4px;
  color: #495057;
  text-decoration: none;
  font-size: 14px;
  font-weight: 500;
  transition: background-color 0.2s, color 0.2s;
}

.pagination li a:hover {
  background-color: #4FD1C5;
  color: #ffffff;
}

.pagination .active a {
  background-color: #4FD1C5;
  color: #ffffff;
  border-color: #4FD1C5;
}

.header{
  margin: 20px;
}
  </style>
</head>
<body>
  <button class="toggle-btn" id="toggleSidebar">
    <i class="fas fa-bars"></i>
  </button>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-2 sidebar" id="sidebar">
        <div class="logo-section">
            <img src="assets/images/logodesa.png" alt="Logo Desa">
            <h5>Dashboard Desa Tangsimekar</h5>
          </div>
        <hr>
        <nav class="nav flex-column">
            <a href="/dashboard" class="nav-link"><i class="fas fa-home"></i> Home</a>
            <a href="/monografi_dashboard" class="nav-link active"><i class="fa fa-line-chart"></i> Monografi</a>
            <a href="#" class="nav-link"><i class="fas fa-file-invoice"></i> Billing</a>
            <a href="#" class="nav-link"><i class="fas fa-globe"></i> RTL</a>
            <hr>
            <h6 >Account Pages</h6>
            <a href="#" class="nav-link"><i class="fas fa-sign-in-alt"></i> Log Out</a>
          </nav>
      </div>

      <div class="col-md-9 col-lg-10 main-content">
        <div class="d-flex justify-content-between align-items-center">
          <div class="breadcrumb">Pages / Monografi</div>
          <input type="text" class="form-control w-25" placeholder="Search...">
        </div>
        <h5 class="mb-4">Tables</h5>
        <div class="card">
          <div class="table-header">Data kependudukan menurut persebaran penduduk</div>
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
                <tr>
                    <td>1</td>
                    <td>001</td>
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
                    <td>001</td>
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
                    <td>001</td>
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
                    <td>001</td>
                  <td>281</td>
                  <td>215</td>
                  <td>496</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>001</td>
                  <td>281</td>
                  <td>215</td>
                  <td>496</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>001</td>
                  <td>281</td>
                  <td>215</td>
                  <td>496</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>001</td>
                  <td>281</td>
                  <td>215</td>
                  <td>496</td>
                  <td>
                    <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                    <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                  </td>
                <!-- Tambahkan data lainnya di sini -->
              </tbody>
            </table>
          </div>
        
          <!-- Pagination -->
          <ul id="pagination-table-penduduk" class="pagination">
            <li><a href="#">&laquo; Previous</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next &raquo;</a></li>
          </ul>
          
        </div>
        <div class="card">
            <div class="table-header">Data Kependudukan Menurut Jenis Kelamin</div>
            <div class="table-responsive">
              <table id="table-gender" class="table align-middle">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Laki-laki</th>
                    <th>Perempuan</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="table-body">
                  <tr>
                      <td>1</td>
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
            <ul id="pagination-table-gender" class="pagination">
              <li><a href="#">&laquo; Previous</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">Next &raquo;</a></li>
            </ul>
            
          </div>
          <div class="card">
            <div class="table-header">Data kependudukan menurut agama</div>
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
                  <tr>
                      <td>1</td>
                      <td>Islam</td>
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
                      <td>Kristen Katholik</td>
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
                      <td>Kristen Protestan</td>
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
                      <td>Hindu</td>
                    <td>281</td>
                    <td>215</td>
                    <td>496</td>
                    <td>
                      <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                      <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                      <td>5</td>
                      <td>Budha</td>
                    <td>281</td>
                    <td>215</td>
                    <td>496</td>
                    <td>
                      <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                      <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                      <td>6</td>
                      <td>Konghucu</td>
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
            <ul id="pagination-table-agama" class="pagination">
              <li><a href="#">&laquo; Previous</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">Next &raquo;</a></li>
            </ul>
            
          </div>
          <div class="card">
            <div class="table-header">Data kependudukan menurut pendidikan terakhir</div>
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
                  <tr>
                      <td>1</td>
                      <td>Tidak/Belum Sekolah</td>
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
                      <td>SLTP/Sederajat</td>
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
                      <td>SLTA/Sederajat</td>
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
                      <td>Diploma I/II</td>
                    <td>281</td>
                    <td>215</td>
                    <td>496</td>
                    <td>
                      <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                      <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                      <td>5</td>
                      <td>kademi/Diploma III/Sarjana Muda</td>
                    <td>281</td>
                    <td>215</td>
                    <td>496</td>
                    <td>
                      <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                      <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                      <td>6</td>
                      <td>Diploma IV/Strata I</td>
                    <td>281</td>
                    <td>215</td>
                    <td>496</td>
                    <td>
                      <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                      <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                      <td>7</td>
                      <td>Strata II</td>
                    <td>281</td>
                    <td>215</td>
                    <td>496</td>
                    <td>
                      <button class="btn btn-light" onclick="openEditModal(1)">Edit</button>
                      <button class="btn btn-danger" onclick="openDeleteModal(1)">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Strata III</td>
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
            <ul id="pagination-table-pendidikan" class="pagination">
              <li><a href="#">&laquo; Previous</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">Next &raquo;</a></li>
            </ul>
            
          </div>
        
          <div class="card">
            <div class="table-header">Data kependudukan menurut agama</div>
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

   <!-- Modal Edit -->
   <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editForm">
            <div class="mb-3">
              <label for="editId" class="form-label">ID</label>
              <input type="text" class="form-control" id="editId" readonly>
            </div>
            <div class="mb-3">
              <label for="editJudul" class="form-label">Judul</label>
              <input type="text" class="form-control" id="editJudul">
            </div>
            <div class="mb-3">
              <label for="editDeskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="editDeskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="editTanggal" class="form-label">Tanggal</label>
              <input type="date" class="form-control" id="editTanggal">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-light">Simpan Perubahan</button>
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
          <p>Apakah Anda yakin ingin menghapus data ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const toggleSidebar = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');

    toggleSidebar.addEventListener('click', () => {
      sidebar.classList.toggle('show');
    });
  </script>

    <script>
    function openEditModal(id) {
      document.getElementById('editId').value = id;
      document.getElementById('editJudul').value = "Contoh Judul " + id;
      document.getElementById('editDeskripsi').value = "Contoh deskripsi untuk data " + id;
      document.getElementById('editTanggal').value = "2023-11-30";

      const editModal = new bootstrap.Modal(document.getElementById('editModal'));
      editModal.show();
    }

    function openDeleteModal(id) {
      const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
      deleteModal.show();
    }
  </script>

  <script>
function paginateTable(tableId, paginationId, rowsPerPage) {
  const table = document.getElementById(tableId);
  const pagination = document.getElementById(paginationId);
  const rows = table.querySelectorAll("tbody tr");
  const totalRows = rows.length;
  const totalPages = Math.ceil(totalRows / rowsPerPage);

  let currentPage = 1;

  function displayPage(page) {
    const start = (page - 1) * rowsPerPage;
    const end = page * rowsPerPage;

    rows.forEach((row, index) => {
      row.style.display = index >= start && index < end ? "" : "none";
    });
  }

  function createPagination() {
    pagination.innerHTML = "";

    // Tombol Previous
    const prevLi = document.createElement("li");
    prevLi.className = currentPage === 1 ? "disabled" : "";
    prevLi.innerHTML = `<a href="#">Previous</a>`;
    prevLi.addEventListener("click", (e) => {
      e.preventDefault();
      if (currentPage > 1) {
        currentPage--;
        displayPage(currentPage);
        createPagination();
      }
    });
    pagination.appendChild(prevLi);

    // Tombol Nomor Halaman
    for (let i = 1; i <= totalPages; i++) {
      const li = document.createElement("li");
      li.className = i === currentPage ? "active" : "";
      li.innerHTML = `<a href="#">${i}</a>`;
      li.addEventListener("click", (e) => {
        e.preventDefault();
        currentPage = i;
        displayPage(currentPage);
        createPagination();
      });
      pagination.appendChild(li);
    }

    // Tombol Next
    const nextLi = document.createElement("li");
    nextLi.className = currentPage === totalPages ? "disabled" : "";
    nextLi.innerHTML = `<a href="#">Next</a>`;
    nextLi.addEventListener("click", (e) => {
      e.preventDefault();
      if (currentPage < totalPages) {
        currentPage++;
        displayPage(currentPage);
        createPagination();
      }
    });
    pagination.appendChild(nextLi);
  }

  displayPage(currentPage);
  createPagination();
}
// Untuk Tabel 1
paginateTable("table-penduduk", "pagination-table-penduduk", 10);

// Untuk Tabel 2
paginateTable("table-gender", "pagination-table-gender", 5);
paginateTable("table-agama", "pagination-table-agama", 10);
paginateTable("table-pendidikan", "pagination-table-pendidikan", 10);
paginateTable("table-umur", "pagination-table-umur", 10);


  </script>
</body>
</html>
