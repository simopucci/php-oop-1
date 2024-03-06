<?php 

require_once __DIR__ . "/Genre.php";
class Production
{
    public $title;
    public $language;
    public $vote;
    public $genre;

    function __construct($title, $language, $vote, $genre)
    {
        $this->title = $title;  
        $this->language = $language;    
        $this->vote = $vote;
        $this->genre = $genre;
    }
}