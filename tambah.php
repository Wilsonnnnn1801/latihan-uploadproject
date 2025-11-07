<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>FORM PENDAFTARAN MAHASISWA BARU</h3>
    <form method="post" action="tambah_aksi.php">
        <fieldset border="1">
            <legend>Masukkan Data Mahasiswa</legend>
            <table text align="center">
            <tr>
                <td>Kode Mahasiswa</td>
                <td><input type="text" name="kodeMS"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="NIM"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="Jurusan"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Save">
                </td>   
            </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>