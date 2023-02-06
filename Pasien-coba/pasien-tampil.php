<?php 

session_start();

require 'function.php';


$pasien = query("SELECT * FROM pasien");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootsrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="admin.css" />

    <!-- Responsive style -->
    <link rel="stylesheet" href="responsive.css" />

    <title>Daftar Penyakit</title>
  </head>
  <!-- Logo title -->
  <link rel="icon" href="asset/Images/Logo.png" type="image/x-icon" />
  <!-- Akhir logo title -->
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg bg-success navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index_admin.php">Selamat Datang Admin | <b>Tatanen</b></a>
        <a href="logout.php">
        <button type="button" class="btn btn-warning">Logout</button>
        </a>
      </div>
    </nav>
    <!-- Akhir Navbar -->

   <!-- Dasboard -->

   <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link text-white" href="index_admin.php"><i class="bi bi-speedometer2 mr-2"></i> Dashboard</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="daftar_penyakit.php"><i class="bi bi-bug"></i> Daftar Penyakit</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="daftar_gejala.php"><i class="bi bi-list"></i> Daftar Gejala</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="daftar_solusi.php"><i class="bi bi-lightbulb mr-2"></i> Daftar Solusi</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="daftar_saran.php"><i class="bi bi-envelope mr-2"></i> Daftar Saran</a>
            <hr class="bg-secondary" />
          </li>
        </ul>
      </div>
      
      <!-- Akhir Dasboar -->

      <div class="col-md-10 p-5 pt-3">
        <h3><i class="bi bi-bug"></i> DAFTAR PASIEN</h3>
        <hr />
        <a href="pasien-tambah.php" class="btn btn-primary mb-4"><i class="bi bi-plus-square-fill me-2"></i>Tambah Data Pasien</a>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
        
          <thead>
            <tr>
            <th scope="col">Id_Pasien</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Telephone</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tgl Daftar</th>
            <th colspan="3" scope="col">Aksi</th>
            </tr>
          </thead>
          <!-- <?php $i = 1; ?> -->
          <?php foreach($pasien as $row) : ?>
          <tbody>
            <tr>
              <!-- <th scope="row"><?= $i; ?></th> -->
              <td><?= $row["id_pasien"]; ?></td>
              <td><?= $row["nama_pasien"]; ?></td>
              <td><?= $row["jenis_kelamin"]; ?></td>
              <td><?= $row["tgl_lahir"]; ?></td>
              <td><?= $row["no_tlp_pasien"]; ?></td>
              <td><?= $row["alamat"]; ?></td>
              <td><?= $row["tgl_daftar"]; ?></td>
              
              <td><a class="btn btn-warning" href="pasien-edit.php?id=<?= $row["id_pasien"]; ?>"><i class="bi bi-pencil-square text-white"></i></td>
              <td><a class="btn btn-danger" href="pasien-hapus.php?id=<?= $row["id_pasien"]; ?>" onclick= "return confirm('Apakah Yakin Akan Menghapus Data Ini?')"><i class="bi bi-trash bg-danger text-white"></i></td>
            </tr>
          </tbody>
          <!-- <?php $i++; ?> -->
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </body>
</html>

