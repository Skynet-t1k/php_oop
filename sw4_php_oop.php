<?php
// Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severita' che ritieni piu' opportuno, 
// estendi i metodi per stampare a terminale la seguente frase: “La mia macchina e' Opel, con targa ND 123 OJ e nmero di Telaio 1234“.
// Dato il seguente codice di partenza:




class Car
{
    private $num_telaio;

    public function __construct($telaio)
    {
        $this->num_telaio =  $telaio;
    }

    public function trovaTelaio()
    {
        return $this->num_telaio;
    }
}

class Fiat extends Car
{
    protected $license;
    protected $name;

    public function __construct($telaio, $licenza, $nome)
    {
        parent::__construct($telaio);
        $this->license = $licenza;
        $this->name = $nome;
    }
    public function trovaLicenza()
    {
        return $this->license;
    }
    public function trovaNome()
    {
        return $this->name;
    }
    public function stampaInfo()
    {
        echo "La mia macchina e' " . $this->trovaNome() . ", con targa " . $this->trovaLicenza() . " e nmero di Telaio " . $this->trovaTelaio();
    }
}

$macchina = new Fiat(45321, "GG 1337 AA", "Tesla");
$macchina->stampaInfo();
