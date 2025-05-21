<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Posts</title>
  <link rel="stylesheet" href="style.css"/>
  <style>

    /* Form untuk menambah post */
    .form-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .form-container h1 {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .form-container label {
      font-size: 16px;
      color: #34495e;
    }

    .form-container input[type="number"],
    .form-container input[type="file"],
    .form-container textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    .form-container input[type="submit"] {
      padding: 12px 20px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s;
    }

    .form-container input[type="submit"]:hover {
      background-color: #2980b9;
    }

    /* Daftar Postingan */
    .posts-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .posts-container h2 {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .post {
      padding: 15px;
      margin-bottom: 20px;
      background-color: #ecf0f1;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .post h3 {
      color: #2980b9;
      font-size: 20px;
      margin-bottom: 10px;
    }

    .post p {
      font-size: 16px;
      color: #555;
    }

    .post img {
      width: 100%;
      max-width: 300px;
      height: auto;
      margin-top: 10px;
      border-radius: 8px;
    }

    .post small {
      font-size: 14px;
      color: #7f8c8d;
      display: block;
      margin-top: 10px;
    }

    .no-posts {
      text-align: center;
      font-size: 18px;
      color: #e74c3c;
      padding: 20px;
    }

    /* Gaya Responsif */
    @media (max-width: 768px) {
      .sidebar {
        width: 200px;
      }

      .main-content {
        margin-left: 200px;
      }

      .form-container,
      .posts-container {
        width: 100%;
        margin-left: 0;
      }

      .form-container label,
      .form-container input,
      .form-container textarea {
        width: 100%;
        margin-bottom: 10px;
      }

      .form-container input[type="submit"] {
        width: 100%;
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
            <li><a href="testimoni.php" class="active">testimoni</a></li>
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

        <!-- Form untuk menambah post -->
        <div class="form-container">
            <h1>Postingan Pengguna</h1>
            <form method="POST" action="index.php" enctype="multipart/form-data">
                <label for="user_id">User ID:</label>
                <input type="number" id="user_id" name="user_id" required>
                <br>

                <label for="content">Content:</label>
                <textarea id="content" name="content" rows="4" cols="50" required></textarea>
                <br>

                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
                <br>

                <input type="submit" name="submit" value="Post">
            </form>
        </div>

        <!-- Daftar Postingan -->
        <div class="posts-container">
            <h2>Daftar Postingan</h2>

            <!-- Example of a post (this will be dynamically generated with PHP or JS) -->
            <div class="post">
                <h3>username says:</h3>
                <p>tempat wisata ini sangat rekomen banget, kalian harus kesini deh</p>
                <img src="../img/post1.jpeg" alt="Post Image" width="300px">
                <small>Posted on 2025-05-04 23:38:14</small>
            </div>
            <div class="post">
                <h3>another_user says:</h3>
                <p>Post content here...</p>
                <img src="../img/post1.jpeg" alt="Post Image" width="300px">
                <small>Posted on 2025-05-04 23:50:00</small>
            </div>
            <!-- No posts available -->
            <div class="no-posts">
                No posts available
            </div>
        </div>
    </div>

</body>
</html>
