<?php

$player = [
    [
    "nama" => "Marcus Rashford",
    "no" => "10",
    "usia" => "26 tahun",
    "kebangsaan" => "Inggris",
    "posisi" => "Penyerang"
    ],
    [
    "nama" => "Diogo Dalot",
    "no" => "20",
    "usia" => "25 tahun",
    "kebangsaan" => "Portugal",
    "posisi" => "Bek Kanan"
    ],
    [
    "nama" => "Harry Maguire",
    "no" => "5",
    "usia" => "31 tahun",
    "kebangsaan" => "Inggris",
    "posisi" => "Bek Tengah"
    ],
    [
    "nama" => "Victor Lindelof",
    "no" => "2",
    "usia" => "29 tahun",
    "kebangsaan" => "Swedia",
    "posisi" => "Bek Tengah"
    ],
    [
    "nama" => "Luke Shaw",
    "no" => "23",
    "usia" => "28 tahun",
    "kebangsaan" => "Inggris",
    "posisi" => "Bek Kiri"
    ],
    [
    "nama" => "Kobie Mainoo",
    "no" => "37",
    "usia" => "18 tahun",
    "kebangsaan" => "Inggris",
    "posisi" => "Gelandang"
    ],
    [
    "nama" => "Mason Mount",
    "no" => "7",
    "usia" => "25 tahun",
    "kebangsaan" => "Inggris",
    "posisi" => "Gelandang"
    ],
    [
    "nama" => "Bruno Fernandes",
    "no" => "8",
    "usia" => "29 tahun",
    "kebangsaan" => "Portugal",
    "posisi" => "Gelandang"
    ],
    [
    "nama" => "Alejandro Garnacho",
    "no" => "17",
    "usia" => "19 tahun",
    "kebangsaan" => "Argentina",
    "posisi" => "Penyerang"
    ],
    [
    "nama" => "Hojlund",
    "no" => "11",
    "usia" => "21 tahun",
    "kebangsaan" => "Inggris",
    "posisi" => "Penyerang"
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemain ManUTD</title>
</head>
<body>

    <h3>Daftar Pemain Man UTD</h3>
    <?php foreach($player as $play) : ?>
        <ul>
            <li>Nama : <?= $play["nama"]; ?></li>
            <li>No Punggung : <?= $play["no"]; ?></li>
            <li>Usia : <?= $play["usia"]; ?></li>
            <li>kebangsaan : <?= $play["kebangsaan"]; ?></li>
            <li>Posisi : <?= $play["posisi"]; ?></li>
        </ul>
        <?php endforeach;?>
</body>
</html>