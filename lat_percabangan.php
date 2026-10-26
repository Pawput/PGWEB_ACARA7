<?php
// Menentukan status berdasarkan nilai dan kehadiran
$nilai = 84;
$kehadiran = 90;

if ($nilai >= 80 && $kehadiran >= 75) {
    echo "Status: Lulus dengan predikat baik<br>";
} elseif ($nilai >= 60 && $kehadiran >= 75) {
    echo "Status: Lulus dengan perbaikan nilai<br>";
} else {
    echo "Status: Belum lulus<br>";
}

// Contoh operator logika OR
if ($nilai > 70 || $kehadiran == 100) {
    echo "Peserta memenuhi salah satu kriteria tambahan.";
}
?>