<?php
echo "<h2>Instruksi Pemilihan (if, else, switch)</h2>";

// Contoh if-else
$nilai = 85;

if ($nilai >= 90) {
    echo "Nilai A<br>";
} elseif ($nilai >= 75) {
    echo "Nilai B<br>";
} else {
    echo "Nilai C<br>";
}

// Contoh switch
$hari = date("l");

switch ($hari) {
    case "Monday":
        echo "Hari ini Senin<br>";
        break;
    case "Tuesday":
        echo "Hari ini Selasa<br>";
        break;
    case "Wednesday":
        echo "Hari ini Rabu<br>";
        break;
    case "Thursday":
        echo "Hari ini Kamis<br>";
        break;
    case "Friday":
        echo "Hari ini Jumat<br>";
        break;
    default:
        echo "Weekend atau hari tidak diketahui<br>";
        break;
}
?>
