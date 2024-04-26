<?php
function register ($data){

    $nama =$data['nama'];
    $email =$data['email'];
    $password =$data['password'];
    $role=$data['role'];
    $username=$data['username'];

$mysqli = new mysqli('localhost', 'root', '', 'kreasiku_daabaselekkk');

//sudah ada username 
$result = mysqli_query($mysqli," SELECT * FROM user WHERE username= '$username' ");

if(mysqli_fetch_assoc($result )){

    echo "<script>
    alert('Username Sudah Ada!')</script>";

    return false;

}

// Memeriksa apakah koneksi berhasil
if ($mysqli->connect_error) {
    die('Koneksi Gagal: ' . $mysqli->connect_error);
}


$query = "INSERT INTO user VALUES ('','$nama','$email','$password','$role','$username')";
if ($mysqli->query($query)) {
    header("location:kreasiku_index.php");

} else {
    echo "Error: " . $mysqli->error;
}

$mysqli->close();

}
?>