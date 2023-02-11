<?php

session_start();

if(empty($_SESSION['username']) or empty ($_SESSION['level'])) {
  echo "<script>alert('Untuk mengakses halaman ini anda harus Login terlebih dahulu');document.
location='../auth/login.php'</script>";
}
?>
<!doctype html>
<html lang="en" dir="ltr">
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Klinik Allia</title>
   <!-- Latest compiled and minified CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      

      <!--side bar-->
      <link rel="stylesheet" href="../assets/css/style1.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   </head>
  <body>
      <div class="button">
         <span class="fas fa-bars"></span>
      </div>
      
      <nav class="sidebar">
      <div class="scroll">
         <div class="text"><span class="text-primary"><h>KLINIK ALLIA</span></h>
         </div>
         <ul>
            <li class="active"><a href="index.php">Dashboard</a></li>
            <li>
               <a href="#" class="feat-btn">Input
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
               <li><a href="tampil-pasien.php">Daftar Pasien</a></li>
               <li><a href="tampil-dokter.php">Daftar Dokter</a></li>
               <li><a href="tampil-obat.php">Daftar Obat</a></li>
               <li><a href="tampil-jadok.php">Jadwal Dokter</a></li>
               <li><a href="tampil-janji.php">Janji Dokter</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="serv-btn">Rekam Medis
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
               <li><a href="#">Daftar Rekam Medis</a></li>
              <li><a href="#">Surat Kesehatan</a></li>
               </ul>
            </li>
            <li><a href="#" class="pend-btn">Pendaftaran
            <span class="fas fa-caret-down third"></span>
          </a>
            <ul class="pend-show">
              <li><a href="#">Pendaftaran Pasien</a></li>
              <li><a href="#">Sudah Diperiksa</a></li>
            </ul>
            </li>
            <li><a href="#" class="lap-btn">Laporan
            <span class="fas fa-caret-down fourth"></span>
            </a>
            <ul class="lap-show">
            <li><a href="#">Laporan Pasien</a></li>
            <li><a href="#">Laporan Dokter</a></li>
            <li><a href="#">Laporan Obat</a></li>
            <li><a href="#">Laporan Rekam Medis</a></li>
            <li><a href="#">Laporan Pendaftaran</a></li> 
            <li><a href="#">Laporan User</a></li>
            <li><a href="#">Laporan Lengkap</a></li>
            </ul>
            </li>
            <li><a href="#">User</a></li>
            <li><a href="../auth/logout.php">Logout</a></li>
         </ul>
      </div>
      </nav>