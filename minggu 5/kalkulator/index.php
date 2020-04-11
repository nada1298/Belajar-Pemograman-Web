<!DOCTYPE html>
<html>
<head>
	<title> Kalkulator PHP Dasar </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
		<form method='POST' action='index.php' class='form'>
			<h2> KALKULATOR </h2>
			<input type='text' name='a' placeholder='Masukkan Angka Pertama' id='input'>
			<input type='text' name='b' placeholder='Masukkan Angka Kedua' id='input'>
			<select name='opsi' class='select'>
				<option name='opsi' value=''>-- PILIH OPERASI --</option>
				<option name='opsi' value='tambah'> Tambah (+) </option>
				<option name='opsi' value='kurang'> Kurang (-) </option>
				<option name='opsi' value='kali'> Kali (*) </option>
				<option name='opsi' value='bagi'> Bagi (:) </option>
			</select>
			<input type='submit' name='proses' value='Hitung' Id='input'>
			<div class="hasil">
				<?php include"proses.php";?>
			</div>
		</form>
</html>