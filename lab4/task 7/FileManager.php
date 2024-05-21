<?php

/**
 * Class FileManager
 *
 * Управління файлами в заданій директорії.
 */
class FileManager
{
    /**
     * @var string $dir Директорія для роботи з файлами.
     */
    public static $dir = 'text';

    /**
     * Статичний метод для читання файлу.
     *
     * @param string $filename Ім'я файлу.
     * @return string Вміст файлу.
     */
    public static function readFile($filename)
    {
        $filepath = self::$dir . '/' . $filename;
        if (file_exists($filepath)) {
            return file_get_contents($filepath);
        } else {
            return "Файл не знайдено.";
        }
    }

    /**
     * Статичний метод для запису у файл.
     *
     * @param string $filename Ім'я файлу.
     * @param string $content Рядок, який потрібно дописати в файл.
     */
    public static function writeFile($filename, $content)
    {
        $filepath = self::$dir . '/' . $filename;
        file_put_contents($filepath, $content, FILE_APPEND);
    }

    /**
     * Статичний метод для стирання вмісту файлу.
     *
     * @param string $filename Ім'я файлу.
     */
    public static function clearFile($filename)
    {
        $filepath = self::$dir . '/' . $filename;
        if (file_exists($filepath)) {
            file_put_contents($filepath, '');
        } else {
            echo "Файл не знайдено.<br>";
        }
    }
}

?>
