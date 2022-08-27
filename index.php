<?php

class Car
{
    private $color;
    private $weight;
    private $year;
    static private $availableColor = [
        'Green', 'Red', 'Blue', 'withe', 'Black'
    ];

    public static function getAvailableColor()
    {
        return self::$availableColor;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }
}

$myCar = new Car();
echo car::getAvailableColor();




