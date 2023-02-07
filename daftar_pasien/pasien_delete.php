<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA PASIEN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css table -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--koneksi validation.js -->
    <script src="validation.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <!--icon title web -->
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
     <!--warna baris table awal -->
    <style>
        #thead>tr>th{ color: white; }
    </style>
</head>
<body>
<h2 align="center">DAFTAR PASIEN</h2>
<div style="margin-top: 20px;padding-bottom: 20px;">  
</div>

<div class="container">
    <form action="delete.php" method="post">
    <form action="update.php" method="post">

    <input type="submit" name="deleteBtn" id="deleteBtn" class="btn btn-success" onclick="return validateForm();" value="Hapus" style="float: right"/>
    <input type="submit" name="addBtn" id="addBtn" class="btn btn-add" onclick="return validateForm();" value="Tambah" style="float: right"/>

    <table class="table table-bordered">
        <thead id="thead" style="background-color:#1573ff">
        <tr>
        <th>ID Pasien</th>
        <th>Nama Pasien</th>
        <th>Jenis Kelamin</th>
        <th>Tgl Lahir</th>
        <th>no_tlp</th>
        <th>alamat</th>
        <th>pilih</th>

        </tr>
        </thead>
        <tbody>
        <?php
        include "database/koneksi.php";
        include_once "Common.php";
        $common = new Common();
        $records = $common->getAllRecords($connect);
        while ($record = $records->fetch_object()) {
                $pasienid = $record->id_pasien;
                $nama = $record->nama_pasien;
                $JK = $record->jenis_kelamin;
                $tgl = $record->tgl_lahir;
                $kontak = $record->no_tlp_pasien;
                $alamat = $record->alamat;?>
                <tr>
                    <td><?php echo $pasienid;?></td>
                    <td><?php echo $nama;?></td>
                    <td><?php echo $JK;?></td>
                    <td><?php echo $tgl;?></td>
                    <td><?php echo $kontak;?></td>
                    <td><?php echo $alamat;?></td>
                    <td><input type="checkbox" name="recordsCheckBox[]" id="recordsCheckBox" value="<?php echo $pasienid;?>"></td>
                </tr>
                <?php
               
            }
        ?>
        </tbody>
    </table>
    
    </form>
</div>
</body>
</html>