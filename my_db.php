<?php
require_once './Models/category.php';
require_once './Models/product.php';

$categorie = [
    "cani" => new Categoria("cani", "fa-solid fa-dog"),
    "gatti" => new Categoria("gatti", "fa-solid fa-cat"),
];
$pallina = new Prodotto("./img/palline.jpg", "Pallina per cani", 5, $categorie['cani']);
$lettiera = new Prodotto("./img/lettiera.jpg", "Comoda lettiera", 35, $categorie['gatti']);
$cuccia = new Prodotto("./img/cuccia.jpg", "cuccia per cani spaziosa (vari colori)", 60, $categorie['cani']);
$crocchette_gatti = new Prodotto("./img/crocchette.jpg", "crocchette per gatti", 7, $categorie['gatti']);
$crocchette_cani = new Prodotto("./img/crocchette-cani.jpg", "crocchette per cani", 10, $categorie['cani']);
$tiragraffi = new Prodotto("./img/tiragraffi.jpg", "tiragraffi per gatti", 70, $categorie['gatti']);

$prodotti = [
    $pallina,
    $lettiera,
    $cuccia,
    $crocchette_gatti,
    $crocchette_cani,
    $tiragraffi,
];
