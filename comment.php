<?php
/* Принимаем данные из формы */
$name = $_POST["name"];
$page_id = $_POST["page_id"];
$text_comment = $_POST["text_comment"];
$name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
$text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности


$mysqli = new mysqli("localhost", "root", "root", "db");// Подключается к базе данных
$mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`,`time`) VALUES ('$name', '$page_id', '$text_comment',NOW())");// Добавляем комментарий в таблицу
header("Location: index.php");// Делаем реридект обратно
?>

