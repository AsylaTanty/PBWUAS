<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "warung_makan_kebumen_1";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
