<?php
session_start();

if(empty($_SESSION['username']) or empty ($_SESSION['level'])) {
  echo "<script>alert('Untuk mengakses halaman ini anda harus Login terlebih dahulu');document.
location='../auth/login.php'</script>";
}
?>

<!Doctype html>
   <head>
   <!-- Latest compiled and minified CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
   <body>
    <div class="container">
    <h1 align="center"><strong>Daftar Dokter</strong></h1>
    <br/>

    <div class="container">
        <h4>
        <div class="pull-right">
                &ensp;&ensp;  
                <a href="" class="button"><i class="glyphicon glyphicon-refresh"></i></a>  
                &ensp;
            </div>
        </h4>
        <div class="pull-left">
                &ensp;&ensp;  
                <a href="../pendaftaran.php" type="button" class="btn btn-primary"><span class="bi bi-arrow-bar-left"></span>Kembali</a>
        </div>
        <div class ="pull-right" style="margin-bottom: 20px;">
            <form class="form-inline" action="" method="post">
            <div class="form-group">
                <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
        </div>
        <div class="form-group">
                <button type="submit" class="button btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </div>
            </form>
        </div>
    </div>

        <table class="table table table-striped table-hover table table-bordered">
        <thead class="">
        <tr>
            <th>No.</th>
            <th >Id_Dokter</th>
            <th >Nama Dokter</th>
            <th >Jenis Kelamin</th>
            <th >Departemen</th>
            <th >Tanggal Lahir</th>
            <th >Telephone</th>
            <th >Alamat</th>

        </tr>
        </thead>
        <tbody>
        <?php
        include "../database/koneksi.php";
        $no=1;
        $ambildata = mysqli_query($connect,"select * from dokter");
        while($row = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[id_dokter]</td>
                <td>$row[nama_dokter]</td>
                <td>$row[jk_dokter]</td>
                <td>$row[departemen]</td>
                <td>$row[tgl_lahir_dokter]</td>
                <td>$row[no_tlp_dokter]</td>
                <td>$row[alamat_dokter]</td>
            <tr>";
            $no++;
        }
        ?>
        </tbody>
        </table>
</div> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
