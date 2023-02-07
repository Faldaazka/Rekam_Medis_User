<?php
session_start();

if(empty($_SESSION['username']) or empty ($_SESSION['level'])) {
  "<script>alert('Untuk mengakses halaman ini anda harus Login terlebih dahulu');document.
location='auth/login.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jadwal dokter</title>
  </head>
  <body>
<div class="col-md-10 p-5 pt-3">
              
<h3> Jadwal Dokter </h3>

<table border="1">
    <tr>
    <th>No.</th>
    <th >Hari</th>
    <th >Nama</th>
    <th >Waktu Shift</th>
    <th >Departemen</th>
    <th >Keterangan</th>
    <th >aksi</th>
    </tr>

    <?php
    include "../database/koneksi.php";

    $no=1;
    $ambildata = mysqli_query($connect,"SELECT * FROM jadok");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[dokter_hari]</td>
            <td>$tampil[dokter_nama]</td>
            <td>$tampil[waktu_shift]</td>
            <td>$tampil[departemen]</td>
            <td>$tampil[dokter_keterangan]</td>
            <td><a href='edit-jadok.php?kode1=$tampil[id_dokter]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "../database/koneksi.php";

    if(isset($_GET['kode1'])){
    mysqli_query($connect, "DELETE FROM jadok WHERE id_dokter='$_GET[kode1]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='tampil-jadok.php'>";

    }
    ?>
</body>
<html>