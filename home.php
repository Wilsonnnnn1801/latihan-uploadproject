<?php
session_start();

if (!isset($_SESSION['Username'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Dashboard</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background: #0d6efd;
        }
        .navbar-brand, .nav-link, .navbar-text {
            color: white !important;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding-top: 1rem;
            color: white;
        }
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }
        .content {
            padding: 2rem;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyWebsite</a>
    <div class="d-flex">
      <span class="navbar-text me-3">Halo, <b><?= htmlspecialchars($namaUser) ?></b></span>
      <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 col-lg-2 sidebar">
      <h5 class="text-center mb-3">Menu</h5>
      <a href="#">🏠 Dashboard</a>
      <a href="#">👤 Profil</a>
      <a href="#">📄 Data</a>
      <a href="#">⚙️ Pengaturan</a>
    </div>

    <!-- Main Content -->
    <div class="col-md-9 col-lg-10 content">
      <h2>Selamat datang</h2>
      <p>Ini adalah halaman utama setelah login. Kamu bisa menambahkan konten seperti tabel data, grafik, atau menu lainnya di sini.</p>

      <div class="card mt-4">
        <div class="card-body">
          <h5 class="card-title">Informasi</h5>
          <p class="card-text">Website ini hanya bisa diakses oleh pengguna yang telah login.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
