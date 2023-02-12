<?php
require "../database/koneksi.php";

if(isset($_POST['add'])){
   $id_pasien = $_POST['id_pasien'];
   $id_dokter = $_POST['id_dokter'];
   $id_departemen = $_POST['id_departemen'];
   $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
   $keluhan_pasien = $_POST['keluhan_pasien'];
   $diagnosa_pasien = $_POST['diagnosa_pasien'];
   $pelayanan = $_POST['pelayanan'];
   $keterangan = $_POST['keterangan'];
   

   mysqli_query($connect, "INSERT INTO rekam_medis(id_rekam_medis, id_pasien, id_dokter, id_departemen, tgl_pemeriksaan, keluhan_pasien, diagnosa_pasien, pelayanan, keterangan) VALUES ('', '$id_pasien', '$id_dokter', '$id_departemen', '$tgl_pemeriksaan', '$keluhan_pasien', '$diagnosa_pasien', '$pelayanan', '$keterangan')") or die (mysqli_error($connect));
   
   $last_id = mysqli_insert_id($connect);
   $obat = $_POST['obat'];
   foreach ($obat as $ob) {
      mysqli_query($connect, "INSERT INTO rm_obat(id_rekam_medis ,id_obat) VALUES ('$last_id', '$ob')") or die (mysqli_error($connect));
   }
    echo "Data periksa telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='../tampil-rekdis.php'>";

}
?>
