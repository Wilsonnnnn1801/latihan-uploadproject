<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $query = "SELECT * FROM registration WHERE Username='$Username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if($user) {
        if(password_verify($Password, $user['Password'])) {
            $_SESSION['Username'] = $user['Username'];
            header('Location: home.php');
            exit;
        } else {
            echo "<script>alert('Login failed. Incorrect password.');</script>";
        }
    } else {
        echo "<script>alert('Login failed. Username not found.');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="logen.css">
</head>
<body class="container">
    <form action="" method="post">
    <div class="container">
        <label for="Username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="Username" required>
        <label for="Password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="Password" required>
        <button type="submit" name="login">Login</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        <span>Haven't Register? <a href="register.php">Register Here</a></span>
    </div>
    </form>
</body>
</html>