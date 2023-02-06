<?php
require 'function.php';

if ((isset($_POST["submit"]))){
 
  if (tambahpasien($_POST) > 0){
    echo "
    <script> alert('data berhasil ditambahkan!');
    document.location.href = 'pasien-tampil.php';
    </script>
    ";
  } else {
    echo "
    <script> alert('data gagal ditambahkan!');
    document.location.href = 'pasien-tampil.php';
    </script>
    ";
  }

}
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

    <title>Tambah Penyakit</title>
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

    <!-- Form Tambah Penyakit -->
    <div class="card col-md-10 p-5 pt-3">
      <div class="card-header">
        <h3>Tambah Data Pasien</h3>
      </div>
      <div class="card-body">
        <form action="" method="post">
        <div class="row mb-3">
            <label for="id_pasien" class="col-sm-2 col-form-label">Id Pasien</label>
            <div class="col-sm-5">
              <input type="text" name="id_pasien" class="form-control" id="id_pasien" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
            <div class="col-sm-5">
              <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis_kelamin</label>
            <div class="col-sm-5">
              <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tangal Lahir</label>
            <div class="col-sm-5">
              <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required>
            </div>
         <div class="row mb-3">
            <label for="no_tlp_pasien" class="col-sm-2 col-form-label">Telephone</label>
            <div class="col-sm-5">
              <input type="text" name="no_tlp_pasien" class="form-control" id="no_tlp_pasien" required>
            </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
              <input type="text" name="alamat" class="form-control" id="alamat" required>
            </div>
        <div class="row mb-3">
            <label for="tgl_dafta" class="col-sm-2 col-form-label">Tgl Daftar</label>
            <div class="col-sm-5">
              <input type="date" name="tgl_daftar" class="form-control" id="tgl_daftar" required>
            </div>
          </div>
      <div class="card-footer">
        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
        <a href = "pasien-tampil.php">
        <button type="button" class="btn btn-warning">Batal</button>
        </a>
      </div>
    </div>
    <!-- Akhir Form -->

    <script src="js/script.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

