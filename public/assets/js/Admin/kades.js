// EDIT------------------------------------------
function openEditModal(button) {
    const modal = document.getElementById("editModal");
    const form = document.getElementById("editFormKades");

    // Ambil data dari tombol
    const id = button.getAttribute("data-id");
    const name = button.getAttribute("data-name");
    const position = button.getAttribute("data-position");
    const description = button.getAttribute("data-description");
    const facebook = button.getAttribute("data-facebook");
    const instagram = button.getAttribute("data-instagram");
    const email = button.getAttribute("data-email");
    const image = button.getAttribute("data-image");

    // Isi data ke dalam form modal
    form.kadesId.value = id;
    form.name.value = name;
    form.position.value = position;
    form.description.value = description;
    form.facebook.value = facebook || "";
    form.instagram.value = instagram || "";
    form.email.value = email || "";

    // Tampilkan preview gambar
    const imagePreview = document.getElementById("imagePreview");
    imagePreview.innerHTML = `<img src="/assets/images/VillageInstrument_images/${image}" alt="${name}" class="img-thumbnail" width="100">`;

    // Tampilkan modal
    const bootstrapModal = new bootstrap.Modal(modal);
    bootstrapModal.show();
}
document
    .getElementById("editFormKades")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        const id = document.getElementById("kadesId").value; // ID Kepala Desa
        const formData = new FormData(this);

        console.log("ID yang dikirim:", id);
        console.log("Data yang dikirim:", [...formData.entries()]);

        fetch(`/village-instruments/${id}`, {
            method: "PUT",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
            },
            body: formData,
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then((data) => {
                console.log(data);
                if (data.message) {
                    alert(data.message);
                    setTimeout(() => {
                        location.reload();
                    }, 500);
                }
            })
            .catch((error) => {
                console.error("Error updating village instrument:", error);
            });
    });
