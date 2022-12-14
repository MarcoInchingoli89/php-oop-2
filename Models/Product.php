<?php

require __DIR__ . '/Category.php';
require __DIR__ . '/Type.php';
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

/*  public function set_price(int $price)
{
try {
if (($price) == 0) {
throw new Exception("Il prezzo deve essere superiore a zero!");
}
$this->price = $price;
} catch (Exception $e) {
echo $e->getMessage();
die();
}
} */
}

/* $stick_di_pollo = new Product('Stick di Pollo', 'Immagine.jpg', 5, new Category('Cane'), new Type('Cibo'));
$scatoletta = new Product('Scatoletta', 'Immagine.jpg', 5, new Category('Gatto'), new Type('Cibo'));
$topolino_giocattolo = new Product('Topolino Giocattolo', 'Immagine.jpg', 5, new Category('Gatto'), new Type('Giocattolo'));
$cuccia = new Product('Cuccia', 'Immagine.jpg', 5, new Category('Cane'), new Type('Cuccia'));
$guinzaglio = new Product('Guinzaglio', 'Immagine.jpg', 5, new Category('Cane'), new Type('Accessorio'));
$pettorina = new Product('Pettorina', 'Immagine.jpg', 5, new Category('Cane'), new Type('Pettorina')); */
/* var_dump($stick_di_pollo); */




?>