
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Janji Doktern</title>
  </head>
  <body>
<div class="col-md-10 p-5 pt-3">
        <a href="tambah-janji.php" class="btn btn-primary mb-4"><i class="bi bi-plus-square-fill me-2"></i>Tambah Data Pasien</a>
        <a href="antrian.php" class="btn btn-primary mb-4"><i class="bi bi-plus-square-fill me-2"></i>Daftar Antrian</a>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
        

<h3>Janji Dokter</h3>

<table border="1">
    <tr>
    <th>No.</th>
    <th >Id_Pasien</th>
    <th >Nama Pasien</th>
    <th >Nama Dokter</th>
    <th >Departemen</th>
    <th >Hari</th>
    <th >Jam</th>
    <th >Tgl Daftar</th>
    <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "database/koneksi.php";

    $no=1;
    $ambildata = mysqli_query($connect,"select * from pasien");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pasien]</td>
            <td>$tampil[nama_pasien]</td>
            <td>$tampil[jenis_kelamin]</td>
            <td>$tampil[tgl_lahir]</td>
            <td>$tampil[no_tlp_pasien]</td>
            <td>$tampil[alamat]</td>
            <td>$tampil[tgl_daftar]</td>
            <td><a href='?kode=$tampil[id_pasien]'> Hapus </a></td>
            <td><a href='edit-pasien.php?kode=$tampil[id_pasien]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "database/koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($connect, "DELETE FROM pasien WHERE id_pasien='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='tampil-pasien.php'>";

    }
    ?>
    </body>
<html>