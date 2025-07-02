<?php
$ns1 = ["id" => 1, "nim" => "04121992", "uts" => 90, "uas"=> 94, "tugas" => 90];
$ns2 = ["id" => 2, "nim" => "13101995", "uts" => 90, "uas"=> 85, "tugas" => 80];
$ns3 = ["id" => 3, "nim" => "30121995", "uts" => 88, "uas"=> 88, "tugas" => 85];
$ns4 = ["id" => 4, "nim" => "01091997", "uts" => 80, "uas"=> 90, "tugas" => 88];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_nilai as $ns) {
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$ns['nim'].'</td>';
                echo '<td>'.$ns['uts'].'</td>';
                echo '<td>'.$ns['uas'].'</td>';
                echo '<td>'.$ns['tugas'].'</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3; // Rata-rata
                echo '<td>'.number_format($nilai_akhir, 2, ',', '.').'</td>'; // Perbaikan di sini
                echo '</tr>';
                $nomor++;       
            }
            ?>
        </tbody>
    </table>
</body>
</html>