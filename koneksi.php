<?php

$koneksi = mysqli_connect("localhost", "root", "mysql", "datamahasiswa");
echo ('koneksi berhasil');
if (mysqli_connect_error()) {

    echo "koneksi database gagal : " . mysqli_connect_error();

}

?>