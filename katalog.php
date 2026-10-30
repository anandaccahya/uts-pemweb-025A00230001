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
            <h1>KATALOG JAJANAN PASAR</h1>
            <p>Temukan berbagai pilihan jajanan pasar dengan cita rasa khas, mulai dari makanan manis hingga gurih yang cocok untuk menemani berbagai suasana.</p>
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

        <div class="ringkasan">

            <div class="ringkasan-item">
                <strong><?= htmlspecialchars((string) count($jajanan)) ?></strong>
                <span>Jenis Jajanan</span>
            </div>

            <div class="ringkasan-item">
                <strong>
                    <?= htmlspecialchars((string) array_sum(array_column($jajanan, "stok"))) ?>
                </strong>
                <span>Total Stok</span>
            </div>

            <div class="ringkasan-item">
                <strong>
                    <?= htmlspecialchars((string) count(array_unique(array_column($jajanan, "kategori")))) ?>
                </strong>
                <span>Kategori</span>
            </div>

        </div>

            <div class="katalog">
                <?php foreach ($jajanan as $item): ?>
                    <article class="kartu">
                        <img 
                            src="assets/<?= htmlspecialchars($item["gambar"]) ?>" 
                            alt="<?= htmlspecialchars($item["nama"]) ?>"
                        >
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