<?php
$servername = "localhost";
$username = "root"; // username default XAMPP adalah 'root'
$password = ""; // password default XAMPP kosong
$dbname = "my_website";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
