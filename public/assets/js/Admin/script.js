// sidebar
const toggleSidebar = document.getElementById('toggleSidebar');
const sidebar = document.getElementById('sidebar');

toggleSidebar.addEventListener('click', () => {
  sidebar.classList.toggle('show');
});

// Sidebar active
function toggleSubMenu(event, submenuId) {
  event.preventDefault(); // Mencegah tindakan default link
  const submenu = document.getElementById(submenuId);
  const parentItem = submenu.parentElement;

  // Toggle class active untuk menampilkan atau menyembunyikan sub-menu
  parentItem.classList.toggle("active");
}

// Indicator page table
function paginateTable(tableId, paginationId, rowsPerPage) {
    const table = document.getElementById(tableId);
    const pagination = document.getElementById(paginationId);
    if (!table || !pagination) {
        console.error(`Table or pagination not found for ID: ${tableId}, ${paginationId}`);
        return;
    }

    const rows = table.querySelectorAll("tbody tr");
    console.log(`Found ${rows.length} rows for table ${tableId}`);
    const totalRows = rows.length;
    const totalPages = Math.ceil(totalRows / rowsPerPage);
  
    let currentPage = 1;
  
    function displayPage(page) {
      const start = (page - 1) * rowsPerPage;
      const end = page * rowsPerPage;
  
      rows.forEach((row, index) => {
        row.style.display = index >= start && index < end ? "" : "none";
      });
    }
  
    function createPagination() {
      pagination.innerHTML = "";
  
      // Tombol Previous
      const prevLi = document.createElement("li");
      prevLi.className = currentPage === 1 ? "disabled" : "";
      prevLi.innerHTML = `<a href="#">Previous</a>`;
      prevLi.addEventListener("click", (e) => {
        e.preventDefault();
        if (currentPage > 1) {
          currentPage--;
          displayPage(currentPage);
          createPagination();
        }
      });
      pagination.appendChild(prevLi);
  
      // Tombol Nomor Halaman
      for (let i = 1; i <= totalPages; i++) {
        const li = document.createElement("li");
        li.className = i === currentPage ? "active" : "";
        li.innerHTML = `<a href="#">${i}</a>`;
        li.addEventListener("click", (e) => {
          e.preventDefault();
          currentPage = i;
          displayPage(currentPage);
          createPagination();
        });
        pagination.appendChild(li);
      }
  
      // Tombol Next
      const nextLi = document.createElement("li");
      nextLi.className = currentPage === totalPages ? "disabled" : "";
      nextLi.innerHTML = `<a href="#">Next</a>`;
      nextLi.addEventListener("click", (e) => {
        e.preventDefault();
        if (currentPage < totalPages) {
          currentPage++;
          displayPage(currentPage);
          createPagination();
        }
      });
      pagination.appendChild(nextLi);
    }
  
    displayPage(currentPage);
    createPagination();
}
paginateTable("table-berita", "pagination-table-berita", 5);
paginateTable("table-galeri", "pagination-table-galeri", 5);
paginateTable("table-perangkat-desa", "pagination-table-perangkat-desa", 2);
paginateTable("table-struktur-desa", "pagination-table-struktur-desa", 2);
paginateTable("table-penduduk", "pagination-table-penduduk", 10);
paginateTable("table-gender", "pagination-table-gender", 5);
paginateTable("table-agama", "pagination-table-agama", 10);
paginateTable("table-pendidikan", "pagination-table-pendidikan", 10);
paginateTable("table-umur", "pagination-table-umur", 10);
paginateTable("table-RPJM", "pagination-table-RPJM", 10);
paginateTable("table-APBD", "pagination-table-APBD", 10);
paginateTable("table-RKA", "pagination-table-RKA", 10);
paginateTable("table-agenda", "pagination-table-agenda", 10);
paginateTable("table-transparansi", "pagination-table-transparansi", 10);
paginateTable("table-produk-hukum", "pagination-table-produk-hukum", 10);
