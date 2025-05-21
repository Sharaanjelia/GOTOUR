<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Activity - Admin Dashboard</title>
  <link rel="stylesheet" href="style.css"/>
  <style>

    /* Data Tabel */
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
      <li><a href="users.php">Users</a></li>
      <li><a href="review.php">review</a></li>
      <li><a href="userposts.php">User Posts</a></li>
      <li><a href="useractivity.php" class="active">User Activity</a></li>
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

    <!-- User Activity Table Section -->
    <div id="user-activity">
      <h1 class="mb-4">User Activity</h1>
      <div class="row mb-4">
        <div class="col-12">
          <div class="data-table">
            <table class="table" id="userActivityTable">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Activity</th>
                  <th>Timestamp</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <!-- User Activity Rows -->
                <tr>
                  <td>1</td>
                  <td>Login</td>
                  <td>2025-05-01 09:00:00</td>
                  <td>Successful login to the admin panel</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>View Product</td>
                  <td>2025-05-02 10:30:00</td>
                  <td>Viewed product "Bandung Tour" details</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Post Review</td>
                  <td>2025-05-03 14:20:00</td>
                  <td>Posted review on "Bandung Waterfall" tour</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
