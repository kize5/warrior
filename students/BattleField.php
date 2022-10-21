<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";


class BattleField extends BaseBattleField
{
    public static function createMyWarrior(){
        $warrior = new StartrekWarrior($GLOBALS['warriorName']);
        $warrior->imageUrl = "https://pbs.twimg.com/media/C7_LlpAWsAE_c-D.jpg";
        $warrior->weapon = new Weapon(1, 75);
        $warrior->saveNew();
    }

    public static function createOtherWarrior(){
        $warrior = new PokemonWarrior($GLOBALS['pokeName']);
        $warrior->imageUrl = "https://www.pokepedia.fr/images/thumb/2/2d/Carapuce-PDMDX.png/474px-Carapuce-PDMDX.png?20200109175835";
        $warrior->weapon = new Weapon(2, 15);
        $warrior->saveNew();
    }
}
