<?php 
include 'apps.php';

$id = $_GET['id'] ?? 0;

if(!isset($apps[$id])){
    echo "Produk tidak ditemukan!";
    exit;
}

$app = $apps[$id];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $app['nama']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1><?= $app['nama']; ?></h1>
</header>

<div class="detail-container">
    <img src="<?= $app['gambar']; ?>" alt="<?= $app['nama']; ?>">
    <div class="detail-info">
        <h2>Rp <?= number_format($app['harga'],0,',','.'); ?></h2>
        <p><?= $app['deskripsi']; ?></p>
        <a href="index.php" class="btn">Kembali</a>
        <a href="#" class="btn buy">Beli Sekarang</a>
    </div>
</div>

</body>
</html>