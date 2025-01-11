// Fungsi untuk membuka modal tambah berita
function openAddModal() {
    const addNewsModal = new bootstrap.Modal(
        document.getElementById("addNewsModal")
    );
    addNewsModal.show();
}

// Fungsi untuk menambah berita
async function addNews(formData) {
    try {
        const response = await fetch("/berita", {
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
        console.log("Berita berhasil ditambahkan:", result);
        return { success: true, data: result };
    } catch (error) {
        console.error("Error:", error);
        return {
            success: false,
            message: "Terjadi kesalahan saat menambahkan berita!",
        };
    }
}

// Event listener untuk form submit
document
    .getElementById("addNewsForm")
    .addEventListener("submit", async function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const result = await addNews(formData);

        if (result.success) {
            alert("Berita berhasil ditambahkan!");
            location.reload(); // Reload halaman untuk memperbarui tabel berita
        } else {
            alert("Gagal menambahkan berita: " + result.message);
        }
    });
// DELETE-------------------------------------------
function deleteNews(id) {
    if (confirm("Apakah Anda yakin ingin menghapus berita ini?")) {
        fetch(`/berita/${id}`, {
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
function openEditModal(button) {
    // Ambil data dari tombol
    const id = button.getAttribute("data-id");
    const title = button.getAttribute("data-title");
    const description = button.getAttribute("data-description");
    const news = button.getAttribute("data-news");
    const date = button.getAttribute("data-date");
    const image = button.getAttribute("data-image");

    // Isi form dengan data
    document.getElementById("newsId").value = id;
    document.getElementById("title").value = title;
    document.getElementById("description").value = description;
    document.getElementById("news").value = news;
    document.getElementById("date").value = date;

    // Tampilkan pratinjau gambar jika ada
    const imagePreview = document.getElementById("imagePreview");
    if (image) {
        imagePreview.innerHTML = `<img src="/assets/images/${image}" class="img-thumbnail" width="100" alt="Current Image">`;
    } else {
        imagePreview.innerHTML = ""; // Hapus pratinjau jika tidak ada gambar
    }

    // Tampilkan modal
    const editModal = new bootstrap.Modal(document.getElementById("editModal"));
    editModal.show();
}
document.getElementById("editForm").addEventListener("submit", function (e) {
    e.preventDefault(); // Cegah reload halaman

    const id = document.getElementById("newsId").value;
    const formData = new FormData(this);

    fetch(`/berita/${id}`, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
                .content,
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
        .catch((error) => console.error("Error updating news:", error));
});
