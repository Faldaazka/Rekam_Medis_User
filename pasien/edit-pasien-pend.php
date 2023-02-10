<?php
include "../database/koneksi.php";
$sql=mysqli_query($connect, "SELECT * FROM pasien WHERE id_pasien='$_GET[kode]'");
$data=mysqli_fetch_array($sql);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Pasien</title>

    <!-- Latest compiled and minified CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>


<div class="container">
<h3><strong>Tambah Pasien</h3><br/>
<form action="" method="post">
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Id Pasien</label>
    <div class="col-sm-10">
        <input type="text" name="id_pasien" size="30" value="<?php echo $data['id_pasien']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nama Pasien</label>
    <div class="col-sm-10">
      <input type="text" name="nama_pasien" size="30" value="<?php echo $data['nama_pasien']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
    <select value="<?php echo $data['jenis_kelamin']; ?>" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>">
    <option selected>Pilih Salah Satu</option>
    <option value="Laki-Laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
    </select>
    </td>
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
        <input type="date" name="tgl_lahir" size="30" value="<?php echo $data['tgl_lahir']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Telephone</label>
    <div class="col-sm-10">
      <input type="text" name="no_tlp_pasien" size="30" value="<?php echo $data['no_tlp_pasien']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
        <input type="text" name="alamat" size="30" value="<?php echo $data['alamat']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Tanggal Daftar</label>
    <div class="col-sm-10">
        <input type="date" name="tgl_daftar" size="30" value="<?php echo $data['tgl_daftar']; ?>">
    </div>
  </div>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
  <input type="submit" class="btn btn-primary" name="proses"></input>
  <a class="btn btn-danger" href="tampil-pasien-pend.php" role="button">Cancel</a>
</form>

<?php
include "../database/koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($connect, "UPDATE pasien SET  
nama_pasien     = '$_POST[nama_pasien]',
jenis_kelamin   = '$_POST[jenis_kelamin]',
tgl_lahir       = '$_POST[tgl_lahir]',
no_tlp_pasien   = '$_POST[no_tlp_pasien]',
alamat          = '$_POST[alamat]',
tgl_daftar      = '$_POST[tgl_daftar]'
where id_pasien = '$_GET[kode]'");

echo "Data pasien telah diubah";
echo "<meta http-equiv=refresh content=1;URL='tampil-pasien-pend.php'>";

}?>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>