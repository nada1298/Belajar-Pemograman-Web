<!DOCTYPE html>
<html>
	<head>
		<title>Faktorial | For </title>
	</head>
		<br><br>
	<body>
		<form name="formf" method="POST">
			<table>
				<tr>
					<td>Masukkan Angka</td>
					<td><input type="text" name="number" placeholder="0-10" size="7"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="hitung" value="Hasil"/></td>
				</tr>
			</table>
<?php
error_reporting(0);
if($_POST['hitung']!=''){
            $number=$_POST['number'];

            function faktorial($number){
            if($number<=1){
                        $hitung=1;
                        return $hitung;
            }elseif($number>1){
                        for($i=1; $i<=$number; $i++){
                             $hitung=$number * faktorial($number-1);
                        }
                        return $hitung;
            }
}
         echo "Angka :".$number."<br>";
   echo "Faktorial dari "." ".$number." "."adalah :"." ".faktorial($number);
}
?>
		</form>
</body>
</html>