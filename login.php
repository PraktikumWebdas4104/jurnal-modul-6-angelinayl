<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="NIM"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="Password"></td>
		</tr>
	</table><br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="submit" value="LOGIN"> &nbsp;
			<button><a href="form.php">REGISTRASI</a></button>
	
</form>

<?php
	if (isset($_POST['submit'])) {
		session_start();

		include"koneksi.php";

		$NIM = $_POST['NIM'];
		$Password = $_POST['Password'];

		$sql = "SELECT NIM, Password FROM univ WHERE NIM='$NIM'";

		$qry = mysqli_query($conn,$sql);
		$row = mysqli_fetch_row($qry);

		if ($NIM == $row[0]) {
			if ($Password == $row[1]) {
				$_SESSION["berhasil_login"]=1;
        		$_SESSION["username"]=$row[0];
        		$_SESSION["Password"]=$row[1];

        		echo "SELAMAT LOGIN SUKSES";
        		
			}
			else{
				echo "MAAF PASSWORD YANG ANDA MASUKKAN SALAH";
			}
		}
		else{
			echo "MAAF NIM YANG ANDA MASUKKAN SALAH";
		}
	}
?>