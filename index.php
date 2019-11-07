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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

    <title>Pengaturan Nutrisi</title>

<!-- ========================================= -->

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
              <li class="nav-item">
              <a class="nav-link" href="logout.php ">Logout
              </a>
            </li>
          </ul>
        </div>
       </div>
      </nav>
      </section>
      <!-- navbar -->

	<!-- ---------------------------------------------------------------------------------->

	<!-- junbotron -->
	<section id="head" >
	  <div class="head">
	  <div class="container text-center text-dark text-monospace">
	  <h1 class="display-4  p-3 mb-2 bg-white">Pengaturan Cahaya Tanaman Hidroponik</h1>
	  <p class="lead  p-3 mb-2 bg-white">Penerapan Cahaya LED pada Tanaman Hidroponik sebagai Pengganti Cahaya Matahari.</p>
	  <hr class="my-4">
	  <p><br></p>
	  <a class="btn btn-primary btn-lg" href="pengaturan.php" role="button">Uji Aplikasi</a>
	  </div>
	  </div>
	</div>
	</section>
	<!-- junbotron -->


	<!-- layout1 -->
<!-- 	<section id="konten" class="konten ">
	<div class="container text-center pt-4 pb-5">
		<div class="row mb-4">
			<div class="col  text-white">
				<h1>CONTENT</h1>
			</div>
		</div>

		<div class="row">
			<div class="col text-center">
				<a href="">
					<img src="gambar/home-academy.png">
					<h5>Pengaturan</h5>
					<p></p>
				</a>
			</div>
			<div class="col ">
				<a href="">
					<img src="gambar/home-challenge.png">
					<h5>Statistik</h5>
				</a>
			</div>
			<div class="col ">
				<a href="">
					<img src="gambar/home-job.png">
					<h5> Waktu Panen</h5>
				</a>
			</div>
		</div>

	--------
	</div>
</section> -->

	<!-- layout2 -->

	<section id="about" class="about bg-dark ">
	<div class="container text-center pb-5 pt-4">
		<div class="row mb-4 pt-5">
			<div class="col text-white">
				<h1>About</h1>
			</div>
		</div>


		<div class="row">
			<div class="col">

			<div class="card mb-3" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="gambar/user-profile.jpg" class="card-img" alt="...">
			    </div>
			   	<div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Muh.Yusril Abni</h5>
			        <p class="card-text">J3D117164</p>
			        <p class="card-text">TEK 2A P1</p>
			        <p class="card-text">Kelompok 1</p>
			        <p class="card-text">Projek :</p>
			        <p class="card-text">Pengaturan Cahaya Tanaman Hidroponik</p>
			    </div>
			  </div>
			</div>
			</div>
			</div>

			<div class="col">
			<div class="card mb-3" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="gambar/user-profile.jpg" class="card-img" alt="...">
			    </div>
			   	<div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Sava Sahira</h5>
			        <p class="card-text">J3D217181</p>
			        <p class="card-text">TEK 2A P1</p>
			        <p class="card-text">Kelompok 1</p>
			        <p class="card-text">Projek :</p>
			        <p class="card-text">Pengaturan Cahaya Tanaman Hidroponik</p>
			    </div>
			  </div>
			</div>
			</div>
			</div>
		</div>

		<div class="row">
			<div class="col">

			<div class="card mb-3" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="gambar/user-profile2.jpg" class="card-img" alt="...">
			    </div>
			   	<div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Novky Nurwindy</h5>
			        <p class="card-text">J3D117067</p>
			        <p class="card-text">TEK 2A P1</p>
			        <p class="card-text">Kelompok 1</p>
			        <p class="card-text">Projek :</p>
			        <p class="card-text">Pengaturan Cahaya Tanaman Hidroponik</p>
			    </div>
			  </div>
			</div>
			</div>
			</div>

			<div class="col">
			<div class="card mb-3" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="gambar/user-profile2.jpg" class="card-img" alt="...">
			    </div>
			   	<div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Neng Wina Sumiar</h5>
			        <p class="card-text">J3D117093</p>
			        <p class="card-text">TEK 2A P1</p>
			        <p class="card-text">Kelompok 1</p>
			        <p class="card-text">Projek :</p>
			        <p class="card-text">Pengaturan Cahaya Tanaman Hidroponik</p>
			    </div>
			  </div>
			</div>
			</div>
			</div>
		</div>

</section>



<!-- <section id="footer bg-dark text-white" class="footer"> -->
<footer>
	<div class="container text-center bg-light text-dark pt-3">
	<div class="row" >
		<div class="col ">
			<p>Copyright2019 <br> 
			Made In Kelompok 1</p>	
		</div>
	</div>
	</div>
</footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>