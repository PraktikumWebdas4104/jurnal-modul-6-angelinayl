<?php
error_reporting(0);

	$host = "localhost";
	$user = "root";
	$Password = "";
	$database = "universitas";

	$conn=mysqli_connect($host, $user, $Password, $database);

	if (isset($_POST['kirim'])) {
		$Nama 			= $_POST['Nama'];
		$NIM 			= $_POST['NIM'];
		$Kelas			= $_POST['Kelas'];
		$JenisKelamin	= $_POST['JenisKelamin'];
		$Hobi       	= $_POST['Hobi'];
		$Fakultas		= $_POST['Fakultas'];
		$Alamat			= $_POST['Alamat'];
		$Password 		= $_POST['Password'];

		if (strlen($Nama)<35) {
				if (strlen($NIM)==10) {
					
						$qry = $conn -> query("INSERT INTO `univ`(`Nama`, `NIM`, `Kelas`, `JenisKelamin`, `Hobi`, `Fakultas`, `Alamat`, `Password`) VALUES  ('$Nama', '$NIM', '$Kelas', '$JenisKelamin', '$Hobi', '$Fakultas', '$Alamat', '$Password)");
						
						echo "Regristrasi Berhasil";
						echo "<button><a href='login.php'>Log In</button></a>";
					}else{
						echo "Regristrasi Gagal";
					}
			}else{
				echo "Regristrasi Gagal";
			}
			}else{
				echo "Regristrasi Gagal";
			}
	
	
?>