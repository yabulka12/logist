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
$random_number = random_int(1, 3); 

if ($random_number == 1) { 
    $manager = 'menedjer1';
} elseif ($random_number == 2) { 
    $manager = 'menedjer2';
} elseif ($random_number == 3) { 
    $manager = 'menedjer3';
}

$name_request = $_GET['name_request'];
$last_name_request = $_GET['last_name_request'];
$phone_request = $_GET['phone_request'];
$email_request = $_GET['email_request'];
$addres_request = $_GET['addres_request'];

$name_deliviry = $_GET['name_deliviry'];
$last_name_deliviry = $_GET['last_name_deliviry'];
$phone_deliviry = $_GET['phone_deliviry'];
$email_deliviry = $_GET['email_deliviry'];
$addres_deliviry = $_GET['addres_deliviry'];

$login_user = $_COOKIE['user'];
$podkl = mysqli_connect('localhost', 'root', '', 'logist_user');

$proverka  = "INSERT INTO request (name_request, last_name_request, name_deliviry, last_name_deliviry, phone_request, phone_deliviry, email_request, email_deliviry, login_user, addres_request, addres_deliviry, menedjer_login) VALUES ('$name_request', '$last_name_request', '$name_deliviry', '$last_name_deliviry', '$phone_request', '$phone_deliviry', '$email_request', '$email_deliviry', '$login_user', '$addres_request', '$addres_deliviry', '$manager');";
$result_proverka = mysqli_query($podkl, $proverka);

setcookie('user', $login_user, time() + 3600, "/");
$correct = "Ваш заказ принят, скоро с вами свяжется менеджер!";

setcookie('request', $correct, time() + 5, "/");
header('Location: request.php');
?>
</body>
</html>