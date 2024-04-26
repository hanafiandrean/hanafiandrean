<?php
$mysqli = new mysqli('localhost', 'root', '', 'kreasiku_daabaselekkk');

require 'function.php';

if(isset($_POST['register'])){

    if(register($_POST)> 0){
        echo "<script>
        alert('User Baru Berhasil Ditambahkan!')</script>";
    }
    else{
        echo mysqli_error($mysqli );
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Register only</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                </div>
                <div class="form-group">
                    <label for="role">role</label>
                    <input type="role" class="form-control" id="role" name="role" placeholder="Masukkan role">
                </div>
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                </div>
                <button name="register" type="submit" class="btn btn-primary">register</button>
                
                Already have an account? <a href="halamanlogin.php" id="halamanlogin.php">Login</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>