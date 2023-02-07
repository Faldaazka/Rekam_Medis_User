<?php
include "database/koneksi.php";
include_once "Common.php";
if (isset($_POST['deleteBtn'])){
    $pasienids = $_POST['recordsCheckBox'];
    $common = new Common();
    foreach ( $pasienids as $id ) {
        $delete = $common->deleteRecordById($connect,$id);
    }
    if ($delete) {
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="pasien_delete.php";</script>';
    }
}