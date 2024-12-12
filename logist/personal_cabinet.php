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
    <link rel="stylesheet" href="auth.php">
    <link rel="shortcut icon" href="img/frog.png" type="image/x-icon">
    <title>Личный кабинет</title>
    <script>
        // #product a – селектор, выбирающий элементы a в #product (вкладки, при клике на которые нужно отображать соответствующий блок)
        $('#product a').click(function(e){
          e.preventDefault();
          $(this).tab('show');
        });
        // переключиться на tab по значению атрибута href
        $('#product a[href="#profile"]').tab('show');
        // переключиться на первый tab
        $('#product li:first-child a').tab('show');
        // переключиться на последний tab
        $('#product li:last-child a').tab('show');
        // переключиться на 2 tab
        $('#product li:nth-child(2) a').tab('show');
      </script>
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
            <div id="top_menu_text"> <a href="check.php" id="top_menu_login">Личный кабинет</a> <a href="exit.php"><img id="top_menu_login_exit" src="img/free-icon-exit-603018.png"alt="Выход" width="25px" height = "25px"></a> </div>
        </div>
        </div>
    </div>
</div>
<?php
    $login_profile = ($_COOKIE['user']);
    $podkl = mysqli_connect('localhost', 'root', '', 'logist_user');
    $zapros2 = "SELECT * FROM `user` WHERE login_user = '$login_profile';";
    $result2 = mysqli_query($podkl, $zapros2);
    $all = mysqli_fetch_assoc($result2);
?>
<h1 id="main_register_block_theme" style="margin-top: 150px;">Личный кабинет</h1>
<div class="main_block_personal_cabinet">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8" id="main_block_personal_cabinet">
                <div class="d-flex align-items-start" >
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active" id="main_block_personal_cabinet_menu" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true" >Профиль</button>
                      <button class="nav-link" id="main_block_personal_cabinet_menu2" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Заказы</button>
                      <button class="nav-link" id="main_block_personal_cabinet_menu2" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Менеджер</button>
                      <button class="nav-link" id="main_block_personal_cabinet_menu3"  id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Настройки</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                          <div class="main_block_personal_cabinet_one_block">
                              <h3 id="main_block_personal_cabinet_one_block_theme_text">Ваш профиль</h3>
                              <?php
                              if ($_COOKIE['user'] == 'menedjer1') {
                                echo '<img src="img/menedjer1.jpg" width="150px" height="150px" alt="" id="main_block_personal_cabinet_one_block_img1">';
                              } elseif ($_COOKIE['user'] == 'menedjer2'){ 
                                echo '<img src="img/menedjer2.jpg" width="150px" height="150px" alt="" id="main_block_personal_cabinet_one_block_img1">';
                              }
                              elseif ($_COOKIE['user'] == 'menedjer3'){ 
                                echo '<img src="img/menedjer3.jpg" width="150px" height="150px" alt="" id="main_block_personal_cabinet_one_block_img1">';
                              } else{ 
                                echo '<img src="img/frog.png" width="150px" height="150px" alt="" id="main_block_personal_cabinet_one_block_img">';
                              }
                            ?>
                            <div id="main_block_personal_cabinet_name"> Ваше имя: <?php echo $all['name_user']; ?></div>
                            <div id="main_block_personal_cabinet_last_name">Ваша фамилия: <?php echo $all['last_name']; ?></div>
                            <div id="main_block_personal_cabinet_login">Ваш логин: <?php echo $all['login_user']; ?></div>
                            <div id="main_block_personal_cabinet_email">Ваш адрес электронной почты: <?php echo $all['email']; ?></div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                          <div class="main_block_personal_cabinet_two_block">
                              <h3 id="main_block_personal_cabinet_two_block_theme_text">Ваши заказы</h3>
                              <div id="main_block_personal_cabonet_two_block_data">
                                <table border="2" id="table_data">
                                <th>Имя отправителя</th> <th>Фамилия отправителя</th> <th>Имя получателя</th> <th>Фамилия получателя</th> <th>Номер отправителя</th> <th>Номер получателя</th> <th>Адрес отправителя</th> <th>Адрес получателя</th>
                              <?php 
                                $login = $_COOKIE['user'];
                                $podkl = mysqli_connect('localhost', 'root', '', 'logist_user');
                                $zapros = "SELECT * FROM request WHERE login_user = '$login';";
                                $result = mysqli_query($podkl, $zapros);
                                while ($request_result = mysqli_fetch_assoc($result)){
                                    echo '<tr><td>'.$request_result['name_request'].'</td><td>'.$request_result['last_name_request'].'</td><td>'.$request_result['name_deliviry'].'</td><td>'.$request_result['last_name_deliviry'].'</td><td>'.$request_result['phone_request'].'</td><td>'.$request_result['phone_deliviry'].'</td><td>'.$request_result['addres_request'].'</td><td>'.$request_result['addres_deliviry'].'</td><tr>';
                                }
                              ?>
                              </table>
                              </div>
                              <a href="check_request.php" id="request_button" class="btn btn-success btn-lg" style="text-shadow: 1px 1px 1px black;"> Оформить заказ</a>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <h3 id="main_block_personal_cabinet_two_block_theme_text">Ваш личный менеджер</h3>
                      <?php
                          $login_profile = ($_COOKIE['user']);
                          $podkl = mysqli_connect('localhost', 'root', '', 'logist_user');
                          $zapros2 = "SELECT * FROM `request` WHERE login_user = '$login_profile';";
                          $result2 = mysqli_query($podkl, $zapros2);
                          $all2 = mysqli_fetch_assoc($result2);
                          $manedjer = $all2['menedjer_login'];

                          $zapros2 = "SELECT * FROM `user` WHERE login_user = '$manedjer';";
                          $result2 = mysqli_query($podkl, $zapros2);
                          $all3 = mysqli_fetch_assoc($result2);
                              if ($manedjer == 'menedjer1') {
                                echo '<img src="img/menedjer1.jpg" width="150px" height="150px" alt="" id="main_block_personal_cabinet_one_block_img1">';
                               echo '<div id="main_block_personal_cabinet_name2"> Имя менеджера: ';echo $all3['name_user'].'</div>';
                               echo '<div id="main_block_personal_cabinet_name3"> Фамилия менеджера: ';echo $all3['last_name'].'</div>';
                               echo '<div id="main_block_personal_cabinet_name4"> Электронная почта менеджера: ';echo $all3['email'].'</div>';
                               echo '<div id="main_block_personal_cabinet_name5"> Номер телефона менеджера: +7 (925) 251-16-74 </div>';
                              } elseif ($manedjer == 'menedjer2'){ 
                                echo '<img src="img/menedjer2.jpg" width="150px" height="150px" alt="" id="main_block_personal_cabinet_one_block_img1">';
                                echo '<div id="main_block_personal_cabinet_name2"> Имя менеджера: ';echo $all3['name_user'].'</div>';
                                echo '<div id="main_block_personal_cabinet_name3"> Фамилия менеджера: ';echo $all3['last_name'].'</div>';
                                echo '<div id="main_block_personal_cabinet_name4"> Электронная почта менеджера: ';echo $all3['email'].'</div>';
                                echo '<div id="main_block_personal_cabinet_name5"> Номер телефона менеджера: +7 (905) 651-66-14 </div>';
                              }
                              elseif ($manedjer == 'menedjer3'){ 
                                echo '<img src="img/menedjer3.jpg" width="150px" height="150px" alt="" id="main_block_personal_cabinet_one_block_img1">';
                                echo '<div id="main_block_personal_cabinet_name2"> Имя менеджера: ';echo $all3['name_user'].'</div>';
                                echo '<div id="main_block_personal_cabinet_name3"> Фамилия менеджера: ';echo $all3['last_name'].'</div>';
                                echo '<div id="main_block_personal_cabinet_name4"> Электронная почта менеджера: ';echo $all3['email'].'</div>';
                                echo '<div id="main_block_personal_cabinet_name5"> Номер телефона менеджера: +7 (903) 831-16-91 </div>';
                              }
                            ?>
                      </div>
                      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                          <div class="main_block_personal_cabinet_four_block" >
                          <h3 id="main_block_personal_cabinet_one_block_theme_text">Настройки</h3>
                            <div id="main_block_personal_cabinet_four_block_research_password">
                                <form action="change.php" method="get">
                                <li>Смена пароля: <input type="password" name="research_user_password" id="research_password" style="border-radius: 7px;"> <input type="submit" value="сменить пароль"id="research_user_password_button"></li> 
                                <li>Смена email: <input type="email" name="research_user_email" id="research_email"style="border-radius: 7px;"> <input type="submit" value="сменить email" id="research_user_email_button"></li>  
                                </form>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
            <div class="col-lg-2"></div>
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