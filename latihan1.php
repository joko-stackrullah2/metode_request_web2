<?php
$mahasiswa = [
    [
        "nim" => "21520017",
        "nama" => "Supardi",
        "jurusan" => "Sistem Informasi / Teknologi Informasi",
        "email" => "Supardi123@gmail.com",
        "gambar" => "test1.png"
    ],
    [
        "nim" => "21520020",
        "nama" => "Supardi Lagi",
        "jurusan" => "Sistem Informasi / Teknologi Informasi",
        "email" => "Supardi432@gmail.com",
        "gambar" => "test2.jpg"
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>
    <body>
		<h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?
                    nama=<?= $mhs["nama"];?>
                    &nim=<?= $mhs["nim"];?>
                    &email=<?= $mhs["email"];?>
                    &jurusan=<?= $mhs["jurusan"];?>
                    &gambar=<?= $mhs["gambar"];?>
                    "><?= $mhs["nama"];?></a>
            </li>
            <?php endforeach;?>
        </ul>
	</body>
</html>