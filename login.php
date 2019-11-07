<?php
session_start();

		if (isset($_SESSION["login"]) ) {
		header("Location:index.php");
		exit;
	}

require 'konek.php';

	if (isset($_POST["login"]) ){

		$email = $_POST["email"];
		$password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM `tbl_user` WHERE 					email = '$email'");

		if (mysqli_num_rows($result) ===1 ){

			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"]) ){
				
				//set sesion
				$_SESSION["login"] = true;
				header("Location:index.php");
			exit;
			}
			else{
				echo "<script>
				alert('emai/password salah!');
				</script>";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login!</title>
  </head>
  <body>



	  	<!-- navbar -->
		    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		    <div class="container">
		        <nav aria-label="breadcrumb">
		  <a class="navbar-brand" href="#">PCTH</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		 </div>
		</nav>
		<!-- navbar -->


<section id="layout" class="layout">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="container">
      <h1 class="display-4">Pengaturan Cahaya Tanaman Hidroponik</h1>
      <p class="lead">Penerapan Cahaya LED pada Tanaman Hidroponik sebagai Pengganti Cahaya Matahari..</p>
    </div>
  </div> 
</div>
</section>

		<section id="login" class="login">
		<div class="container mb-4 pb-4">
		<form action="" method="post">
		  <div class="form-group">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
		  </div>
		  <button type="submit" class="btn btn-primary" name="login">Submit
		  </button>
		  <p><br>Jika belum mempunyai data user<br>
		  <a class="btn btn-secondary btn-sm" href="registrasi.php">Buat data</a>
		  </p>
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