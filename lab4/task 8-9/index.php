<?php

// Клас Human
class Human {
    private $height;
    private $weight;
    private $age;

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

    // Методи SET
    public function setHeight($height) {
        $this->height = $height;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setAge($age) {
        $this->age = $age;
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

    // Методи GET і SET для властивостей студента
    public function getUniversity() {
        return $this->university;
    }

    public function setUniversity($university) {
        $this->university = $university;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    // Метод для переводу студента на новий курс
    public function moveToNextCourse() {
        $this->course++;
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

    // Методи GET і SET для властивостей програміста
    public function getProgrammingLanguages() {
        return $this->programmingLanguages;
    }

    public function setProgrammingLanguages($programmingLanguages) {
        $this->programmingLanguages = $programmingLanguages;
    }

    public function getExperience() {
        return $this->experience;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
    }

    // Метод для додавання нової мови програмування
    public function addProgrammingLanguage($language) {
        $this->programmingLanguages[] = $language;
    }
}

// Перевірка роботи всіх класів і методів

// Створення об'єктів класу Student
$student = new Student(175, 70, 20, "Harvard", 2);
echo "Студент: Зріст - " . $student->getHeight() . ", Маса - " . $student->getWeight() . ", Вік - " . $student->getAge() . ", Університет - " . $student->getUniversity() . ", Курс - " . $student->getCourse() . "<br>";

// Переведення студента на новий курс і перевірка
$student->moveToNextCourse();
echo "Студент після переведення на новий курс: Курс - " . $student->getCourse() . "<br>";

// Створення об'єктів класу Programmer
$programmer = new Programmer(180, 80, 25, ["PHP", "JavaScript"], "3 роки");
echo "Програміст: Зріст - " . $programmer->getHeight() . ", Маса - " . $programmer->getWeight() . ", Вік - " . $programmer->getAge() . ", Мови програмування - " . implode(", ", $programmer->getProgrammingLanguages()) . ", Досвід роботи - " . $programmer->getExperience() . "<br>";

// Додавання нової мови програмування програмісту
$programmer->addProgrammingLanguage("Python");
echo "Програміст після додавання нової мови програмування: Мови програмування - " . implode(", ", $programmer->getProgrammingLanguages()) . "<br>";

?>
