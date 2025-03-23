<?php

$stokmotor= [
    [
    "Nama" => "R15",
    "jenis Motor" => "sport",
    "Jumlah" => "30 unit",
    "Ukuran cc" => "150cc",
    "Gambar" => "r15.jpg"
    ],

    [
    "Nama" => "Mx king",
    "jenis Motor" => "Bebek sport",
    "Jumlah" => "50 unit",
    "Ukuran cc" => "150cc",
    "Gambar" => "mxking.jpg"
    ],

    [
        "Nama" => "Beat",
        "jenis Motor" => "Matic",
        "Jumlah" => "100 unit",
        "Ukuran cc" => "125cc",
        "Gambar" => "beat.jpeg"
    ],
    
    [
        "Nama" => "Aerox",
        "jenis Motor" => "matic sport",
        "Jumlah" => "75 unit",
        "Ukuran cc" => "150cc",
        "Gambar" => "aerox.jpeg"
    ],

    [
        "Nama" => "N-max",
        "jenis Motor" => "Matic sport",
        "Jumlah" => "80 unit",
        "Ukuran cc" => "150cc",
        "Gambar" => "nmax.jpeg"
    ],

    [
        "Nama" => "CBR 150",
        "jenis Motor" => "sport",
        "Jumlah" => "50 unit",
        "Ukuran cc" => "150cc",
        "Gambar" => "cbr150.jpeg"
    ],

    [
        "Nama" => "zx-25R",
        "jenis Motor" => "sport",
        "Jumlah" => "20 unit",
        "Ukuran cc" => "250cc",
        "Gambar" => "zx25r.jpeg"
    ],

    [
        "Nama" => "R25",
        "jenis Motor" => "sport",
        "Jumlah" => "30 unit",
        "Ukuran cc" => "250cc",
        "Gambar" => "r25.jpg"
    ],

    [
        "Nama" => "CBR-250RR",
        "jenis Motor" => "sport",
        "Jumlah" => "60 unit",
        "Ukuran cc" => "250cc",
        "Gambar" => "cbr250.jpeg"
    ],

    [
        "Nama" => "Gsx-150R",
        "jenis Motor" => "sport",
        "Jumlah" => "55 unit",
        "Ukuran cc" => "150cc",
        "Gambar" => "gsx150.jpeg"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar motor</title>
</head>
<body>
    <h1>Daftar Stok Motor Di Dealer </h1>
    <?php foreach( $stokmotor as $stm) : ?>
    <ul>
        <li>
            <img src="IMG/<?= $stm["Gambar"]; ?>">
        </li>
        <li>Nama Motor : <?= $stm["Nama"]; ?></li>
        <li>jenis Motor: <?= $stm["jenis Motor"]; ?></li>
        <li>Jumlah : <?= $stm["Jumlah"]; ?></li>
        <li>Ukuran cc : <?= $stm["Ukuran cc"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>