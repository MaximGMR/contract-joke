# Используем официальный образ PHP с Apache
FROM php:8.0-apache

# Устанавливаем необходимые расширения PHP (если нужно)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Копируем файлы проекта в контейнер
COPY . /var/www/html/

# Открываем порт 80 для подключения к серверу
EXPOSE 80

# Перезапускаем Apache, чтобы применить изменения
CMD ["apache2-foreground"]
