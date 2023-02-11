<?php require_once ('header.php');?>

    <div class="container">
    <h1 align="center"><strong>Daftar Dokter</strong></h1>
    <br/>

    <div class="container">
        <h4>
        <div class="pull-right">
                &ensp;&ensp;  
                <a href="" class="button1"><i class="glyphicon glyphicon-refresh"></i></a>  
                &ensp;
                <a href="dokter/tambah-dokter.php" class="button2"><i class="glyphicon glyphicon-plus"></i>Tambah Dokter</a>
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
            <th >Nama Dokter</th>
            <th >Jenis Kelamin</th>
            <th >Departemen</th>
            <th >Tanggal Lahir</th>
            <th >Telephone</th>
            <th >Alamat</th>
            <th colspan="2"><i class="glyphicon glyphicon-cog"><i></th>

        </tr>
        </thead>
        <tbody>
        <?php
        include "../database/koneksi.php";
        $no=1;
        $query = "SELECT * FROM dokter
                    INNER JOIN departemen ON dokter.id_departemen = departemen.id_departemen
                    ";
        $sql_janji = mysqli_query($connect, $query) or die (mysqli_error($connect));
        while($row = mysqli_fetch_array($sql_janji)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[nama_dokter]</td>
                <td>$row[jk_dokter]</td>
                <td>$row[nama_departemen]</td>
                <td>$row[tgl_lahir_dokter]</td>
                <td>$row[no_tlp_dokter]</td>
                <td>$row[alamat_dokter]</td>
                <td><a href='?kode=$row[id_dokter]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td>
                <td><a href='dokter/edit-dokter.php?kode=$row[id_dokter]' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td>
            <tr>";
            $no++;
        }
        ?>
        </tbody>
        </table>
        <?php
        include "../database/koneksi.php";

        if(isset($_GET['kode'])){
        mysqli_query($connect, "DELETE FROM dokter WHERE id_dokter='$_GET[kode]'");
        
        echo "Data berhasil dihapus";
        echo "<meta http-equiv=refresh content=2;URL='tampil-dokter.php'>";

        }
    ?>

<?php require_once ('footer.php');?>
