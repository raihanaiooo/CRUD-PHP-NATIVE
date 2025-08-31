<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Data Mahasiswa</h1>

    <!-- Form Search -->
    <form method="get" action="">
        <input type="text" name="keyword" placeholder="Cari NIM/Nama">
        <button type="submit" class="button button-create">Cari</button>
    </form>

    <a href="/PHP/tambah.php" class="button button-create">+ Tambah Mahasiswa</a>

    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        <?php
        // search
        $where = "";
        if (isset($_GET['keyword']) && $_GET['keyword'] != "") {
            $keyword = mysqli_real_escape_string($conn, $_GET['keyword']);
            $where = "WHERE nim LIKE '%$keyword%' OR nama LIKE '%$keyword%'";
        }

        $sql = "SELECT * FROM mahasiswa $where ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        $no = 1;

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['umur']; ?></td>
                    <td>
                        <a href="/PHP/edit.php?id=<?= $row['id']; ?>" class="button button-edit">Edit</a>
                        <a href="/PHP/hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>

                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='5'>Data tidak ditemukan</td></tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
