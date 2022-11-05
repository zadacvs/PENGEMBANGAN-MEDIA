<?php
    //KONEKSI DATABASE
  $server = "localhost";
  $user = "root";
  $password = "";
  $database = "plpsmekten";

  //BUAT KONEKSI
  $koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>