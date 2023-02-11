<?php
require "../database/koneksi.php";

if(isset($_POST['add'])){
    $id_departemen      = $_POST['id_departemen'];
    $id_dokter          = $_POST['id_dokter'];
    $dokter_hari        = $_POST['dokter_hari'];
    $waktu_shift        = $_POST['waktu_shift'];
    $dokter_keterangan  = $_POST['dokter_keterangan'];

    mysqli_query($connect, "INSERT INTO jadok(id_jadok, id_departemen, id_dokter, dokter_hari, waktu_shift, dokter_keterangan) VALUES ('', '$id_departemen', '$id_dokter', '$dokter_hari', '$waktu_shift', '$dokter_keterangan')") or die (mysqli_error($connect));

    echo "Data Jadwal Dokter telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='../tampil-jadok.php'>";

}
?>