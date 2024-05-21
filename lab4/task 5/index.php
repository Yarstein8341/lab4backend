<?php

require_once 'autoload.php';

// Створення об'єкта класу Circle
$circle = new Circle(5.5, 10.2, 15.3);

// Перевірка методу __toString()
echo $circle . "<br>";

// Перевірка методів GET
echo "Координата X: " . $circle->getX() . "<br>";
echo "Координата Y: " . $circle->getY() . "<br>";
echo "Радіус: " . $circle->getRadius() . "<br>";

// Перевірка методів SET
$circle->setX(7.7);
$circle->setY(12.4);
$circle->setRadius(20.5);

// Перевірка методів GET після зміни значень
echo "Змінена координата X: " . $circle->getX() . "<br>";
echo "Змінена координата Y: " . $circle->getY() . "<br>";
echo "Змінений радіус: " . $circle->getRadius() . "<br>";

// Перевірка методу __toString() після зміни значень
echo $circle . "<br>";

?>
