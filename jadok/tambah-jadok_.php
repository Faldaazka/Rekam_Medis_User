<!Doctype html>
   <head>
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
   <h3 align="center"><strong>Tambah Jadwal Pasien</h3><br/>
   <div class="row mb-3">
   <div class="col-lg-6 col-lg-offset-3">

   <form action="proses.php" method="post">
   
<div class="form-group">
    <label for="id_departemen">Nama Departemen</label>
    <select name="id_departemen" id="id_departemen" class="form-control" required>
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
<div class="form-group">
    <label for="id_dokter">Nama Dokter</label>
    <select name="id_dokter" id="id_dokter" class="form-control" required>
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
<div class="form-group">
    <label for="dokter_hari">Hari</label>
    <select name="dokter_hari" id="dokter_hari" class="form-control" required>
        <option value="">--Pilih Salah Satu--</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
    </select>
</div>
<div class="form-group">
    <label for="waktu_shift">Waktu</label>
    <input type="time" name="waktu_shift" id="waktu_shift" class="form-control" required>
</div>
<div class="form-group">
    <label for="dokter_keterangan">Keterangan</label>
    <textarea name="dokter_keterangan" id="dokter_keterangan" class="form-control" required>
    </textarea>
</div>
<input type="submit" class="btn btn-primary" name="add"></input>
<a href="tampil-jadok.php" type="button" class="btn btn-danger">Kembali</a>
</form>



</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>