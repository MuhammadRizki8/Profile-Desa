// Fungsi untuk membuka modal tambah gallery
function openAddModalGaleri() {
    const addGalleryModal = new bootstrap.Modal(
        document.getElementById("addGalleryModal")
    );
    addGalleryModal.show();
}

// Fungsi untuk menambah gallery
async function addGalleries(formData) {
    try {
        const response = await fetch("/gallery", {
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
        console.log("gallery berhasil ditambahkan:", result);
        return { success: true, data: result };
    } catch (error) {
        console.error("Error:", error);
        return {
            success: false,
            message: "Terjadi kesalahan saat menambahkan gallery!",
        };
    }
}

// Event listener untuk form submit
document
    .getElementById("addGalleriesForm")
    .addEventListener("submit", async function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const result = await addGalleries(formData);

        if (result.success) {
            alert("gallery berhasil ditambahkan!");
            location.reload(); // Reload halaman untuk memperbarui tabel gallery
        } else {
            alert("Gagal menambahkan gallery: " + result.message);
        }
    });
// DELETE-------------------------------------------
function deleteGallery(id) {
    if (confirm("Apakah Anda yakin ingin menghapus galeri ini?")) {
        fetch(`/gallery/${id}`, {
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
// EDIT------------------------------------------
function openEditModalGallery(button) {
    // Ambil data dari tombol
    const id = button.getAttribute("dataGalery-id");
    const title = button.getAttribute("dataGalery-title");
    const image = button.getAttribute("dataGalery-image");

    // Isi form dengan data
    document.getElementById("galleriesId").value = id;
    document.getElementById("galleryTitleEdit").value = title;

    // Tampilkan pratinjau gambar jika ada
    const imagePreview = document.getElementById("imagePreviewGallery");
    if (image) {
        imagePreview.innerHTML = `<img src="/assets/images/${image}" class="img-thumbnail" width="100" alt="Current Image">`;
    } else {
        imagePreview.innerHTML = ""; // Hapus pratinjau jika tidak ada gambar
    }

    // Tampilkan modal
    const editModal = new bootstrap.Modal(
        document.getElementById("editModalGalery")
    );
    editModal.show();
}
document
    .getElementById("editFormGallery")
    .addEventListener("submit", function (e) {
        e.preventDefault(); // Cegah reload halaman

        const id = document.getElementById("galleriesId").value;
        const formData = new FormData(this);

        fetch(`/gallery/${id}`, {
            method: "POST",
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
                    location.reload(); // Muat ulang halaman setelah edit berhasil
                }
            })
            .catch((error) =>
                console.error("Error updating galleries:", error)
            );
    });
