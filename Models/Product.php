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

$stick_di_pollo = new Product('Stick', 'Immagine.jpg', 5, new Category('Cane'), new Type('Cibo'));
var_dump($stick_di_pollo);




?>