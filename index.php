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
    $stick_di_pollo = new Product('Stick di Pollo', 'https://arcaplanet.vtexassets.com/arquivos/ids/260683/vitakraft-pure-chicken-bonas-bastoncini-pollo-e-carne.jpg?v=1757075367', 5.99, new Category('Cane'), new Type('Cibo')),
    $scatoletta = new Product('Scatoletta', 'https://egress.storeden.net/gallery/6123799c5fb8e0512818534b/file.jpg', 2.50, new Category('Gatto'), new Type('Cibo')),
    $topolino_giocattolo = new Product('Topolino Giocattolo', 'https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Gatti/giochi/camon-gioco-topo-meccanico-500x500.jpg', 3, new Category('Gatto'), new Type('Giocattolo')),
    $cuccia = new Product('Cuccia', 'https://arcaplanet.vtexassets.com/arquivos/ids/225141/merci-cane-cuccia-ovale-morbida-tartan.jpg?v=1757207437', 30, new Category('Cane'), new Type('Cuccia')),
    $guinzaglio = new Product('Guinzaglio', 'https://shop-cdn-m.mediazs.com/bilder/guinzaglio/avvolgibile/a/corda/flexi/new/classic/s/m/5/800/252304_pla_flexi_new_classic_seilleine_s_rot_5m_hs_01_5.jpg', 24, new Category('Cane'), new Type('Accessorio')),
    $pettorina = new Product('Pettorina', 'https://d2oqznxcujm0s2.cloudfront.net/it_it%2Fpettorina-sonia-painterswife%2F8333%2FHD-1-023a593b-c3b8-43b0-833e-f7c62c673902.jpeg', 27, new Category('Cane'), new Type('Pettorina'))
];

var_dump($products);







?>