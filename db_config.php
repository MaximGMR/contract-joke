<?php
$servername = "localhost";
$username = "root"; // Стандартный пользователь XAMPP
$password = "";     // Пароль по умолчанию пустой
$dbname = "prank_site"; // Имя твоей базы данных

// Создание соединения
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверка соединения
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
?>
