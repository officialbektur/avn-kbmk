<?php
/*
 * Делаем константы для хранения данных о базе данных
 * HOST - адрес для подключения к БД
 * USER - логин для доступа к БД
 * PASSWORD - пароль для доступа к БД
 * DATABASE - название базы данных, к которой мы подключаемся
*/
// Подключение к localhost


define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'avnanswers');


// Подключение к avnanswers.ezyro.com


// define('HOST', 'sql103.ezyro.com');
// define('USER', 'ezyro_30362188');
// define('PASSWORD', 'gyvj1cxpwi');
// define('DATABASE', 'ezyro_30362188_passwordavnanswers');




/*
 * Подключаемся к базе данных с помощью функции mysqli_connect()
*/
$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
mysqli_set_charset($connect, "utf8");
/*
 * Делаем проверку соединения
 * Если есть ошибки, останавливаем код и выводим сообщение с ошибкой
*/
if (!$connect) {
	die('Ошибка подключения к базе данных! Обновите страницу');
}
/*
 * Мой функции
*/
/*
 * Получаем все с allpages
*/
function get_allpages_all() {
	global $connect;
	$allpages = $connect->query("SELECT * FROM `allpages`");
	return $allpages;
}
/*
 * Получаем ID
*/
function get_allpages_contentPassword() {
	global $connect;
	$idContent = $_GET['id'];
	$contentPasswords = $connect->query("SELECT * FROM `allpages` WHERE `id` = '$idContent'");
	foreach ($contentPasswords as $contentPassword) {
		return $contentPassword["contentPasswords"];
	}
}
function get_allpages_adminPassword() {
	global $connect;
	$idContent = $_GET['id'];
	$adminPasswords = $connect->query("SELECT * FROM `allpages` WHERE `id` = '$idContent'");
	foreach ($adminPasswords as $adminPassword) {
		return $adminPassword["adminPasswords"];
	}
}
function get_allpages_recoveryQuestions() {
	global $connect;
	$idContent = $_GET['id'];
	$recoveryQuestions = $connect->query("SELECT * FROM `allpages` WHERE `id` = '$idContent'");
	foreach ($recoveryQuestions as $recoveryQuestion) {
		return $recoveryQuestion["recoveryQuestions"];
	}
}
function get_allpages_answersToQuestions() {
	global $connect;
	$idContent = $_GET['id'];
	$answersToQuestions = $connect->query("SELECT * FROM `allpages` WHERE `id` = '$idContent'");
	foreach ($answersToQuestions as $answersToQuestion) {
		return $answersToQuestion["answersToQuestions"];
	}
}
function get_allpages_update() {
	global $connect;
	$idContent = $_GET['id'];
	$contentupdate = $connect->query("SELECT * FROM `contents` WHERE `id` = '$idContent'");
	return $contentupdate;
}
function get_allpages_content() {
	global $connect;
	$idContent = $_GET['id'];
	$idContent = $connect->query("SELECT * FROM `contents` WHERE `category` = '$idContent' AND `all` = 'all'");
	return $idContent;
}
function get_allpages_allcontent() {
	global $connect;
	$idContent = $_GET['id'];
	$idContent = $connect->query("SELECT * FROM `contents` WHERE `category` = '$idContent' AND `all` = 'allCon'");
	return $idContent;
}
function get_allpages_con() {
	global $connect;
	$idContent = $_GET['id'];
	$idContent = $connect->query("SELECT * FROM `contents` WHERE `category` = '$idContent' AND `all` = 'delete'");
	return $idContent;
}
function get_all() {
	global $connect;
	$allTest = $connect->query("SELECT * FROM `contents`");
	return $allTest;
}
/*
 * Получаем ID categories
*/
// function get_allpages_by_id($id) {
// 	global $connect;
// 	$categories = $connect->query("SELECT * FROM `categories` WHERE `id` = '$id'");
// 	foreach ($categories as $category) {
// 		return $category["category_name"];
// 	}
// }
/*
 * Увеличиваем просмотр страниц
*/
// function views_update($id) {
// 	global $connect;
// 	$connect->query("UPDATE `singles` SET `views` = `views` + 1 WHERE `id` = '$id'");
// }