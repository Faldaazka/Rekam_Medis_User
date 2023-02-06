<!Doctype html>
   <head>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
   <body>
    <div class="container">
    <h1 align="center">Daftar Obat</h1>
    <br/>
    <h4>
    <div class="pull-right">
            &ensp;&ensp;  
            <a href="" class="button"><i class="glyphicon glyphicon-refresh"></i></a>  
            &ensp;
            <a href="" class="button2"><i class="glyphicon glyphicon-plus"></i>Tambah Pasien</a>      
        </div>
    </h4>

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

        <table class="table table table-striped table-hover table table-bordered">
        <thead class="">
        <tr>
            <th>No.</th>
            <th >Id_Pasien</th>
            <th >Nama Pasien</th>
            <th >Jenis Kelamin</th>
            <th >Tanggal Lahir</th>
            <th >Telephone</th>
            <th >Alamat</th>
            <th >Tgl Daftar</th>
            <th colspan="2"><i class="glyphicon glyphicon-cog"><i></th>

        </tr>
        </thead>
        <tbody>
        <?php
        include "database/koneksi.php";
        $no=1;
        $ambildata = mysqli_query($connect,"select * from pasien");
        while($row = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[id_pasien]</td>
                <td>$row[nama_pasien]</td>
                <td>$row[jenis_kelamin]</td>
                <td>$row[tgl_lahir]</td>
                <td>$row[no_tlp_pasien]</td>
                <td>$row[alamat]</td>
                <td>$row[tgl_daftar]</td>
                <td><a href='?kode=$row[id_pasien]'>Hapus</a></td>
                <td> <a href='edit-pasien.php?kode=$row[id_pasien]'>Ubah</a></td>
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
