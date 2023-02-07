<?php
include "database/koneksi.php";
$sql=mysqli_query($connect, "SELECT * FROM pasien WHERE id_pasien='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Ubah Data Barang </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Id Pasien </td>
        <td> <input type="text" name="id_pasien" value="<?php echo $data['id_pasien']; ?>"> </td>
    </tr>
    <tr>
        <td width="120"> Nama Pasien </td>
        <td> <input type="text" name="nama_pasien" value="<?php echo $data['nama_pasien']; ?>"> </td>
    </tr>
    <tr>
        <td width="120"> Jenis_kelamin </td>
        <td> <input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>"> </td>
    </tr>
    <tr>
        <td width="120">Tangal Lahir</td>
        <td><input type="date" name="tgl_lahir" value="<?php echo $data['tanggal_lahir']; ?>"> </td>
    </tr>
    <tr>
        <td width="120"> Telephone </td>
        <td> <input type="text" name="no_tlp_pasien" value="<?php echo $data['no_tlp_pasien']; ?>"> </td>
    </tr>
    <tr>
        <td width="120"> Alamat </td>
        <td> <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"> </td>
    </tr>
    <tr>
    <tr>
        <td width="120"> Tgl Daftar </td>
        <td> <input type="date" name="tgl_daftar" value="<?php echo $data['tgl_daftar']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</table>

</form>

<?php
include "database/koneksi.php";

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
echo "<meta http-equiv=refresh content=1;URL='tampil-pasien_.php'>";

}

?>