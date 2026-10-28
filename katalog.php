<?php
declare(strict_types=1);
require_once 'data.php';
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Jajanan Pasar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="container">
            <h1>Katalog Jajanan Pasar</h1>
            <p>Berbagai pilihan jajanan tradisional Indonesia.</p>
        </div>
    </header>

    <nav>
        <div class="container">
            <a href="index.php">Beranda</a>
            <a href="katalog.php">Katalog</a>
        </div>
    </nav>

    <main class="container">

        <section>
            <h2>Daftar Jajanan</h2>
            <div class="katalog">
                <?php foreach ($jajanan as $item): ?>
                    <article class="kartu">
                        <h3>
                            <?= htmlspecialchars($item["nama"]) ?>
                        </h3>
                        <p>
                            <strong>Kategori:</strong>
                            <?= htmlspecialchars($item["kategori"]) ?>
                        </p>
                        <p>
                            <strong>Harga:</strong>
                            <?= htmlspecialchars(formatHarga($item["harga"])) ?>
                        </p>
                        <p>
                            <strong>Stok:</strong>
                            <?= htmlspecialchars((string) $item["stok"]) ?>
                            <?= htmlspecialchars($item["satuan"]) ?>
                        </p>
                        <p>
                            <strong>Status:</strong>
                            <?= htmlspecialchars(statusStok($item["stok"])) ?>
                        </p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2026 Katalog Jajanan Pasar</p>
        </div>
    </footer>

</body>
</html>