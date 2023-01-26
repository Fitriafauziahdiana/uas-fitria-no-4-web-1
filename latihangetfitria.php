<?php
$barang = [
    ["nama" => "Dry Food Coucou",
    "jenis" => "Pakan Hewan",
    "harga" => "40.000",
    "stock" =>"Tersedia",
    "gambar" => "whatsapp.png"
],
["nama" =>"Whiskas", 
"jenis" => "Pakan Hewan",
"harga" => "55.000",
"stock" => "Tidak Tersedia",
"gambar" => "youtube.png",
]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Get</title>
</head>
<body>
    <h1>Daftar Barang Pet Shop</h1>
    <ul>
    <?php foreach($barang as $brg) :?>
        <li>
            <a href="latihan3fitria.php?nama=<?= $brg["nama"];?>&jenis=<?= $brg["jenis"];?>&harga=<?= $brg["harga"];?>&stock=<?= $brg["stock"];?>&gambar=<?= $brg["gambar"];?>">
            <?= $brg["nama"];?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>