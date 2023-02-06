<?php



require 'function.php';



$id_pasien = $_GET["id"];

if(hapus_pasien($id_pasien) > 0){
    echo "
    <script> alert('Data Berhasil Dihapus!');
    document.location.href = 'pasien-tampil.php';
    </script>
    ";
} else{
    echo "
    <script> alert('Data Gagal Dihapus!');
    document.location.href = 'pasien-tampil.php';
    </script>
    ";
}

?>