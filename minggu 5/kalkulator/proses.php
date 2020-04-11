<?php
if(isset($_POST['proses'])){
	$a = $_POST['a'];
	$b = $_POST['b'];
	$opsi = $_POST['opsi'];

	if($opsi=='tambah'){
		$c = $a + $b;
		echo"
		Hasil : <br> $a + $b = $c";
	}
	else if($opsi=='kurang'){
		$c = $a - $b;
		echo" Hasil : <br> $a - $b = $c";
	}
	else if($opsi=='kali'){
		$c = $a * $b;
		echo" Hasil : <br> $a * $b = $c";
	}
	else if($opsi=='bagi'){
		$c = $a / $b;
		echo"Hasil : <br> $a : $b = $c";
	}
	else{
		echo" Anda Belum Memilih Operasi. Mohon Pilih Ulang !";
	}
}

?>