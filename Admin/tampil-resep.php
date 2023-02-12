<?php require_once ('header.php');?>

    <div class="container">
        <h1 align="center"><strong>Resep Obat</strong></h1>
        <br /><br /><br />
        <div class="container">
            <h4>
                <div class="pull-right">
                    &ensp;&ensp;&ensp;&ensp;
                    <a href="" class="button1"><i class="glyphicon glyphicon-refresh"></i></a>
                    &ensp;&ensp;
                </div>
            </h4>
            <div class="pull-left">
                &ensp;&ensp;
            </div>
            
        </div>
        <br/>
        <table class="table table table-striped table-hover table table-bordered">
            <thead class="">
                <tr>
                    <th>No.</th>
                    <th>Nama Pasien</th>
                    <th>Departemen</th>
                    <th>Tgl Pemeriksaan</th>
                    <th>Obat</th>
                    <th colspan="2"><i class="glyphicon glyphicon-cog"><i></th>

                </tr>
            </thead>
            <tbody>
                <?php
                include "../database/koneksi.php";
                $no = 1;
                $query = "SELECT * FROM rekam_medis
                INNER JOIN pasien ON rekam_medis.id_pasien = pasien.id_pasien
                INNER JOIN departemen ON rekam_medis.id_departemen = departemen.id_departemen
                ";
                $sql_rekdis = mysqli_query($connect, $query) or die(mysqli_error($connect));
                while ($row = mysqli_fetch_array($sql_rekdis)) {
                    echo "
        <tr>
            <td>" . $no++ . ".</td>
            <td>" . $row['nama_pasien'] . "</td>
            <td>" . $row['nama_departemen'] . "</td>
            <td>" . $row['tgl_pemeriksaan'] . "</td>
            <td>";
                    $sql_obat = mysqli_query($connect, "SELECT * FROM rm_obat JOIN obat ON rm_obat.id_obat = obat.id_obat WHERE id_rekam_medis = '" . $row['id_rekam_medis'] . "'") or die(mysqli_error($connect));
                    while ($data_obat = mysqli_fetch_array($sql_obat)) {
                        echo $data_obat['nama_obat'] . "<br>";
                    }
                    echo "</td>
            <td><a href='?kode=" . $row['id_rekam_medis'] . "' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td>
            <td><a href='resep/edit-resep.php?kode=" . $row['id_rekam_medis'] . "' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td>
        <tr>";
                }
                ?>
            </tbody>
        </table>
        <?php
        include "../database/koneksi.php";

        if (isset($_GET['kode'])) {
            mysqli_query($connect, "DELETE FROM rekam_medis WHERE id_rekam_medis='$_GET[kode]'");

            echo "Data berhasil dihapus";
            echo "<meta http-equiv=refresh content=2;URL='../tampil-resep.php'>";
        }
        ?>
    </div>

    <?php require_once ('footer.php');?>