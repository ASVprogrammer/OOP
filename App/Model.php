<?php

namespace App;

class Model
{
    private $manufacturer;
    private $sample;

    public function __construct($manufacturer, $sample)
    {
        $this->manufacturer = $manufacturer;
        $this->sample = $sample;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function getSample()
    {
        return $this->sample;
    }

    public function __destruct()
    {
        echo "<br>" . "unavailable";
    }
}

$model = new Model('BMW', 'M8cope');

echo $model->getManufacturer() . PHP_EOL;
echo $model->getSample();

