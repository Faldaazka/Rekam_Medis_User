
<?php require_once ('header.php');?>

    <div class="container">
    <h1 align="center"><strong>Daftar Pasien</strong></h1>
    <br/>

    <div class="container">
        <h4>
        <div class="pull-right">
                &ensp;&ensp;  
                &ensp;
                <a href="" class="btn"><i class="glyphicon glyphicon-refresh"></i></a>  
                &ensp;
                <a href="pasien/tambah-pasien.php" class="button2"><i class="glyphicon glyphicon-plus"></i>Tambah Pasien</a>      
            </div>
        </h4>
        <div class="pull-left">
                &ensp;&ensp;  
                <a href="index.php" type="button" class="btn btn-primary">Kembali</a>
                <a href="pasien/periksa/tambah-periksa.php" type="button" class="btn btn-warning">Periksa</a>
        </div>
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
        include "../database/koneksi.php";
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
                <td><a href='?kode=$row[id_pasien]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td>
                <td><a href='pasien/edit-pasien.php?kode=$row[id_pasien]' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td>
            <tr>";
            $no++;
        }
        ?>
        </tbody>
        </table>
        <?php
        include "../database/koneksi.php";

        if(isset($_GET['kode'])){
        mysqli_query($connect, "DELETE FROM pasien WHERE id_pasien='$_GET[kode]'");
        
        echo "Data berhasil dihapus";
        echo "<meta http-equiv=refresh content=2;URL='../tampil-pasien.php'>";

        }
    ?>
</div> 


<?php require_once ('footer.php');?>