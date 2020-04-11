<!DOCTYPE html>
<html>
<head>
	<title> Entry Data Mahasiswa </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<form method="POST" class="form" action="index.php">
		<div class="head">
			<h2> Masukan Data Nilai Anda </h2>
		</div>
		<table class="tabel">
			<tr>
				<td>NIM</td>
				<td class="a">:</td>
				<td><input type="text" name="nim" placeholder="Masukkan NIM" id="input"></td>
			</tr>
			<tr>
				<td>Program Study</td>
				<td class="a">:</td>
				<td>
					<select name="opsi" class="select">
						<option name='opsi' value=''>-- Pilih Program Studi --</option>
						<option name='opsi' value='A11 - Teknik Informatika S1'> A11 - Teknik Informatika S1</option>
						<option name='opsi' value='A12 - Sistem Informasi S1'> A12 - Sistem Informasi S1</option>
						<option name='opsi' value='A22 - Teknik Informatika D3'> A22 - Teknik Informatika D3</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nilai Tugas</td>
				<td class="a">:</td>
				<td><input type="text" name="ntugas" placeholder="1-100" id="input"></td>
			</tr>
			<tr>
				<td>Nilai UTS</td>
				<td class="a">:</td>
				<td><input type="text" name="nuts" placeholder="1-100" id="input"></td>
			</tr>
			<tr>
				<td>Nilai UAS</td>
				<td class="a">:</td>
				<td><input type="text" name="nuas" placeholder="1-100" id="input"></td>
			</tr>
			<tr>
				<td>Catatan Khusus</td>
				<td class="a">:</td>
				<td>
					<div class="check">
						<p><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%</p>
						<p><input type="checkbox" name="catatan[]" value="Interaktif di Kelas"/>Interaksi di Kelas</p>
						<p><input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas</p>
					</div>
				</td>
			</tr>
			<tr>
				<td><button type="submit" name="simpan" id="input">SIMPAN</button></td>
			</tr>
		</table>
	</form>
	<br>
	<br>
	<br>
	<div class="final">
		<?php include"proses.php";?>
	</div>
</body>
</html>