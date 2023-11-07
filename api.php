<?php
require 'vendor/autoload.php'; // Подключаем библиотеку telegram-bot-api

$botToken = '6953750725:AAEWbg24BY4f7nnMGyGXZBJEkcHpW-bNgQc';
$chatId = '5262992261';

// Получаем данные из формы
$name = $_POST['имя'];
$email = $_POST['email'];

// Создаем сообщение для отправки в Telegram
$message = "Новая форма отправлена!\n\n";
$message .= "Имя: " . $name . "\n";
$message .= "Email: " . $email;

// Отправляем сообщение в Telegram
$telegram = new Longman\TelegramBot\Telegram($botToken);
$result = $telegram->sendMessage(['chat_id' => $chatId, 'text' => $message]);

// Проверяем результат отправки
if ($result->isOk()) {
    echo 'Сообщение успешно отправлено в Telegram!';
} else {
    echo 'Произошла ошибка при отправке сообщения в Telegram: ' . $result->getDescription();
}