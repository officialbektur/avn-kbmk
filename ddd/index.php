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
	<title>avnanswers</title>
	<!-------------------- DESCRIPTION OF THE SITE -------------------->
	<meta name="description" content=""/>
	<!--------------------  Don't forget "On" indexing  -------------------->
	<meta name="robots" content="none"/>
	<!-------------------- The author of the site -------------------->
	<meta name="author" content="Akylbek u Bektur"/>
	<!--------------------  Additional connection  --Start--  -------------------->
	<!--------------------  Fonts  -------------------->
	<link rel="stylesheet" href="fonts/icons__button_up/style.css">
	<link rel="stylesheet" href="fonts/icons/style.css">
	<!-------------------- CSS -------------------->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media-style.css">
</head>
<body>
	<div></div>
	<div class="bgdnone"></div>
	<!-----------------------------------  Progress Bar  --Start--  ----------------------------------->
	<div class="progress"></div>
	<!-----------------------------------  Progress Bar  --End--  ----------------------------------->
	<div class="wrapper">
		<div class="header__menu menu">
			<!--------------------  Menu "Hamburger" Icon  --Start--  -------------------->
			<div class="menu__icon">
				<span></span>
			</div>
			<!--------------------  Menu "Hamburger" Icon  --End--  -------------------->
			<nav class="menu__body">
				<!--------------------  Menu list  --Start--  -------------------->
				<ul class="menu__list">
					<li><a class="menu__link">Главная</a></li>
					<li><a href="admin/" class="menu__link">Редактирование</a></li>
				 </ul>
				<!--------------------  Menu list  --End--  -------------------->
			</nav>
		</div>
        <div class="content">
			<header class="header">
				<div class="form__search">
					<input class="form__search_input" name="search" placeholder="Поиск..." data-list=".page__body_text">
					<span class="form__search_back"></span>
				</div>
				<div class="header__title_text">
					<span class="header__title_button"></span>
				</div>
			</header>
			<main class="page">
				<div class="container _done">
					<div class="page__body_text">
						<?php
							include "content.php";
						?>
					</div>
				</div>
			</main>
			<div class="up__button">
				<div class="up__button_ico">
					<span class="icon__upbutton __icon_down"></span>
				</div>
			</div>
		</div>
	</div>
	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- Jquery Hideseek -->
	<script type="text/javascript" src="js/jquery.hideseek.min.js"></script>
	<!-- Script -->
	<script type="text/javascript" src="js/script.js"></script>
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