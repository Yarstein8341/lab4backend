<?php

require_once 'autoload.php';

use Controllers\UserController;
use Views\UserView;

// Створюємо екземпляри класів
$controller = new UserController();
$view = new UserView();

// Отримуємо ім'я користувача через контролер
$userName = $controller->showUserName();

// Відображаємо ім'я користувача через view
$view->display($userName);

// Отримуємо повідомлення з даними користувача через контролер
$userMessage = $controller->showUserMessage();

// Відображаємо повідомлення з даними користувача через view
$view->display($userMessage);

?>
