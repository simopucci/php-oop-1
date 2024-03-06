<?php

require_once __DIR__ . "/../Models/Production.php";
require_once __DIR__ . "/../Models/TvSerie.php";
require_once __DIR__ . "/../Models/Genre.php";


$Movie = new Production("Film", "IT", 7, new Genre("Azione","Film d'azione"));
$TvSerie = new TvSerie("Serie TV", "EN", 4, new Genre("Drammatico","Serie drammatica"), 3, 15);

$productions = [
    $Movie,
    $TvSerie,
];

var_dump($productions);
exit;