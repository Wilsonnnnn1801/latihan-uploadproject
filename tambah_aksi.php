<?php

include 'koneksi.php';

$kodeMS   = $_POST['kodeMS'];
$Nama   = $_POST['Nama'];
$Jurusan= $_POST["Jurusan"];
$Alamat = $_POST['Alamat'];
    
mysqli_query($koneksi, "insert into datahsiswah(kodeMS, Nama, NIM, Jurusan, Alamat) VALUES('$kodeMS', '$Nama', '$NIM', '$Jurusan', '$Alamat')");

header("Location: index.php");
?>