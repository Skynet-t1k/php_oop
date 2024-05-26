<?php
require('armaturaolografica.php');
require('campodiforza.php');
require('raggiorepulsore.php');
require('tempestamissili.php');


class IronmanArmour
{
    public $attacco;
    public $difesa;
    public static $counter = 0;

    public function __construct(Attack $attacco, Defense $difesa)
    {
        $this->attacco = $attacco;
        $this->difesa = $difesa;
        self::$counter += 1;
    }
}

$ironman1 = new IronmanArmour(new TempestaMissili, new ArmaturaOlografica);
$ironman2 = new IronmanArmour(new RaggioRepulsore, new ArmaturaOlografica);
$ironman3 = new IronmanArmour(new TempestaMissili, new CampoDiForza);
$ironman4 = new IronmanArmour(new RaggioRepulsore, new CampoDiForza);


echo IronmanArmour::$counter;
