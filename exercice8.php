<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */

require_once 'exercice2.php';

class Student extends Person
{

    public function __construct(private array $grades, string $firstName, string $lastName, int $age)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->grades = $grades;
    }



    public function getAverage(): float
    {
        $average = null;
        foreach ($this->grades as $grade) {
            $average += $grade;
        }
        $result = $average / count($this->grades);
        return $result;
    }

    /**
     * Get the value of grades
     */
    public function getGrades()
    {
        return $this->grades;
    }

    /**
     * Set the value of grades
     *
     * @return  self
     */
    public function setGrades($grades)
    {
        $this->grades += $grades;

        return $this;
    }
}

$student = new Student([18, 20, 18, 15], "Xavier", "Pelle", 25);

echo $student->getAverage();
