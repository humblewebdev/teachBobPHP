<?php

class Animal
{
    protected $hasFur;

    protected $legs;

    protected $lungs;

    public $genome;

    public function __construct($hasFur, $legs, $lungs, $genome)
    {
        $this->hasFur = $hasFur;

        $this->legs = $legs;

        $this->lungs = $lungs;

        $this->genome = $genome;
    }

    public function gethasFur()
    {
        return $this->hasFur;
    }

    public function setHasFur($hasFur)
    {
        $this->hasFur = $hasFur;
    }
}


