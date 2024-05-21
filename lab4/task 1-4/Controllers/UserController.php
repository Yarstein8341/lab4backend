<?php

namespace Controllers;

use Models\UserModel;

/**
 * Class UserController
 *
 * Контролер для управління даними користувача.
 */
class UserController
{
    /**
     * @var UserModel
     */
    private $model;

    /**
     * UserController конструктор.
     */
    public function __construct()
    {
        $this->model = new UserModel();
    }

    /**
     * Отримує ім'я користувача з моделі.
     *
     * @return string Ім'я користувача.
     */
    public function showUserName()
    {
        return $this->model->getUserName();
    }

    /**
     * Отримує повідомлення з даними користувача з моделі.
     *
     * @return string Повідомлення з ім'ям користувача.
     */
    public function showUserMessage()
    {
        return $this->model->getUserMessage();
    }
}
?>
