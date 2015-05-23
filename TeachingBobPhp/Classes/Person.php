<?php

require 'PersonInterface.php';

class Person Implements PersonInterface
{
    private $age;
    private $sex;
    private $race;
    private $first;
    private $last;

    public function __construct($age, $sex, $race, $first, $last)
    {
        $this->age = $age;
        $this->sex = $sex;
        $this->race = $race;
        $this->first = $first;
        $this->last = $last;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function getRace()
    {
        return $this->race;
    }

    public function getFirstName()
    {
        return $this->first;
    }

    public function getLastName()
    {
        return $this->last;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function setRace($race)
    {
        $this->race = $race;
    }

    public function setFirstName($first)
    {
        $this->first = $first;
    }

    public function setLastName($last)
    {
        $this->last = $last;
    }

}

