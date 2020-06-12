<?php

require '../src/Employee.php';

$employee1 = new Employee();

$employee1->setEmployeeNumber(123);


var_dump($employee1);
print "</br>";
print $employee1->getEmployeeNumber();

