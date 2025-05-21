<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users - Admin Dashboard</title>
  <link rel="stylesheet" href="style.css"/>
  <style>
    /* Tabel Pengguna */
    .data-table {
      margin-top: 20px;
    }

    .table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .table th, .table td {
      padding: 10px;
      font-size: 1rem;
      text-align: center;
      border: 1px solid #ddd;
    }

    .table th {
      background-color: #f8f9fa;
      color: #333;
      font-weight: 600;
    }

    .table td {
      background-color: #f4f4f4;
    }

    .table tr:nth-child(even) {
      background-color: #e9ecef;
    }

    .table tr:hover {
      background-color: #ddd;
      cursor: pointer;
    }

    /* Modal Edit Pengguna */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .modal-content {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      width: 400px;
      max-width: 100%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .modal-content input,
    .modal-content select {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ddd;
    }

    .modal-content button {
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    .modal-content button[type="submit"] {
      background-color: #28a745;
      color: white;
    }

    .modal-content button[type="button"] {
      background-color: #6c757d;
      color: white;
    }

    /* Gaya Responsif */
    @media (max-width: 768px) {
      .sidebar {
        width: 200px;
      }

      .main-content {
        margin-left: 200px;
      }

      .search input {
        width: 100%;
        margin-bottom: 10px;
      }

      .user-info {
        margin-top: 10px;
      }

      .profile-container {
        margin-bottom: 10px;
      }

      .notifications {
        justify-content: space-around;
        width: 100%;
      }

      .row {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="sidebar-header">
      <h2>GOTOUR</h2>
    </div>
    <ul class="sidebar-menu">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="Wisata.php">Wisata</a></li>
      <li><a href="users.php" class="active">Users</a></li>
      <li><a href="review.php">review</a></li>
      <li><a href="userposts.php">User Posts</a></li>
      <li><a href="useractivity.php">User Activity</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Header -->
    <header class="header">
      <div class="search">
        <input type="text" placeholder="Search Users" id="searchInput">
      </div>
      <div class="user-info">
        <div class="notifications">
          <span>Messages</span>
          <span>Notifications</span><br>
        </div>
        <div class="profile-container">
          <div class="profile-img">
            <img src="img/yaya.jpg" alt="Profile Picture">
          </div>
          <div class="profile-name">
            <span>Shara Anjelia</span>
          </div>
        </div>
      </div>
    </header>

    <!-- Users Table Section -->
    <div id="users">
      <h1 class="mb-4">User Management</h1>
      <div class="row mb-4">
        <div class="col-12">
          <div class="data-table">
            <table class="table" id="usersTable">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- User Rows -->
                <tr>
                  <td>1</td>
                  <td>John Doe</td>
                  <td>johndoe@gmail.com</td>
                  <td>Admin</td>
                  <td>Active</td>
                  <td>
                    <button class="btn-edit" onclick="editUser(1)">Edit</button>
                    <button class="btn-delete" onclick="deleteUser(1)">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jane Smith</td>
                  <td>janesmith@gmail.com</td>
                  <td>User</td>
                  <td>Inactive</td>
                  <td>
                    <button class="btn-edit" onclick="editUser(2)">Edit</button>
                    <button class="btn-delete" onclick="deleteUser(2)">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Michael Brown</td>
                  <td>michaelbrown@gmail.com</td>
                  <td>Admin</td>
                  <td>Active</td>
                  <td>
                    <button class="btn-edit" onclick="editUser(3)">Edit</button>
                    <button class="btn-delete" onclick="deleteUser(3)">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit User Modal -->
  <div class="modal" id="editModal">
    <div class="modal-content">
      <h2>Edit User</h2>
      <form id="editUserForm">
        <label for="userName">Full Name</label>
        <input type="text" id="userName" name="userName">
        <label for="userEmail">Email</label>
        <input type="email" id="userEmail" name="userEmail">
        <label for="userRole">Role</label>
        <select id="userRole" name="userRole">
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
        <label for="userStatus">Status</label>
        <select id="userStatus" name="userStatus">
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
        <button type="submit">Save Changes</button>
        <button type="button" onclick="closeModal()">Cancel</button>
      </form>
    </div>
  </div>

  <script>
    function openModal() {
      document.getElementById('editModal').style.display = 'flex';
    }

    function closeModal() {
      document.getElementById('editModal').style.display = 'none';
    }

    function editUser(id) {
      // Logic to fetch user data by ID and populate the modal for editing
      openModal();
    }

    function deleteUser(id) {
      // Logic to delete user
      alert('User ' + id + ' deleted');
    }
  </script>
</body>

</html>
