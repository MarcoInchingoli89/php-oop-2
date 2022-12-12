<?php

/*Negozio di animali*/
//Prodotti per animali
//Categorie: Cani e Gatti
//I prodotti sono suddivisi in cibo, giochi, cucce, guinzagli, accessori
//Stampare card con immagine, titolo, prezzo, icona categoria e tipo articolo

/*BONUS (Opzionale)*/
//Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
//Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta. */

class Product
{
    public function __construct(public string $title, public string $image, public int $price)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
    }
}

$stick_di_pollo = new Product('Stick', 'Immagine.jpg', 5);
var_dump($stick_di_pollo);

/* class Food extends Product
{
public $calories;
public $is_vegan;
} */

/* class Categories extends Products
{
public $dogs;
public $cats;
}
class Types extends Categories
{
public $foods;
public $houses;
public $harness;
public $toys;
public $accessories;
public $clothes;
} */









?>