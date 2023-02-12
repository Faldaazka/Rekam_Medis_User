<?php require_once ('header.php');?>
    <div class="container">
    <h1 align="center"><strong>Daftar Janji</strong></h1>
    <br/>
    <br/><br/><br/>
    <div class="container">
    <h4>
        <div class="pull-right">
                &ensp;&ensp;  
                <a href="" class="button1"><i class="glyphicon glyphicon-refresh"></i></a>  
                &ensp;
                <a href="janji/tambah-janji.php" class="button2"><i class="glyphicon glyphicon-plus"></i>Tambah Janji</a>      
                &ensp;&ensp; 
            </div>
    </h4>
    </div>
    <br/>
        <table class="table table table-striped table-hover table table-bordered">
        <thead class="">
        <tr>
            <th>No.</th>
            <th >Nama Pasien</th>
            <th >Waktu Janji</th>
            <th >No Telephone</th>
            <th >Tanggal Janji</th>
            <th >Departemen</th>
            <th >Nama Dokter</th>
            <th colspan="2"><i class="glyphicon glyphicon-cog"><i></th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "../database/koneksi.php";
        $no=1;
        $query = "SELECT * FROM janji
                    INNER JOIN pasien ON janji.id_pasien = pasien.id_pasien
                    INNER JOIN departemen ON janji.id_departemen = departemen.id_departemen
                    INNER JOIN dokter ON janji.id_dokter = dokter.id_dokter";
        $sql_janji = mysqli_query($connect, $query) or die (mysqli_error($connect));
        while($row = mysqli_fetch_array($sql_janji)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[nama_pasien]</td>
                <td>$row[waktu_janji]</td>
                <td>$row[no_tlp_pasien]</td>
                <td>$row[tgl_janji]</td>
                <td>$row[nama_departemen]</td>
                <td>$row[nama_dokter]</td>
                <td><a href='?kode=$row[id_janji]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td>
                <td><a href='janji/edit-janji.php?kode=$row[id_janji]' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td>
            <tr>";
            $no++;
        }
        ?>
        </tbody>
        </table>
        <?php
        include "../database/koneksi.php";

        if(isset($_GET['kode'])){
        mysqli_query($connect, "DELETE FROM janji WHERE id_janji='$_GET[kode]'");
        
        echo "Data berhasil dihapus";
        echo "<meta http-equiv=refresh content=2;URL='tampil-janji.php'>";

        }
    ?>
</div> 
<?php require_once ('footer.php');?>