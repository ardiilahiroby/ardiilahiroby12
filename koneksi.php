<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_ardiilahiroby_d1a240034"; // Ganti dengan nama database kamu

// Perbaikan: hapus tanda kutip ganda ganda ganda dan parameter password
$db = mysqli_connect($host, $user, $password, $database);

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
