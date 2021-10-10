<?php
    require_once '../../db/db.php';
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `passwords` WHERE `id` = '2'");
    $product = mysqli_fetch_assoc($product);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--------------------  Adaptation for a mobile device  -------------------->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<!--------------------  Top Panel Color --Start--  -------------------->
	<!-------------------- Chrome, Firefox OS and Opera -------------------->
    <meta name="theme-color" content="#131419"/>
    <!--------------------  Windows Phone -------------------->
    <meta name="msapplication-navbutton-color" content="#131419"/>
    <!--------------------  iOS Safari ----->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-transcluent"/>
	<!-------------------- Top Panel Color --End--  -------------------->
	<!--------------------  SHORTCUT ICON  -------------------->
	<link rel="shortcut icon" href="img/shortcuticons/icon.jpg" type="image/x-icon"/>
	<!--------------------  TITLE  -------------------->
    <title>Изменить Пароль - avnanswers</title>
	<!-------------------- DESCRIPTION OF THE SITE -------------------->
	<meta name="description" content=""/>
	<!--------------------  Don't forget "On" indexing  -------------------->
	<meta name="robots" content="none"/>
	<!-------------------- The author of the site -------------------->
	<meta name="author" content="Akylbek u Bektur"/>
	<!--------------------  Additional connection  --Start--  -------------------->
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header__menu menu">
        <!--------------------  Menu "Hamburger" Icon  --Start--  -------------------->
        <div class="menu__icon">
            <span></span>
        </div>
        <!--------------------  Menu "Hamburger" Icon  --End--  -------------------->
        <nav class="menu__body">
            <!--------------------  Menu list  --Start--  -------------------->
            <ul class="menu__list">
                <form class="menu__passwords_form" action="update.php" method="post">
                    <div class="passwords__form_title">Изменить пароль для вхада в админ панель</div>
                    <input type="hidden" name="id" value="<?=$product['id']?>">
                    <input class="passwords__form_input" type="text" placeholder="Изменить Пароль" required/>
                    <input type="submit" type="submit" class="passwords__form_button" value="Изменить"/>
                </form>
            </ul>
            <!--------------------  Menu list  --End--  -------------------->
        </nav>
    </div>
    <div class="popup__body">
        <form class="form">
            <div class="form__content">
                <div class="form__img">
                    <img src="../../img/user.png" alt="" class="img__user">
                </div>
                <input id="form__input" class="form__input" placeholder="Пароль" required/>
                <input type="submit" class="form__button" value="Войти"/>
            </div>
        </form>
        <div class="passwords__text" data-pass="<?=$product['password']?>"></div>
    </div>
    <?php
        $product = mysqli_query($connect, "SELECT * FROM `passwords` WHERE `id` = '1'");
        $product = mysqli_fetch_assoc($product);
    ?>
    <div class="content">
        <div class="passwords__body">
            <form class="passwords__form" action="update.php" method="post">
                <div class="passwords__content">
                    <div class="passwords__form_title">Админ панель</div>
                    <div class="passwords__form_title">Изменить Пароль</div>
                    <div class="passwords__form_title">Данный пароль: <span><?=$product['password']?></span></div>
                    <input type="hidden" name="id" value="<?=$product['id']?>">
                    <input class="passwords__form_input" type="text" placeholder="Изменить Пароль" required/>
                    <input type="submit" type="submit" class="passwords__form_button" value="Изменить"/>
                </div>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
    <!--------------------  No Script  -------------------->
	<noscript>
		<div class="noscript__content">
			<div class="noscript__text">
				Для Полной функциональности этого Сайта необходимо Включить JavaScript. Вот 
				<a href="https://geekhacker.ru/kak-vklyuchit-javascript-v-brauzere/#i-2">
					Инструкции, Как Включить JavaScript в Вашем Браузере.
				</a>
			</div>  
			<div class="noscript__text">
				JavaScript must be Enabled for Full Functionality of this Site. Here are 
				<a href="https://yandex.com/support/common/browsers-settings/browsers-java-js-settings.html">
				Instructions on How to Enable JavaScript in Your Browser.
				</a>
			</div>  
		</div>
	</noscript>
	<!--------------------  No Script  -------------------->
</body>
</html>