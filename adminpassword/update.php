<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$password = $_POST['password'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `passwords` SET `password` = '$password' WHERE `passwords`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: index.php');