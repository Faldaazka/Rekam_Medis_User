<?php require_once ('header.php');?>
    <div class="container">
    <h1 align="center"><strong>Pemeriksaan Pasien</strong></h1>
    <br/><br/><br/>
    <div class="container">
        <h4>
        <div class="pull-right">
                &ensp;&ensp;  
                <a href="" class="button1"><i class="glyphicon glyphicon-refresh"></i></a>  
                &ensp;
                <a href="periksa/tambah-periksa.php" class="button2"><i class="glyphicon glyphicon-plus"></i>Tambah Periksa</a>      
                &ensp;&ensp;  
            </div>
        </h4>
    </div>
    <br/>
        <table class="table table table-striped table-hover table table-bordered">
        <thead class="">
        <tr>
            <th>No.</th>
            <th >Nama Departemen</th>
            <th >Nama Pasien</th>
            <th >Tanggal Periksa</th>
            <th colspan="2"><i class="glyphicon glyphicon-cog"><i></th>

        </tr>
        </thead>
        <tbody>
        <?php
        include "../database/koneksi.php";
        $no=1;
        $query = "SELECT * FROM pendaftaran
                    INNER JOIN departemen ON pendaftaran.id_departemen = departemen.id_departemen
                    INNER JOIN pasien ON pendaftaran.id_pasien = pasien.id_pasien";

        $sql_pendaftaran = mysqli_query($connect, $query) or die (mysqli_error($connect));
        while($row = mysqli_fetch_array($sql_pendaftaran)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[nama_departemen]</td>
                <td>$row[nama_pasien]</td>
                <td>$row[tgl_periksa]</td>
                <td><a href='?kode=$row[id_periksa]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td>
                <td><a href='periksa/edit-periksa.php?kode=$row[id_periksa]' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td>
            <tr>";
            $no++;
        }
        ?>
        </tbody>
        </table>
        <?php
        include "../database/koneksi.php";

        if(isset($_GET['kode'])){
        mysqli_query($connect, "DELETE FROM pendaftaran WHERE id_periksa='$_GET[kode]'");
        
        echo "Data berhasil dihapus";
        echo "<meta http-equiv=refresh content=2;URL='tampil-periksa.php'>";

        }
    ?>
<?php require_once ('footer.php');?>