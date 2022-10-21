<?php

require_once __DIR__ . "/../base/LocalWarrior.php";

$GLOBALS['warriorName'] = 'Cartache';
$GLOBALS['pokeName'] = 'Carapuce';

abstract class Warrior extends LocalWarrior
{
    public string $name;
    public int $speed;
    public int $life;
    public int $shield;
    public string $imageUrl;
    public Weapon|null $weapon;

    function __construct(string $warriorName){
        $this->name = $warriorName;
        if ($warriorName == 'Cartache'){
            $this->speed = 600;
            $this->life = 1000;
            $this->shield = 100;
        }
        $this->speed = 30;
        $this->life = 100;
        $this->shield = 20;
    }
}
