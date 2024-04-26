<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengguna Baru</title>
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Data Pengguna Baru</h2>
        <form action="proses_tambah.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="role">Role:</label>
            <select name="role" id="role" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <input type="submit" value="Tambah Data">
        </form>
        <a href="admin.php" class="button">Kembali</a>
    </div>
</body>
</html>
