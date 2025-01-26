<?php
$mysqli = new mysqli("localhost","root","","skincare");
if($mysqli->connect_error){
    die("koneksi gagal :".$mysqli->connect_error);
}