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

    <title>Beranda</title>
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
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#tentang">Tentang</a></li>
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

    <!-- JUMBOTRON -->
    <section class="jumbotron text-center mt-5">
      <img class="mt-3" src="img/logo.png" alt="" width="200">
      <h1 class="display-4">MULTIMEDIA</h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,32L48,42.7C96,53,192,75,288,106.7C384,139,480,181,576,186.7C672,192,768,160,864,144C960,128,1056,128,1152,112C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- AKHIR JUMBOTRON -->

    <!-- MATERI -->
    <section class="materi" id="materi">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2>MATERI PEMBELAJARAN</h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,224L80,229.3C160,235,320,245,480,218.7C640,192,800,128,960,96C1120,64,1280,64,1360,64L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </section>
    <!-- AKHIR MATERI -->

    <!-- TENTANG -->
    <section class="kotakmateri" id="tentang">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Tentang</h2>
          </div>
        </div>
        <div class="row text-center">
          <div class="col">
            <p>ZADA CEINDEA VICA SOEDJONO</p>
            <p>19050974025</p>
            <p>S1 PTI 2019 A</p>
          </div>
          <div class="col">
            <p>MUHAMMAD MIRZA ERLANGGA</p>
            <p>19050974001</p>
            <p>S1 PTI 2019 A</p>
          </div>
          <div class="col">
            <p>MADELIN CHRISTINA PURBA</p>
            <p>19050974038</p>
            <p>S1 PTI 2019 A</p>
          </div>
          <div class="col">
            <p>FARAH AKMALIA ROSE</p>
            <p>19050974038</p>
            <p>S1 PTI 2019 A</p>
          </div>
        </div>
      </div>
    </section>
    <!-- AKHIR TENTANG -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>