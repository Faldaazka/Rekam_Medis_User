
<?php require_once ('header.php');?>

    <div class="container">
    <h1 align="center"><strong>Daftar User</strong></h1>
    <br/>

    <div class="container">
        <h4>
        <div class="pull-right">
                &ensp;&ensp;  
                &ensp;
                <a href="" class="button1"><i class="glyphicon glyphicon-refresh"></i></a>  
                &ensp;
                <a href="user/tambah-user.php" class="button2"><i class="glyphicon glyphicon-plus"></i>Tambah User</a>      
            </div>
        </h4>
            </form>
        </div>
   

        <table class="table table table-striped table-hover table table-bordered">
        <thead class="">
        <tr>
            <th>No.</th>
            <th >Nama User</th>
            <th >Username</th>
            <th >Level</th>
            <th colspan="2"><i class="glyphicon glyphicon-cog"><i></th>

        </tr>
        </thead>
        <tbody>
            
        <?php
        require "../database/koneksi.php";
        $no=1;
        $ambildata = mysqli_query($connect,"select * from tb_user");
        while($row = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td>$no</td>
                <td>$row[nama_user]</td>
                <td>$row[username]</td>
                <td>$row[level]</td>
                <td><a href='?kode=$row[id_user]' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td>
                <td><a href='user/edit-user.php?kode=$row[id_user]' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td>
            <tr>";
            $no++;
        }
        ?>
        </tbody>
        </table>
        <?php
        include "../database/koneksi.php";

        if(isset($_GET['kode'])){
        mysqli_query($connect, "DELETE FROM user WHERE id_user='$_GET[kode]'");
        
        echo "Data berhasil dihapus";
        echo "<meta http-equiv=refresh content=2;URL='tampil-user.php'>";

        }
    ?>
</div> 
</div>


<?php require_once ('footer.php');?>