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

    public function __construct(string $name, string $location, int $totEmployees = 0)
    {
        $this->name = $name;
        $this->location = $location;
        $this->totEmployees = $totEmployees;
    }

    public function info()
    {
        if ($this->totEmployees > 0) {
            echo "L'ufficio {$this->name} con sede in {$this->location} ha ben {$this->totEmployees} dipendenti";
        } else {
            echo "L'ufficio {$this->name} con sede in {$this->location} non ha dipendenti";
        }
    }
};

$company1 = new Company('Veridian', 'Colorado',);
$company2 = new Company('Celestial', 'Nevada', 142);
$company3 = new Company('Mystic', 'Maine', 89);
$company4 = new Company('Quantum', 'Arizona', 310);
$company5 = new Company('Astral', 'Florida',  75);

echo $company1->info();
