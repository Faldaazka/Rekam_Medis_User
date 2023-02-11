<!doctype html>
<html lang="en" dir="ltr">
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Klinik Allia</title>
      
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <!--side bar-->
      <link rel="stylesheet" href="../assets/css/style1.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   </head>
  <body>
      <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      
      <nav class="sidebar">
      <div class="scroll">
         <div class="text"><span class="text-primary"><h>KLINIK ALLIA</span></h>
         </div>
         <ul>
            <li class="active"><a href="">Dashboard</a></li>
            <li>
               <a href="#" class="feat-btn">Input
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
               <li><a href="#">Daftar Pasien</a></li>
               <li><a href="#">Daftar Dokter</a></li>
               <li><a href="">Daftar Obat</a></li>
               <li><a href="#">Jadwal Dokter</a></li>
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
              <li><a href="#">Daftar Antrian</a></li>
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
            <li><a href="">Logout</a></li>
         </ul>
      </div>
      </nav>
      
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('.pend-btn').click(function(){
             $('nav ul .pend-show').toggleClass("show2");
             $('nav ul .third').toggleClass("rotate");
           });
           $('.lap-btn').click(function(){
             $('nav ul .lap-show').toggleClass("show3");
             $('nav ul .fourth').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

      