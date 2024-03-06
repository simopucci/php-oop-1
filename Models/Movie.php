<?php

require_once __DIR__ . "/Production.php";


class Movie extends Production {

    public $profits;
    public $duration;

    function __construct($title, $language, $vote, $genre, $profits, $duration) {
        parent::__construct($title, $language, $vote, $genre);

        $this->profits = $profits;
        $this->duration = $duration;
    }
    
}