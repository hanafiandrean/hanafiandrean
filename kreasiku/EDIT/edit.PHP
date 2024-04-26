<?php
// Periksa apakah ada parameter ID yang diterima
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Ambil data pengguna dari database
    $mysqli = new mysqli('localhost', 'root', '', 'kreasiku_daabaselekkk');
    $query = "SELECT * FROM user WHERE ID_user = $id";
    $result = $mysqli->query($query);
    $data = $result->fetch_assoc();

    // Jika form disubmit
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Lakukan validasi dan simpan perubahan ke database
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // Perbarui data pengguna di database
        $update_query = "UPDATE user SET username='$username', password='$password', email='$email' WHERE ID_user=$id";
        if ($mysqli->query($update_query) === TRUE) {
            // Jika berhasil, redirect ke halaman admin
            header("Location: admin.php");
            exit;
        } else {
            echo "Error: " . $mysqli->error;
        }
    }
} else {
    echo "ID pengguna tidak ditemukan.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengguna</title>
    <link rel="stylesheet" href="edit.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Data Pengguna</h2>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['ID_user']; ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $data['username']; ?>">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $data['password']; ?>">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $data['email']; ?>">
            <input type="submit" value="Simpan Perubahan">
        </form>
    </div>
</body>
</html>
