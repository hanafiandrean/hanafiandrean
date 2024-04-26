<?php
// Mengambil data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = $_POST['role'];

// Melakukan koneksi ke database
$mysqli = new mysqli('localhost', 'root', '', 'kreasiku_daabaselekkk');

// Menjalankan query untuk menambahkan data baru
$query = "INSERT INTO user (username, password, email, role) VALUES ('$username', '$password', '$email', '$role')";
$result = $mysqli->query($query);

// Mengarahkan kembali ke halaman admin.php setelah menambahkan data
if ($result) {
    header('Location: admin.php');
    exit;
} else {
    echo "Gagal menambahkan data. Silakan coba lagi.";
}
?>
