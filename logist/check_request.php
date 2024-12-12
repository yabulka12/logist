<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_COOKIE['user']){
        header('Location: request.php');
        exit();
    } else { 
        header('Location: login.php');
    }
    setcookie('user', $login, time() + 3600, "/");
    ?>
</body>
</html>