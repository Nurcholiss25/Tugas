<?php
include "../config/koneksi.php";

$id_pengaduan = $_GET['id_pengaduan'];

$koneksi = new PDO("mysql:host=localhost;dbname=masyarakat", 'root','');
$query = $koneksi->query("DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");

if($query){
    header("location:index.php");
}
?>
<?php
$id_tanggapan = $_GET['id_tanggapan'];

$koneksi = new PDO("mysql:host=localhost;dbname=masyarakat", 'root','');
$query = $koneksi->query("DELETE FROM tanggapan WHERE id_tanggapan='$id_tanggapan'");

if($query){
    header("location:index.php");
}
?>