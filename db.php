<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_wonder";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
