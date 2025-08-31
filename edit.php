<?php
include "config.php";
$id = $_GET['id'];
$id = (int) $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nim  = $_POST['nim'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama='$nama', umur='$umur' WHERE id=$id");
    header("Location: /PHP/tabel_mhs.php");
exit;

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Edit Mahasiswa</h1>

    <form method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="<?= $data['nim'] ?>" required>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?= $data['nama'] ?>" required>

        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" value="<?= $data['umur'] ?>" required>

        <div style="margin-top: 15px;">
            <button type="submit" class="button button-create">Update</button>
            <a href="/PHP/tabel_mhs.php" class="button button-batal">Batal</a>
        </div>
    </form>
</div>
</body>
</html>
