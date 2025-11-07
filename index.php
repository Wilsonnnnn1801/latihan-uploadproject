<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data-Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <header class="topbar">
                <h1>DATA-DATA MAHASISWA</h1>
        </header>

        <section class="table-wrap">
            <table class="styled-table" border="1">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Kode Mahasiswa</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM datahsiswah") or die(mysqli_error($koneksi));
                while ($d = mysqli_fetch_assoc($data)) {
                    ?>
                    <tr text align="center">
                        <td><?php echo $d['NO']; ?></td>
                        <td><?php echo $d['kodeMS']; ?></td>
                        <td><?php echo $d['Nama']; ?></td>
                        <td><?php echo $d['NIM']; ?></td>
                        <td><?php echo $d['Jurusan']; ?></td>
                        <td><?php echo $d['Alamat']; ?></td>                            
                        <td>
                            <a class="small-btn" href="update.php?NO=<?php echo $d['NO']; ?>">Update</a>
                            <hr>
                            <a class="small-btn danger" href="delete.php?NO=<?php echo urlencode($d['NO']); ?>" onclick="return confirm('Hapus data ini?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </section>

        <footer class="footer">
            <small>&copy; <?=date('Y') ?> LATIHAN MANDIRI</small>
        </footer>
    </main>
    <div class="actions">
        <a class="btn" href="tambah.php">+ TAMBAH MAHASISWA</a>
        <a class="btn" href="logout.php">LOGOUT</a>
    </div>
</body>
</html>