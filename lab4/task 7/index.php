<?php

require_once 'autoload.php';

// Записуємо рядок в file1.txt
FileManager::writeFile('file1.txt', "Це перший рядок у file1.txt.\n");

// Читаємо вміст file1.txt
$content = FileManager::readFile('file1.txt');
echo "Вміст file1.txt:<br>";
echo nl2br($content) . "<br>";

// Дописуємо ще один рядок в file1.txt
FileManager::writeFile('file1.txt', "Це другий рядок у file1.txt.\n");

// Читаємо знову вміст file1.txt
$content = FileManager::readFile('file1.txt');
echo "Оновлений вміст file1.txt:<br>";
echo nl2br($content) . "<br>";

// Стираємо вміст file1.txt
FileManager::clearFile('file1.txt');

// Читаємо вміст file1.txt після стирання
$content = FileManager::readFile('file1.txt');
echo "Вміст file1.txt після стирання:<br>";
echo nl2br($content) . "<br>";

?>
