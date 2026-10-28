<?php
declare(strict_types=1);
require_once __DIR__ . '/Mahasiswa.php';
require_once __DIR__ . '/Latihan.php';
require_once __DIR__ . '/Buku.php';

define('DEMO_LIFECYCLE', true);
header('Content-Type: text/plain; charset=utf-8');

// ==========================================
// NOMOR 1: CONSTRUCTOR
// ==========================================

echo "=== NOMOR 1: CONSTRUCTOR ===\n";

// Objek pertama: fakultas tidak diisi
$m1 = new Mahasiswa(
    '123',
    'Alya',
    'Teknik Informatika',
    'SMA 1',
    3,
    'Membaca',
    'Islam'
);

// Objek kedua: fakultas diisi
$m2 = new Mahasiswa(
    '124',
    'Budi',
    'Informatika',
    'SMA 2',
    3,
    'Menulis',
    'Islam',
    'Fakultas Sains dan Teknologi'
);

echo "Mahasiswa 1: " . $m1->nama . "\n";
echo "Fakultas: " . $m1->fakultas . "\n\n";

echo "Mahasiswa 2: " . $m2->nama . "\n";
echo "Fakultas: " . $m2->fakultas . "\n";

// Objek untuk pengujian __call()
$m = new Mahasiswa(
    '123',
    'Alya',
    'Informatika',
    'SMA 1',
    3,
    'Membaca',
    'Islam'
);


// ==========================================
// NOMOR 2: CLASS BUKU
// ==========================================

echo "\n\n=== NOMOR 2: CLASS BUKU ===\n";

$buku1 = new Buku(
    'Laskar Pelangi',
    'Andrea Hirata',
    2005
);

$buku2 = new Buku(
    'Bumi',
    'Tere Liye',
    2014
);

$buku3 = new Buku(
    'Negeri 5 Menara',
    'Ahmad Fuadi',
    2009
);

$buku1->tampilInfo();
$buku2->tampilInfo();
$buku3->tampilInfo();


// ==========================================
// NOMOR 3: DESTRUCTOR DAN ALIAS OBJECT
// ==========================================

echo "\n=== NOMOR 3: DESTRUCTOR ===\n";

$buku4 = new Buku(
    'Pemograman PHP',
    'Andi',
    2024
);

unset($buku4);

echo "Buku4 sudah di-unset\n";

echo "\n=== UJI ALIAS OBJECT ===\n";

$buku5 = new Buku(
    'Belajar OOP',
    'Sinta',
    2025
);

$alias = $buku5;

unset($buku5);

echo "Buku5 sudah di-unset\n";
echo "Judul melalui alias: " . $alias->judul . "\n";

unset($alias);

echo "Alias sudah di-unset\n";


// ==========================================
// NOMOR 4: OVERLOADING ATRIBUT
// ==========================================

echo "\n=== NOMOR 4: OVERLOADING ATRIBUT ===\n";

$latihan = new Latihan();

$latihan->hobi = 'Membaca';

echo "Hobi: " . $latihan->hobi . "\n";

echo isset($latihan->hobi)
    ? "Hobi tersedia\n"
    : "Hobi tidak tersedia\n";

unset($latihan->hobi);

echo isset($latihan->hobi)
    ? "Hobi masih tersedia\n"
    : "Hobi sudah dihapus\n";


// ==========================================
// NOMOR 5: OVERLOADING METHOD (__call)
// ==========================================

echo "\n=== NOMOR 5: OVERLOADING METHOD ===\n";

echo $m->profilSingkat() . "\n";

try {
    $m->methodTidakAda();
} catch (BadMethodCallException $e) {
    echo "Exception tertangkap: "
        . $e->getMessage() . "\n";
}

echo "\n=== PROGRAM SELESAI ===\n";
