<?php
// cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"])||
    !isset($_GET["jenis"])||
    !isset($_GET["harga"])||
    !isset($_GET["stock"])||
    !isset($_GET["gambar"])
){
    // redirect
    header("Location: latihangetfitria.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>"></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["jenis"];?></li>
        <li><?= $_GET["harga"];?></li>
        <li><?= $_GET["stock"];?></li>
    </ul>
    <a href="latihangetfitria.php">Daftar Produk</a>
</body>
</html>