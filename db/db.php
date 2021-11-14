<?php

/*
 * Делаем константы для хранения данных о базе данных
 * HOST - адрес для подключения к БД
 * USER - логин для доступа к БД
 * PASSWORD - пароль для доступа к БД
 * DATABASE - название базы данных, к которой мы подключаемся
 */

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'passwordavnanswers');


// define('HOST', 'localhost');
// define('USER', 'ci80697_avn');
// define('PASSWORD', 'Avnanswersq1q2q3');
// define('DATABASE', 'ci80697_avn');



/*
 * Подключаемся к базе данных с помощью функции mysqli_connect()
*/

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

/*
 * Делаем проверку соединения
 * Если есть ошибки, останавливаем код и выводим сообщение с ошибкой
*/

if (!$connect) {
	die('Ошибка подключения к базе данных! Обновите страницу');
}
