<?php require_once ('header.php');?>

    <div class="container">
    <h1 align="center"><strong>Jadwal Dokter</strong></h1>
    <br/>

    <div class="container">
        <h4>
        <div class="pull-right">
                &ensp;&ensp;  
                <a href="" class="button1"><i class="glyphicon glyphicon-refresh"></i></a>  
                &ensp;
                <a href="jadok/tambah-jadok.php" class="button2"><i class="glyphicon glyphicon-plus"></i>Tambah Jadwal</a>      
            </div>
        </h4>
      
        <div class ="pull-right" style="margin-bottom: 20px;">
            <form class="form-inline" action="" method="post">
            <div class="form-group">
                <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </div>
            </form>
        </div>
    </div>

        <table class="table table table-striped table-hover table table-bordered">
        <thead class="">
        <tr>
            <th>No.</th>
            <th >Hari</th>
            <th >Nama Dokter</th>
            <th >Waktu Shift</th>
            <th >Departemen</th>
            <th >Keterangan</th>
            <th colspan="2"><i class="glyphicon glyphicon-cog"><i></th>

        </tr>
        </thead>
        <tbody>
        <?php
        include "../database/koneksi.php";
        $no=1;
        $query = "SELECT * FROM jadok
                    INNER JOIN dokter ON jadok.id_dokter = dokter.id_dokter
                    INNER JOIN departemen ON jadok.id_departemen = departemen.id_departemen
                    ";
        $sql_janji = mysqli_query($connect, $query) or die (mysqli_error($connect));
        while($row = mysqli_fetch_array($sql_janji)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[dokter_hari]</td>
                <td>$row[nama_dokter]</td>
                <td>$row[waktu_shift]</td>
                <td>$row[nama_departemen]</td>
                <td>$row[dokter_keterangan]</td>
                <td><a href='?kode=$row[id_jadok]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td>
                <td><a href='jadok/edit-jadok.php?kode=$row[id_jadok]' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td>
            <tr>";
            $no++;
        }
        ?>
        </tbody>
        </table>
        <?php
        include "../database/koneksi.php";

        if(isset($_GET['kode'])){
        mysqli_query($connect, "DELETE FROM jadok WHERE id_jadok='$_GET[kode]'");
        
        echo "Data berhasil dihapus";
        echo "<meta http-equiv=refresh content=2;URL='tampil-jadok.php'>";

        }
    ?>
<?php require_once ('footer.php');?>
