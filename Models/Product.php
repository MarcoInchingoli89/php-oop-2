<?php

require __DIR__ . '/Category.php';
class Product
{
    public function __construct(public string $title, public string $image, public int $price, public Category $category)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
    }
}

$stick_di_pollo = new Product('Stick', 'Immagine.jpg', 5, new Category('Cane'));
var_dump($stick_di_pollo);




?>