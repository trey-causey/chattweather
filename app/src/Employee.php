<?php

require 'Person.php';

class Employee extends Person
{
    /**
     * @return mixed
     */
    public function getEmployeeNumber()
    {
        return $this->employeeNumber;
    }

    /**
     * @param mixed $employeeNumber
     */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->employeeNumber = $employeeNumber;
    }

    /**
     * @return mixed
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param mixed $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }
    private $employeeNumber;
    private $jobTitle;
}