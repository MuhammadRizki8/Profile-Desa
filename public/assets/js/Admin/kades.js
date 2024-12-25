paginateTable("table-perangkat-desa", "pagination-table-perangkat-desa", 5);

function saveData() {
    const nip = document.getElementById('dataNIP').value;
    const nama = document.getElementById('dataNama').value;
    const jabatan = document.getElementById('dataJabatan').value;
    const deskripsi = document.getElementById('dataDeskripsi').value;
    const foto = document.getElementById('dataGambar').files[0];
  
    if (!judul || !deskripsi) {
      alert('judul dan deskripsi harus diisi.');
      return;
    }
  
    const reader = new FileReader();
    reader.onload = function (e) {
      const fotoUrl = foto ? e.target.result : '';
  
      if (isEditMode) {
        // Update baris tabel yang ada
        const row = document.querySelector(`#table-perangkat-desa tbody tr:nth-child(${editingId})`);
        row.children[1].innerHTML = fotoUrl ? `<img src="${fotoUrl}" class="card-img-top" alt="Foto">` : row.children[1].innerHTML;
        row.children[2].textContent = nama;
        row.children[3].textContent = deskripsi;
        row.children[4].textContent = tanggal;
      } else {
        // Tambahkan data baru ke tabel
        const tableBody = document.querySelector('#table-perangkat-desa tbody');
        const newRow = `
          <tr>
            <td>${nip || tableBody.children.length + 1}</td>
            <td>${fotoUrl ? `<img src="${fotoUrl}" class="card-img-top" alt="Foto">` : ''}</td>
            <td>${nama}</td>
            <td>${jabatan}</td>
            <td>${deskripsi}</td>
            <td>
              <button class="btn btn-light" onclick="openEditModal(${tableBody.children.length + 1})">Edit</button>
              <button class="btn btn-danger" onclick="openDeleteModal(${tableBody.children.length + 1})">Hapus</button>
            </td>
          </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', newRow);
      }
  
      // Tutup modal
      const dataModal = bootstrap.Modal.getInstance(document.getElementById('dataModal'));
      dataModal.hide();
    };
  }

function openEditModal(id) {
    isEditMode = true;
    editingId = id;
  
    document.getElementById('dataModalLabel').textContent = 'Edit Data';
    document.getElementById('dataNIP').value = id; // Bisa ambil data berdasarkan ID jika ada
    document.getElementById('dataNama').value = ''; // Reset file input
    document.getElementById('dataJabatan').value = ''; // Reset file input
    document.getElementById('dataDeskripsi').value = ' ' + id;
    document.getElementById('dataFoto').value = ''; // Reset file input
    const dataModal = new bootstrap.Modal(document.getElementById('dataModal'));
    dataModal.show();
}