<?php

// crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:

// le classi non devono avere attributi;
// ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;


// ************* non puoi realizzare metodi definiti public per stampare il risultato; ************
//**************** l’unico metodo public ammesso e' il costrutture. *******************************

// Il risultato atteso sara':

// $magikarp = new Fish();
//Nel terminale visaulizzerete:
// Sono un animale Vertebrato
// Sono un animale a Sangue Freddo
// Splash!

// Ho visto la videosoluzione ed e' uguale al codice sotto,
// potrei fare come da lei suggerito ma non so come usare ad es "$mammifero->printSpecialization()" con una protected function 
// visto che non posso creare public function al di fuori del costruttore.
// in qualsiasi caso violerei una regola da voi imposta.

abstract class Vertebrates
{
    public function __construct()
    {
        $this->printVertebrates();
    }

    protected function printVertebrates()
    {
        echo "Sono un animale Vertebrato \n";
    }
}

abstract class WarmBlooded extends Vertebrates
{
    public function __construct()
    {
        parent::__construct();
        $this->printWarmBlooded();
    }

    protected function printWarmBlooded()
    {
        echo "Sono un animale a Sangue Caldo \n";
    }
}

class Mammal extends WarmBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printSpecialization();
    }
    protected function printSpecialization()
    {
        echo "Allatto i miei cuccioli \n";
    }
}

class Bird extends WarmBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printSpecialization();
    }
    protected function printSpecialization()
    {
        echo "Volo in alto, volo via! \n";
    }
}

abstract class ColdBlooded extends Vertebrates
{
    public function __construct()
    {
        parent::__construct();
        $this->printColdBlooded();
    }
    protected function printColdBlooded()
    {
        echo "Sono un animale a Sangue Freddo \n";
    }
}

class Fish extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printSpecialization();
    }
    protected function printSpecialization()
    {
        echo "Splash! \n";
    }
}

class Reptile extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printSpecialization();
    }
    protected function printSpecialization()
    {
        echo "Striscio via silenziosamente! \n";
    }
}
class Amphibian extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printSpecialization();
    }
    protected function printSpecialization()
    {
        echo "Vivo bene sia a terra che in acqua! \n";
    }
}

$uccello = new Bird;
$mammifero = new Mammal;
$pesce = new Fish;
$pyton = new Reptile;
$ranoccio = new Amphibian;
