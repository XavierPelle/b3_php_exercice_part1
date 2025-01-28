<?php

/**
 * ÉNONCÉ:
 * Refactoriser le code ci-dessous en créant une classe Statistics
 */

class Statistics
{
    public function __construct(private array $number)
    {
        $this->number = $number;
    }

    /**
     * Calcule la somme d'un tableau de nombres
     */
    public function getSum(): float
    {
        $sum = 0;
        foreach ($this->number as $number) {
            $sum += $number;
        }
        return $sum;
    }

    /**
     * Calcule la moyenne d'un tableau de nombres
     */
    public function getAverage(): float
    {
        if (count($this->number) === 0) {
            return 0;
        }
        return $this->getSum($this->number) / count($this->number);
    }

    /**
     * Trouve la valeur minimale d'un tableau de nombres
     */
    public function getMin(): float
    {
        if (count($this->number) === 0) {
            return 0;
        }
        $min = $this->number[0];
        foreach ($this->number as $number) {
            if ($number < $min) {
                $min = $number;
            }
        }
        return $min;
    }

    /**
     * Trouve la valeur maximale d'un tableau de nombres
     */
    public function getMax(): float
    {
        if (count($this->number) === 0) {
            return 0;
        }
        $max = $this->number[0];
        foreach ($this->number as $number) {
            if ($number > $max) {
                $max = $number;
            }
        }
        return $max;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }
}

$stat = new Statistics([10, 5, 8, 20, 3, 15]);



// Exemple d’utilisation
echo "Tableau de nombres : " . implode(", ", $stat->getNumber()) . "<br>";
echo "Somme : " . $stat->getSum() . "<br>";
echo "Moyenne : " . $stat->getAverage() . "<br>";
echo "Valeur minimale : " . $stat->getMin() . "<br>";
echo "Valeur maximale : " . $stat->getMax() . "<br>";
