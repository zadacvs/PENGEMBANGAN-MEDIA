<?php
  include"koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css"/>

    <title>Materi</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <section class="navbar_beranda fixed-top">
      <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #ffffff;">
        <div class="container">
          <a class="navbar-brand" href="index.php">WEBSITE PENDIDIKAN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kelas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="materi.php">Materi</a></li>
                  <li><a class="dropdown-item" href="kuis.php">Kuis</a></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar/Masuk</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- AKHIR NARVBAR -->

    <!-- CARD 1 -->
    <section class="container tempat mt-5">
      <div class="card-header">
        <h3>MASUKKAN MATERI <a href="tambahmateri.php" class="btn btn-primary">TAMBAH</a></h3>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card tempat_materi">
                <div class="card-body">
                  <!-- MENAMPILKAN DATA -->
                  <?php
                    $tampil = mysqli_query($koneksi, "SELECT * FROM plp");
                    while($data = mysqli_fetch_array($tampil)) :
                  ?>
                    <h5 class="card-title"><?= $data['mapel'] ?></h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <?php endwhile; ?>
                  <!-- AKHIR MENAMPILKAN DATA -->
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card tempat_materi">
                <div class="card-body">
                  <!-- MENAMPILKAN DATA -->
                  <?php
                    $tampil = mysqli_query($koneksi, "SELECT  FROM plp");
                    while($data = mysqli_fetch_array($tampil)) :
                  ?>
                    <h5 class="card-title"><?= $data['mapel'] ?></h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <?php endwhile; ?>
                  <!-- AKHIR MENAMPILKAN DATA -->
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card tempat_materi">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary d-grid gap-2">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card tempat_materi">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary d-grid gap-2">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card tempat_materi">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary d-grid gap-2">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card tempat_materi">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary d-grid gap-2">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card tempat_materi">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary d-grid gap-2">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card tempat_materi">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary d-grid gap-2">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- AKHIR CARD 1 -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>