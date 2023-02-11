
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
   <h1 align="center"><strong>Daftar Obat</strong></h1>
        <br/>
        <h4>
        <div class="pull-right">
            &ensp;&ensp;  
            <a href="" class="button"><i class="glyphicon glyphicon-refresh"></i></a>  
            &ensp;
            <a href="" class="button2"><i class="glyphicon glyphicon-plus"></i>Tambah Pasien</a>      
        </div>
        </h4>   
        <div class="pull-left">
                &ensp;&ensp;  
                <a href="../pendaftaran.php" type="button" class="btn btn-primary"><span class="bi bi-arrow-bar-left"></span>Kembali</a>
        </div>
        <div class ="pull-right" style="margin-bottom: 20px;">
            <form class="form-inline" action="" method="post">
        
                <input type="text" name="pencarian" class="form-control" placeholder="Pencarian" autofocus>
        
                <button type="submit" name="cari" class="button btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          
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
                                <td><a href='edit-obat.php?kode=<?=$data['id_obat']?>' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td>
                                </td>
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
        mysqli_query($connect, "DELETE FROM pasien WHERE id_pasien='$_GET[kode]'");
        
        echo "Data berhasil dihapus";
        echo "<meta http-equiv=refresh content=2;URL='pasien.php'>";

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
</div>   
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
