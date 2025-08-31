<?php
echo "<h2>Instruksi Pengulangan (for, while, foreach)</h2>";

// 1. For
echo "<b>Perulangan dengan for:</b><br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i <br>";
}

// 2. While
echo "<br><b>Perulangan dengan while:</b><br>";
$j = 1;
while ($j <= 5) {
    echo "Perulangan ke-$j <br>";
    $j++;
}

// 3. Foreach
echo "<br><b>Perulangan dengan foreach:</b><br>";
$mahasiswa = ["Raihana", "Aisha", "Dewi"];
foreach ($mahasiswa as $nama) {
    echo "Mahasiswa: $nama <br>";
}
?>
