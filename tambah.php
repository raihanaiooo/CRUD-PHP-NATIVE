    <?php
    include "config.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nim  = $_POST['nim'];
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];

        mysqli_query($conn, "INSERT INTO mahasiswa (nim, nama, umur) VALUES ('$nim', '$nama', '$umur')");
        header("Location: /PHP/tabel_mhs.php");
exit;

    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1 class="title">Tambah Mahasiswa</h1>

    <div class="form-container">
        <form method="post">
            <label>NIM:</label>
            <input type="text" name="nim" class="input-text" required><br>

            <label>Nama:</label>
            <input type="text" name="nama" class="input-text" required><br>

            <label>Umur:</label>
            <input type="number" name="umur" class="input-text" required><br>

        <button type="submit" class="btn">Simpan</button>
        <a href="/PHP/tabel_mhs.php" class="btn-cancel">Batal</a>

        </form>
    </div>
</body>
</html>
