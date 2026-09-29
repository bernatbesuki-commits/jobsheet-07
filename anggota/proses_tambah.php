<?php
session_start();

// Menerima data dari form
$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$no_hp = trim($_POST['no_hp'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');

// Validasi data
$errors = [];

if ($nama === '') {
    $errors[] = "Nama wajib diisi.";
}

if ($email === '') {
    $errors[] = "Email wajib diisi.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid.";
}

if ($no_hp === '') {
    $errors[] = "Nomor HP wajib diisi.";
} elseif (!is_numeric($no_hp)) {
    $errors[] = "Nomor HP hanya boleh angka.";
}

if ($alamat === '') {
    $errors[] = "Alamat wajib diisi.";
}

// Jika ada error
if (!empty($errors)) {
    $_SESSION['flash'] = ['type' => 'error', 'pesan' => implode(' ', $errors)];
    header('Location: tambah.php');
    exit;
}

// Jika valid, simpan ke session
if (!isset($_SESSION['anggota'])) {
    $_SESSION['anggota'] = [];
}

$_SESSION['anggota'][] = [
    'nama' => $nama,
    'email' => $email,
    'no_hp' => $no_hp,
    'alamat' => $alamat,
    'tgl_daftar' => date('d-m-Y H:i:s'),
];

$_SESSION['flash'] = ['type' => 'success', 'pesan' => 'Anggota berhasil ditambahkan.'];
header('Location: list.php');
exit;
?>
