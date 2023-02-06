<?php
include "database/koneksi.php";
$sql=mysqli_query($connect, "SELECT * FROM jadok WHERE id_dokter='$_GET[kode1]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Ubah Keterangan Jadwal Dokter </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Keterangan </td>
        <td> <input type="text" name="dokter_keterangan" value="<?php echo $data['dokter_keterangan']; ?>"> </td>
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
mysqli_query($connect, "UPDATE jadok SET  
dokter_keterangan     = '$_POST[dokter_keterangan]'
where id_dokter        = '$_GET[kode1]'");

echo "keterangan dokter telah diubah";
echo "<meta http-equiv=refresh content=1;URL='tampil-jadok.php'>";

}

?>