<?php

// Абстрактний клас Human
abstract class Human {
    protected $height;
    protected $weight;
    protected $age;

    // Абстрактний метод "Повідомлення при народженні дитини"
    abstract protected function birthMessage();

    public function __construct($height, $weight, $age) {
        $this->height = $height;
        $this->weight = $weight;
        $this->age = $age;
    }

    // Методи GET
    public function getHeight() {
        return $this->height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getAge() {
        return $this->age;
    }

    // Метод "Народження дитини"
    public function giveBirth() {
        $this->birthMessage();
    }
}

// Клас Student, який успадковується від класу Human
class Student extends Human {
    private $university;
    private $course;

    public function __construct($height, $weight, $age, $university, $course) {
        parent::__construct($height, $weight, $age);
        $this->university = $university;
        $this->course = $course;
    }

    // Реалізація абстрактного методу "Повідомлення при народженні дитини" для Student
    protected function birthMessage() {
        echo "Студент народив дитину!";
    }
}

// Клас Programmer, який успадковується від класу Human
class Programmer extends Human {
    private $programmingLanguages = [];
    private $experience;

    public function __construct($height, $weight, $age, $programmingLanguages, $experience) {
        parent::__construct($height, $weight, $age);
        $this->programmingLanguages = $programmingLanguages;
        $this->experience = $experience;
    }

    // Реалізація абстрактного методу "Повідомлення при народженні дитини" для Programmer
    protected function birthMessage() {
        echo "Програміст народив дитину!";
    }
}

// Перевірка роботи методу "Народження дитини"

// Студент народжує дитину
$student = new Student(175, 70, 20, "Harvard", 2);
$student->giveBirth(); // Виведе: "Студент народив дитину!"

echo "<br>";

// Програміст народжує дитину
$programmer = new Programmer(180, 80, 25, ["PHP", "JavaScript"], "3 роки");
$programmer->giveBirth(); // Виведе: "Програміст народив дитину!"

?>
