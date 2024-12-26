// State mode (tambah/edit)
isEditMode = false;

function openAddModal(type) {
    isEditMode = false; // Set mode tambah
    document.getElementById(
        "dataModalLabel"
    ).textContent = `Tambah Data (${type})`;
    document.getElementById("dataId").value = ""; // Clear ID
    document.getElementById("dataForm").reset(); // Clear form
    document.getElementById("dataForm").setAttribute("data-type", type); // Set tipe data

    // Tampilkan form sesuai tipe
    switchForm(type);

    const dataModal = new bootstrap.Modal(document.getElementById("dataModal"));
    dataModal.show();
}

function openEditModal(type, data) {
    isEditMode = true;
    document.getElementById(
        "dataModalLabel"
    ).textContent = `Edit Data (${type})`;
    document.getElementById("dataId").value = data.id;
    document.getElementById("dataForm").setAttribute("data-type", type);

    // Tampilkan form sesuai tipe
    switchForm(type);

    if (type === "persebaran") {
        document.getElementById("dataRw").value = data.group;
        document.getElementById("dataLaki").value = data.male;
        document.getElementById("dataPerempuan").value = data.female;
    } else if (type === "populasi") {
        document.getElementById("dataGender").value = data.jenis_kelompok;
        document.getElementById("dataJumlah").value = data.jumlah;
    } else if (type === "agama") {
        document.getElementById("dataJenisKelompok").value =
            data.jenis_kelompok;
        document.getElementById("dataLakiAgama").value = data.laki_laki; // Update ID
        document.getElementById("dataPerempuanAgama").value = data.perempuan; // Update ID
    }

    const dataModal = new bootstrap.Modal(document.getElementById("dataModal"));
    dataModal.show();
}

function switchForm(type) {
    // Toggle visibility form sesuai tipe
    const formPersebaran = document.getElementById("formPersebaran");
    const formPopulasi = document.getElementById("formPopulasi");
    const formAgama = document.getElementById("formAgama");

    if (type === "persebaran") {
        formPersebaran.classList.remove("d-none");
        formPopulasi.classList.add("d-none");
        formAgama.classList.add("d-none");
    } else if (type === "populasi") {
        formPersebaran.classList.add("d-none");
        formPopulasi.classList.remove("d-none");
        formAgama.classList.add("d-none");
    } else if (type === "agama") {
        formPersebaran.classList.add("d-none");
        formPopulasi.classList.add("d-none");
        formAgama.classList.remove("d-none");
    }
}

function saveData() {
    const type = document.getElementById("dataForm").getAttribute("data-type");
    const id = document.getElementById("dataId").value;

    let data;
    if (type === "persebaran") {
        data = {
            group: document.getElementById("dataRw").value,
            male: parseInt(document.getElementById("dataLaki").value),
            female: parseInt(document.getElementById("dataPerempuan").value),
            total:
                parseInt(document.getElementById("dataLaki").value) +
                parseInt(document.getElementById("dataPerempuan").value),
        };
    } else if (type === "populasi") {
        data = {
            jenis_kelompok: document.getElementById("dataGender").value,
            jumlah: parseInt(document.getElementById("dataJumlah").value),
        };
    } else if (type === "agama") {
        data = {
            jenis_kelompok: document.getElementById("dataJenisKelompok").value,
            laki_laki: parseInt(document.getElementById("dataLakiAgama").value), // Update ID
            perempuan: parseInt(
                document.getElementById("dataPerempuanAgama").value
            ), // Update ID
            jumlah:
                parseInt(document.getElementById("dataLakiAgama").value) +
                parseInt(document.getElementById("dataPerempuanAgama").value),
        };
    }

    const url = id ? `/data-${type}/${id}` : `/data-${type}`;
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
                return response.json().then((error) => {
                    throw new Error(
                        error.message || "Terjadi kesalahan pada server."
                    );
                });
            }
            return response.json();
        })
        .then((result) => {
            alert(result.message || "Data berhasil disimpan!");
            location.reload(); // Refresh halaman
        })
        .catch((error) => {
            alert(error.message);
            console.error(error);
        });
}

// Fungsi untuk membuka modal konfirmasi delete
function openDeleteModal(type, data) {
    // Ambil elemen modal
    const deleteModal = document.getElementById("deleteModal");
    const deleteMessage = document.getElementById("deleteMessage");
    const deleteIdInput = document.getElementById("deleteId");
    const deleteButton = document.getElementById("deleteButton");

    // Set nilai ID data ke input hidden
    deleteIdInput.value = data.id;

    // Set pesan konfirmasi di modal
    deleteMessage.textContent = `Apakah Anda yakin ingin menghapus data ini?`;

    // Tambahkan atribut tipe data ke tombol delete
    deleteButton.setAttribute("data-type", type);

    // Tampilkan modal menggunakan Bootstrap
    const modalInstance = new bootstrap.Modal(deleteModal);
    modalInstance.show();
}

// Fungsi untuk menghapus data
function deleteData() {
    const type = document
        .getElementById("deleteButton")
        .getAttribute("data-type");
    const id = document.getElementById("deleteId").value;

    if (!id || !type) {
        alert("Data tidak valid.");
        return;
    }

    fetch(`/data-${type}/${id}`, {
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                .content,
        },
    })
        .then((response) => {
            if (!response.ok) {
                return response.json().then((error) => {
                    throw new Error(error.message || "Gagal menghapus data.");
                });
            }
            return response.json();
        })
        .then((result) => {
            alert(result.message || "Data berhasil dihapus!");
            location.reload();
        })
        .catch((error) => {
            alert(error.message);
            console.error(error);
        });
}
