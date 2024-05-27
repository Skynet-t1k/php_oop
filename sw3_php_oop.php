<?php

abstract class Vertebrates
{
    protected function printVertebrates()
    {
        echo "Sono un animale Vertebrato \n";
    }
}

abstract class WarmBlooded extends Vertebrates
{
    protected function printWarmBlooded()
    {
        echo "Sono un animale a Sangue Caldo \n";
    }
}

class Mammal extends WarmBlooded
{

    public function __construct()
    {
        $this->printVertebrates();
        $this->printWarmBlooded();
        echo "Allatto i miei cuccioli \n";
    }
}

class Bird extends WarmBlooded
{

    public function __construct()
    {
        $this->printVertebrates();
        $this->printWarmBlooded();
        echo "Volo in alto, volo via! \n";
    }
}

abstract class ColdBlooded extends Vertebrates
{
    protected function printColdBlooded()
    {
        echo "Sono un animale a Sangue Freddo \n";
    }
}

class Fish extends ColdBlooded
{

    public function __construct()
    {
        $this->printVertebrates();
        $this->printColdBlooded();
        echo "splash! \n";
    }
}
class Reptile extends ColdBlooded
{

    public function __construct()
    {
        $this->printVertebrates();
        $this->printColdBlooded();
        echo "Striscio via silenziosamente! \n";
    }
}
class Amphibian extends ColdBlooded
{

    public function __construct()
    {
        $this->printVertebrates();
        $this->printColdBlooded();
        echo "Vivo bene sia a terra che in acqua! \n";
    }
}





$uccello = new Bird;
$mammifero = new Mammal;
$pesce = new Fish;
$pyton = new Reptile;
$ranoccio = new Amphibian;
