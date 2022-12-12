<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Type.php';
class Product
{
    public function __construct(public string $title, public string $image, public int $price, public Category $category, public Type $type)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }
}

$stick_di_pollo = new Product('Stick di Pollo', 'Immagine.jpg', 5, new Category('Cane'), new Type('Cibo'));
$scatoletta = new Product('Scatoletta', 'Immagine.jpg', 5, new Category('Gatto'), new Type('Cibo'));
$topolino_giocattolo = new Product('Topolino Giocattolo', 'Immagine.jpg', 5, new Category('Gatto'), new Type('Giocattolo'));
$cuccia = new Product('Cuccia', 'Immagine.jpg', 5, new Category('Cane'), new Type('Cuccia'));
$guinzaglio = new Product('Guinzaglio', 'Immagine.jpg', 5, new Category('Cane'), new Type('Accessorio'));
$pettorina = new Product('Pettorina', 'Immagine.jpg', 5, new Category('Cane'), new Type('Pettorina'));
/* var_dump($stick_di_pollo); */




?>