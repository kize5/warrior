<?php

class MarvelWarrior extends Warrior
{

    public int $superPower;

    function __construct(string $name){
        parent::__construct($name);
        if ($name == 'cartache') {
            $this->superPower =10000;
        }
        $this->superPower =100;
    }

    public function getPower() :int {
        return $this->superPower;
    }

}