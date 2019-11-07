<?php 
//Koneksi PHP
$conn = mysqli_connect("sql110.epizy.com","epiz_24747452","217FCV1cTqzs","epiz_24747452_dbhidroponik"); 
//namahost,username,password,namadatabase


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows= [];
	 while( $row = mysqli_fetch_assoc($result) ){
	 	$rows[] = $row;
	 }
	 return $rows;
}

function tambah($data){
	global $conn;
	$namaTanaman =htmlspecialchars($data["namaTanaman"]);
    $jmlTanaman = htmlspecialchars($data["jmlTanaman"]);
    $usia = htmlspecialchars($data["usia"]);
    // $id_usr =$data["id_usr"];
  $query = "INSERT INTO `tbl_tanaman` 
                  VALUES 
                  ('','$namaTanaman','$jmlTanaman','$usia')
              ";
              mysqli_query($conn , $query);

              return mysqli_affected_rows($conn);
}	


function hapus($idTanaman){
	global $conn;
	mysqli_query($conn, "DELETE FROM `tbl_tanaman` WHERE idTanaman=$idTanaman");
	return mysqli_affected_rows($conn);
}


// ---------------------------------------------------------------------
	function registrasi($data){
		global $conn;

		$username = strtolower(stripslashes($data["username"]));

		$email = stripslashes($data["email"]);

		$password = mysqli_real_escape_string($conn, $data["password"]);

		$password2 = mysqli_real_escape_string($conn,$data["password2"]);


		//cek username sudah ada apa belum
		$result = mysqli_query($conn, "SELECT username FROM `tbl_user` WHERE username ='$username'");

				if(mysqli_fetch_assoc($result)){
					echo "<script>
						alert('username sudah terdaftar!')
					</script>";
					return false;
				}


		$result = mysqli_query($conn, "SELECT email FROM `tbl_user` WHERE email ='$email'");

				if(mysqli_fetch_assoc($result)){
					echo "<script>
						alert('email sudah terdaftar!')
					</script>";
					return false;
				}
		//cek konfirmasi password
		if ($password !== $password2){
			echo "<script>
					alert('konfirmasi password tidak sesuai!');
			</script>";
			return false;
		}
		
		// enskripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		//tambahkan ke database
		mysqli_query($conn, "INSERT INTO `tbl_user` VALUES('','$username','$password','$email')");

		return mysqli_affected_rows($conn);

	}
?>
