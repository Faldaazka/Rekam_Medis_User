<?php
include "../database/koneksi.php";
$sql=mysqli_query($connect, "SELECT * FROM janji WHERE id_janji='$_GET[kode]'");
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
<h3><strong>Edit Janji</h3><br/>
<form action="" method="post">
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nama Pasien</label>
    <div class="col-sm-10">
    <select name="id_pasien" id="id_pasien" class="form-control">
        <option value="">value="<?php echo $data['nama_pasien']; ?>"</option>
        <?php
        include "../database/koneksi.php";
        $sql_pasien = mysqli_query($connect,"select * from pasien");
        while($data_pasien = mysqli_fetch_array($sql_pasien)){
            echo '<option value="'.$data_pasien['id_pasien'].'">'.$data_pasien['nama_pasien'].'</option>';
        }
        ?>
    </select>
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Waktu</label>
    <div class="col-sm-10">
      <input type="time" name="waktu_janji" size="30" value="<?php echo $data['waktu_janji']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Tanggal Janji</label>
    <div class="col-sm-10">
        <input type="date" name="tgl_janji" size="30" value="<?php echo $data['tgl_janji']; ?>">
    </div>
  </div>
  
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nama Departemen</label>
    <div class="col-sm-10">
    <select name="id_departemen" id="id_departemen" class="form-control">
        <option value="">--Pilih Salah Satu--</option>
        <?php
        include "../database/koneksi.php";
        $sql_departemen = mysqli_query($connect,"select * from departemen");
        while($data_departemen = mysqli_fetch_array($sql_departemen)){
            echo '<option value="'.$data_departemen['id_departemen'].'">'.$data_departemen['nama_departemen'].'</option>';
        }
        ?>
    </select>
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nama Dokter</label>
    <div class="col-sm-10">
    <select name="id_dokter" id="id_dokter" class="form-control">
        <option value="">--Pilih Salah Satu--</option>
        <?php
        include "../database/koneksi.php";
        $sql_dokter = mysqli_query($connect,"select * from dokter");
        while($data_dokter = mysqli_fetch_array($sql_dokter)){
            echo '<option value="'.$data_dokter['id_dokter'].'">'.$data_dokter['nama_dokter'].'</option>';
        }
        ?>
    </select>
    </div>
  </div>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
  <input type="submit" class="btn btn-primary" name="proses"></input>
  <a class="btn btn-danger" href="tampil-janji-dok.php" role="button">Cancel</a>
</form>

<?php
include "../database/koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($connect, "UPDATE janji SET  
id_pasien       = '$_POST[id_pasien]',
waktu_janji     = '$_POST[waktu_janji]',
id_departemen   = '$_POST[id_departemen]',
id_dokter       = '$_POST[id_dokter]'
where id_janji  = '$_GET[kode]'");

echo "Data janji telah diubah";
echo "<meta http-equiv=refresh content=1;URL='tampil-janji-dok.php'>";

}?>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>