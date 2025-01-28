<?php

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/

class BankAccount
{

    public function __construct(private float $balance)
    {
        $this->balance = $balance;
    }


    public function deposit($amount): string
    {
        $this->balance += $amount;
        $result = "Vous avez déposé " . $amount . " Vous possédez maintenant " . $this->balance;
        return $result;
    }

    public function withdraw($amount): string
    {
        $result = '';
        if ($this->balance > $amount) {
            $this->balance -= $amount;
            $result = "Vous avez retiré " . $amount . " Vous possédez maintenant " . $this->balance;
        } else {
            $result = "Vous ne pouvez pas retirer ";
        }
        return $result;
    }
}

$bankAccount = new BankAccount(0);
echo '<pre>';
echo $bankAccount->deposit(20);
echo '<pre>';
echo $bankAccount->deposit(20);
echo '<pre>';
echo $bankAccount->withdraw(30);
echo '<pre>';
echo $bankAccount->withdraw(30);
