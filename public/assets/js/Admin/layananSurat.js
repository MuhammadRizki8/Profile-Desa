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

// ==============================================
