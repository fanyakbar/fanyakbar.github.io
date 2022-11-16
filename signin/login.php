<?php
require 'koneksi.php';
if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "select * from user where username = '$username' and password = '$password'");
    if (mysqli_num_rows($result) == 1){
        header("location: index.php");
        exit;
    }
    $error = true;
}
?>
<!Doctype html>
<html>

<head>
    <title>Login | Barbar Programming - Tech Digital</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
</head>

<body>
    <div class="container">
        <h1><img src="../img/logo.png"></img>
        </h1>
        <?php if (isset($error)) : ?>
        <p style="color:red; font-style: italic;">ID / Password Anda Salah</p>
        <?php endif; ?>
        <form action="" method="post">
            <i class="fas fa-user"><label for="username"> ID</label></i><br>
            <input type="text" name="username" id="username" placeholder="Masukan ID Anda disini ..."
                autocomplete="off">
            <br>
            <i class="fas fa-key"><label for="password"> Password</label></i><br>
            <input type="password" name="password" id="password" placeholder="xxxxxxxxxxxxx"><br>
            <button type="submit" name="login"><i class="fas fa-sign-in-alt"> Login</i></button>
            <p>Do have an account ? <a href="daftar.php">Sign Up</a></p>
        </form>
    </div>
</body>

</html>