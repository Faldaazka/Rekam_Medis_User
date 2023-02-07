
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Daftar Pasien</title>
  </head>
  <body>

<h3> Tambah Pasien </h3>

<form action="" method="post">
<table>
    <tr>
        <td> ID Pasien </td>
        <td> <input type="text" name="id_pasien"> </td>
    </tr>
    <tr>
        <td width="120"> Nama Pasien </td>
        <td> <input type="text" name="nama_pasien"> </td>
    </tr>
    <tr>
        <td> Jenis_kelamin </td>
        <td> <select name="jenis_kelamin"> 
        <option value="">Pilih Salah Satu</option>
        <option value="Laki-laki">Laki-laki</option>
       <option value="Perempuan">Perempuan</option>
       </td>
    </tr>
    <tr>
        <td> Tangal Lahir </td>
        <td> <input type="date" name="tgl_lahir"> </td>
    </tr>
    <tr>
        <td> Telephone </td>
        <td> <input type="text" name="no_tlp_pasien"> </td>
    </tr>
    <tr>
        <td> Alamat </td>
        <td> <input type="text" name="alamat"> </td>
    </tr>
    <tr>
        <td> Tgl Daftar </td>
        <td> <input type="date" name="tgl_daftar"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<?php
include "database/koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($connect, "INSERT INTO pasien SET
id_pasien       = '$_POST[id_pasien]',
nama_pasien     = '$_POST[nama_pasien]',
jenis_kelamin   = '$_POST[jenis_kelamin]',
tgl_lahir       = '$_POST[tgl_lahir]',
no_tlp_pasien   = '$_POST[no_tlp_pasien]',
alamat          = '$_POST[alamat]',
tgl_daftar      = '$_POST[tgl_daftar]'");

echo "Data pasien baru telah tersimpan";
echo "<meta http-equiv=refresh content=1;URL='tampil-pasien_.php'>";

}

?>
 </body>
</html>