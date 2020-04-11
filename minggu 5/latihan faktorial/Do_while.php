<!DOCTYPE html>
<html>
	<head>
		<title>Faktorial | DoWhile </title>
	</head>
<br><br>
	<body>
		<form name="formdw" method="POST">
		<table>
			<tr>
				<td>Masukkan Angka</td>
				<td><input type="text" name="number" size="7" placeholder="0-10"></td>
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
            }else if($number>1){
                        $a=1;
                        do
                        {
                             $hitung=$number * faktorial($number-1);
                             $a=$a+1;
                        }while($a<=10);
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