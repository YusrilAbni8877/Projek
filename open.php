<?php 
 // session_start();

 //  if (!isset($_SESSION["login"]) ) {
 //    header("Location:login.php");
 //    exit;
 //  }
  require 'konek.php';

  $tanaman = query("SELECT * FROM `tbl_tanaman`");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link rel="stylesheet" href="style.css">

    <title>Pengaturan</title>
  </head>
  <body>


<!-- navbar -->
        <section id="navbar">
          <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
        <a class="navbar-brand" href="index.php">PCTH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Content
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="crud.php">Buat Data</a>
                <a class="dropdown-item" href="pengaturan.php">Pengaturan</a>
                <a class="dropdown-item" href="grafik.php">Grafik</a>
                <a class="dropdown-item" href="waktu.php">Waktu Panen</a>
                <a class="dropdown-item" href="#">Download</a>
              </div>
            </li>
          </ul>
        </div>
       </div>
      </nav>
      </section>
  <!-- navbar -->



<section id="layout" class="layout">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb text-right">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Read,Update&Delete</li>
      </ol>
    </nav>
    <div class="container">
      <h1 class="display-4">Pengaturan Cahaya Tanaman Hidroponik</h1>
      <p class="lead">Penerapan Cahaya LED pada Tanaman Hidroponik sebagai Pengganti Cahaya Matahari..</p>
    </div>
  </div> 
</div>
</section>




      <section id="lihat" class="lihat">
      <table class="table">
      <div class="container">
      <thead class="thead-light">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Aksi</th>
          <th scope="col">Nama Tanaman</th>
          <th scope="col">Jumlah Tanaman</th>
          <th scope="col">Usia</th>
          <th scope="col">Id_usr</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($tanaman as $row): ?>
        <tr>
          <th scope="row"><?= $i ?></th>
          <td><a href="hapus.php?idTanaman=<?= $row["idTanaman"];?>">      <img src="gambar/bin.png" style="width:25px "></a> | 
              <a href=""><img src="gambar/share_2.png" style="width:25px "></a></td>
          <td><?= $row["namaTanaman"];?></td>
          <td><?= $row["jmlTanaman"];?></td>
          <td><?= $row["usia"];?></td>
        <!--  <td><?= $row["id_usr"]?></td> -->
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
      </tbody>
    </div>
    </table>
      </section>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>