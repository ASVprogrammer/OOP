<?php

use Salary\Person;

class Employee extends Person
{
    private $salary;

    public function __construct($name, $age, $phone, $salary)
    {
        parent::__conctruct($name, $age, $phone);
        $this->salary = $salary;
    }

    public function hello()
    {
        return "I am an employee: $this->name";
    }
}

$employee = new Employee("Arthur", "29","123456789","2000");
echo $employee->hello();
