<?php
declare(strict_types=1);
function formatHarga(int $harga): string
{
    return "Rp " . number_format($harga, 0, ",", ".");
}
function statusStok(int $stok): string
{
    if ($stok <= 5) {
        return "Stok sedikit";
    }
    return "Stok tersedia";
}