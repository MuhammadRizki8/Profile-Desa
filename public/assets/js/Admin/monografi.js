isEditMode = false;
function openAddModal() {
    isEditMode = false; // Set mode tambah
    document.getElementById("dataModalLabel").textContent = "Tambah Data";
    document.getElementById("dataId").value = ""; // Clear ID
    document.getElementById("dataForm").reset(); // Clear form
    const dataModal = new bootstrap.Modal(document.getElementById("dataModal"));
    dataModal.show();
}

function saveData() {
    const id = document.getElementById("dataId").value;
    const data = {
        group: document.getElementById("dataRw").value,
        male: parseInt(document.getElementById("dataLaki").value),
        female: parseInt(document.getElementById("dataPerempuan").value),
        total:
            parseInt(document.getElementById("dataLaki").value) +
            parseInt(document.getElementById("dataPerempuan").value),
    };

    const url = id ? `/data-persebaran/${id}` : `/data-persebaran`;
    const method = isEditMode ? "PUT" : "POST";

    fetch(url, {
        method: method,
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                .content,
        },
        body: JSON.stringify(data),
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error("Gagal menyimpan data");
            }
            return response.json();
        })
        .then((result) => {
            alert(result.message || "Data berhasil disimpan!");
            location.reload(); // Refresh halaman
        })
        .catch((error) => {
            alert("Terjadi kesalahan saat menyimpan data!");
            console.error(error);
        });
}

function openEditModal(data) {
    isEditMode = true;
    editingId = data.id;

    document.getElementById("dataModalLabel").textContent = "Edit Data";
    document.getElementById("dataId").value = data.id; // Reset file input
    document.getElementById("dataRw").value = data.group; // Reset file input
    document.getElementById("dataLaki").value = data.male; // Reset file input
    document.getElementById("dataPerempuan").value = data.female; // Reset file input
    const dataModal = new bootstrap.Modal(document.getElementById("dataModal"));
    dataModal.show();
}

function openDeleteModal(button) {
    const id = button.getAttribute("data-id");
    const group = button.getAttribute("data-group");

    // Atur ID ke elemen tersembunyi
    document.getElementById("deleteId").value = id;

    // Atur pesan konfirmasi
    document.getElementById(
        "deleteMessage"
    ).textContent = `Apakah Anda yakin ingin menghapus data kelompok ${group}?`;

    // Tampilkan modal
    const deleteModal = new bootstrap.Modal(
        document.getElementById("deleteModal")
    );
    deleteModal.show();
}

function deleteData() {
    const id = document.getElementById("deleteId").value;

    fetch(`/data-persebaran/${id}`, {
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                .content,
        },
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error("Gagal menghapus data");
            }
            return response.json();
        })
        .then((result) => {
            alert(result.message || "Data berhasil dihapus!");
            window.location.href = "http://127.0.0.1:8000/admin/monografi"; // Redirect ke halaman utama
        })
        .catch((error) => {
            alert("Terjadi kesalahan saat menghapus data!");
            console.error(error);
        });
}
