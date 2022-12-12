<?php

class Category
{
    public function __construct(public string $name)
    {
        $this->name = $name;
    }
}

$cat = new Category('Gatto');
$dog = new Category('Cane');

/* var_dump($cat, $dog); */





?>