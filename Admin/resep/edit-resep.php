<?php
include "../database/koneksi.php";
$sql = mysqli_query($connect, "SELECT * FROM rm_obat WHERE id_rekam_medis='$_GET[kode]'");
$data = mysqli_fetch_array($sql); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Resep Obat</title>

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
    <h3><strong>Edit Rekam Medis</h3><br />
    <form action="" method="post">
     
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama Obat</label>
        <div class="col-sm-10">
          <select multiple name="id_obat[]" id="id_obat" class="form-control" required>
            <option value="">--Pilih--</option>
            <?php
            include "../database/koneksi.php";
            $sql_obat = mysqli_query($connect, "select * from obat");
            while ($data_obat = mysqli_fetch_array($sql_obat)) {
              echo '<option value="' . $data_obat['id_obat'] . '">' . $data_obat['nama_obat'] . '</option>';
            }
            ?>
          </select>
        </div>
      </div>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
      <input type="submit" class="btn btn-primary" name="proses"></input>
      <a class="btn btn-danger" href="../tampil-resep.php" role="button">Cancel</a>
    </form>

    <?php
include "../database/koneksi.php";

if (isset($_POST['proses'])) {
  $id_rekam_medis = $_GET['kode'];
  $id_obat = $_POST['id_obat'];

  for ($i = 0; $i < count($id_obat); $i++) {
    $query = mysqli_query($connect, "UPDATE rm_obat SET id_obat='$id_obat[$i]' WHERE id='$id_rekam_medis'");
  }

  if ($query) {
    echo '<script language="javascript">
              alert("Data Berhasil Diubah");
              window.location="../tampil-resep.php";
              </script>';
  } else {
    echo '<script language="javascript">
              alert("Data Gagal Diubah");
              window.location="../edit-resep.php?kode=' . $id_rm . '";
              </script>';
  }
}
?>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>