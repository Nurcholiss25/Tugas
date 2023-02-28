<div class="row mt-3">
     <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header">
                REGISTER
            <div class="card-body">
                <form action="" method="POST">
                <div class="mb-3">
</div>
<div>
    <label  class="form-label">NIK</label>
    <input type="number" class="form-control" name="nik" placeholder="Masukkan Nik..." required>
  <label  class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama..." required>
  <label  class="form-label">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Masukkan Username..." required>
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Masukkan Password..." required>
  <label  class="form-label">No. Telp</label>
    <input type="number" class="form-control" name="telp" placeholder="Masukkan no.telp..." required>
    <div>
            <div class="card-footer">
                <button type="submit" name="kirim" class="btn btn-primary">DAFTAR</button>
                <a href="index.php?page=login" class="m-3">Sudah Punya Akun?</a>
            </div>
            </form>
            </div>
            </div>
        </div>
     </div>
</div>
<?php
include 'config/koneksi.php';
if (isset($_POST['kirim'])){
     $nik = $_POST['nik'];
     $nama = $_POST['nama'];
     $username = $_POST['username'];
     $password = $_POST['password']; 
     $telp = $_POST['telp']; 
     $level= 'masyarakat';

     $query = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password',
     '$telp','$level')");

 if($query){
    header('location:index.php?page=login');
 }    
}
?>