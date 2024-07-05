

<?php
// KONEKSI KE DATABASE
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "aplikasi_1eb"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// cek koneksi
if ($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
?>