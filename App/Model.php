<?php

class Model
{
    private $brand;
    private $name;

    public function __construct($brand, $name)
    {
        $this->brand = $brand;
        $this->name = $name;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __destruct()
    {
        echo "<br>" . "unavailable";
    }
}

$model = new Model('BMW', 'M8cope');

echo $model->getBrand() . PHP_EOL;
echo $model->getName();

