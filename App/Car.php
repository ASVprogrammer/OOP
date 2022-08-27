<?php

class Car
{
    private $color;
    private $year;
    private $availableColor = [
        'Green', 'Red', 'Blue', 'withe', 'Black'
    ];

    public function setColor($color)
    {
        if (in_array($color, $this->availableColor)) {
            $this->color = $color;
        }
    }

    public function getColor()
    {
        return $this->color;
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
$myCar->setColor('Black');
$myCar->setYear(2022);

echo $myCar->getColor();
echo "<br>";
echo $myCar->getYear();

