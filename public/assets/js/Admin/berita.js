
function openAddModal() {
    isEditMode = false;
    editingId = null;
  
    document.getElementById('dataModalLabel').textContent = 'Tambah Data';
    document.getElementById('dataForm').reset(); // Reset semua input
  
    const dataModal = new bootstrap.Modal(document.getElementById('dataModal'));
    dataModal.show();
  }
  

  function saveDataBerita() {
    console.log('save data start')
    const id = document.getElementById("dataId").value;
    const data = {
        titile: document.getElementById("dataJudul").value,
        description: document.getElementById("dataDeskripsi").value,
        date: document.getElementById("dataTanggal").value,
        image: document.getElementById('dataGambar').files[0],
    };
    

    const url =  id ? `/news/${id}` : '/news';
    const method = isEditMode ? 'PUT' : 'POST';

    console.log(JSON.stringify(data))
    fetch(url, {
        method: method,
        headers: {
            "Content-Type": "application/json",
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify(data),
    })
        .then((response) => {
            console.log('response')
            console.log(response)
            if (!response.ok) {
                throw new Error('Gagal menyimpan data 2');
            }
            return response.json();
        })
        .then((data) => {
            console.log('data')
            console.log(data)
            alert(data.message || 'Data berhasil disimpan!');
            location.reload(); // Reload to refresh table data
        })
        .catch((error) => {
            console.log('error')
            console.log(error)
            console.error(error);
            alert('Terjadi kesalahan saat menyimpan data 2');
        });
}


function openEditModal(id) {
    isEditMode = true;
    editingId = id;
  
    document.getElementById('dataModalLabel').textContent = 'Edit Data';
    document.getElementById('dataId').value = id; // Bisa ambil data berdasarkan ID jika ada
    document.getElementById('dataJudul').value = ''; // Reset file input
    document.getElementById('dataDeskripsi').value = ' ' + id;
    document.getElementById('dataTanggal').value = "2023-11-30";
    document.getElementById('dataGambar').value = ''; // Reset file input

    const dataModal = new bootstrap.Modal(document.getElementById('dataModal'));
    dataModal.show();
  }

function openDeleteModal(id) {
  const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
  deleteModal.show();
}


document.getElementById('searchInput').addEventListener('input', function () {
  const searchValue = this.value.toLowerCase();
  const tableRows = document.querySelectorAll('#table-berita tbody tr');
  let hasVisibleRow = false;

  tableRows.forEach(row => {
      const judul = row.querySelector('.judul').textContent.toLowerCase();
      const deskripsi = row.querySelector('.truncate').textContent.toLowerCase();

      if (judul.includes(searchValue) || deskripsi.includes(searchValue)) {
          row.style.display = '';
          hasVisibleRow = true;
      } else {
          row.style.display = 'none';
      }
  });

  // Tampilkan pesan jika tidak ada hasil
  const noDataMessage = document.getElementById('noDataMessage');
  if (!hasVisibleRow) {
      if (!noDataMessage) {
          const newMessage = document.createElement('tr');
          newMessage.id = 'noDataMessage';
          newMessage.innerHTML = `<td colspan="6" class="text-center">Tidak ada data</td>`;
          document.querySelector('#table-berita tbody').appendChild(newMessage);
      }
  } else {
      if (noDataMessage) {
          noDataMessage.remove();
      }
  }
});


