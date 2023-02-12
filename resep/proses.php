<?php
require "../database/koneksi.php";

if(isset($_POST['add'])){
   $obat = $_POST['obat']; 

   mysqli_query($connect, "INSERT INTO rm_obat(id, id_obat) VALUES ('', '$obat')") or die (mysqli_error($connect));
   
    echo "Data periksa telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='tampil-resep.php'>";

}
?>
