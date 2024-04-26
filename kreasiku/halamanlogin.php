<?php
$mysqli = new mysqli('localhost', 'root', '', 'kreasiku_daabaselekkk');

require 'function.php';

if(isset($_POST['register'])){

    if(register($_POST)> 0){
        echo "<script>
        alert('User Baru Berhasil login !')</script>";
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
    <title>Form Login</title>
    <link rel="stylesheet" href="halamanlogin.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Login User</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" id="username" name="nama" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                </div>
                <div class="f orm-group">
                    <label for="role">role</label>
                    <input type="role" class="form-control" id="role" name="role" placeholder="Masukkan role">
                </div>
                <button name="login" type="submit" class="btn btn-primary">login</button>
    
        Don't have an account? <a href="register.php" id="register.php">Register</a>
    </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>