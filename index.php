<?php
  session_start();
  require_once 'apps/config/config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>Home - SPK ...</title>
  </head>

  <body>
    <header class="fixed-nav sticky-footer" id="page-top" >
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" style="margin-left:40px;" id="judul" href="index.php">SPK - ...</a>

        <ul class="navbar-nav bg-dark " id="exampleAccordion">
          <a class="nav-link" href="index.php">
            <span class="nav-link-text">Home</span>
          </a>

          <a class="nav-link" href="data_kriteria.php">
            <span class="nav-link-text">Data Kriteria</span>
          </a>

          <a class="nav-link" href="data_alternatif.php">
            <span class="nav-link-text">Data Alternatif</span>
          </a>

          <a class="nav-link" href="perhitungan.php">
            <span class="nav-link-text">Perhitungan</span>
          </a>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-3">
            <a class="navbar-brand">Klp 2 - SPK A</a>
          </li>
        </ul>
      </nav>
    </header>
    
    <section class="banner mt-4" style="height: 450px;">
      <div class="row">
        <div class="col-6 text-center"  style="color: #525252; ">
          <h1 style="margin-top:100px; font-size:40px;">Sistem Penunjang Keputusan</h1>
          <h2 style="font-size:40px;">....</h2>
          <h3 style="font-size:30px;">...</h3>
          <h3 style="font-size:30px;">Kelompok 2 - SPK A</h3>
          <p style="font-size:25px;">1. Iqbal Fitrahul Ramadhan (2011521017)</p>
          <p style="font-size:25px;">2. </p>
          <p style="font-size:25px;">3. </p>
          <p style="font-size:25px;">4. </p>
        </div>  

        <div class="col-5 mt-5">
          <img src="assets/img/restaurant.png" alt="restaurant" width="400px" style="margin-top: 50px;">
        </div>  
      </div>
    </section>
  </body>

</html>