<?php

/**
 * Class Circle
 *
 * Представляє коло з заданим центром і радіусом.
 */
class Circle
{
    /**
     * @var float $x Координата X центру кола.
     * @var float $y Координата Y центру кола.
     * @var float $radius Радіус кола.
     */
    private $x;
    private $y;
    private $radius;

    /**
     * Circle конструктор.
     *
     * @param float $x Координата X центру кола.
     * @param float $y Координата Y центру кола.
     * @param float $radius Радіус кола.
     */
    public function __construct($x, $y, $radius)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    /**
     * Метод __toString()
     *
     * Повертає рядок в форматі: «Коло з центром в (x, y) і радіусом radius».
     *
     * @return string
     */
    public function __toString()
    {
        return "Коло з центром в ({$this->x}, {$this->y}) і радіусом {$this->radius}";
    }

    // Методи GET
    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    // Методи SET
    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}

?>
