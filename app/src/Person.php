<?php

class Person
{
    public function getSocialSecurityNumber()
    {
        return $this->socialSecurityNumber;
    }

    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }
    private $weight;
    private $height;
    private $socialSecurityNumber;




}