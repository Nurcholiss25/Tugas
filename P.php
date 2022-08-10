<?php

$id = $_GET['id'];
$nama = $_GET['nama'];
$asal = $_GET['asal'];

$database = new pdo ("mysql:host=localhost;dbname=ppbd","root","");
$query = $database->query("insert into calon_siswa values('$id','$nama','$asal')");