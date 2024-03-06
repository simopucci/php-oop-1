<?php

require_once __DIR__ . "/Production.php";


class TvSerie extends Production {
    public $seasons;
    public $episodes;

    function __construct($title, $language, $vote, $genre, $seasons, $episodes) {
        parent::__construct($title, $language, $vote, $genre);
        
        $this->seasons = $seasons;
        $this->episodes = $episodes;
    }
}