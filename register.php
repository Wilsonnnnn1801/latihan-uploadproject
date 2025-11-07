<?php
//area php/logic(backend)
include 'koneksi.php';
// cek apakah form telah disubmit
if(isset($_POST['Register'])){
    // ambil data dari form
    $Username = $_POST['Username'];
    $nama =$_POST['Full_Name'];
    $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);//enkripsi password

    //simpan data ke database
    $query = "INSERT INTO registration(Username,Password, Full_Name) VALUES('$Username', '$Password', '$nama')";
    //eksekusi query
    $result = mysqli_query($koneksi, $query);

    //cek apakah query berhasil
    if($result){
        //redirect ke halaman login setelah registrasi berhasil
        echo "<script>alert('Kelas King');
        window.location.href='login.php';</script>";
    } else{
        //tampilkan pesan error jika registrasi gagal
        echo "Registrasi gagal. Silahkan coba lagi.";}
}
?>
<!DOCTYPE html>
        <!--area interface/html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="logen.css">
</head>
<body class="container">
    <form action="" method="post">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="Username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="Username" id="Username" required>
            <br>
            <label for="Password"><b>Password</b></label>
            <input type="Password" placeholder="Enter Password" name="Password" id="Password" required>
            <br>
            <label for="Full_Name"><b>Full Name</b></label>
            <input type="text" placeholder="Enter Full Name" name="Full_Name" id="Full_Name" required>
            <hr>
            <button type="submit" name="Register">Register</button>
        <div class="container">
            <span>Already have an account? <a href="login.php">Log in here</a>.</span>
        </div>
        </div>
    </form>
</body>
</html>