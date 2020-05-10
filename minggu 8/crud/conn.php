<!DOCTYPE html>
<html>
<head>
	<title>Database Connection With PDO</title>
</head>
<body>
	 <?php 
		$engi = "mysql"; 
		$host = "localhost";
		$dbse = "crud_pdo"; 
		$user = "root"; 
		$pass = ""; 
		$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host, $user,$pass); 
    ?>
</body>
</html>
