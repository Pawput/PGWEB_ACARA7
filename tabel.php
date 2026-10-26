<?php
// Menyimpan data dalam array
$kecamatan = array(
    "Gamping",
    "Depok",
    "Ngaglik",
    "Mlati"
);

$luas = array(29.25, 35.55, 38.52, 28.52);

$penduduk = array(95400, 128700, 91200, 80500);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Dinamis Kecamatan</title>
</head>
<body>
    <h3>Rekapitulasi Data Kecamatan</h3>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Kecamatan</th>
            <th>Luas (km²)</th>
            <th>Jumlah Penduduk</th>
        </tr>

        <?php
        for ($i = 0; $i < count($kecamatan); $i++) {
            echo "<tr>";
            echo "<td>" .
                htmlspecialchars($kecamatan[$i]) .
                "</td>";
            echo "<td>" .
                number_format($luas[$i], 2, ',', '.') .
                "</td>";
            echo "<td>" .
                number_format($penduduk[$i], 0, ',', '.') .
                "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>