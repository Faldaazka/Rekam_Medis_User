<?php require_once ('header.php');?>

    <div class="container">
    <h1 align="center"><strong>Daftar Obat</strong></h1>
    <br/>

    <div class="container">
        <h4>
        <div class="pull-right">
                &ensp;&ensp;  
                <a href="" class="button1"><i class="glyphicon glyphicon-refresh"></i></a>  
                &ensp;
                <a href="obat/tambah-obat.php" class="button2"><i class="glyphicon glyphicon-plus"></i>Tambah Obat</a>      
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
            <th >Id_Obat</th>
            <th >Nama Obat</th>
            <th >Stock Obat (per- tablet/kapsul)</th>
            <th colspan="2"><i class="glyphicon glyphicon-cog"><i></th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "../database/koneksi.php";
        $no=1;
        $ambildata = mysqli_query($connect,"select * from obat");
        while($row = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[id_obat]</td>
                <td>$row[nama_obat]</td>
                <td>$row[stok_obat]</td>
                <td><a href='?kode=$row[id_obat]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td>
                <td><a href='obat/edit-obat.php?kode=$row[id_obat]' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td>
            <tr>";
            $no++;
        }
        ?>
        </tbody>
        </table>
        <?php
        include "../database/koneksi.php";

        if(isset($_GET['kode'])){
        mysqli_query($connect, "DELETE FROM obat WHERE id_obat='$_GET[kode]'");
        
        echo "Data berhasil dihapus";
        echo "<meta http-equiv=refresh content=2;URL='tampil-obat.php'>";

        }
    ?>
<?php require_once ('footer.php');?>
