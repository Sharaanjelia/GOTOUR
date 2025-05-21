function showProductForm() {
    alert("Add New Product Form will be displayed here.");
}

// Add more interactivity for other sections as needed
// Fungsi untuk membuka modal edit pengguna
function editUser(userId) {
    // Dapatkan data pengguna dari server atau database sesuai userId
    // Di sini saya menggunakan data dummy untuk contoh

    const users = [
        { id: 1, name: "John Doe", email: "johndoe@gmail.com", role: "Admin", status: "Active" },
        { id: 2, name: "Jane Smith", email: "janesmith@gmail.com", role: "User", status: "Inactive" },
        { id: 3, name: "Michael Brown", email: "michaelbrown@gmail.com", role: "Admin", status: "Active" }
    ];

    const user = users.find(u => u.id === userId);

    if (user) {
        document.getElementById('userName').value = user.name;
        document.getElementById('userEmail').value = user.email;
        document.getElementById('userRole').value = user.role;
        document.getElementById('userStatus').value = user.status;
        document.getElementById('editModal').style.display = 'flex';
    }
}

// Fungsi untuk menutup modal
function closeModal() {
    document.getElementById('editModal').style.display = 'none';
}

// Fungsi untuk menghapus pengguna
function deleteUser(userId) {
    if (confirm('Are you sure you want to delete this user?')) {
        // Hapus pengguna berdasarkan userId
        alert('User deleted successfully!');
    }
}

// Fungsi untuk pencarian pengguna
document.getElementById('searchInput').addEventListener('input', function(e) {
    let searchQuery = e.target.value.toLowerCase();
    let rows = document.querySelectorAll('#usersTable tbody tr');

    rows.forEach(row => {
        let userName = row.cells[1].textContent.toLowerCase();
        let userEmail = row.cells[2].textContent.toLowerCase();

        if (userName.includes(searchQuery) || userEmail.includes(searchQuery)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});
