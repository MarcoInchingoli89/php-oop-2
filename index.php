<?php

/*Negozio di animali*/
//Prodotti per animali
//Categorie: Cani e Gatti
//I prodotti sono suddivisi in cibo, giochi, cucce, guinzagli, accessori
//Stampare card con immagine, titolo, prezzo, icona categoria e tipo articolo

/*BONUS (Opzionale)*/
//Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
//Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta. */

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Type.php';


$products = [
    $stick_di_pollo = new Product('Stick di Pollo', 'https://picsum.photos/500?random=1', 5.99, new Category('Cane'), new Type('Cibo')),
    $scatoletta = new Product('Scatoletta', 'https://picsum.photos/500?random=2', 2.50, new Category('Gatto'), new Type('Cibo')),
    $topolino_giocattolo = new Product('Topolino Giocattolo', 'https://picsum.photos/500?random=3', 3, new Category('Gatto'), new Type('Giocattolo')),
    $cuccia = new Product('Cuccia', 'https://picsum.photos/500?random=4', 30, new Category('Cane'), new Type('Cuccia')),
    $guinzaglio = new Product('Guinzaglio', 'https://picsum.photos/500?random=5', 24, new Category('Cane'), new Type('Accessorio')),
    $pettorina = new Product('Pettorina', 'https://picsum.photos/500?random=6', 27, new Category('Cane'), new Type('Pettorina'))
];

/* var_dump($products); */


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Per Shop Online</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<? $product -> image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>








</body>

</html>