<?php
  include "koneksi.php";

  //TOMBOL SIMPAN
  if(isset($_POST['btn_simpan']))
  {
    //DATA DIEDIT
    if(isset($_GET['hal']) == "edit")
    {
      $edit = mysqli_query($koneksi, "UPDATE plp SET mapel = '$_POST[mapel]', materi = '$_POST[materi]', file_materi = '$_POST[file_materi]' WHERE id_mapel = '$_GET[id]'");

      //UJI JIKA EDIT DATA SUKSES
      if ($edit)
      {
        echo "<script>alert('Edit data Sukes!'); document.location='tambahmateri.php'</script>";
      }
      else
      {
        echo "<script>alert('Edit data Gagal!'); document.location='tambahmateri.php'</script>";
      }
    }
    else
    {
      //JIKA BUKAN EDIT DATA AKAN DISIMPAN BARU
      $simpan = mysqli_query($koneksi, "INSERT INTO plp (mapel, materi, file_materi)
      VALUE ('$_POST[mapel]', '$_POST[materi]', '$_POST[file_materi]')");
    }

    //UJI JIKA SIMPAN DATA SUKSES
    if ($simpan)
    {
      echo "<script>alert('Simpan data Sukes!'); document.location='tambahmateri.php'</script>";
    }
    else
    {
      echo "<script>alert('Simpan data Gagal!'); document.location='tambahmateri.php'</script>";
    }
  }

  //DEKLARASI VARIABEL UNTUK MENAMPUNG DATA YANG AKAN DIEDIT
  $vmapel = "";
  $vmateri = "";
  $vfile_materi = "";

  //TOMBOL EDIT ATAU HAPUS DIKLIK
  if(isset($_GET['hal']))
  {
    //TOMBOL EDIT
    if($_GET['hal'] == "edit")
    {
      //TAMPILKAN DATA
      $tampil = mysqli_query($koneksi, "SELECT * FROM plp WHERE id_mapel = '$_GET[id]'");
      $data = mysqli_fetch_array($tampil);

      if($data)
      {
        //JIKA DATA DITEMUKAN, MAKA DATA DITAMPUNG VARIABEL
        $vmapel = $data['mapel'];
        $vmateri = $data['materi'];
        $vfile_materi = $data['file_materi'];
      }
    }
    else if ($_GET['hal'] == "hapus")
    {
      //HAPUS DATA
      $hapus = mysqli_query($koneksi, "DELETE FROM plp WHERE id_mapel = '$_GET[id]'");

      //UJI JIKA HAPUS DATA SUKSES
      if ($hapus)
      {
        echo "<script>alert('Hapus data Sukes!'); document.location='tambahmateri.php'</script>";
      }
      else
      {
        echo "<script>alert('Hapus data Gagal!'); document.location='tambahmateri.php'</script>";
      }
    }
  }
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

    <title>Menambahkan Materi</title>
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

    <!-- WADAH MATERI -->
    <div class="container tempat mt-5">
      <h2 class="text-center judultambahmateri">MENAMBAHKAN MATERI PEMBELAJARAN</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header kotakmateri">
              MASUKKAN DATA MATERI
            </div>
            <div class="card-body">
              <!-- FORM MATERI -->
              <form method="POST">
                <div class="mb-3">
                  <label class="form-label">Mata Pelajaran</label>
                  <input type="text" value="<?= $vmapel ?>" class="form-control" placeholder="Masukkan Mata Pelajaran" name="mapel">
                </div>
                <div class="mb-3">
                  <label class="form-label">Materi</label>
                  <select class="form-select" name="materi">
                    <option value="<?= $vmateri ?>"><?= $vmateri ?></option>
                    <option>2D Objek</option>
                    <option>3D Objek</option>
                    <option>Animasi</option>
                    <option>Stop Motion</option>
                    <option>Teknik Animasi</option>
                  </select>
                </div>
                <div class="mb-2">
                  <label class="form-label">File Materi</label>
                  <input type="file" class="form-control" name="file_materi">
                </div>
                <div class="text-center">
                  <button class="btn btn-success" name="btn_simpan" type="submit">SIMPAN</button>
                  <button class="btn btn-danger" name="btn_batal" type="reset">BATAL</button>
                  <a class="btn btn-secondary" name="btn_kembali" href="materi.php">KEMBALI</a>
                </div>
              </form>
              <!-- AKHIR FORM MATERI -->
            </div>
          </div>
        </div>
      </div>
      <!-- AKHIR WADAH MATERI -->

      <!-- TABEL HASIL MATERI -->
      <div class="card mt-5 mb-5">
        <div class="card-header kotakmateri">
          DATA MATERI PELAJARAN
        </div>
        <div class="card-body">
          <table class="table table-hover table-striped table-bordered">
            <tr>
              <th>NO</th>
              <th>MATA PELAJARAN</th>
              <th>MATERI</th>
              <th>FILE</th>
              <th>TANGGAL SIMPAN</th>
              <th>AKSI</th>
            </tr>
            <!-- MENAMPILKAN DATA -->
            <?php
              $no = 1;
              $tampil = mysqli_query($koneksi, "SELECT * FROM plp ORDER BY id_mapel desc");
              while($data = mysqli_fetch_array($tampil)) :
            ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data['mapel'] ?></td>
              <td><?= $data['materi'] ?></td>
              <td><?= $data['file_materi'] ?></td>
              <td><?= $data['tanggal_simpan'] ?></td>
              <td>
                <a class="btn btn-warning" href="tambahmateri.php?hal=edit&id=<?=$data['id_mapel']?>">EDIT</a>
                <a class="btn btn-danger" href="tambahmateri.php?hal=hapus&id=<?=$data['id_mapel']?>">HAPUS</a>
              </td>
            </tr>
            <?php endwhile; ?>
            <!-- AKHIR MENAMPILKAN DATA -->
          </table>
        </div>
      </div>
    </div>
    <!-- AKHIR TABEL HASIL MATERI -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>