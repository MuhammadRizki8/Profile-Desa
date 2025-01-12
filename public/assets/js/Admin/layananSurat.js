// Membuka Modal Tambah Layanan Surat
function openAddLayananSuratModal() {
    const addModal = new bootstrap.Modal(
        document.getElementById("addLayananModal")
    );
    addModal.show();
}

// Menambahkan Data Layanan Surat
async function addLayananSurat(formData) {
    try {
        const response = await fetch("/layanan-surat", {
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
            console.error("Error Response:", error);
            return {
                success: false,
                message: error.message || "Gagal menyimpan data layanan surat!",
            };
        }

        const result = await response.json();
        console.log("Layanan Surat berhasil ditambahkan:", result);
        return { success: true, data: result };
    } catch (error) {
        console.error("Error Request:", error);
        return {
            success: false,
            message: "Terjadi kesalahan pada server!",
        };
    }
}

// Menyimpan persyaratan sebagai array
let persyaratanArray = [];

// Elemen input persyaratan
const persyaratanInput = document.getElementById("persyaratanInput");
const persyaratanTags = document.getElementById("persyaratanTags");

// Event Listener untuk menangkap input saat tekan Enter
persyaratanInput.addEventListener("keydown", function (e) {
    if (e.key === "Enter" && persyaratanInput.value.trim() !== "") {
        e.preventDefault();

        const value = persyaratanInput.value.trim();

        // Tambahkan ke array
        persyaratanArray.push(value);

        // Tampilkan tag baru
        const tag = document.createElement("span");
        tag.className = "badge bg-primary me-2";
        tag.innerHTML = `${value} <button type="button" class="btn-close btn-close-white btn-sm ms-1" aria-label="Remove"></button>`;
        persyaratanTags.insertBefore(tag, persyaratanInput);

        // Hapus tag saat tombol close ditekan
        tag.querySelector("button").addEventListener("click", function () {
            persyaratanArray = persyaratanArray.filter(
                (item) => item !== value
            );
            tag.remove();
        });

        // Kosongkan input setelah menambahkan tag
        persyaratanInput.value = "";
    }
});

// Tambahkan persyaratanArray ke FormData sebelum submit
document
    .getElementById("addLayananSuratForm")
    .addEventListener("submit", async function (e) {
        e.preventDefault();

        // Ubah persyaratanArray menjadi JSON string
        const formData = new FormData(this);
        formData.set("persyaratan", JSON.stringify(persyaratanArray));

        // Kirim data ke server
        const result = await addLayananSurat(formData);

        if (result.success) {
            alert("Layanan Surat berhasil ditambahkan!");
            location.reload();
        } else {
            alert("Gagal menambahkan layanan surat: " + result.message);
        }
    });

// EDIT DATA==============================================
// Membuka Modal Edit Layanan Surat
// Function to handle opening the edit modal
function openEditSuratModal(button) {
    const id = button.getAttribute("data-id");
    const layanan = button.getAttribute("data-layanan");
    const detail = button.getAttribute("data-detail");
    const persyaratan = button.getAttribute("data-persyaratan");
    const jamPelayanan = button.getAttribute("data-jam_pelayanan");
    const hariPelayanan = button.getAttribute("data-hari_pelayanan");
    const tataCara = button.getAttribute("data-tata_cara");

    // Set the form values
    document.getElementById("layananId").value = id;
    document.getElementById("editLayananName").value = layanan;
    document.getElementById("editLayananDetail").value = detail;
    document.getElementById("editLayananJamPelayanan").value = jamPelayanan;
    document.getElementById("editLayananHariPelayanan").value = hariPelayanan;
    document.getElementById("editLayananTataCara").value = tataCara;

    // Handle persyaratan tags
    const editPersyaratanTags = document.getElementById("editPersyaratanTags");
    editPersyaratanTags.innerHTML = `
        <input
            type="text"
            id="editPersyaratanInput"
            placeholder="Ketik persyaratan dan tekan Enter"
            class="border-0"
            style="outline: none; width: 100%;"
        />
    `;

    // Parse and add existing persyaratan
    if (persyaratan) {
        try {
            const persyaratanArray = JSON.parse(persyaratan);
            persyaratanArray.forEach((item) => {
                const tag = document.createElement("span");
                tag.className = "badge bg-primary me-2";
                tag.innerHTML = `${item} <button type="button" class="btn-close btn-close-white btn-sm ms-1" aria-label="Remove"></button>`;
                editPersyaratanTags.insertBefore(
                    tag,
                    document.getElementById("editPersyaratanInput")
                );

                // Add click handler for removing tags
                tag.querySelector("button").addEventListener(
                    "click",
                    function () {
                        tag.remove();
                    }
                );
            });
        } catch (e) {
            console.error("Error parsing persyaratan:", e);
        }
    }

    // Add handler for new persyaratan input
    const editPersyaratanInput = document.getElementById(
        "editPersyaratanInput"
    );
    editPersyaratanInput.addEventListener("keydown", function (e) {
        if (e.key === "Enter" && this.value.trim() !== "") {
            e.preventDefault();
            const value = this.value.trim();

            const tag = document.createElement("span");
            tag.className = "badge bg-primary me-2";
            tag.innerHTML = `${value} <button type="button" class="btn-close btn-close-white btn-sm ms-1" aria-label="Remove"></button>`;
            editPersyaratanTags.insertBefore(tag, this);

            tag.querySelector("button").addEventListener("click", function () {
                tag.remove();
            });

            this.value = "";
        }
    });

    // Show the modal
    const editModal = new bootstrap.Modal(
        document.getElementById("editLayananModal")
    );
    editModal.show();
}

// Handle form submission
document
    .getElementById("editLayananForm")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        // Get all persyaratan tags
        const persyaratanTags = Array.from(
            document
                .getElementById("editPersyaratanTags")
                .getElementsByClassName("badge")
        ).map((tag) => tag.textContent.trim());

        const formData = new FormData(this);
        formData.set("persyaratan", JSON.stringify(persyaratanTags));
        const id = document.getElementById("layananId").value;

        fetch(`/layanan-surat/${id}`, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
                "X-HTTP-Method-Override": "PUT",
            },
            body: formData,
        })
            .then((response) => {
                if (!response.ok) {
                    return response.json().then((errorData) => {
                        throw new Error(
                            errorData.message ||
                                "Failed to update layanan surat"
                        );
                    });
                }
                return response.json();
            })
            .then((data) => {
                alert(data.message || "Layanan surat berhasil diperbarui");
                location.reload();
            })
            .catch((error) => {
                alert(
                    error.message ||
                        "Terjadi kesalahan saat memperbarui layanan surat"
                );
                console.error("Error:", error);
            });
    });
// Submit Form Edit Layanan Surat
document
    .getElementById("editLayananSuratForm")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        const id = document.getElementById("layananSuratId").value;
        const formData = new FormData(this);

        fetch(`/layanan-surat/${id}`, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
                "X-HTTP-Method-Override": "PUT",
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
                location.reload();
            })
            .catch((error) =>
                console.error("Error updating layanan surat:", error)
            );
    });
// DELETE ===============================
// Function to handle surat deletion
function deleteSurat(id) {
    if (confirm("Apakah Anda yakin ingin menghapus layanan surat ini?")) {
        // Get the CSRF token
        const token = document.querySelector('meta[name="csrf-token"]').content;

        fetch(`/layanan-surat/${id}`, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": token,
                Accept: "application/json",
                "Content-Type": "application/json",
            },
        })
            .then((response) => {
                if (!response.ok) {
                    return response.json().then((errorData) => {
                        throw new Error(
                            errorData.message || "Gagal menghapus layanan surat"
                        );
                    });
                }
                return response.json();
            })
            .then((data) => {
                alert(data.message || "Layanan surat berhasil dihapus");
                location.reload();
            })
            .catch((error) => {
                alert(
                    error.message ||
                        "Terjadi kesalahan saat menghapus layanan surat"
                );
                console.error("Error:", error);
            });
    }
}
