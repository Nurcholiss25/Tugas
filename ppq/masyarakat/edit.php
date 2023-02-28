<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../asset/css/bootstrap.min.css">
</head>
<body>
<div>
  <div class="container">
    <div class="row">
        <div class="col-md-12" mt-3>
            <p>Selamat Datang <?php echo $_SESSION['nama'] ?></p>
            <h3>Edit Data</h3>
            <div class="card">
                <div class="card-header">
                    RIWAYAT PENGADUAN
                    <div class="card-body">
                        <table class="table table-striped">
<form action="" method="POST">
                <div class="mb-3">
</div>
<label  class="form-label">Judul Laporan</label>
  <input type="text" class="form-control" name="judul_laporan" placeholder="Masukkan Judul Laporan..." required>
<label  class="form-label">Isi Laporan</label>
<textarea class="form-control" name="isi_laporan" placeholder="Masukkan Isi Laporan..." required></textarea>
<label  class="form-label">Foto</label>
<input type="file" class="form-control" name="foto" required>

              <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>              
          </div>
</form>
</body>
</html>
<?php
include '../config/koneksi.php';
if (isset($_POST['kirim'])) {
  $id_pengaduan = $_GET['id_pengaduan'];

  $judul_laporan = $_POST['judul_laporan'];
  $isi_laporan = $_POST['isi_laporan'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, 'foto/' . $nama_foto);
    $koneksi = new PDO('mysql:host=localhost;dbname=masyarakat','root','');
    $query = $koneksi->query("UPDATE pengaduan SET judul_laporan='$judul_laporan',isi_laporan='$isi_laporan',foto='$foto' WHERE id_pengaduan='$id_pengaduan'");
    $data = $query->fetch();

    echo "<script>
            alert('Data Berhasil Di Kirim!!');
            window.location='index.php';
            </script>
            ";
}
