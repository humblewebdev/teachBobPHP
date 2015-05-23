<?php
require 'Animal.php';

class Dog extends Animal
{
    protected $breed;

    public function __construct($breed)
    {
        parent::__construct(true, 4, true, 'canine');

        $this->breed = $breed;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }
}

$dog = new Dog('bull terrier');

$dog2 = new Dog('jack russel terrier');

var_dump($dog->gethasFur());
