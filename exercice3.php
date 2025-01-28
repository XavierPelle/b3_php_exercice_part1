<?php

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */

require_once 'exercice2.php';

class Employee extends Person
{

    public function __construct(private float $salary, private string $position, string $firstName, string $lastName, int $age)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->salary = $salary;
        $this->position = $position;
    }


    /**
     * Get the value of salary
     */
    public function getsalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */
    public function setsalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    public function afficheInfos(): string
    {
        return parent::afficheInfos() . " " . $this->salary . " " . $this->position;
    }
}


$employee = new Employee(1850, "Apprenti", "Xavier", "Pelle", 25);

echo $employee->afficheInfos();