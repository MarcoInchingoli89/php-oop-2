<?php

/*Negozio di animali*/
//Prodotti per animali
//Categorie: Cani e Gatti
//I prodotti sono suddivisi in cibo, giochi, cucce, guinzagli, accessori
//Stampare card con immagine, titolo, prezzo, icona categoria e tipo articolo

/*BONUS (Opzionale)*/
//Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
//Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta. */

class products
{
    public function __construct(public string $title, public string $image, public int $price, public string $category_icon, public string $product_type)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->category_icon = $category_icon;
        $this->product_type = $product_type;
    }
}
















?>