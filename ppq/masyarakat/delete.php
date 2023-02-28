<?php
include "../config/koneksi.php";

$id_pengaduan = $_GET['id_pengaduan'];

$koneksi = new PDO("mysql:host=localhost;dbname=masyarakat", 'root','');
$query = $koneksi->query("DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");

if($query){
    header("location:index.php");
}