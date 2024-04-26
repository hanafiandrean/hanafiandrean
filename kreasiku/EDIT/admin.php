<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="admin.css">

</head>
<body>
    <table>
        

        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    
    <?php
    $nomor=1;
    $mysqli = new mysqli('localhost', 'root', '', 'kreasiku_daabaselekkk');
    $query_mysql=mysqli_query($mysqli, "SELECT * FROM user") or die (mysqli_error());
    while($data= mysqli_fetch_array($query_mysql)){
    ?>
    <tr>
        <td><?php echo $nomor++;?></td>
        <td><?php echo $data["username"];?></td>
        <td><?php echo $data["password"];?></td>
        <td><?php echo $data["email"];?></td>
        <td><?php echo $data["role"];?></td>
        <td class="aksi">
            <a href='delete.php?id=<?php echo $data["ID_user"];?>'>Hapus</a>
            <a href='edit.php?id=<?php echo $data["ID_user"];?>'>Edit</a>
        </td>
    </tr>
    <?php }?>
    </table>
    <a href="index.php"><button class="back-btn">Kembali</button></a>
        <a href="tambah.php"><button class="add-btn">Tambah Data Pengguna Baru</button></a>
    </div>
</body>
</html>
