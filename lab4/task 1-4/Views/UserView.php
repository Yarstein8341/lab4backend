<?php

namespace Views;

/**
 * Class UserView
 *
 * Відповідає за відображення даних користувача.
 */
class UserView
{
    /**
     * Відображає дані користувача.
     *
     * @param string $data Дані для відображення.
     */
    public function display($data)
    {
        echo "UserView: $data <br>";
    }
}
?>
