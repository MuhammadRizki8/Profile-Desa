// Fungsi untuk membuka modal tambah agenda
function openAddAgendaModal() {
    const addAgendaModal = new bootstrap.Modal(
        document.getElementById("addAgendaModal")
    );
    addAgendaModal.show();
}

// Fungsi untuk menambah agenda
async function addAgenda(formData) {
    try {
        const response = await fetch("/agenda", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
                Accept: "application/json",
            },
            body: formData,
        });

        if (!response.ok) {
            // Tangani jika response status bukan 2xx
            const error = await response.json();
            console.error("Error:", error);
            return {
                success: false,
                message: error.message || "Unknown error",
            };
        }

        const result = await response.json();
        console.log("Agenda berhasil ditambahkan:", result);
        return { success: true, data: result };
    } catch (error) {
        console.error("Error:", error);
        return {
            success: false,
            message: "Terjadi kesalahan saat menambahkan agenda!",
        };
    }
}

// Event listener untuk form submit
document
    .getElementById("addAgendaForm")
    .addEventListener("submit", async function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const result = await addAgenda(formData);

        if (result.success) {
            alert("Agenda berhasil ditambahkan!");
            location.reload(); // Reload halaman untuk memperbarui tabel agenda
        } else {
            alert("Gagal menambahkan agenda: " + result.message);
        }
    });
// EDIT============================================================
// Membuka Modal Edit Agenda
function openEditAgendaModal(button) {
    // Ambil data dari tombol
    const id = button.getAttribute("data-id");
    const title = button.getAttribute("data-title");
    const description = button.getAttribute("data-description");
    const date = button.getAttribute("data-date"); // Tanggal agenda
    const image = button.getAttribute("data-image"); // Gambar agenda

    // Isi form dengan data
    document.getElementById("agendaId").value = id;
    document.getElementById("editAgendaTitle").value = title;
    document.getElementById("editAgendaDescription").value = description;
    document.getElementById("editAgendaDate").value = date;

    // Menampilkan pratinjau gambar jika ada
    if (image) {
        const imagePreview = document.getElementById("editAgendaImagePreview");
        if (imagePreview) {
            imagePreview.src = `/assets/images/${image}`; // Asumsikan path ke gambar
            imagePreview.style.display = "block"; // Tampilkan pratinjau gambar
        }
    }

    // Tampilkan modal
    const editAgendaModal = new bootstrap.Modal(
        document.getElementById("editAgendaModal")
    );
    editAgendaModal.show();
}

// Menangani Submit Form Edit Agenda
document
    .getElementById("editAgendaForm")
    .addEventListener("submit", function (e) {
        e.preventDefault(); // Cegah reload halaman

        const id = document.getElementById("agendaId").value;
        const formData = new FormData(this);

        fetch(`/agenda/${id}`, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
                "X-HTTP-Method-Override": "PUT", // Laravel mengenali ini sebagai PUT
            },
            body: formData,
        })
            .then((response) => {
                if (!response.ok) {
                    return response.json().then((errorData) => {
                        throw new Error(
                            errorData.errors
                                ? JSON.stringify(errorData.errors)
                                : errorData.message
                        );
                    });
                }
                return response.json();
            })
            .then((data) => {
                alert(data.message);
                location.reload(); // Muat ulang halaman setelah edit berhasil
            })
            .catch((error) => console.error("Error updating agenda:", error));
    });
// DELETE===================================================
function deleteAgenda(id) {
    if (confirm("Apakah Anda yakin ingin menghapus agenda ini?")) {
        fetch(`/agenda/${id}`, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.message) {
                    alert(data.message);
                    location.reload(); // Muat ulang halaman setelah penghapusan berhasil
                }
            })
            .catch((error) => console.error("Error:", error));
    }
}
