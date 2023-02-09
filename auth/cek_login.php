<?php
//panggil funtion
require_once "../_config/config.php";


$pass = sha1($_POST['password']);
$username = mysqli_escape_string($con, $_POST['username']);
$password = mysqli_escape_string($con, $pass);
$level = mysqli_escape_string($con, $_POST['level']);

//cek username, terdaftar atau tidak
$cek_user = mysqli_query($con, "SELECT * FROM tb_user WHERE username =
'$username' and level='$level'");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if($user_valid){
//jika username terdaftar
//cek password sesuai atau tidak
if($password == $user_valid['password']) {
    //jika password sesuai
    //buat session
    session_start();
    $_SESSION['username'] = $user_valid['username'];
    $_SESSION['nama_user'] = $user_valid['nama_user'];
    $_SESSION['level'] = $user_valid['level'];

    //uji level user
    if($level == "Perawat") {
        header('location:../pendaftaran.php');
    } elseif ($level == "Dokter") {
        header('location:../dokter.php');
    } elseif ($level == "Administrator") {
        header('location:admin.php');
    } 
    }else{
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='login.php'</script>";
    } 
    }else{
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='login.php'</script>";
}
?>