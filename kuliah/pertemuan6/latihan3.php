<?php
//$mahasiswa = [
//    ["ega mahendra","213040057","mahendraega8@gmail.com","teknik informatika"],
//    ["dody ferdiansyah","043040023","egamahendra654@gmail.com","teknik industri"]
//];

//array associative
//definisinya seperti array numerik, keuali
//key- adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "Nama" => "Ega Mahendra",
    "Nrp" => "243040057",
    "Email" => "mahendraega8@gmail.com",
    "Jurusan" => "Teknik informatika",
    "Gambar" => "ega.jpg"
    ],

    [
    "Nama" => "Dody ferdinsyah",
    "Nrp" => "033040001",
    "Email" => "dody8@gmail.com",
    "Jurusan" => "Teknik industri",
    "Gambar" => "ega.jpg"
    ]
    
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="IMG/<?= $mhs["Gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["Nama"]; ?></li>
        <li>Nrp : <?= $mhs["Nrp"]; ?></li>
        <li>Email : <?= $mhs["Email"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>