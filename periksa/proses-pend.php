<?php
require "../database/koneksi.php";

if(isset($_POST['add'])){
    $id_departemen = $_POST['id_departemen'];
    $id_pasien = $_POST['id_pasien'];
    $tgl_periksa = $_POST['tgl_periksa'];

    mysqli_query($connect, "INSERT INTO pendaftaran (id_periksa, id_departemen, id_pasien, tgl_periksa) VALUES ('', '$id_departemen', '$id_pasien', '$tgl_periksa')") or die (mysqli_error($connect));

    echo "Data periksa telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='tampil-periksa-pend.php'>";

}
?>