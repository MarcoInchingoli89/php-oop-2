<?php

/*Negozio di animali*/
//Prodotti per animali
//Categorie: Cani e Gatti
//I prodotti sono suddivisi in cibo, giochi, cucce, guinzagli, accessori
//Stampare card con immagine, titolo, prezzo, icona categoria e tipo articolo

/*BONUS (Opzionale)*/
//Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
//Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta. */

class Products
{
    public function __construct(public string $title, public string $image, public int $price, public Categories $categories, public Types $types)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->categories = $categories;
        $this->types = $types;
    }
}

class Categories extends Products
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

}

$chicken_sticks = new Products('Stick di pollo', 'pollo.jpg', 5, )









    ?>