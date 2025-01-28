<?php

use LDAP\Result;

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */


class ShoppingCart
{

    public function __construct(private array $items, private float $total)
    {
        $this->items = $items;
        $this->total = $total;
    }

    public function setItem(array $items): void
    {
        $this->items = $items;
    }

    public function getitem(): array
    {
        return $this->items;
    }

    public function getTotal(): float
    {
        foreach ($this->items as $item) {
            foreach ($item as $price) {
                if (is_int($price)) {
                    $this->total += $price;
                }
            }
        }
        return $this->total;
    }
}

$shoppingCart = new ShoppingCart([], 0);

$shoppingCart->setItem([['Objet 1', 10], ['Objet 2', 20]]);

echo '<pre>';
print_r($shoppingCart->getitem());
echo '</pre>';
echo 'total :' .  $shoppingCart->getTotal();
