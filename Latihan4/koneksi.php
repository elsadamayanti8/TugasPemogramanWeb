<?php
$mysqli = new mysqli("localhost", "root", "", "Latihan4"); 

if ($mysqli->connect_error) { 
 die("Koneksi gagal: " . $mysqli->connect_error); 
} else {
 echo "Koneksi berhasil";
}
?>