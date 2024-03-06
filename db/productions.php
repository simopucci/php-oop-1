<?php

require_once __DIR__ . "/../Models/Production.php";
require_once __DIR__ . "/../Models/Genre.php";


$Movie = new Production("Film", "IT", 7, new Genre("Azione","Film d'azione"));
$TvSerie = new Production("Serie TV", "EN", 4, new Genre("Drammatico","Serie drammatica"));

$productions = [
    $Movie,
    $TvSerie,
];