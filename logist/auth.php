<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.php">
    <title>Document</title>
</head>
<body>
<?php 
$login = $_GET['login_auth'];
$pass = $_GET['pass_auth'];

$podkl = mysqli_connect('localhost', 'root', '', 'logist_user');
$zapros = "SELECT * FROM user WHERE login_user = '$login' AND pass = '$pass'";
$result = mysqli_query($podkl, $zapros);
$stroka = mysqli_fetch_assoc($result);  
if($stroka == NULL){
    $warn = "Неверный логин или пароль";
    setcookie('warn', $warn, time() + 1, "/");
    $_COOKIE['warn'] = $warn;
    header('Location: login.php');
	exit();
} else { 
    header('Location: personal_cabinet.php');
}
// $login = $_COOKIE['user'];
// $podkl = mysqli_connect('localhost', 'root', 'root', 'logist_user');
// $zapros = "SELECT * FROM request WHERE login_user = '$login';";
// $result = mysqli_query($podkl, $zapros);
// $request_result = mysqli_fetch_assoc($result); 
// setcookie('request_user', $request_result, time() + 3600, "/");
setcookie('user', $login, time() + 3600, "/");
?>
</body>
</html>