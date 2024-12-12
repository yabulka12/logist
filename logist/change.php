<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="auth.php">
    <title>Document</title>
</head>
<body>
<?php 
$password = $_GET['research_user_password'];
$email = $_GET['research_user_email'];
$podkl = mysqli_connect('localhost', 'root', '', 'logist_user');
$login = $_COOKIE['user'];
if ($password) {
    $zapros = "UPDATE user SET pass = '$password' WHERE login_user = '$login';";
    $result = mysqli_query($podkl, $zapros);
}
if ($email) { 
    $zapros = "UPDATE user SET email = '$email' WHERE login_user = '$login';";
    $result = mysqli_query($podkl, $zapros);
}
header('Location: personal_cabinet.php');
setcookie('user', $login, time() + 3600, "/");
?>
</body>
</html>