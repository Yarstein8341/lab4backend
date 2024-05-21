<?php

namespace Models;

/**
 * Class UserModel
 *
 * Модель для роботи з даними користувача.
 */
class UserModel
{
    /**
     * Отримує ім'я користувача.
     *
     * @return string Ім'я користувача.
     */
    public function getUserName()
    {
        return "John Doe";
    }

    /**
     * Отримує повідомлення з даними користувача.
     *
     * @return string Повідомлення з ім'ям користувача.
     */
    public function getUserMessage()
    {
        return "UserModel: User name is Yaroslav.";
    }
}
?>
