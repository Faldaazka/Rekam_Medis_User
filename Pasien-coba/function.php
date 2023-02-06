<?php 
// Koneksi Database

$conn = mysqli_connect('localhost', 'root', '', 'medical_record');

function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function mengembalikannilai($db){
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
function tambahpasien($datapasien){
    global $conn;
    $id_pasien      = htmlspecialchars($datapasien['id_pasien']);
    $nama_pasien    = htmlspecialchars($datapasien['nama_pasien']);
    $jenis_kelamin  = htmlspecialchars($datapasien['jenis_kelamin']);
    $tgl_lahir      = htmlspecialchars($datapasien['tgl_lahir']);
    $no_tlp_pasien  = htmlspecialchars($datapasien['no_tlp_pasien']);
    $alamat         = htmlspecialchars($datapasien['alamat']);
    $tgl_daftar     = htmlspecialchars($datapasien['tgl_daftar']);
	
    
    $query = "INSERT INTO pasien VALUES ('$id_pasien ', '$nama_pasien', '$jenis_kelamin' , '$tgl_lahir', '$no_tlp_pasien', '$alamat', '$tgl_daftar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function hapus_pasien($id_pasien) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien = $id_pasien");

    return mysqli_affected_rows($conn);
}
function ubahpasien($ubah_pasien){
    global $conn;
    $id_pasien      = htmlspecialchars($ubah_pasien['id_pasien']);
    $nama_pasien    = htmlspecialchars($ubah_pasien['nama_pasien']);
    $jenis_kelamin  = htmlspecialchars($ubah_pasien['jenis_kelamin']);
    $tgl_lahir      = htmlspecialchars($ubah_pasien['tgl_lahir']);
    $no_tlp_pasien  = htmlspecialchars($ubah_pasien['no_tlp_pasien']);
    $alamat         = htmlspecialchars($ubah_pasien['alamat']);
    $tgl_daftar     = htmlspecialchars($ubah_pasien['tgl_daftar']);
    
    $query = "UPDATE pasien SET
              nama_pasien = '$nama_pasien',
              jenis_kelamin = '$jenis_kelamin',
              tgl_lahir = '$tgl_lahir',
              no_tlp_pasien = '$no_tlp_pasien',
              alamat = '$alamat',
              tgl_daftar = '$tgl_daftar',
              WHERE id_pasien = $id_pasien
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>



