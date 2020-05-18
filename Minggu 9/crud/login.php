<?php
session_start();
require 'connect.php';

if(isset($_COOKIE['id']) && isset($_COOKIE['key']))
{
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE hak = $id");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username']))
    {
        $_SESSION['login'] = true;
    }
}


if(isset($_SESSION["login"]))
{
    header("location: index.php");
    exit;
}

if(isset($_POST["login"]))
{
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE 
    username = '$username' AND password = '$password'");

    if($username != "" || $password != "")
    {
        if(mysqli_num_rows($result) != 0)
        {
            $row = mysqli_fetch_assoc($result);
            
            //set session
            $_SESSION["login"] = true;

            //cek remember me
            if(isset($_POST["remember"]))
            {
                //buat cookie
                setcookie('id', $row['hak'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }

            header("location: index.php");
            exit;
        }
        else
        {
            $error1 = true;
        }
    }
    else
    {
        $error2 = true;   
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="contain">
<h2>Halaman Login</h2>

<?php if(isset($error1)) : ?>
    <p style="color: red; font-style: italic;">Couldn't fine your username or password!</p>
<?php endif; ?>
<?php if(isset($error2)) : ?>
    <p style="color: red; font-style: italic;">Username / password must be filled !</p>
<?php endif; ?>

<form action="" method="post">
    <ul>
        <li>
            <label for="username">Username:</label>
            <input type="text" name="user" id="user" placeholder="Masukkan Username">
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" name="pass" id="pass" placeholder="Masukkan Password">
        </li>
        <li>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </li>
        <li>
            <button type="submit" name="login">Login</button>
        </li>
    </ul>
</form>
</div>
</body>
</html>