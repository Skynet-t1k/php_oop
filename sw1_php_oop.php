<?php
// Crea una classe Company che abbia i seguenti attributi pubblici:
// name: nome dell’azienda;
// location: stato in cui e' ubicata la sede dell’azienda;
// tot_employees: numero di dipedenti assunti in quella sede (di default, 0);
// Crea 5 istanze di 5 aziende diverse
// Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendendi, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;
// Implementa un nuovo metodo che, per ogni oggetto Company istanziati, calcoli la spesa annuale e la stampi per ogni oggetto.
// Implementa un nuovo metodo che e' in grado di calcolare l’insieme totale delle spese di tutte le aziende create.
// Implementa un metodo statico che permetta di stampare a terminale questo totale assoluto di tutte le aziende messe insieme.

class Company
{
    public $name;
    public $location;
    public $totEmployees;
    public static $avgSalary = 1500;
    public static $totalCounter = 0;

    public function __construct(string $name, string $location, int $totEmployees = 0)
    {
        $this->name = $name;
        $this->location = $location;
        $this->totEmployees = $totEmployees;
    }

    public function info()
    {
        if ($this->totEmployees > 0) {
            echo "L'ufficio {$this->name} con sede in {$this->location} ha ben {$this->totEmployees} dipendenti \n";
        } else {
            echo "L'ufficio {$this->name} con sede in {$this->location} non ha dipendenti \n";
        }
    }

    public function annualCost($number)
    {
        return $this->totEmployees * (self::$avgSalary * $number);
    }

    public function printAnnualCost($month = 12)
    {
        echo "------{$this->name}-------- \n";
        echo "costo annuale: {$this->annualCost($month)} \n";
    }

    public function totalCost($month = 12)
    {
        return self::$totalCounter += $this->annualCost($month);
    }

    public static function printTotalCost()
    {
        echo "La spesa della holding e':" . self::$totalCounter;
    }
};

$company1 = new Company('Veridian', 'Colorado', 6);
$company2 = new Company('Celestial', 'Nevada', 142);
$company3 = new Company('Mystic', 'Maine', 89);
$company4 = new Company('Quantum', 'Arizona', 310);
$company5 = new Company('Astral', 'Florida',  75);

$company1->totalCost();
$company1->info();

$company2->totalCost();
$company2->info();

$company3->totalCost();
$company3->info();

$company4->totalCost();
$company4->info();

$company5->totalCost();
$company5->info();


Company::printTotalCost();
