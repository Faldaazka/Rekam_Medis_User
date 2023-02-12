<?php
session_start();

if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Untuk mengakses halaman ini anda harus Login terlebih dahulu');document.
location='../auth/login.php'</script>";
}
?>

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
                <a href="../dokter.php" type="button" class="btn btn-primary"><span class="bi bi-arrow-bar-left"></span>Kembali</a>
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
            <td><a href='edit-resep.php?kode=" . $row['id_rekam_medis'] . "' class='btn btn-warning'><span class='glyphicon glyphicon-edit'></span> Ubah</a></td>
        <tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>