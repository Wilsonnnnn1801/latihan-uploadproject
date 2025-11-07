<?php
// koneksi database
include 'koneksi.php';

$no = $_GET['NO'];

// menghapus data dari database
mysqli_query($koneksi, "delete from datahsiswah WHERE NO='$no'");

// mengalihkan halaman kembali ke index.php
header("Location: index.php");
?>