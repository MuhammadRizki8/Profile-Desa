// Fungsi untuk membuka modal tambah perangkat desa
function openAddVillageInstrumentModal() {
    const addVillageInstrumentModal = new bootstrap.Modal(
        document.getElementById("addVillageInstrumentModal")
    );
    addVillageInstrumentModal.show();
}

// Fungsi untuk menambahkan perangkat desa
async function addVillageInstrument(formData) {
    try {
        const response = await fetch("/village-instruments", {
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
            const error = await response.json();
            console.error("Error:", error);
            return {
                success: false,
                message: error.message || "Unknown error",
            };
        }

        const result = await response.json();
        console.log("Perangkat desa berhasil ditambahkan:", result);
        return { success: true, data: result };
    } catch (error) {
        console.error("Error:", error);
        return {
            success: false,
            message: "Terjadi kesalahan saat menambahkan perangkat desa!",
        };
    }
}

// Event listener untuk form submit
document
    .getElementById("addVillageInstrumentForm")
    .addEventListener("submit", async function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const result = await addVillageInstrument(formData);

        if (result.success) {
            alert("Perangkat desa berhasil ditambahkan!");
            location.reload(); // Reload halaman untuk memperbarui tabel perangkat desa
        } else {
            alert("Gagal menambahkan perangkat desa: " + result.message);
        }
    });
// EDIT==============================================================
function openEditModal(button) {
    const id = button.getAttribute("data-id");
    const category = button.getAttribute("data-category");
    const name = button.getAttribute("data-name");
    const position = button.getAttribute("data-position");
    const description = button.getAttribute("data-description");
    const facebook = button.getAttribute("data-facebook");
    const instagram = button.getAttribute("data-instagram");
    const email = button.getAttribute("data-email");
    const image = button.getAttribute("data-image");

    // Isi data ke dalam form
    document.getElementById("editInstrumentId").value = id;

    // Mengisi nilai kategori
    const categorySelect = document.getElementById("instrumentCategory");

    // Set nilai kategori yang diterima
    categorySelect.value = category;

    // Cek apakah nilai kategori valid
    if (!categorySelect.value) {
        const option = Array.from(categorySelect.options).find(
            (opt) => opt.value === category
        );
        if (option) {
            categorySelect.value = option.value; // Pilih kategori yang sesuai
        }
    }

    document.getElementById("editInstrumentName").value = name;
    document.getElementById("editInstrumentPosition").value = position;
    document.getElementById("editInstrumentDescription").value = description;
    document.getElementById("editInstrumentFacebook").value = facebook;
    document.getElementById("editInstrumentInstagram").value = instagram;
    document.getElementById("editInstrumentEmail").value = email;

    // Menampilkan gambar jika ada
    const imagePreview = document.getElementById("editImagePreview");
    if (image) {
        imagePreview.src = `/assets/images/VillageInstrument_images/${image}`;
        imagePreview.style.display = "block";
    } else {
        imagePreview.style.display = "none";
    }

    // Tampilkan modal
    const modal = new bootstrap.Modal(
        document.getElementById("editInstrumentModal")
    );
    modal.show();
}

document
    .getElementById("editInstrumentForm")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        const id = document.getElementById("editInstrumentId").value;
        const formData = new FormData(this);

        fetch(`/village-instruments/${id}`, {
            method: "POST", // Gunakan POST
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
                "X-HTTP-Method-Override": "PUT", // Laravel mengenali ini sebagai PUT
            },
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.message) {
                    alert(data.message);
                    setTimeout(() => {
                        location.reload(); // Muat ulang halaman setelah edit berhasil
                    }, 500); // Tunggu 500ms sebelum reload
                }
            })
            .catch((error) =>
                console.error("Error updating village instrument:", error)
            );
    });
// DELETE-------------------------------------------
function deleteInstrument(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        fetch(`/village-instruments/${id}`, {
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
