<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">KEMBALI</a>
<br/><br/>
<h3>EDIT DATA MAHASISWA</h3>
<?php
include 'koneksi.php';
$no = $_GET['NO'];
$data = mysqli_query($koneksi, "SELECT * FROM datahsiswah WHERE NO='$no'");
$d = mysqli_fetch_array($data);
?>
<form method="post" action="ubah.php">
    <table>
        <tr>
            <td>Kode Mahasiswa</td>
            <td>
                <input type="hidden" name="NO" value="<?php echo $d['NO']; ?>">
                <input type="text" name="kodeMS" value="<?php echo ($d['kodeMS']); ?>">
            </td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>
                <input type="text" name="Nama" value="<?php echo ($d['Nama']); ?>">
            </td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>
                <input type="text" name="NIM" value="<?php echo ($d['NIM']); ?>">
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <input type="text" name="Jurusan" value="<?php echo ($d['Jurusan']); ?>">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <input type="text" name="Alamat" value="<?php echo ($d['Alamat']); ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Save">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
</body>
</html>
