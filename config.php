<?php
$host = "localhost"; // atau IP server database
$user = "root"; // Username MySQL (default: root)
$password = ""; // Password MySQL (kosong jika pakai XAMPP)
$dbname = "jiha_beads"; // Nama database

// Koneksi ke MySQL
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
