<?php
$mahasiswa = [
    ["nama" => "Raihana", "umur" => 20],
    ["nama" => "Aisha", "umur" => 21],
    ["nama" => "Dewi", "umur" => 19],
];

echo "<h2>Tabel Mahasiswa Dinamis</h2>";
echo "<table border='1' cellpadding='5'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
        </tr>";

$no = 1;
foreach($mahasiswa as $m) {
    echo "<tr>
            <td>{$no}</td>
            <td>{$m['nama']}</td>
            <td>{$m['umur']}</td>
          </tr>";
    $no++;
}

echo "</table>";
?>
