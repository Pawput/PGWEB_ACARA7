<?php
// Perulangan while
echo "<strong>Perulangan while</strong><br>";

$i = 1;
while ($i <= 4) {
    echo "Pengamatan ke-" . $i . "<br>";
    $i++;
}

// Perulangan for
echo "<br><strong>Perulangan for</strong><br>";

for ($angka = 2; $angka <= 8; $angka += 2) {
    echo "Angka: " . $angka . "<br>";
}

// Perulangan foreach
echo "<br><strong>Perulangan foreach</strong><br>";

$wilayah = array(
    "Sleman",
    "Bantul",
    "Kulon Progo",
    "Gunungkidul"
);

foreach ($wilayah as $namaWilayah) {
    echo $namaWilayah . "<br>";
}
?>