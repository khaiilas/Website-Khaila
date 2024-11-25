<?php
$host = "localhost"; // Host server database
$user = "root";      // Username phpMyAdmin (default: root)
$password = "";      // Password phpMyAdmin (default kosong)
$dbname = "e-commerce"; // Nama database

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>
