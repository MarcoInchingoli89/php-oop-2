<?php


class Type
{

    public function __construct(public string $name)
    {
        $this->name = $name;
    }

}


$food = new Type('Cibo');
$toy = new Type('Giocattolo');
$house = new Type('Cuccia');
$accessorie = new Type('Accessorio');
$harness = new Type('Pettorina');
/* var_dump($food); */





?>