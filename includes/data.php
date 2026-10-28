<?php
// ============================================
// DATA TOKO (sementara disimpan di array)
// Pada Pertemuan 7, data ini akan dipindah ke database MySQL.
// ============================================

$namaToko = "Lokal Wear Bali";

// Array multidimensi: kode produk => data produk (array asosiatif)
$produk = [
    "P001" => [
        "nama"     => "Kaos Oversize Cotton Combed 24s",
        "kategori" => "Atasan",
        "harga"    => 95000,
        "diskon"   => 10, // dalam persen
        "stok"     => 30,
        "ikon"     => "👕",
    ],
    "P002" => [
        "nama"     => "Kemeja Flannel Kotak-Kotak",
        "kategori" => "Atasan",
        "harga"    => 185000,
        "diskon"   => 0,
        "stok"     => 3,
        "ikon"     => "👔",
    ],
    "P003" => [
        "nama"     => "Celana Chino Slim Fit",
        "kategori" => "Bawahan",
        "harga"    => 225000,
        "diskon"   => 15,
        "stok"     => 18,
        "ikon"     => "👖",
    ],
    "P004" => [
        "nama"     => "Celana Pendek Kargo",
        "kategori" => "Bawahan",
        "harga"    => 160000,
        "diskon"   => 5,
        "stok"     => 0,
        "ikon"     => "🩳",
    ],
    "P005" => [
        "nama"     => "Jaket Denim Washed",
        "kategori" => "Outerwear",
        "harga"    => 350000,
        "diskon"   => 0,
        "stok"     => 12,
        "ikon"     => "🧥",
    ],
    "P006" => [
        "nama"     => "Hoodie Fleece Polos",
        "kategori" => "Outerwear",
        "harga"    => 275000,
        "diskon"   => 20,
        "stok"     => 4,
        "ikon"     => "🧶",
    ],
];

// Contoh pesanan pelanggan: kode produk => jumlah yang dibeli
$pesanan = [
    "P001" => 2,
    "P002" => 1,
    "P006" => 1,
];
