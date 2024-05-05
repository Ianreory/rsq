<?php
// Informasi koneksi database
$servername = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "sailor"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Sekarang Anda memiliki koneksi yang berhasil, Anda dapat menggunakan $conn untuk menjalankan query dan berinteraksi dengan database.
?>
