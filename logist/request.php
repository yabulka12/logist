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
    <link rel="stylesheet" href="css/style-slider.css">
    <link rel="stylesheet" href="style18.css">
    <script src="js/script-slider.js"></script>
    <link rel="preload" href="font/ChareInk-Bold.ttf" as="front">
    <link rel="shortcut icon" href="img/frog.png" type="image/x-icon">
    <title>Оформление заказа</title>
</head>
<body>
<div class="top_menu_all">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"> <!-- Лого сайта -->
                <div id="logo_name" style="text-shadow: 1px 1px 1px black;"> <a href="index.html" id="top_logo_text">speed pickup</a> </div>
            </div>
            <div class="col-lg-8"> <!-- Верхнее меню сайта  -->
               <div class="top_menu">
                <div id="top_menu_text"><a id="non_link" href="index.html#main_block_medium_theme_text">Услуги</a> </div>
                <div id="top_menu_text"><a id="non_link" href="index.html#slider">Цены</a>  </div>
                <div id="top_menu_text"><a id="non_link" href="index.html#footer_block_text1">Контакты</a> </div>
                <div id="top_menu_text"><a href="check.php" id="top_menu_login">Личный кабинет</a></div>
             </div>
            </div>
        </div>
    </div>
</div>
<form action="request_DB.php" method="get">
<div class="request_menu">
    <h1 id="main_login_block_theme">Оформление заказа</h1>
    <div class="container request_block">
        <div class="row">
                <div class="col-lg-6 request_block_one">
                    <h2 id="main_login_block_theme">Данные отправителя</h2>
                    <div>
                      <div>Имя отправителя: <input type="text" name="name_request" id="data_request1" placeholder="Иван"required></div>  
                      <div>Фамилия отправителя: <input type="text" name="last_name_request" id="data_request2" placeholder = "Иванович"required></div>  
                      <div>Номер отправителя: <input type="number" name="phone_request" id="data_request3" placeholder="+7 (###) ###-##-##" required></div>  
                      <div>Email отправителя: <input type="email" name="email_request" id="data_request4" placeholder = "email@mail.ru"required></div>  
                      <div>Адрес отправителя: <input type="text" name="addres_request" id="data_request5" placeholder ="г. Москва ул. Пушкина"required></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 id="main_login_block_theme">Данные получателя</h2>
                    <div>
                        <div>Имя получателя: <input type="text" name="name_deliviry" id="data_deliviry1" placeholder="Пётр"required></div>  
                        <div>Фамилия получателя: <input type="text" name="last_name_deliviry" id="data_deliviry2" placeholder = "Петрович"required></div>  
                        <div>Номер получателя: <input type="number" name="phone_deliviry" id="data_deliviry3" placeholder="+7 (###) ###-##-##"required ></div>  
                        <div>Email получателя: <input type="email" name="email_deliviry" id="data_deliviry4" placeholder = "email@mail.ru"required></div>  
                        <div>Адрес получателя: <input type="text" name="addres_deliviry" id="data_deliviry5" placeholder ="г. СПБ ул. Пушкина"required></div>
                    </div>
                </div>
                <input type="submit" value="Оформить заказ" id="request_submit">
        </div>
            <div id="request_correct"><?php echo $_COOKIE['request'];?></div>
    </div>
</div>
</form>
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