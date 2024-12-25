
function openAddModalGaleri() {
    isEditMode = false;
    editingId = null;
  
    document.getElementById('dataModalLabelGaleri').textContent = 'Tambah Data';
    document.getElementById('dataForm').reset(); // Reset semua input
  
    const dataModal = new bootstrap.Modal(document.getElementById('dataModalGaleri'));
    dataModal.show();
  }
  


  function saveData() {
    const id = document.getElementById('dataId').value;
    const tanggal = document.getElementById('dataTanggal').value;
    const foto = document.getElementById('dataGambar').files[0];
  
    const reader = new FileReader();
    reader.onload = function (e) {
      const fotoUrl = foto ? e.target.result : '';
  
      if (isEditMode) {
        // Update baris tabel yang ada
        const row = document.querySelector(`#table-perangkat-desa tbody tr:nth-child(${editingId})`);
        row.children[1].innerHTML = fotoUrl ? `<img src="${fotoUrl}" class="card-img-top" alt="Foto">` : row.children[1].innerHTML;
        row.children[4].textContent = tanggal;
      } else {
        // Tambahkan data baru ke tabel
        const tableBody = document.querySelector('#table-perangkat-desa tbody');
        const newRow = `
          <tr>
            <td>${id || tableBody.children.length + 1}</td>
            <td>${fotoUrl ? `<img src="${fotoUrl}" class="card-img-top" alt="Foto">` : ''}</td>
            <td>${judul}</td>
            <td>${deskripsi}</td>
            <td>${tanggal}</td>
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

function openEditModalGaleri(id) {
    isEditMode = true;
    editingId = id;
  
    document.getElementById('dataModalLabel').textContent = 'Edit Data';
    document.getElementById('dataId').value = id; // Bisa ambil data berdasarkan ID jika ada
    document.getElementById('dataTanggal').value = "2023-11-30";
    document.getElementById('dataGambar').value = ''; // Reset file input

    const dataModal = new bootstrap.Modal(document.getElementById('dataModalGaleri'));
    dataModal.show();
  }

    function openDeleteModal(id) {
      const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
      deleteModal.show();
    }