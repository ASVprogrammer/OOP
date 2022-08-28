<?php

namespace Salary;

class Person
{
    public $name;
    protected $age;
    private $phone;

    public function __conctruct($name, $age, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function hello()
    {
        return "Hello from person";
    }
}

