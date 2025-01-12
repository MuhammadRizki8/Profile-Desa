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
            console.error("Error:", error);
            return {
                success: false,
                message: error.message || "Unknown error",
            };
        }

        const result = await response.json();
        console.log("Layanan Surat berhasil ditambahkan:", result);
        return { success: true, data: result };
    } catch (error) {
        console.error("Error:", error);
        return {
            success: false,
            message: "Terjadi kesalahan saat menambahkan layanan surat!",
        };
    }
}

// Event Listener untuk Submit Form Tambah Layanan Surat
document
    .getElementById("addLayananSuratForm")
    .addEventListener("submit", async function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const result = await addLayananSurat(formData);

        if (result.success) {
            alert("Layanan Surat berhasil ditambahkan!");
            location.reload();
        } else {
            alert("Gagal menambahkan layanan surat: " + result.message);
        }
    });
