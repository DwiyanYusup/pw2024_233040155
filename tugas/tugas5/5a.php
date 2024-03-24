<?php
$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "043040023",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Foto Pak Sandhika.jpeg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "033040001",
        "email" => "doddy@unpas.ac.id",
        "jurusan" => "Teknik Industri",
        "gambar" => "Fotodefault.jpg"
    ],
    [
        "nama" => "Dwiyan Yusup Rayaka",
        "nrp" => "233040155",
        "email" => "dwiyan.233040155@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fotodefault.jpg"
    ],
    [
        "nama" => "Mahasiswa 4",
        "nrp" => "233040004",
        "email" => "mahasiswa4@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fotodefault.jpg"
    ],
    [
        "nama" => "Mahasiswa 5",
        "nrp" => "233040005",
        "email" => "mahasiswa5@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fotodefault.jpg"
    ],
    [
        "nama" => "Mahasiswa 6",
        "nrp" => "233040006",
        "email" => "mahasisw6@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fotodefault.jpg"
    ],
    [
        "nama" => "Mahasiswa 7",
        "nrp" => "233040007",
        "email" => "mahasiswa7@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fotodefault.jpg"
    ],
    [
        "nama" => "Mahasiswa 8",
        "nrp" => "233040008",
        "email" => "mahasiswa8@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fotodefault.jpg"
    ],
    [
        "nama" => "Mahasiswa 9",
        "nrp" => "233040009",
        "email" => "mahasiswa9@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fotodefault.jpg"
    ],
    [
        "nama" => "Mahasiswa 10",
        "nrp" => "233040010",
        "email" => "mahasiswa10@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fotodefault.jpg"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        img {
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>