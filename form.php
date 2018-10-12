<h1> <b> <center> Aplikasi Pendaftaran Mahasiswa Baru </center></b></h1>

<center>
<form method="POST">
	<table>
		<tr>
			<td> Nama </td>
			<td>:</td>
			<td><input type="text" name="Nama" length="35"></td>
		</tr>

		<tr> 
			<td> NIM </td>
			<td>:</td>
			<td><input type="text" name="NIM" length="10"></td>
		</tr>

		<tr>
			<td> Kelas </td>
			<td>:</td>
			<td><input type="radio" name="Kelas" value="MI4101"> MI4101 </td>
			<td><input type="radio" name="Kelas" value="MI4102"> MI4102 </td>
			<td><input type="radio" name="Kelas" value="MI4103"> MI4103 </td>
			<td><input type="radio" name="Kelas" value="MI4104"> MI4104 </td>
		</tr>

		<tr>
			<td> Jenis Kelamin </td>
			<td> : </td>
			<td><input type="radio" name="JenisKelamin" value="Laki-laki"> Laki-laki 		
			<input type="radio" name="JenisKelamin" value="Perempuan">Perempuan</td>
		</tr>

		<tr> 
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="Menyanyi">Menyanyi
			<input type="checkbox" name="hobi" value="Menari">Menari
			<input type="checkbox" name="hobi" value="Bersepeda">Bersepeda
			<input type="checkbox" name="hobi" value="Berenang">Berenang</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="Fakultas">
				<option value="1">Pilih Fakultas</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
				<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>

			</select>
			</td>
		</tr>

		<tr> 
			<td> Alamat </td>
			<td>:</td>
			<td><textarea name="Alamat"></textarea></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="passsword" name="pass"></td>
		</tr>

		<tr>
			<td><input type="submit" name="kirim" value="Kirim"></td>
		</tr>

</table>
</form>
</center>


<?php 
if (isset($_POST['kirim']))
	include 'login.php';
 ?>