<?php
require 'vendor/autoload.php'; // Pastikan Anda telah menginstal Cloudinary SDK

\Cloudinary::config(array(
    "cloud_name" => "dn8aufq3b",
    "api_key" => "426317352995826",
    "api_secret" => "KUFwVPyK6BYirh0_DtFa1sX7vhk"
));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kategori = $_POST['kategori'];
    $pesan = $_POST['pesan'];

    // Upload file jika ada
    if ($_FILES['foto']['tmp_name']) {
        $foto = \Cloudinary\Uploader::upload($_FILES['foto']['tmp_name']);
        $foto_url = $foto['secure_url'];
    }

    // Simpan data ke database atau kirim email (jika diperlukan)
    echo "Pengajuan keluhan Anda telah diterima!";
}
?>
