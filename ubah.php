<link rel="stylesheet" href="style.css">

<?php

include "koneksi.php";

$no       = $_POST['NO'];
$kodeMS   = $_POST['kodeMS'];
$Nama     = $_POST['Nama'];
$NIM      = $_POST['NIM'];
$Jurusan  = $_POST['Jurusan'];
$Alamat   = $_POST['Alamat'];

mysqli_query($koneksi, "UPDATE datahsiswah SET kodeMS='$kodeMS', Nama='$Nama', NIM='$NIM', Jurusan='$Jurusan', Alamat='$Alamat' WHERE NO='$no'");

header("Location: index.php");
?>