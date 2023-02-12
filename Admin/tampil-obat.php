<?php require_once ('header.php');?>

   <div class="container">
   <h1 align="center"><strong>Daftar Obat</strong></h1>
        <br/><br/><br/>
        
        <h4>
        <div class="pull-right">
            &ensp;&ensp;  
            <a href="" class="button1"><i class="glyphicon glyphicon-refresh"></i></a>  
            &ensp;
            <a href="obat/tambah-obat.php" class="button2"><i class="glyphicon glyphicon-plus"></i>Tambah Obat</a>      
        </div>
        </h4>   
        <div class="pull-left">
                &ensp;&ensp;  
        </div>
        <div class ="pull-right" style="margin-bottom: 20px;">
            <form class="form-inline" action="" method="post">
        
                <input type="text" name="pencarian" class="form-control" placeholder="Pencarian" autofocus>
        
                <button type="submit" name="cari" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          
            </form>
        </div>
    </div>
    <div class="table-responsive">
    <div class="container">
        <table class="table table table-striped table-hover table table-bordered">
                <thead>
                    <tr>
                    <th>No.</th>
                        <th >Nama Obat</th>
                        <th >Stok Obat</th>
                        <th colspan="2"><i class="glyphicon glyphicon-cog"><i></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                require "../database/koneksi.php";
                $batas = 8;
                $hal = @$_GET['hal'];
                if(empty($hal)) {
                    $posisi = 0;
                    $hal = 1;
                } else {
                    $posisi = ($hal - 1) * $batas;
                }
                $no = 1;
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $pencarian = trim(mysqli_real_escape_string($connect, $_POST['pencarian']));
                    if($pencarian != ''){
                        $sql = "SELECT * FROM obat WHERE nama_obat LIKE '%$pencarian%'";
                        $query = $sql;
                        $queryJml = $sql;
                } else {
                    $query = "SELECT * FROM obat LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM obat";
                    $no = $posisi + 1;
                } 
                }else {
                    $query = "SELECT * FROM obat LIMIT $posisi, $batas";
                    $queryJml = "SELECT * FROM obat";
                    $no = $posisi + 1;
            }
                
            $sql_obat = mysqli_query($connect, $query) or die (mysqli_error($connect));
                    if(mysqli_num_rows($sql_obat) > 0) {
                        while($data = mysqli_fetch_array($sql_obat)) { ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$data['nama_obat']?></td>  
                                <td><?=$data['stok_obat']?></td>   
                                <td><a href='?kode=<?=$data['id_obat']?>' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td>
                                <td><a href='obat/edit-obat.php?kode=<?=$data['id_obat']?>' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td></td>
                            </tr>
                            <?php
                        }
                    }else{
                        echo "<tr><td colspan=\"5\" align=\"center\">Data tidak ditemukan</td></tr>";
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
        </div>
        <?php
        if($_POST['pencarian'] == '') { ?>
            <div style="float:left;">
                <?php
                $jml = mysqli_num_rows(mysqli_query($connect, $queryJml));
                echo "Jumlah Data : <b>$jml</b>";
                ?>
            </div>
            <div style="float:right;">
                <ul class="pagination pagination-sm" style="margin:0">
                    <?php
                    $jml_hal = ceil($jml / $batas);
                    for ($i=1; $i <= $jml_hal; $i++) {
                    if($i != $hal) {
                        echo "<li><a href=\"?hal=$i\">$i</a></li>";
                    } else {
                        echo "<li class=\"active\"><a>$i</a></li>";
                    }
                }
                ?>
                </ul>
            </div>
            <?php
            } else {
                echo "<div style=\"float:left;\">";
                $jml = mysqli_num_rows(mysqli_query($connect, $queryJml));
                echo "Data Hasil Pencaharian : <b>$jml</b>";
                echo "</div>";
    } 
        ?>   
<?php require_once ('footer.php');?>