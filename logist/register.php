<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style18.css">
    <link rel="preload" href="font/ChareInk-Bold.ttf" as="front">
    <link rel="shortcut icon" href="img/frog.png" type="image/x-icon">
    <title>Регистрация</title>
</head>
<body>
<div class="container">
    <div class="row">
         <div class="col-lg-4"> <!-- Лого сайта -->
            <div id="logo_name" style="text-shadow: 1px 1px 1px black;"><a href="index.html" id="top_logo_text">speed pickup</a> </div>
        </div>
        <div class="col-lg-8"> <!-- Верхнее меню сайта  -->
        <div class="top_menu">
            <div id="top_menu_text"><a id="non_link" href="index.html#main_block_medium_theme_text">Услуги</a> </div>
            <div id="top_menu_text"><a id="non_link" href="index.html#slider">Цены</a>  </div>
            <div id="top_menu_text"><a id="non_link" href="index.html#footer_block_text1">Контакты</a> </div>
            <div id="top_menu_text"> <a href="check.php" id="top_menu_login">Личный кабинет</a> </div>
        </div>
        </div>
    </div>
</div>
<div class="main_register_block">
    <h1 id="main_register_block_theme">Регистрация</h1>
    <div class="container">
        <div class="row">
            <div id="col-lg-12">
                <div id="block_register">
                    <form action="regist.php" method="get">
                        <div id="block_register_name">Введите Ваше имя</div>
                        <div id="block_register_input_name"><input type="text" name="name" id=""style="border-radius: 7px;" required></div>
                        <div id="block_register_last_name">Введите Вашу фамилию</div>
                        <div id="block_register_input_last_name"><input type="text" name="last_name" id="" style="border-radius: 7px;"required></div>
                        <div id="block_register_login">Введите Ваш логин</div>
                        <div id="block_register_input_login"><input type="text" name="login" id="" style="border-radius: 7px;"required></div>
                        <div id="block_register_email">Введите Ваш адрес электронной почты</div>
                        <div id="block_register_input_email"> <input type="email" name="email" id="" style="border-radius: 7px;"required></div>
                        <div id="block_register_pass">Введите Ваш пароль</div>
                        <div id="block_register_input_pass"> <input type="password" name="pass" id=""style="border-radius: 7px;" required></div>
                        <div id="block_register_warning"> <?php echo $_COOKIE['warn2']?></div>
                        <div id="block_register_input_sumbit"><input type="submit" value="Зарегистрироваться"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 footer_block_one">
                <div id="footer_block_text1"><b>Часы работы</b></div>
                <div id="footer_block_text1_other">Мы работаем ежедневно с 10:00 до 22:00</div> 
                <div id="footer_block_text2"><b>Наш номер телефона</b> </div>
                <div id="footer_block_text1_other"> Lorem ipsum dolor sit amet.</div>
                <div id="footer_block_text2"><b>Наш адрес</b></div>
                <div id="footer_block_text1_other">Lorem ipsum dolor sit amet.</div>
            </div>
            <div class="col-lg-6 footer_block_two">
                <div id="footer_block_text1"><b>Наши социальные сети</b></div>
                <div id="footer_block_img"> <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="img/free-icon-youtube-1384060.png" alt="" width="50px" height="50px" id="footer_block_img_youtube"></a> <img src="img/vk.png" alt="" width="38px" height="38px" id="footer_block_img_vk"> <img src="img/whatsapp.png" alt="" width="40px" height="40px" id="footer_block_img_wh"> <img src="img/telegram.png" alt="" width="40px" height="40px" id="footer_block_img_tg"></div>
                <div id="footer_block_text3"><b>Наш email</b></div>
                <div id="footer_block_text1_other"> email@email.ru</div>
                <div id="footer_block_text4"><b>© Все права защищены</b> </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>