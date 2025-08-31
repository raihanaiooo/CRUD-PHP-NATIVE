<?php
include "config.php";

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}

$id = (int) $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    die("Data tidak ditemukan.");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Detail Mahasiswa</h1>
    <table class="detail-table">
        <tr>
            <th>ID</th>
            <td><?= $data['id']; ?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><?= $data['nim']; ?></td>
        </tr>
        <tr>
            <th>Nama</th>
            <td><?= $data['nama']; ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><?= $data['umur']; ?></td>
        </tr>
    </table>
    <br>
    <a href="/PHP/tabel_mhs.php" class="button button-batal">Kembali</a>
</div>
</body>
</html>
