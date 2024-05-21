<?php

// Інтерфейс "Прибирання будинку"
interface HouseCleaning {
    public function cleanRoom();
    public function cleanKitchen();
}

// Клас Human, що реалізує інтерфейс "Прибирання будинку"
class Human implements HouseCleaning {
    public function cleanRoom() {
        echo "Людина прибирає кімнату<br>";
    }

    public function cleanKitchen() {
        echo "Людина прибирає кухню<br>";
    }
}

// Клас Student, який успадковується від класу Human та реалізує інтерфейс "Прибирання будинку"
class Student extends Human {
    // Реалізація методів інтерфейсу "Прибирання будинку"
    public function cleanRoom() {
        echo "Студент прибирає кімнату<br>";
    }

    public function cleanKitchen() {
        echo "Студент прибирає кухню<br>";
    }
}

// Клас Programmer, який успадковується від класу Human та реалізує інтерфейс "Прибирання будинку"
class Programmer extends Human {
    // Реалізація методів інтерфейсу "Прибирання будинку"
    public function cleanRoom() {
        echo "Програміст прибирає кімнату<br>";
    }

    public function cleanKitchen() {
        echo "Програміст прибирає кухню<br>";
    }
}

// Перевірка роботи методів прибирання в обох класах

$student = new Student();
$student->cleanRoom(); // Виведе: "Студент прибирає кімнату"
$student->cleanKitchen(); // Виведе: "Студент прибирає кухню"

$programmer = new Programmer();
$programmer->cleanRoom(); // Виведе: "Програміст прибирає кімнату"
$programmer->cleanKitchen(); // Виведе: "Програміст прибирає кухню"

?>
