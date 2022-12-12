<?php

/*Negozio di animali*/
//Prodotti per animali
//Categorie: Cani e Gatti
//I prodotti sono suddivisi in cibo, giochi, cucce, guinzagli, accessori
//Stampare card con immagine, titolo, prezzo, icona categoria e tipo articolo

/*BONUS (Opzionale)*/
//Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
//Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta. */

require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Type.php';


$products = [
    [
        'title' => 'Stick di Pollo',
        'image' => 'https://arcaplanet.vtexassets.com/arquivos/ids/260683/vitakraft-pure-chicken-bonas-bastoncini-pollo-e-carne.jpg?v=1757075367',
        'price' => 5.99 . '€',
        'category' => $dog,
        'type' => $food
    ],
    [
        'title' => 'Scatoletta',
        'image' => 'https://egress.storeden.net/gallery/6123799c5fb8e0512818534b/file.jpg',
        'price' => 2.50 . '€',
        'category' => $dog,
        'type' => $food
    ],
    [
        'title' => 'Topolino Giocattolo',
        'image' => 'https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Gatti/giochi/camon-gioco-topo-meccanico-500x500.jpg',
        'price' => 3 . '€',
        'category' => $cat,
        'type' => $food
    ],
    [
        'title' => 'Cuccia',
        'image' => 'https://arcaplanet.vtexassets.com/arquivos/ids/225141/merci-cane-cuccia-ovale-morbida-tartan.jpg?v=1757207437',
        'price' => 30 . '€',
        'category' => $dog,
        'type' => $food
    ],
    [
        'title' => 'Guinzaglio',
        'image' => 'https://shop-cdn-m.mediazs.com/bilder/guinzaglio/avvolgibile/a/corda/flexi/new/classic/s/m/5/800/252304_pla_flexi_new_classic_seilleine_s_rot_5m_hs_01_5.jpg',
        'price' => 24 . '€',
        'category' => $dog,
        'type' => $food
    ],
    [
        'title' => 'Pettorina',
        'image' => 'https://d2oqznxcujm0s2.cloudfront.net/it_it%2Fpettorina-sonia-painterswife%2F8333%2FHD-1-023a593b-c3b8-43b0-833e-f7c62c673902.jpeg',
        'price' => 27 . '€',
        'category' => $dog,
        'type' => $food
    ],
];

var_dump($products);







?>