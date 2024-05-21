<?php

/**
 * Автозавантаження класів на основі їх простору імен і розташування файлів.
 *
 * @param string $className Повне ім'я класу.
 */
function myAutoload($className)
{
    // Заміна зворотних слешів у просторі імен на слеші для файлової системи.
    $file = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';

    // Перевірка існування файлу перед підключенням.
    if (file_exists($file)) {
        require $file;
    } else {
        echo "Файл $file не знайдено.<br>";
    }
}

spl_autoload_register('myAutoload');
?>
