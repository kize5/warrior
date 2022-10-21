<?php

class StartrekWarrior extends Warrior
{
    public int $mentalPower;

    function __construct(string $name){
        parent::__construct($name);
        $this->mentalPower =8;
    }

    public function getPower() :int {
        return $this->mentalPower;
    }
}