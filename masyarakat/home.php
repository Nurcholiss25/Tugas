<div class="container">
    <div class="row">
        <div class="col-md-12" mt-3>
            <p>Selamat Datang <?php echo $_SESSION['nama']?></p>
            <div class="card">
            <div class="card-header">
                FORM PENGADUAN
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                <th>NO</th>
                <th>JUDUL</th>
                <th>ISI</th>
                <th>FOTO</th>
                <th>STATUS</th>
                <th>AKSI</th>
            </tr>
                    </thead>
                </table>
                <form action="" method="POST">
                <div class="mb-3">
</div>
<div>
  <label  class="form-label">Judul Laporan</label>
    <input type="text" class="form-control" name="judul_laporan" placeholder="Masukkan Judul Laporan..." required>
  <label  class="form-label">Isi Laporan</label>
  <textarea class="form-control" name="laporan" placeholder="Masukkan Isi Laporan..." required></textarea>
  <label  class="form-label">Foto</label>
  <input type="file" class="form-control" name="foto" required>
  
                <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
            </div>
            </form>
            <?php
            include '../config/koneksi.php';
            $tanggal = date("y-m-d");
            if(isset($_POST['kirim'])){
            $nik = $_SESSION['nik'];
            $judul_laporan = $_POST['judul_laporan'];
            $laporan = $_POST['laporan'];
            $status = 0;
            $foto = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];
            $lokasi = '../asset/img/';
            $nama_foto = rand(0,999).'-'.$foto;

            move_uploaded_file($tmp, $lokasi.$nama_foto);
            $query = mysqli_query($koneksi, "INSERT INTO pengaduan VALUES ('','$tanggal','$nik','$judul_laporan','$laporan',
            '$nama_foto','$status')");
            
            echo "<script>
            alert('Data Berhasil Di Kirim!!');
            window.location='index.php';
            </script>
            ";
          }
          
            ?>
            </div>
            </div>
        </div>
     </div>
</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3"></div>
    </div>
</div>