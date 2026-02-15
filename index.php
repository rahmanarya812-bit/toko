<?php include 'apps.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Toko Aplikasi Premium</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Toko Aplikasi Premium</h1>
</header>

<div class="container">
    <?php foreach($apps as $id => $app): ?>
        <div class="card">
            <img src="<?= $app['gambar']; ?>" alt="<?= $app['nama']; ?>">
            <h3><?= $app['nama']; ?></h3>
            <p>Rp <?= number_format($app['harga'],0,',','.'); ?></p>
            <a href="detail.php?id=<?= $id; ?>" class="btn">Lihat Detail</a>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>