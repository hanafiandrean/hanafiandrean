<?php
session_start();

// Simulasi data pengguna (bisa diganti dengan data dari database)
$users = [
    'user' => [
        'password' => 'userpass',
        'redirect' => 'kreasiku_index.php' // Halaman untuk pengguna biasa
    ],
    'admin' => [
        'password' => 'adminpass',
        'redirect' => 'admin.php' // Halaman untuk admin
    ]
];

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah pengguna ada dalam simulasi data
    if(isset($users[$username]) && $users[$username]['password'] === $password) {
        // Simpan informasi pengguna ke dalam sesi
        $_SESSION['username'] = $username;
        // Arahkan ke halaman yang sesuai berdasarkan peran
        header('Location: ' . $users[$username]['redirect']);
        exit;
    } else {
        // Jika data login tidak valid, kembali ke halaman login dengan pesan error
        header('Location: halamanlogin.php?error=1');
        exit;
    }
}
?>
