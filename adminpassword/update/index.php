<?php
    require_once '../../db/db.php';
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `passwords` WHERE `id` = '1'");
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
                <li><a href="../../index.html" class="menu__link">Главная</a></li>
                <li><a class="menu__link">Редактирование</a></li>
                <li><a href="../../works/index.html" class="menu__link">Вся информация</a></li>
				<li><a download href="adminpassword.apk" class="menu__link">скачать adminpassword.apk <div>Для Андройд</div></a></li>
            </ul>
            <!--------------------  Menu list  --End--  -------------------->
        </nav>
    </div>
    <div class="passwords__body">
        <form class="passwords__form" action="update.php" method="post">
            <div class="passwords__content">
                <div class="passwords__form_title">Изменить Пароль</div>
                <div class="passwords__form_title">Данный пароль: <span><?=$product['password']?></span></div>
                <input type="hidden" name="id" value="<?=$product['id']?>">
                <input class="passwords__form_input" type="text" name="password" placeholder="Изменить Пароль" required/>
                <input type="submit" type="submit" class="passwords__form_button" value="ОТПРАВИТЬ"/>
            </div>
        </form>
    </div>
    <script>
        setTimeout(() => {
            let script = document.querySelector("script");
            let noScript = document.querySelector("noscript");
            if (noScript) {
                let logoBanRek = noScript.nextElementSibling
                logoBanRek.style.opacity = "0";   
                logoBanRek.style.visibility = "hidden";   
            } else if (script) {
                let logoBanRek = script.nextElementSibling
                logoBanRek.style.opacity = "0";   
                logoBanRek.style.visibility = "hidden";   
            }
        },0);
        const body = document.querySelector("body");
        const iconMenu = document.querySelector(".menu__icon");
        const menuBody = document.querySelector(".menu__body");
        if (iconMenu) {
            iconMenu.addEventListener('click', function (e) {
                body.classList.toggle("_lock");
                iconMenu.classList.toggle("_active");
                menuBody.classList.toggle("_active");
            });
            menuBody.classList.contains('_active');
            menuBody.addEventListener("click", function (e) {
                body.classList.remove("_lock");
                iconMenu.classList.remove("_active");
                menuBody.classList.remove("_active");
            });
        }
    </script>
</body>
</html>