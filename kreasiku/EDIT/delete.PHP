<?php
$mysqli = new mysqli('localhost', 'root', '', 'kreasiku_daabaselekkk');

// Periksa apakah ada parameter ID yang diterima
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buat kueri DELETE
    $query = "DELETE FROM user WHERE ID_user = $id";

    // Jalankan kueri DELETE
    if($mysqli->query($query) === TRUE) {
        // Jika berhasil dihapus, redirect kembali ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        echo "Error: " . $mysqli->error;
    }
}

$mysqli->close();
?>
