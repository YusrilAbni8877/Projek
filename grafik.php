<?php
session_start();

  if (!isset($_SESSION["login"]) ) {
    header("Location:login.php");
    exit;
  }


require 'konek.php';
?>
<!doctype html>
<html lang="en">
  <head>

    <script type="text/javascript" src= "FC/js/fusioncharts.js"></script>
  <script type="text/javascript">
    FusionCharts.ready(
      function(){
        var G1 = new FusionCharts(
        {
          "type":"line",
          "renderAt":"posisiX",
          "width":"800",
          "height":"500",
          "dataFormat" : "json",
          "dataSource":{
            "chart" :{
              "caption": "Monthly Revenue",
              "subCaption":"Tanaman Hidroponik",
              "xAxisName":"Week",
              "yAxisName": "revenue ($)"
            },
            "data":[
              {"label" : "Minggu 1","value":"200"},
              {"label" : "Minggu 2","value":"270"},
              {"label" : "Minggu 3","value":"100"},
              {"label" : "Minggu 4","value":"250"},
              {"label" : "Minggu 5","value":"100"}
            ]

          }
        }
          )
        G1.render()
      } 
      )
  </script>
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
        <li class="breadcrumb-item active" aria-current="page">Grafik</li>
      </ol>
    </nav>
    <div class="container">
      <h1 class="display-4">Pengaturan Cahaya Tanaman Hidroponik</h1>
      <p class="lead">Penerapan Cahaya LED pada Tanaman Hidroponik sebagai Pengganti Cahaya Matahari..</p>
    </div>
  </div> 
</div>
</section>


<!-- <section class="grafik" id="grafik">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">Hasil Grafik PCTH</div>
            <div class="panel-body"><iframe src="linecharts.php" width="100%" height="400%"></iframe> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 -->
  <section class="grafik" id="grafik">
  <div class="container text-center position-absolute">
  <div id="posisiX"></div>
  </div>
</section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>