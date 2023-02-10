<?php
require "../database/koneksi.php";

if(isset($_POST['add'])){
    $id_pasien          = $_POST['id_pasien'];
    $waktu_janji        = $_POST['waktu_janji'];
    $tgl_janji          = $_POST['tgl_janji'];
    $id_departemen      = $_POST['id_departemen'];
    $id_dokter          = $_POST['id_dokter'];

    mysqli_query($connect, "INSERT INTO janji(id_janji, id_pasien, waktu_janji, tgl_janji, id_departemen, id_dokter) VALUES ('', '$id_pasien', '$waktu_janji', '$tgl_janji', '$id_departemen', '$id_dokter')") or die (mysqli_error($connect));

    echo "Data Janji telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='tampil-janji.php'>";

}
?>