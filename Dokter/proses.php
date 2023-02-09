<?php
require "../database/koneksi.php";

if(isset($_POST['add'])){
    $nama_dokter        = $_POST['nama_dokter'];
    $jk_dokter          = $_POST['jk_dokter'];
    $id_departemen      = $_POST['id_departemen'];
    $tgl_lahir_dokter   = $_POST['tgl_lahir_dokter'];
    $no_tlp_dokter      = $_POST['no_tlp_dokter'];
    $alamat_dokter             = $_POST['alamat_dokter'];

    mysqli_query($connect, "INSERT INTO dokter(id_dokter, nama_dokter, jk_dokter, id_departemen, tgl_lahir_dokter, no_tlp_dokter, alamat_dokter) VALUES ('', '$nama_dokter', '$jk_dokter', '$id_departemen', '$tgl_lahir_dokter', '$no_tlp_dokter', '$alamat_dokter')") or die (mysqli_error($connect));

    echo "Data Jadwal Dokter telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='tampil-dokter.php'>";

}
?>