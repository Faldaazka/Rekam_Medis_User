
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tambah Obat</title>

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
<h3><strong>Tambah Obat</h3><br/>
<form action="" method="post">
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nama Obat</label>
    <div class="col-sm-10">
      <input type="text" name="nama_obat" size="30">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Stok Obat</label>
    <div class="col-sm-10">
        <input type="text" name="stok_obat" size="30">
    </div>
  </div>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
  <input type="submit" class="btn btn-primary" name="proses"></input>
  <a class="btn btn-danger" href="tampil-obat-pend.php" role="button">Cancel</a>
</form>
</div>
<?php
include "../database/koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($connect, "INSERT INTO obat SET
nama_obat     = '$_POST[nama_obat]',
stok_obat     = '$_POST[stok_obat]'");

echo "Data obat telah tersimpan";
echo "<meta http-equiv=refresh content=1;URL='tampil-obat-pend.php'>";

}

?>
 </body>
</html>