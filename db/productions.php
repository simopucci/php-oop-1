<?php

require_once __DIR__ . "/../Models/Production.php";


$Movie = new Production("Film", "IT", 7);
$TvSerie = new Production("Serie TV", "EN", 4);

$productions = [
    $Movie,
    $TvSerie,
];
