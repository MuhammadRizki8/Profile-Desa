// Fungsi untuk membuka modal tambah dokumen
function openAddModalDocument() {
    const addDocumentModal = new bootstrap.Modal(
        document.getElementById("addDocumentModal")
    );
    addDocumentModal.show();
}
// Fungsi untuk menambah dokumen
async function addDocument(formData) {
    try {
        const response = await fetch("/documents", {
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
        console.log("Dokumen berhasil ditambahkan:", result);
        return { success: true, data: result };
    } catch (error) {
        console.error("Error:", error);
        return {
            success: false,
            message: "Terjadi kesalahan saat menambahkan dokumen!",
        };
    }
}

// Event listener untuk form submit
document
    .getElementById("addDocumentForm")
    .addEventListener("submit", async function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const result = await addDocument(formData);

        if (result.success) {
            alert("Dokumen berhasil ditambahkan!");
            location.reload(); // Reload halaman untuk memperbarui tabel dokumen
        } else {
            alert("Gagal menambahkan dokumen: " + result.message);
        }
    });
// EDIT=================================================
// Fungsi untuk membuka modal edit dokumen
function openEditDocumentModal(button) {
    // Ambil data dari tombol
    const id = button.getAttribute("data-id");
    const title = button.getAttribute("data-title");
    const category = button.getAttribute("data-category");
    const type = button.getAttribute("data-type");
    const documentFile = button.getAttribute("data-document");

    // Isi form dengan data
    document.getElementById("documentId").value = id;
    document.getElementById("documentEditTitle").value = title;
    document.getElementById("documentEditCategory").value = category;
    document.getElementById("documentType").value = type;

    // Tampilkan dokumen saat ini jika ada
    const currentDocument = document.getElementById("currentDocument");
    if (documentFile) {
        currentDocument.innerHTML = `
          <p>Dokumen saat ini: 
              <a href="/assets/documents/${documentFile}" target="_blank">${documentFile}</a>
          </p>`;
    } else {
        currentDocument.innerHTML = ""; // Hapus jika tidak ada dokumen
    }

    // Tampilkan modal
    const editModal = new bootstrap.Modal(
        document.getElementById("editDocumentModal")
    );
    editModal.show();
}

// Event listener untuk form edit dokumen
document
    .getElementById("editDocumentForm")
    .addEventListener("submit", function (e) {
        e.preventDefault(); // Cegah reload halaman

        const id = document.getElementById("documentId").value;
        const formData = new FormData(this);

        fetch(`/documents/${id}`, {
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
            .catch((error) => console.error("Error updating document:", error));
    });
// DELETE===============================================
function deleteDocument(id) {
    if (confirm("Apakah Anda yakin ingin menghapus dokumen ini?")) {
        fetch(`/documents/${id}`, {
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
                } else {
                    alert("Terjadi kesalahan saat menghapus dokumen.");
                }
            })
            .catch((error) => {
                console.error("Error:", error);
                alert("Terjadi kesalahan saat menghapus dokumen.");
            });
    }
}
