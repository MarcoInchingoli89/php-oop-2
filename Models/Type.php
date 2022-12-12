<?php


class Type
{

    public function __construct(public string $name)
    {
        $this->name = $name;
    }

}


$food = new Type('Cibo');
var_dump($food);





?>