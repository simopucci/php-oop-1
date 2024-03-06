<?php

require_once __DIR__ . "/../Models/Production.php";
require_once __DIR__ . "/../Models/TvSerie.php";
require_once __DIR__ . "/../Models/Movie.php";
require_once __DIR__ . "/../Models/Genre.php";


$productions = [
    new Movie("Film", "IT", 7, new Genre("Azione","Film d'azione"), "€ 77,000,000", "140 Min."),
    new TvSerie("Serie TV", "EN", 4, new Genre("Drammatico","Serie drammatica"), 3, 15),
    new Movie("Film", "IT", 7, new Genre("Azione","Film d'azione"), "€ 77,000,000", "140 Min."),
    new TvSerie("Serie TV", "EN", 4, new Genre("Drammatico","Serie drammatica"), 3, 15),
    new Movie("Film", "IT", 7, new Genre("Azione","Film d'azione"), "€ 77,000,000", "140 Min."),
    new TvSerie("Serie TV", "EN", 4, new Genre("Drammatico","Serie drammatica"), 3, 15),
];