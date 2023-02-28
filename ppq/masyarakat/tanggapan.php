<?php
include '../config/koneksi.php';
if(!empty($_GET['id_pengaduan'])){
    $id=$_GET['id_pengaduan'];
    $query = mysqli_query($koneksi, "SELECT a.*, b.* FROM pengaduan a INNER JOIN tanggapan b ON a.id_pengaduan=b.id_pengaduan WHERE b.id_pengaduan=$id");
    $data=mysqli_fetch_array($query);

?>
<div class="container">
    <div class="row">
        <div class="col-md-12" mt-3>
            <p>Selamat Datang</p>
            <div class="card">
            <div class="card-header">
                Tanggapan Anda
            <div class="card-body">
                <form action="" method="POST">
                <div class="mb-3">
</div>
<div>
  <label  class="form-label">Judul Laporan</label>
    <input type="text" class="form-control" value="<?php echo $data['judul_laporan'];?>" readonly>
  <label  class="form-label">Isi Laporan</label>
  <textarea class="form-control" value="" readonly><?php echo $data['isi_laporan'];?></textarea>
  <label  class="form-label">Foto</label>
  <img src="../asset/img/<?php echo $data['foto'];?>" class="form-control" style="width: 150px">
  <label  class="form-label">Tanggapan</label>
  <textarea class="form-control" readonly><?php echo $data['tanggapan'];?></textarea>
  <br>
  <a href="index.php" class="btn btn-primary">KEMBALI</a>
            </div>
            </form>
            </div>
            </div>
        </div>
     </div>
</div>
        </div>
    </div>
    <?php } else {
        echo "Halaman Tidak Tersedia";
    }?>