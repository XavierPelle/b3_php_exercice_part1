<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/

class Product
{

    public function __construct(protected string $name, protected float $price_without_tax, protected float $vat_rate)
    {
        $this->name = $name;
        $this->price_without_tax = $price_without_tax;
        $this->vat_rate = $vat_rate;
    }

    public function getPriceWithVat(): float
    {
        return ($this->price_without_tax + $this->price_without_tax) * $this->vat_rate;
    }
}

$product = new Product("Voiture", 20000, 20);

echo $product->getPriceWithVat();
