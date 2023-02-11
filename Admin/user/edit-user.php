<?php
include "../database/koneksi.php";
$sql=mysqli_query($connect, "SELECT * FROM tb_user WHERE id_user='$_GET[kode]'");
$data=mysqli_fetch_array($sql);?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Data User</title>

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
<h3><strong>Edit Data User</h3><br/>
<form action="" method="post">
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nama User</label>
    <div class="col-sm-10">
        <input type="text" name="nama_user" size="30" value="<?php echo $data['nama_user']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" name="username" size="30" value="<?php echo $data['username']; ?>">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <input type="password" name="password" size="30">
    </div>
  </div>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
  <input type="submit" class="btn btn-primary" name="proses"></input>
  <a class="btn btn-danger" href="../tampil-user.php" role="button">Cancel</a>
</form>

<?php
include "../database/koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($connect, "UPDATE tb_user SET 
nama_user       = '$_POST[nama_user]', 
username        = '$_POST[id_pasien]',
password        = '$_POST[password]'
where id_user   = '$_GET[kode]'");

echo "Data User telah diubah";
echo "<meta http-equiv=refresh content=1;URL='../tampil-user.php'>";

}?>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>