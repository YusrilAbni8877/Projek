<?php 
 session_start();

  if (!isset($_SESSION["login"]) ) {

    header("Location:login.php");
    exit;
  }
  require 'konek.php';
  //logic
  //cek apakah tombol submit sudah ditekan atau tidak
  if(isset($_POST["simpan"]) ){
    if (tambah($_POST) > 0){
      echo "
      <script>
         alert ('data berhasil ditambahkan');
         </script>
         ";
   
    }else {
      echo "
        <script>
         alert ('data gagal ditambahkan');
         </script>
         ";
    }
  }



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
        <li class="breadcrumb-item active" aria-current="page">Buat Data</li>
      </ol>
    </nav>
    <div class="container">
      <h1 class="display-4">Pengaturan Cahaya Tanaman Hidroponik</h1>
      <p class="lead">Penerapan Cahaya LED pada Tanaman Hidroponik sebagai Pengganti Cahaya Matahari..</p>
    </div>
  </div> 
</div>
</section>




      <section id="formulir" class="formulir">
      <div class="container text-white pt-4">
      <form action="" method="post">
      <div class="col ml-4">
        <div class="row">
          <div class="form-group">
        <label for="namaTanaman">Nama Tanaman</label>
        <input type="text" class="form-control" placeholder="Inpukan Nama" name="namaTanaman" id="namaTanaman" required>
      </div>
      </div>
      </div>

      <div class="col ml-4">
        <div class="row">
          <div class="form-group">
        <label for="jmlTanaman">Jumlah Tanaman</label>
        <input type="text" class="form-control" placeholder="Jumlah Tanaman" name="jmlTanaman" id="jmlTanaman" required>
      </div>
      </div>
      </div>

      <div class="col ml-4">
        <div class="row">
          <div class="form-group">
        <label for="usia">Usia Tanaman</label>
        <input type="text" class="form-control" placeholder="Usia/Minggu" name="usia" id="usia" required>
      </div>
      </div>
      </div>
    
 <!--    <div class="col ml-4">
    <div class="row ">
    <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-12 pt-0">Jumlah Tanaman :</legend>
      <div class="col-sm-12">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jmlTanaman[]" id="gridRadios1" value="3" disabled="">
          <label class="form-check-label" for="gridRadios1">
            3
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jmlTanaman[]" id="gridRadios2" value="4" disabled="">
          <label class="form-check-label" for="gridRadios2">
            4
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="jmlTanaman" id="gridRadios3" value="5" checked>
          <label class="form-check-label" for="gridRadios3">
            5
          </label>
        </div>
      </div>
    </div>
  </fieldset>         
  </div>
  </div> -->

<!--     <div class="col ml-4">
      <div class="row">
   <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-12 pt-0">Umur Tanaman:</legend>
      <div class="col-sm-12">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="usia[]" id="umurRadio1" value="1 Miinggu" checked>
          <label class="form-check-label" for="umurRadio1">
            1 Miinggu
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="usia[]" id="umurRadio2" value="2 Minggu" checked>
          <label class="form-check-label" for="umurRadio2">
            2 Minggu
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="usia[]" id="umurRadio3" value="3 Minggu" checked>
          <label class="form-check-label" for="umurRadio3">
            3 Minggu
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  </div>
 </div> -->

<button class="btn btn-primary ml-4" type="submit" name="simpan">Simpan </button>
    </form>
  </div>
  </section>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>