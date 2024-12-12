<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_GET['name'];
    $last_name = $_GET['last_name'];
    $login = $_GET['login'];
    $email = $_GET['email'];
    $pass = $_GET['pass'];
    $login_auth2 = $_GET['login_auth'];
    $podkl = mysqli_connect('localhost', 'root', '', 'logist_user');
    $proverka  = "SELECT * FROM user WHERE login_user = '$login' OR email = '$email'";
    $result_proverka = mysqli_query($podkl, $proverka);
    $stroka = mysqli_fetch_assoc($result_proverka);  
    if ($stroka == NULL) { 
        $zapros = "INSERT INTO user (login_user, pass, email, name_user, last_name) VALUES ('$login', '$pass', '$email', '$name', '$last_name');";
        $result = mysqli_query($podkl, $zapros);
        setcookie('user', $login, time() + 3600, "/");
        header('Location: personal_cabinet.php');
    } else {
        $warn2 = "Логин или email уже существует";
        setcookie('warn2', $warn2, time() + 1, "/");
        $_COOKIE['warn2'] = $warn2;
        header('Location: register.php');
    }
    var_dump($podkl);
    var_dump($provekra);
    var_dump($result_proverka);
    var_dump($stroka);
    ?>
</body>
</html>