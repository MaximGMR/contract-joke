<?php
// Подключение к базе данных
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];

    // SQL-запрос для добавления данных в таблицу
    $sql = "INSERT INTO users (first_name, last_name, address, phone_number) 
            VALUES ('$first_name', '$last_name', '$address', '$phone_number')";

    // Выполнение запроса
    if (mysqli_query($conn, $sql)) {
        // Перенаправление на страницу с шуткой
        header("Location: success.html");
        exit();
    } else {
        echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Закрытие соединения
mysqli_close($conn);
?>
