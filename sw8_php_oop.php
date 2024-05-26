<?php

// Crea quindi una classe Rettangolo con i seguenti attributi:
// Base (b);
// Altezza (h);

// Il tuo compito sara' quello di creare 3 metodi che andranno a calcolare:
// Area → b * h
// Perimetro → 2 * b + 2 * h
// Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)

// Tutte queste operazioni pero' dovranno essere richiamate dal trait Calculator

trait Calculator
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function mul($a, $b)
    {
        return $a * $b;
    }

    public function div($a, $b)
    {
        return $a / $b;
    }

    public function sqr($a)
    {
        return sqrt($a);
    }
}

class Rettangolo
{
    public $base;
    public $altezza;

    use Calculator;

    public function __construct(float $base, float $altezza)
    {
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function area()
    {
        return $this->mul($this->base, $this->altezza);
    }

    public function perimetro()
    {
        return $this->sum($this->mul(2, $this->base), $this->mul(2, $this->altezza));
    }

    public function diagonale()
    {
        return $this->sqr($this->sum($this->mul($this->base, $this->base), $this->mul($this->altezza, $this->altezza)));
    }
}

$rettangolo = new Rettangolo(5, 10);
echo "Area: " . $rettangolo->area() . "\n";
echo "Perimetro: " . $rettangolo->perimetro() . "\n";
echo "Diagonale: " . $rettangolo->diagonale() . "\n";
